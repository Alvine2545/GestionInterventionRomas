<?php

namespace App\Http\Livewire;

use App\Models\Panne;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ClientSpaceComponent extends Component
{
    public $pannes;
    public $status;
    public $tab = [];
    public function render()
    {
        $this->pannes = Panne::all();
        // $produits = DB::table('Users')->where('Pannes.user_id', 'Users.id')->where('Users.id', Auth::user()->id)->select('Pannes.*')->get();
        // dd($produits);
        foreach($this->pannes as $item){
            $produits = DB::table('Produitinstalles')->join('Produits', 'Produitinstalles.produit_id', '=', 'Produits.id')->join('Users', 'Produitinstalles.user_id', '=', 'Users.id')->where('Users.id',Auth::user()->id)->get();
            //$produits = DB::table()->where('Pannes.produitinstalles_id', 'Produitinstalles.id')->where('Produitinstalles.id', 1)->select('Pannes.*')->get();
            dd($produits->pannes);
            DB::table('produitinstalles')->join();
            $this->status = Panne::find($item->id);
        }
        return view('livewire.client-space-component')->layout('index');
    }
}
