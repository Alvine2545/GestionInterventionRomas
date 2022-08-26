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
    public $date;
    public $updateMode;
    public $createMode;
    public $installation;
    public $nouveau;
    public $client_id;
    protected $rules = [
        'version' => 'required',
        'date' => 'required',
        'description' => 'required',

    ];
    public function store()
    {
        //$this->validate();

        // Execution doesn't reach here if validation fails.
        //$installation = Installation::create(['description'=>$this->description, 'client_id'=>$this->client]);
        // $installation = new Installation();
        // $produitinstalle = new Produitinstalle();
        // $installation->description = $this->description;
        // $installation->user_id = $this->client;
        // $installation->save();
        $produit = Produit::find($this->produit);
        $produit->user()->attach($this->client, ['version'=>$this->version, 'description'=>$this->description, 'dateInstallation'=>$this->date]);

        // $produitinstalle = new Produitinstalle();
        // $produitinstalle->version = $this->version;
        // //$id = DB::table('Installations')->where();
        // $produitinstalle->installations_id = $installation->id;
        // $produitinstalle->produits_id = $this->produit;
        // $produitinstalle->save();

        // $installation = new Installation();
        // $produitinstalle = Produitinstalle::all();
        // $installation->description = $request->description;
        // $installation->client_id = $request->client;
        // $installation->save();
        // $installation->produits()->attach($request->produit);
        // $produitinstalle->version = $request->version;
        // $produitinstalle->save();

        $this->createMode = false;
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
       $this->data = $this->users = DB::table('roles_users')
       ->join('users', 'roles_users.user_id', '=', 'users.id')
       ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
       ->where('roles.nom', '=', 'Client')
       ->select('users.*')
       ->get();
       $this->produits = Produit::all();
       $this->installation = DB::table('Produitinstalles')
       ->join('Produits', 'Produitinstalles.produit_id', '=', 'Produits.id')
       ->join('Users', 'Produitinstalles.user_id', '=', 'Users.id')
       ->select(['Produitinstalles.id As id', 'Produitinstalles.dateInstallation As dateI', 'Produits.nom As produits', 'Produits.type As type', 'Produitinstalles.version As version', 'Users.name As nom', 'Produitinstalles.description As description'])
       ->get();
      // $this->updateMode = false;
       return view('livewire.installation-component')->layout('livewire.base');
    }
    public function nouveau()
    {
        $this->createMode = true;
    }
    public function destroy($first)
    {
        // if ($first)
        // {

            // $idInstallation = Produitinstalle::where('id', $second);
            // dd($idInstallation);
            // $idInstallation->delete();
            $idProduitinstalle = Produitinstalle::where('id', $first)->first();
            $idProduitinstalle->delete();
        //}
    }
    public function edit($first)
    {
        $this->updateMode = true;
        $this->client_id = $first;
        
    }
    public function update()
    {
        $idProduitinstalle = Produitinstalle::findOrFail($this->client_id)->join('Produits','Produitinstalle.produit_id', '=', 'Produits.id')->join('Users','Produitinstalle.user_id', '=', 'Users.id');
        $idProduitinstalle->version = $this->version;
        $idProduitinstalle->description = $this->description;
        $idProduitinstalle->dateInstallation = $this->date;
        $idProduitinstalle->produit_id = $this->produit;
        $idProduitinstalle->user_id = $this->client;
        $this->updateMode = false;
        $this->createMode = false;

    }
}
