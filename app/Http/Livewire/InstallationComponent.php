<?php

namespace App\Http\Livewire;

use App\Models\Installation;
use App\Models\Produit;
use App\Models\Produitinstalle;
use App\Models\User;
use Livewire\Component;

class InstallationComponent extends Component
{
    public $description;
    public $version;
    public $client;
    public $produit;
 
    /*protected $rules = [
        'description' => 'required',
        'version' => 'required',
        'client' => 'required',
        'produit' => 'required',
    ];*/
 
    public function store()
    {
        //$this->validate();
 
        // Execution doesn't reach here if validation fails.
        dd('vbn,');
        $installation = new Installation();
        $produitinstalle = new Produitinstalle();
        $installation->description = $this->description;
        $installation->client_id = $this->client;
        $installation->save();
        $produitinstalle->version = $this->version;
        $installation->produits()->attach($this->produit);
        return redirect()->route('admin/produit/liste');
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
        $data = array();   
        $users = User::all();
        $produits = Produit::all();        
        return view('livewire.installation-component', compact('users','produits'));
    }
}
