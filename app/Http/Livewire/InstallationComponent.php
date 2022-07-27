<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Installation;
use App\Models\Produit;
use App\Models\Produitinstalle;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class InstallationComponent extends Component
{
    public $description;
    public $version;
    public $client;
    public $produit;
    public $produits;
    public $data;
    public $updateMode;
    public $createMode;
    public $installation;
    public $nouveau;
    protected $rules = [
        'version' => 'required',

    ];
    public function store()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
        $installation = new Installation();
        $produitinstalle = new Produitinstalle();
        $installation->description = $this->description;
        $installation->client_id = $this->client;
        $produitinstalle = new Produitinstalle();
        $produitinstalle->version = $this->version;
        $produitinstalle->installation_id = $installation->id;
        $produitinstalle->produit_id = $this->produit;
        $produitinstalle->save();
        $installation->save();
        /*Installation::create([
            'description' => $this->description,
            'client_id' => $this->client,
        ]);

        Produitinstalle::create([
            'version' => $this->version,
            'installation_id' => $this->,
            'produit_id' => $this->produit,
        ]);*/
    }
    public function render()
    {
       // $this->data = DB::table('Produitinstalles')->join('Produits','Produitinstalles.produit_id','=','Produits.id')->join('Installations','Produitinstalles.installation_id','=','Installations.id')->join('Client','Installations.client_id','=','Client.id')->select('Client.*','Installations.*','Produits.*','Produitinstalles.version')->get();
       //Liste des installations
       $this->data = User::all() ;
       $this->produits = Produit::all();
       $this->installation = DB::table('Produitinstalles')
       ->join('Produits', 'Produitinstalles.produit_id', '=', 'Produits.id')
       ->join('Installations', 'Produitinstalles.installation_id', '=', 'Installations.id')
       ->join('Users', 'Installations.client_id', '=', 'Users.id')
       ->select(['Produitinstalles.id As id', 'Installations.id As installation_id', 'Produits.nom As produits', 'Produits.type As type', 'Produitinstalles.version As version', 'Users.name As nom', 'Installations.description As description'])
       ->get();

       return view('livewire.installation-component')->layout('livewire.installation');
    }
    public function nouveau()
    {
        $this->createMode = "oui";


      // return view('livewire.create_Installation')->layout('livewire.installation');

    }
    public function destroy($first, $second)
    {
        if ($first && $second)
        {

            $idInstallation = Produitinstalle::where('id', $second);
            dd($idInstallation);
            $idInstallation->delete();
            $idProduitinstalle = Produitinstalle::where('id', $first);
            $idProduitinstalle->delete();
        }
    }
    public function edit($first, $second)
    {
        $idProduitinstalle = Produitinstalle::findOrFail($first)->join('Installations','Produitinstalle.installation_id', '=', 'Installations.id');
        dd($idProduitinstalle);
        /*$this->selected_id = $id;
        $this->produits = $record->name;
        $this->nom = $record->phone;
        $this->version = $record->version;
        $this->client = $record->phone;
        $this->updateMode = true;*/
    }
}
