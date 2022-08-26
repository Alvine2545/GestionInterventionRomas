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
    public $events;
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
    public $fini;
public $essai;
    protected $listeners = ['refreshComponent' => '$refresh'];
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
        //dd($this->events);
        return view('livewire.planification.planning-component',
        ['pannes'=>$pannes, 'techniciens'=>$techniciens, 'typeinterventions'=>$typeinterventions, 'events'=>$this->events]
        )->layout('livewire.base');
        $this->fini = false;
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
         //$planification->typeinterventions_id = $this->typeinterves;
         $planification->responsables_id = Auth::user()->id;
        
          $planification->start = $this->start;
          $planification->end = $this->end;
          $planification->priorite = "eleve";
          $planification->photo = "eleve";
          $planification->title = "Planning".$this->typeinterves;
         $planification->date = $this->d;
         $planification->save();
         //$planification->pannes_id = $this->panne;
         foreach($this->panne as $value){
            $planification->pannes()->attach($value);
         }
         foreach($this->technicien as $value){
            $planification->users()->attach($value);
         }
         $this->emit('refreshComponent');
         $this->fini = true;
        // $planification->end = $this->end;
        // $planification->date = $this->date;*/
        // $planification->save();
        // $planification->techniciens()->attach($this->technicien);
        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        // dd($this->technicien);
        // // Planning::create($this->events);
    }
    public function editId($id){
        //$this->resetInput();
        $this->editModal = true;
        $this->eventId = $id;
        $this->event = Planning::find($id);
        //dd($this->event);
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
     private function resetInput()
     {
         $this->technicien = null;
         $this->typeinterves = null;
         $this->event = null;
         $this->panne = null;
         $this->priorite = null;
         $this->end = null;
         $this->start = null;
         $this->date = null;
         $this->heureD = null;
         $this->heureF = null;
         $this->d = null;
         $this->type = null;
         $this->pan = null;
         $this->tech = null;
         $this->title = null;

     }
}
