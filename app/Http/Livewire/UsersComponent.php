<?php

namespace App\Http\Livewire;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
}
