<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class TechniciensComponent extends Component
{
    public $nouveau;
    public $updateForm;
    public $nom;
    public $prenom;
    public $phone;
    public $raisonsociale;
    public $siege;
    public $email;
    public $identifiant;
    public $poste;
    public $liste = true;
    public $viewUser;

    public function render()
    {
        $this->role = Roles::all();
        // $this->users = User::all();
         $this->users = DB::table('roles_users')
            ->join('users', 'roles_users.user_id', '=', 'users.id')
            ->join('roles', 'roles_users.roles_id', '=', 'roles.id')
            ->where('roles.nom', '=', 'Technicien')
            ->select('users.*', 'roles.nom as role')
            ->get();
        return view('livewire.techniciens-component', ['role' => $this->role, 'users' => $this->users])->layout('livewire.base');
    }
    
    private function resetInput()
    {
        $this->nom = null;
        $this->prenom = null;
        $this->email = null;
        $this->siege  = null;
        $this->poste = null;
        $this->phone = null;
        
    }
    public function new(){
        $this->liste = false;
        $this->resetInput();
        $this->nouveau = true;
        $this->updateForm = false;
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
            ['nom' => 'required'],
            [
                'nom.required' => 'Champ requis.',
            ],
            ['phone' => 'required|min:8'],
            [
                'phone.required' => 'Champ requis.',
            ],
            ['prenom' => 'required'],
            [
                'prenom.required' => 'Champ requis.',
            ],
            ['poste' => 'required'],
            [
                'poste.required' => 'Champ requis.',
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
        $user->poste = $this->poste;
        $user->nom = $this->nom;
        $user->prenom = $this->prenom;
        $user->disponibilite = true;            
        $user->password = Hash::make($this->email);
        $user->save();
        $user->roles()->attach(2);
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
        $this->nom = $this->usersUpdate->nom;
        $this->phone = $this->usersUpdate->tel;
        $this->email = $this->usersUpdate->email;
        $this->siege  = $this->usersUpdate->siege;
        $this->prenom = $this->usersUpdate->prenom;
        $this->poste = $this->usersUpdate->poste;            
        $this->updateForm = true;
        $this->liste = false;
    }
    public function view($id){
        $vue =User::find($id);
        $this->userid = $id;
        $this->nom = $vue->nom;
        $this->prenom = $vue->prenom;
        $this->disponibilite = $vue->disponibilite;
        $this->email = $vue->email;
        $this->phone = $vue->tel;
        $this->poste = $vue->poste;
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
            ['nom' => 'required'],
            [
                'nom.required' => 'Champ requis.',
            ],
            ['phone' => 'required|min:8'],
            [
                'phone.required' => 'Champ requis.',
            ],
            ['prenom' => 'required'],
            [
                'prenom.required' => 'Champ requis.',
            ],
            ['poste' => 'required'],
            [
                'poste.required' => 'Champ requis.',
            ],
            ['siege' => 'required'],
            [
                'siege.required' => 'Champ requis.',
            ]
        );
        $this->usersUpdate = User::find($this->monid);
        $this->usersUpdate->nom = $this->nom;
        $this->usersUpdate->prenom = $this->prenom;
        $this->usersUpdate->tel = $this->phone;
        $this->usersUpdate->siege = $this->siege;
        $this->usersUpdate->poste = $this->poste;
        $this->usersUpdate->email = $this->email;
        $this->usersUpdate->disponibilite = true;
        $this->usersUpdate->password = Hash::make($this->email);
        $this->usersUpdate->save();
        $this->usersUpdate->roles()->attach(2);
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
