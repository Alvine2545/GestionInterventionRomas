<?php

namespace App\Http\Livewire;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class UsersComponent extends Component
{
    public $nouveau;
    public $updateForm;
    public $name;
    public $phone;
    public $raisonsociale;
    public $siege;
    public $email;
    public $identifiant;
    public $liste = true;
    public $usersUpdate;
    public function render()
    {
        $this->role = Roles::all();
        // $this->users = User::all();
         $this->users = DB::table('roles_users')
            ->join('users', 'roles_users.user_id', '=', 'users.id')
            ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
            ->where('roles.nom', '=', 'Client')
            ->select('users.*', 'roles.nom as role')
            ->get();
        
        return view('livewire.users-component', ['role' => $this->role, 'users' => $this->users])->layout('livewire.base');

    }
    public function activate($id){
        $client = User::find($id);
        $client->status = true;
        $client->save();
    }
    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
        $this->email = null;
        $this->siege  = null;
        $this->identifiant = null;
        $this->raisonsociale = null;
        
    }
    public function new(){
        $this->liste = false;
        $this->resetInput();
        $this->nouveau = true;
        $this->updateForm = false;
    }
    public function annuler(){
        $this->liste = true;
        $this->nouveau = false;
        $this->resetInput();
    }
    public function store()
    {
        //Validation 
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
            ['identifiant' => 'required'],
            [
                'identifiant.required' => 'Champ requis.',
            ],
            ['raisonsociale' => 'required'],
            [
                'raisonsociale.required' => 'Champ requis.',
            ],
            ['siege' => 'required'],
            [
                'siege.required' => 'Champ requis.',
            ]
        );
        $this->nouveau = false;
        $this->resetErrorBag();
        $user = new User();
        $user->email = $this->email;
        $user->tel = $this->phone;
        $user->siege = $this->siege;
        $user->raisonSocial = $this->raisonsociale;
        $user->name = $this->name;
        $user->ifu = $this->identifiant;
        $user->status = false;            
        $user->password = Hash::make($this->identifiant);
        $user->save();
        $user->roles()->attach(1);
        $this->stored = true;
        $this->liste = true;
        $this->resetInput();
    }
    public function edit($id)
    {
        $this->nouveau = false;
        $this->usersUpdate = User::find($id);
            
        # technicien
        $this->monid = $id;
        $this->name = $this->usersUpdate->name;
        $this->phone = $this->usersUpdate->tel;
        $this->email = $this->usersUpdate->email;
        $this->siege  = $this->usersUpdate->siege;
        $this->identifiant = $this->usersUpdate->ifu;
        $this->raisonsociale = $this->usersUpdate->raisonSocial;            
        $this->updateForm = true;
        $this->liste = false;
    }
    public function view($id){
        $vue =User::find($id);
        $this->userid = $id;
        $this->name = $vue->name;
        $this->raisonsociale = $vue->raisonsociale;
        $this->email = $vue->email;
        $this->phone = $vue->tel;
        $this->identifiant = $vue->identifiant;
        $this->siege = $vue->siege;
        $this->viewUser = true;
    }
    public function update()
    {
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
            ['identifiant' => 'required'],
            [
                'identifiant.required' => 'Champ requis.',
            ],
            ['siege' => 'required'],
            [
                'siege.required' => 'Champ requis.',
            ],
            ['raisonsociale' => 'required'],
            [
                'raisonsociale.required' => 'Champ requis.',
            ]
        );
        $this->usersUpdate = User::find($this->monid);
        $this->usersUpdate->name = $this->name;
        $this->usersUpdate->raisonsociale = $this->raisonsociale;
        $this->usersUpdate->tel = $this->phone;
        $this->usersUpdate->ifu = $this->identifiant;
        $this->usersUpdate->siege = $this->siege;
        $this->usersUpdate->email = $this->email;
        $this->usersUpdate->password = Hash::make($this->identifiant);
        $this->usersUpdate->save();
        $this->usersUpdate->roles()->attach(1);
        $this->updateForm = false;
        $this->liste = true;
        $this->resetInput();
    } 
    public function destroy($id){
        $client = User::find($id);
        $client->roles()->detach();
        $client->delete();
        $this->resetInput();
    }
}
