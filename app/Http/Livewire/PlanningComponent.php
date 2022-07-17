<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Panne;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PlanningComponent extends Component
{
    public $events = '';
    public $pannes = '';
    public $techniciens = '';
    public $typeintervention ='';
    public $start = '';
    public $end = '';
    public function render()
    {
        $this->events = json_encode(Event::all());
        $this->pannes = Panne::all();
        $this->techniciens = DB::table('Users')
       ->join('Roles_users', 'Users.id', '=', 'Roles_users.user_id')
       ->join('Roles', 'Roles_users.roles_id', '=', 'Roles.id')
       ->where('Roles.nom', 'Technicien')->where('Users->disponibilite', true)
       ->select(['Users.id As id', 'Users.nom As nom', 'Users.prenom As prenom'])
       ->get();
        //$this->techniciens = DB::table(User)->join('Roles_users', )
        //$events = Event::select('id','title','start')->get();

        //$this->events = json_encode($events);
        return view('livewire.planning-component')->layout('livewire.index');
    }

    public function eventAdd($event)
{
    Event::create($event);
}
public function eventRemove($id)
{
    Event::destroy($id);
}
    /*public function getevent()
    {       
        $events = Event::select('id','title','start')->get();

        return  json_encode($events);
    }

    /**
    * Write code on Method
    *
    * @return response()
    *
    public function addevent($event)
    {
        $input['title'] = $event['title'];
        $input['start'] = $event['start'];
        Event::create($input);
    }

    /**
    * Write code on Method
    *
    * @return response()
    *
    public function eventDrop($event, $oldEvent)
    {
      $eventdata = Event::find($event['id']);
      $eventdata->start = $event['start'];
      $eventdata->save();
    }*/
}