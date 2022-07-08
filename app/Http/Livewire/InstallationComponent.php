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
    public $data;
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
       $this->data = User::all() ; 
       return view('livewire.installation-component')->layout('livewire.installation');
    }
    public function index()
    {
        
        return view('livewire.installation-component', compact('users','produits'))->layout('livewire.installation');
        
        
    }
}
