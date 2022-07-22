<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;
use App\Models\User;
use App\Models\Devis;
use App\Models\TypeDevis;

class DevisComponent extends Component
{
    public $prix;
    public $payer = false;
    public $client_id;
    public $type_devis_id;
    public $pane_id;
    public $pannes;
    public $updateMode = false;
    public $devis;
    public $users ;
    public $types;

    public function render()
    {
        $this->devis = Devis::all();
        $this->users = DB::table('users')->join('lesroles', 'lesroles.users_id', '=', 'users.id')->join('roles', 'roles.id', '=', 'lesroles.roles_id')->where('roles.nom', 'Client')->select('users.nom as nom', 'roles.nom as role' , 'users.id as id')->get();
        //$users= Roles::where('nom','client')->users()->get();
        //dd($this->users);

        //$this->pannes = DB::table('Devis')->join('Pannes', 'Devis.pannes_id', '=', 'Pannes.id')->where('Devis.pannes_id',$this->pane_id)->select('Pannes.*')->get();
        //dd($this->produits );
        $this->types = TypeDevis::all();
        //$this->types = DB::table('Devis')->join('Type_devis', 'Devis.type_devis_id', '=', 'Type_devis.id')->where('Devis.type_devis_id',$this->type_devis_id)->select('Type_devis.*')->get();
        return view('livewire.devis-component', [
        'users' => $this->users,
        'pannes'=> $this->pannes,
        'types'=> $this->types,
        'devis' => $this->devis,
        ])->layout('livewire.base');

    }
    public function changeEvent($value)
    {
        $this->pannes = DB::table('Pannes')->where('client_id', '=', $value)->select('id', 'description')->get();
        // dd($this->pannes);
    }
    public function open(){
        dd($this->client_id);
        $this->pannes = DB::table('Pannes')->where('client_id', '=', $this->users)->get();
    }
    private function resetInput()
    {
        $this->prix = null;
        $this->pane_id = null;
        $this->type_devis_id = null;
        $this->client_id = null;
    }

    public function store()
    {
        //dd("salut");
        //
        //$client_id= Auth::user()->id;
        $this->validate([
            'prix' => 'required|max:20',
            'pane_id' => 'required',
            'type_devis_id' => 'required',
            'client_id' => 'required',
        ]);
        $devi = new Devis();
        $devi->prix= $this->prix;
        $devi->pannes_id= $this->pane_id;
        $devi->type_devis_id= $this->type_devis_id;
        $devi->client_id= $this->client_id;
        $devi->save();

        session()->flash('message', 'Devis creer avec succès');

        $this->resetInput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $devi = Panne::find($id);
        /*$produits = DB::table('Produitinstalles')->join('Produits', 'Produitinstalles.produits_id', '=', 'Produits.id')->join('Installations', 'Produitinstalles.installations_id', '=', 'Installations.id')->where('Installations.client_id',$client_id)->select('Produitinstalles.*', 'Produits.nom')->get();
        $produits = Produit::where(id)*/
        //dd($pane);
        $this->selected_id = $id;
        $this->prix = $devi->prix;
        $this->pane_id = $devi->pannes_id;
        $this->type_devis_id = $devi->types_devis_id;
        $this->client_id = $devi->client_id;
        $this->updateMode = true;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {


          $this->validate([
            'selected_id' => 'required|numeric',
            'prix' => 'required|max:20',
            'pane_id' => 'required',
            'type_devis_id' => 'required',
            'client_id' => 'required',
        ]);

        if ($this->selected_id) {
            $devi= Devis::find($this->selected_id);
            //dd($pane);
            $devi->prix=$this->prix;
            $devi->pannes_id=$this->pane_id;
            $devi->type_devis_id=$this->type_devis_id;
            $devi->client_id=$this->client_id;
           /* $pane->update([
                'description' => $this->description,
                'produit_id' => $this->produit_id,
                'client_id' => $this->client_id,
            ]);*/
            $devi->save();
            session()->flash('message', 'Devis modifier avec succès');
           // Panne::whereId($this->selected_id)->update($this->validate);
           $this->resetInput();
           $this->updateMode = false;
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //$pane = Panne::find($id);
        if ($id) {
            $devi = Devis::where('id', $id);
            $devi->delete();
        }
        session()->flash('message', 'Devis supprimer avec succès');
    }

}
