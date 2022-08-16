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
    public $isClient;
    public $idUsers;
    public $unrole;
    public $monid;
    public $vue;
    public $viewUser;
    public $totalSteep = 2;
    public $currentSteep = 1;
    public $userid;
    public $disponibilite;
    public $stored;
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
    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
        $this->nom = null;
        $this->prenom = null;
        $this->poste = null;
        $this->email = null;
        $this->siege  = null;
        $this->identifiant = null;
        $this->roles;
        $this->raisonsociale = null;
        $this->stored = false;
        
    }
    public function new()
    {
        $this->resetInput();
        $this->nouveau = true;
        $this->updateForm = false;
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
    }
    public function store()
    {
        $this->nouveau = false;
        $this->resetErrorBag();
        if($this->currentSteep == 2){
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
            //Validation 
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
                $user->password = Hash::make($this->email);
            }elseif ($this->choix == 3) {
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
                $user->password = Hash::make($this->email);
            }
            $user->save();
            $user->roles()->attach($this->choix);
            $this->stored = true;
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
    public function decreaseSteep(){
        $this->resetErrorBag();
        //$this->validateData();
        $this->currentSteep--;
        if($this->currentSteep<1){
            $this->currentSteep = 1;
        }
    }
    public function destroy($id){
        $client = User::find($id);
        $client->roles()->detach();
        $client->delete();
    }
    public function edit($id)
    {
        $this->monid = $id;
        $this->nouveau = false;
        $this->usersUpdate = User::find($id);
        foreach ($this->usersUpdate->roles as $value) {
            if ($value->id == 1) {
                # client
                $this->unrole = $value->id;
                $this->isClient = true;
                $this->usersUpdate = User::find($id);
                $this->name = $this->usersUpdate->name;
                $this->phone = $this->usersUpdate->tel;
                $this->email = $this->usersUpdate->email;
                $this->siege  = $this->usersUpdate->siege;
                $this->identifiant = $this->usersUpdate->ifu;
                $this->raisonsociale = $this->usersUpdate->raisonSocial;
            }
            if ($value->id == 2) {
                # technicien
                $this->unrole = $value->id;
                $this->isClient = false;
                $this->usersUpdate = User::find($id);
                $this->nom = $this->usersUpdate->nom;
                $this->phone = $this->usersUpdate->tel;
                $this->email = $this->usersUpdate->email;
                $this->siege  = $this->usersUpdate->siege;
                $this->prenom = $this->usersUpdate->prenom;
                $this->poste = $this->usersUpdate->poste;
            }
            
        }

        $this->updateForm = true;
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
        $this->usersUpdate = User::find($this->monid); 
        if($this->unrole == 1){
            
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
            //$this->usersUpdate = User::find($this->id); 
            
            $this->usersUpdate->name = $this->name;
            $this->usersUpdate->email = $this->email;
            $this->usersUpdate->tel = $this->phone;
            $this->usersUpdate->siege = $this->siege;
            $this->usersUpdate->raisonSocial = $this->raisonsociale;
            $this->usersUpdate->poste = $this->poste;
            $this->usersUpdate->nom = $this->nom;
            $this->usersUpdate->prenom = $this->prenom;
            $this->usersUpdate->ifu = $this->identifiant;
            $this->usersUpdate->disponibilite = true;
            $this->usersUpdate->status = 0;
            $this->usersUpdate->demande  = 0;
            $this->usersUpdate->password = Hash::make($this->identifiant);
            $this->usersUpdate->save();
            $this->usersUpdate->roles()->attach($this->choix);
        }elseif($this->unrole == 2){
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
            $this->usersUpdate->nom = $this->nom;
            $this->usersUpdate->prenom = $this->prenom;
            $this->usersUpdate->tel = $this->phone;
            $this->usersUpdate->siege = $this->siege;
            $this->usersUpdate->poste = $this->poste;
            $this->usersUpdate->email = $this->email;
            $this->usersUpdate->prenom = $this->prenom;
            $this->usersUpdate->disponibilite = true;
            $this->usersUpdate->status = 0;
            $this->usersUpdate->demande  = 0;
            $this->usersUpdate->password = Hash::make($this->email);
            $this->usersUpdate->save();
            $this->usersUpdate->roles()->attach($this->choix);
        }elseif ($this->unrole == 3) {
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
            $this->usersUpdate->nom = $this->nom;
            $this->usersUpdate->prenom = $this->prenom;
            $this->usersUpdate->tel = $this->phone;
            $this->usersUpdate->siege = $this->siege;
            $this->usersUpdate->poste = $this->poste;
            $this->usersUpdate->email = $this->email;
            $this->usersUpdate->prenom = $this->prenom;
            $this->usersUpdate->disponibilite = true;
            $this->usersUpdate->password = Hash::make($this->email);
            $this->usersUpdate->save();
            $this->usersUpdate->roles()->attach($this->choix);
        }
        
        $this->updateForm = false;
    }
}
