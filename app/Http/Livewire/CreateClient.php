<?php

namespace App\Http\Livewire;

use App\Models\Roles;
use App\Models\User;
use Livewire\Component;

class CreateClient extends Component
{
    public $choix = "";
    public $role = [];
    public $prenom;
    public $name;
    public $identifiant;
    public $raisonsociale;
    public $email;
    public $phone;
    public $siege;
    public $data;
    
    protected $rules = [
        'name' => 'required',
        'role' => 'required',

    ];
    public function store()
    {
        //Enregistrement dans la base
        $users = new User();
        dd($this->name);
        if($this->role = 3)
        {
            dd($this->name);
            $users->name = $this->name;
            $users->email = $this->email;
            $users->siege = $this->siege;
            $users->tel = $this->phone;
            $users->raisonSocial = $this->raisonsociale;
            $users->password = $this->identifiant;
            $users->ifu = $this->identifiant;
            $users->save();
            return view('livewire.create-client');
        }else{ 

        }
        /*if($this->role =1)
        {
            $users->name = $this->name;
            $users->prenom = $this->prenom;
            $users->email = $this->email;
            $users->tel = $this->tel;
            $users->username = $this->username;
            $users->mdp = $this->password;
        }
        if($this->role = 2)
        {
            $users->name = $this->name;
            $users->prenom = $this->prenom;
            $users->email = $this->email;
            $users->adresse = $this->siege;
            $users->tel = $this->tel;
            $users->disponibilite = $this->disponibilite;
            $users->poste = $this->poste;
            $users->username = $this->username;
            $users->mdp = $this->password;
        }*/
        
      
        
    }
    public function render()
    {
        $this->role = Roles::all();
        return view('livewire.create-client')->layout('livewire.client');
    }
   
}
