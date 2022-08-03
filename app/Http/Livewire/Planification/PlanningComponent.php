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
    public $priorite;
    public $editModal;
    public $technicien;
    public $typeinterves;
    public $start;
    public $end;
    public $date;
    public $heureD;
    public $heureF;
    public $d;
    public $type;
    public $pan;
    public $tech;
    public $title;
public $essai;
    public function render()
    {
        //$this->editModal = false;
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
        ['pannes'=>$pannes, 'techniciens'=>$techniciens, 'typeinterventions'=>$typeinterventions, 'events'=>$this->events]
        )->layout('livewire.base');
    }
    public function recuperation($dateR){
        $this->d = $dateR;
    }
    public function eventAdd()
    {
        // $data['typeintervention'] = $this->typeinterves;
        // $data['responsable'] = Auth::user()->id;
        // $data['panne'] = implode(",",$this->panne);
        // dd($data);
        //dd($this->typeinterves);
        // dd($this->d);
         $planification = new Planning();
         $planification->typeinterventions_id = $this->typeinterves;
         $planification->responsables_id = Auth::user()->id;
         $planification->pannes_id = $this->panne;
          $planification->debut = $this->start;
          $planification->fin = $this->end;
          $planification->priorite = "eleve";
          $planification->title = "Planning".$this->typeinterves;
         $planification->date = $this->d;
         $planification->save();
         foreach($this->technicien as $value){
            $planification->users()->attach($value);
         }
         $this->emit("refreshCalendar");
        // $planification->end = $this->end;
        // $planification->date = $this->date;*/
        // $planification->save();
        // $planification->techniciens()->attach($this->technicien);
        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        // dd($this->technicien);
        // // Planning::create($this->events);
    }
    public function editId($id){
        $this->editModal = true;
        $this->eventId = $id;
        $this->event = Planning::find($id);
        $this->pan = Panne::all();
        $this->tech = DB::table('Users')
       ->join('Roles_users', 'Users.id', '=', 'Roles_users.user_id')
       ->join('Roles', 'Roles_users.roles_id', '=', 'Roles.id')
       ->where('Roles.nom', 'Technicien')
       ->select(['Users.id As id', 'Users.nom As nom', 'Users.prenom As prenom'])
       ->get();
        $this->type = DB::table('type_interventions')->where('id', $this->event->typeinterventions_id)->select('nom')->get();
    }
    public function eventRemove($id)
    {
        $this->events = Planning::find($id);
        $this->events->delete();

    }
    public function updateEvent($id){
        $this->event->priorite = $this->priorite;
        $this->event->debut = $this->stat;
        $this->event->fin = $this->end;
        $this->event->title = $this->title;
        $this->event->date = $this->date;
        $this->event->typeinterventions_id = $this->typeinterves;
        $this->event->responsables_id = Auth::user()->id;
        $this->event->pannes_id = $this->panne;
        $this->event->save();

    }

}
