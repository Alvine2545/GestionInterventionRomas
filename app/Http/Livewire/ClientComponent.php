<?php

namespace App\Http\Livewire;

use App\Models\Roles;
use Livewire\Component;
use App\Models\User;

class ClientComponent extends Component
{
    public $choix;
    public $role = [];
    public $roles = [];
    public $prenom;
    public $nom;
    public $name;
    public $poste;
    public $identifiant;
    public $raisonsociale;
    public $email;
    public $phone;
    public $siege;
    public $ifu;
    public $data;


    public $totalSteep = 2;
    public $currentSteep = 1;
    public function mount(){
        $this->currentSteep = 1;

    }
    public function render()
    {
        $this->role = Roles::all();
        return view('livewire.client-component', ['role' => $this->role])->layout('livewire.base');
    }
    public function validateData()
    {
        if($this->currentSteep == 1){
            $this->validate([
                'roles'=>'required'
            ]);
        }
        // }elseif($this->currentSteep == 2){
        //     $this->validate([
        //         'name'=>'required|string',
        //         'identifiant'=>'required|unique:user'
        //     ]);
        // }
    }
    public function store()
    {
        $this->resetErrorBag();
        if($this->currentSteep == 2){

            //Validation
            $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->tel = $this->phone;
        $user->siege = $this->siege;
        $user->raisonSocial = $this->raisonsociale;
        $user->poste = $this->poste;
        $user->nom = $this->nom;
        $user->prenom = $this->prenom;
        $user->ifu = $this->ifu;
        $user->disponibilite = true;
        $user->status = 0;
        $user->demande  = 0;
        if($this->choix == 1){
            $user->password = $this->ifu;
        }elseif($this->choix == 2){
            $user->password = $this->email;
        }elseif ($this->choix == 4) {
            $user->password = $this->email;
        }
        $user->save();
        $user->roles()->attach($this->choix);
        }

    }
    public function increaseSteep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentSteep++;
        $this->choix = $this->roles[0];
        if($this->currentSteep > $this->totalSteep){
            $this->currentSteep = $this->totalSteep;
        }
    }
    // public function choice(){
    //     $this->choix = $this->roles;
    // }
    public function decreaseSteep(){
        $this->resetErrorBag();
        //$this->validateData();
        $this->currentSteep--;
        if($this->currentSteep<1){
            $this->currentSteep = 1;
        }
    }
}
