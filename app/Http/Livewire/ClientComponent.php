<?php

namespace App\Http\Livewire;

use App\Models\Roles;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    public $nouveau;
    public $users;
    public $updateForm;
    public $usersUpdate;
public $nameU;

    public $totalSteep = 2;
    public $currentSteep = 1;
    public function mount(){
        $this->currentSteep = 1;

    }
    public function render()
    {

        // $users = User::all();
        $this->role = Roles::all();
        // $this->users = User::all();
         $this->users = DB::table('roles_users')
            ->join('users', 'roles_users.user_id', '=', 'users.id')
            ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
            ->select('users.*', 'roles.nom as role')
            ->get();
        return view('livewire.client-component', ['role' => $this->role, 'users' => $this->users])->layout('livewire.base');

    }
    public function new()
    {
        $this->nouveau = true;
    }
    public function validateData()
    {
        if($this->currentSteep == 1){
            $this->validate(
                ['roles' => 'required'],
                [
                    'roles.required' => 'Choisissez au moins un rôle',
                ]
            );
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
        $this->nouveau = false;
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
        $user->ifu = $this->identifiant;
        $user->disponibilite = true;
        $user->status = 0;
        $user->demande  = 0;
        if($this->choix == 1){
            $this->validate(
                ['email' => 'required|email'],
                [
                    'email.required' => 'Champ requis.',
                    'email.email' => 'Email non valide.',
                ],
                ['email' => 'Email Address'],
                ['name' => 'required'],
                [
                    'name.required' => 'Champ requis.',
                ],
                ['raisonsociale' => 'required'],
                [
                    'raisonsociale.required' => 'Champ requis.',
                ],
                ['phone' => 'required|min:8'],
                [
                    'phone.required' => 'Champ requis.',
                ],
                ['identifiant' => 'required'],
                [
                    'identifiant.required' => 'Champ requis.',
                ],
                ['siege' => 'required'],
                [
                    'siege.required' => 'Champ requis.',
                ]
            );
            $user->password = Hash::make($this->identifiant);
        }elseif($this->choix == 2){
            $this->validate(
                ['email' => 'required|email'],
                [
                    'email.required' => 'Champ requis.',
                    'email.email' => 'Email non valide.',
                ],
                ['email' => 'Email Address'],
                ['name' => 'required'],
                [
                    'name.required' => 'Champ requis.',
                ],
                ['phone' => 'required|min:8'],
                [
                    'phone.required' => 'Champ requis.',
                ],
                ['surname' => 'required'],
                [
                    'surname.required' => 'Champ requis.',
                ],
                ['poste' => 'required'],
                [
                    'surname.required' => 'Champ requis.',
                ],
                ['siege' => 'required'],
                [
                    'siege.required' => 'Champ requis.',
                ]
            );
            $user->password = $this->email;
        }elseif ($this->choix == 4) {
            $this->validate(
                ['email' => 'required|email'],
                [
                    'email.required' => 'Champ requis.',
                    'email.email' => 'Email non valide.',
                ],
                ['email' => 'Email Address'],
                ['name' => 'required'],
                [
                    'name.required' => 'Champ requis.',
                ],
                ['phone' => 'required|min:8'],
                [
                    'phone.required' => 'Champ requis.',
                ],
                ['surname' => 'required'],
                [
                    'surname.required' => 'Champ requis.',
                ]
            );
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
    public function destroy($id){

        //$client = DB::table('users')->
    }
    public function edit($id)
    {

        $this->usersUpdate = User::find($id);
        //$this->roles = $this->usersUpdate->roles();
        $this->name = $this->usersUpdate->name;
        $this->phone = $this->usersUpdate->tel;
        $this->email = $this->usersUpdate->email;
        $this->siege  = $this->usersUpdate->siege;
        $this->identifiant = $this->usersUpdate->ifu;
        $this->raisonsociale = $this->usersUpdate->raisonSocial;
        $this->updateForm = true;
        // $this->role = Roles::all();
        // // $this->users = User::all();
        //  $this->users = DB::table('roles_users')
        //     ->join('users', 'roles_users.user_id', '=', 'users.id')
        //     ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
        //     ->select('users.*', 'roles.nom as role')
        //     ->get();
    }
    public function update($id)
    {
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
        $user->ifu = $this->identifiant;
        $user->disponibilite = true;
        $user->status = 0;
        $user->demande  = 0;
        if($this->choix == 1){
            $this->validate(
                ['email' => 'required|email'],
                [
                    'email.required' => 'Champ requis.',
                    'email.email' => 'Email non valide.',
                ],
                ['email' => 'Email Address'],
                ['name' => 'required'],
                [
                    'name.required' => 'Champ requis.',
                ],
                ['raisonsociale' => 'required'],
                [
                    'raisonsociale.required' => 'Champ requis.',
                ],
                ['phone' => 'required|min:8'],
                [
                    'phone.required' => 'Champ requis.',
                ],
                ['identifiant' => 'required'],
                [
                    'identifiant.required' => 'Champ requis.',
                ],
                ['siege' => 'required'],
                [
                    'siege.required' => 'Champ requis.',
                ]
            );
            $user->password = Hash::make($this->identifiant);
        }elseif($this->choix == 2){
            $this->validate(
                ['email' => 'required|email'],
                [
                    'email.required' => 'Champ requis.',
                    'email.email' => 'Email non valide.',
                ],
                ['email' => 'Email Address'],
                ['name' => 'required'],
                [
                    'name.required' => 'Champ requis.',
                ],
                ['phone' => 'required|min:8'],
                [
                    'phone.required' => 'Champ requis.',
                ],
                ['surname' => 'required'],
                [
                    'surname.required' => 'Champ requis.',
                ],
                ['poste' => 'required'],
                [
                    'surname.required' => 'Champ requis.',
                ],
                ['siege' => 'required'],
                [
                    'siege.required' => 'Champ requis.',
                ]
            );
            $user->password = $this->email;
        }elseif ($this->choix == 4) {
            $this->validate(
                ['email' => 'required|email'],
                [
                    'email.required' => 'Champ requis.',
                    'email.email' => 'Email non valide.',
                ],
                ['email' => 'Email Address'],
                ['name' => 'required'],
                [
                    'name.required' => 'Champ requis.',
                ],
                ['phone' => 'required|min:8'],
                [
                    'phone.required' => 'Champ requis.',
                ],
                ['surname' => 'required'],
                [
                    'surname.required' => 'Champ requis.',
                ]
            );
            $user->password = $this->email;
        }
        $user->save();
        $user->roles()->attach($this->choix);
    }
    }
}
