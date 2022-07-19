<?php

namespace App\Http\Livewire;

use App\Models\Roles;
use Livewire\Component;

class ClientComponent extends Component
{
    public $choix = "";
    public $role = [];
    public $roles = [];
    public $prenom;
    public $name;
    public $identifiant;
    public $raisonsociale;
    public $email;
    public $phone;
    public $siege;
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
            $this->validate([
                'name'=>'required|string',
                'identifiant'=>'required|unique:users'
            ]);
        }
    }
    public function increaseSteep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentSteep++;
        if($this->currentSteep > $this->totalSteep){
            $this->currentSteep = $this->totalSteep;
        }
    }
    public function decreaseSteep(){
        $this->resetErrorBag();
        //$this->validateData();
        $this->currentSteep--;
        if($this->currentSteep<1){
            $this->currentSteep = 1;
        }
    }
}
