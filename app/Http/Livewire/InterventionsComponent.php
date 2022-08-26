<?php

namespace App\Http\Livewire;

use App\Models\Intervention;
use App\Models\pannes_plannings;
use App\Models\Planning;
use App\Models\TypeIntervention;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class InterventionsComponent extends Component
{
    public $planings;
    public $typeIntervention;
    public $plannification;
    public $plannifications;
    public $pannes = [];
    public $mespannes;
    public $type;
    public $dateI;
    public $detail;
    public $solution;
    public $interventions;
    public $lieu;
    public $liste;
    public $details;
    public $nouveau;
    public $info;
    public function render()
    {
        $this->nouveau = true;
        $this->plannifications = Planning::all();
        $this->typeIntervention = TypeIntervention::all();
        $this->planings = Planning::find($this->plannification);
        return view('livewire.interventions-component')->layout('livewire.base');
    }
    public function click(){
        $this->planings = Planning::find($this->plannification);
        
    }
    public function store(){
         $this->validate(
             ['pannes' => 'required'],
             [
                 'plannification.required' => 'Champ requis.',
             ],
             ['plannification' => 'required'],
             [
                 'plannification.required' => 'Champ requis.',
             ],
             ['typeIntervention' => 'required'],
             [
                 'typeIntervention.required' => 'Champ requis.',
             ],
             ['dateI' => 'required'],
             [
                 'dateI.required' => 'Champ requis.',
             ],
             ['solution' => 'required'],
             [
                 'solution.required' => 'Champ requis.',
             ],
             ['lieu' => 'required'],
             [
                 'lieu.required' => 'Champ requis.',
             ],
             ['detail' => 'required'],
             [
                 'detail.required' => 'Champ requis.',
             ]
         );
        $intervention = new Intervention();
        $intervention->code = "Intervention N°00".$this->plannification;
        $intervention->lieu = $this->lieu;
        $intervention->date = $this->dateI;
        $intervention->details = $this->detail;
        $intervention->solution = $this->solution;
        $intervention->reference = "N°00".$this->plannification;
        $intervention->plannings_id = $this->plannification;
        $intervention->plannings_users_id = Auth::user()->id;
        $intervention->type_id = $this->type;
        //Toutes les pannes de la plannification
        for ($i=0; $i < count($this->planings->pannes); $i++) { 
            //Les pannes cochées
            for ($j=0; $j < count($this->pannes); $j++) { 
                if ($i == $j) {
                    $inter = DB::table('pannes_plannings')
                    ->join('plannings', 'pannes_plannings.planning_id', '=', 'plannings.id')
                    ->join('pannes', 'pannes_plannings.panne_id', '=', 'pannes.id')
                    ->where('pannes.id', '=', $this->pannes[$j])
                    ->select('pannes_plannings.id')
                    ->get();
                    foreach($inter as $value){
                        $mespannes = pannes_plannings::find($value->id);
                        $mespannes->estTraiter = true;
                        $mespannes->save();
                    }
                }
            }
        }
        $intervention->save();        
        
    }
    public function view(){
        $this->interventions = Intervention::all();
        $this->liste = true;
    }
    public function edit(){
        
    }
    public function detail($id){
        $this->liste = false;
        $this->nouveau =false;
        $this->details = true;
        $this->info = Intervention::find($id);
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
