<?php

namespace App\Http\Livewire\Planification;

use Livewire\Component;
use App\Models\Event;
use App\Models\Panne;
use App\Models\Planning;
use App\Models\TypeIntervention;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PlanningComponent extends Component
{
    public $eventId;
    public $eventAdd;
    public $event;
    public $panne;
    public $technicien;
    public $typeintervention;
    public $start;
    public $end;
    public $date;
    
    public function render()
    {
        $pannes = Panne::all();
        $techniciens = DB::table('Users')
       ->join('Roles_users', 'Users.id', '=', 'Roles_users.user_id')
       ->join('Roles', 'Roles_users.roles_id', '=', 'Roles.id')
       ->where('Roles.nom', 'Technicien')
       ->select(['Users.id As id', 'Users.nom As nom', 'Users.prenom As prenom'])
       ->get();
       $typeinterventions = TypeIntervention::all();
        $this->events = json_encode(Planning::all());
        return view('livewire.planification.planning-component',
        ['pannes'=>$pannes, 'techniciens'=>$techniciens, 'typeinterventions'=>$typeinterventions]
        )->layout('base');
    }
    public function eventAdd()
    {
        
        $planification = new Planning();
        $planification->typeinterventions_id = $this->typeintervention;
        $planification->responsables_id = Auth::user()->id;
        $planification->pannes_id = $this->panne;
        //$planification->start = $this->technicien;
        /*$planification->start = $this->start;
        $planification->end = $this->end;
        $planification->date = $this->date;*/
        $planification->save();
        $planification->techniciens()->attach($this->technicien);
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        dd($this->technicien);
        // Planning::create($this->events);
    }
    public function eventRemove($id)
    {
        $this->events = Planning::find($id);
        //Event::destroy($id);
    }
}
