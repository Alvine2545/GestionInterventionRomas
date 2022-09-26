<?php

namespace App\Http\Livewire;

use App\Models\Intervention;
use App\Models\Panne;
use App\Models\pannes_plannings;
use App\Models\Planning;
use App\Models\TypeIntervention;
use App\Models\User;
use PDF;
//use Barryvdh\DomPDF\Facade as PDF ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\LifecycleManager;

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
    public $nouveau = true;
    public $info;
    public $panne;
    public $client;
    public $d;
    public $a;
    public function render()
    {
        
        $this->plannifications = Planning::all();
        $this->typeIntervention = TypeIntervention::all();
        $this->planings = Planning::find($this->plannification);
        return view('livewire.interventions-component')->layout('livewire.base');
    }
    public function click($data){
        $this->d = $data;
        $this->a = Planning::find($data);
        
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
        $intervention->appreciation = "";
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
        $this->nouveau = false;
        $this->interventions = Intervention::all();
        $this->liste = true;
    }
    public function convert(){
        // $this->nouveau = false;
        // $interventions = $this->interventions = Intervention::all();
        // $this->liste = true;
        // $pdf_view = PDF::loadView('livewire.vvv');
        // return $pdf_view->download('myPDF.pdf');
        // $pdf_view = PDF::loadView('livewire.vvv')->output();
        // return reponse()->streamDownload(
        //     fn()=>print($pdf_view),
        //     'my.pdf'
        // );
    //    $order = Intervention::all();
    //    $view = view('livewire.vvv')->with(compact('order'));
    //    $html = $view->render();
    //    $pdf = PDF::loadHTML($html)->save(public_path().'/oo.pdf');
    //    $this->redirect('/oo.pdf'); 
    $pdfComponent = clone $this;
    $pdfComponent->isPdf = true;

    $manager = LifecycleManager::fromInitialInstance($pdfComponent)->renderToView();

    $pdfComponent->ensureViewHasValidLivewireLayout($pdfComponent->preRenderedView);

    $layout = $pdfComponent->preRenderedView->livewireLayout;

    $html = app('view')->file(base_path('vendor/livewire/livewire/src') . "/Macros/livewire-view-{$layout['vvv']}.blade.php", [
        'view' => $layout['view'],
        'params' => $layout['params'],
        'slotOrSection' => $layout['slotOrSection'],
        'manager' => $manager,
    ])->render();

    $pdf = Browsershot::html($html)
        ->noSandbox()
        ->waitUntilNetworkIdle()
        ->pdf();

    $headers = [
        'Content-type' => 'application/pdf',
        'Content-Disposition' => 'attachment',
    ];

    $this->skipRender();

    return response()->streamDownload(fn () => print($pdf), 'export.pdf', $headers);

    }
    public function edit(){
        
    }
    public function detail($id){
        $this->liste = false;
        $this->nouveau =false;
        $this->details = true;
        $this->info = Intervention::find($id);
        $this->panne = DB::table('pannes_plannings')->join('pannes', 'pannes_plannings.panne_id', '=', 'pannes.id')->join('plannings', 'pannes_plannings.planning_id', '=', 'plannings.id')->where('plannings.id', '=', $this->info->planning->id)->select('pannes.id')->get();
        $this->client = Panne::find($this->panne[0]->id);
        //dd($this->client->user->name);
    }
    public function exporte(){
        //$pdf = new PDF()
        $pdf = PDF::loadView('livewire.interventionDetail', $this->info);
        return $pdf->download('admin.interventions.pdf');
    }
    public function update(){
        $this->nouveau = false;
    }
    public function destroy(){
        
    }
    public function new(){
        $this->nouveau = true;
        $this->liste = false;
        $this->details = false;
    }
}
