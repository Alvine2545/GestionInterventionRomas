<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\Panne;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Notifications\Panneadmin;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Livewire\WithFileUploads;
class Adminpanne extends Component
{
    use WithFileUploads;
    public $users ;
    public $produits;
    public $client_id;
    public $produit_id;
    public $description;
    public $updateMode ;
    public $selected_id;
    public $pannes;
    public $nom;
    public $nouveau;
    public $liste = true;
    public $photo;
    public $voir;
    //public $produit_inst;

    public function render()
    {
        
        $this->pannes = Panne::all();
        $this->users = DB::table('users')->join('roles_users', 'roles_users.user_id', '=', 'users.id')->join('roles', 'roles.id', '=', 'roles_users.roles_id')->where('roles.nom', 'Client')->select('users.name as nom', 'roles.nom as role' , 'users.id as id')->get();
        //$users= Roles::where('nom','client')->users()->get();
        //dd($this->users);
        $this->produits = DB::table('Produitinstalles')->join('Produits', 'Produitinstalles.produit_id', '=', 'Produits.id')->join('Users', 'Produitinstalles.user_id', '=', 'Users.id')->where('Users.id',$this->client_id)->select('Produits.*')->get();
        //dd($this->produits );
        return view('livewire.adminpanne', [
        'users' => $this->users,
        'produits'=> $this->produits,
        'pannes' => $this->pannes,
        ])->layout('livewire.base');
    }

    private function resetInput()
    {
        $this->description = null;
        $this->produit_id = null;
        $this->client_id = null;
    }

    public function store()
    {
        //dd("salut");
        //
        //$client_id= Auth::user()->id;
        $this->validate([
            'description' => 'required|max:255',
            'produit_id' => 'required',
            'photo' => 'image|max:1024|mimes:jpg,png,jpeg,gif,svg',
            'client_id' => 'required',
        ]);
        $pane = new Panne();
        $pane->description= $this->description;
        $pane->produitinstalles_id= $this->produit_id;
        $pane->user_id= $this->client_id;
        $pane->nom = $this->client_id."_PANNE_".$this->produit_id;
        $path = $this->photo->store('photosPanne','public');
        $pane->photo = $path;
        $pane->save();
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        $this->liste = true;
        $this->nouveau = false;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $pane = Panne::find($id);
        $this->voir = $pane;
        /*$produits = DB::table('Produitinstalles')->join('Produits', 'Produitinstalles.produits_id', '=', 'Produits.id')->join('Installations', 'Produitinstalles.installations_id', '=', 'Installations.id')->where('Installations.client_id',$client_id)->select('Produitinstalles.*', 'Produits.nom')->get();
        $produits = Produit::where(id)*/
        //dd($pane);
        $this->selected_id = $id;
        $this->description = $pane->description;
        $this->produit_id = $pane->produitinstalles_id;
        $this->client_id = $pane->user_id;
        $this->updateMode = true;
        $this->nouveau = false;
        $this->liste = false;
        
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
        $this->nouveau = false;
          $this->validate([
            'selected_id' => 'required|numeric',
            'description' => 'required|max:255',
            'client_id' => 'required',
        ]);

        if ($this->selected_id) {
            $pane= Panne::find($this->selected_id);
            //dd($pane);
            $pane->description=$this->description;
            $pane->produitinstalles_id=$this->produit_id;
            $pane->user_id=$this->client_id;
           /* $pane->update([
                'description' => $this->description,
                'produit_id' => $this->produit_id,
                'client_id' => $this->client_id,
            ]);*/
            $pane->save();

           // Panne::whereId($this->selected_id)->update($this->validate);
           $this->resetInput();
           $this->updateMode = false;
           $this->liste = true;
        }


    }
    public function new(){
        $this->nouveau = true;
        $this->updateMode = false;
        $this->liste = false;
        $this->resetInput();
    }
    public function close(){
        $this->nouveau = false;
        $this->updateMode = false;
        $this->liste = true;
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
            $pane = Panne::where('id', $id);
            Storage::delete($pane->photo);
            $pane->delete();
        }
    }


}
