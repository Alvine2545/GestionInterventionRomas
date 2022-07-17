<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Devis;

class DevisController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function index()
    {
        //
        $devis = Devis::all();

        return view('devis.index', compact('devis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     
    public function create()
    {
        //
    
        $client_id= Auth::user()->id;
        /*$book = DB::table('Produitinstalle')->join('Installation', 'Produitinstalle.installation_id', '=', 'Installation.id')->join('Installation', 'Produitinstalle.installation_id', '=', 'Installation.id')->first();
dd($book);

        /*$pinstall = Produitinstalle::where('')->where('client_id',$client_id);
        $install= Installation::where('client_id',$client_id)->get();
        $produits = Produit::where('')
        //$produits = Produit::where('Produits.id', 'Produitinstalle.produit_id')->where('Installation.id', 'Produitinstalle.installation_id')->where('Installation.client_id', 'Client.id')->where('Client.id', $client_id)->get();

        $produits = DB::table('Produitinstalles')->join('Produits', 'Produitinstalles.produits_id', '=', 'Produits.id')->join('Installations', 'Produitinstalles.installations_id', '=', 'Installations.id')->where('Installations.client_id',$client_id)->select('Produitinstalles.*', 'Produits.nom')->get();
        //$users = DB::table('users')->select('name', 'email as user_email')->get();
        return view('devis.create',compact('produits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     
    public function store(Request $request)
    {
        //
        $client_id= Auth::user()->id;
        $validatedData = $request->validate([
            'prix' => 'required|max:255',
            'payer' => 'required',
            'client' => 'required',
            'type_devis' => 'required',
            'intervention' => 'required',
        ]);
        $undevi = new Devis();
        $undevi->prix= $request->description;
        $undevi->payer= $request->payer;
        $undevi->client= $client_id;
        $undevi->type_devis= $request->type_devis;
        $undevi->intervention= $request->intervention;
        $undevi->save();
        /*$pane = Panne::create([
            'description' =>$request->description,
            'produitinstalles_id'=>$request->produit,
            'client_id' => $request->client,
        ]); 
        //$pane = Panne::create($validatedData);
    
        return redirect('devis/liste')->with('Super', 'Votre panne créer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        $pane = Panne::find($id);
        /*$produits = DB::table('Produitinstalles')->join('Produits', 'Produitinstalles.produits_id', '=', 'Produits.id')->join('Installations', 'Produitinstalles.installations_id', '=', 'Installations.id')->where('Installations.client_id',$client_id)->select('Produitinstalles.*', 'Produits.nom')->get();
        $produits = Produit::where(id)
    return view('pannes.update', compact('pane'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function update(Request $request, $id)
    {
        //
        $pane = Panne::find($id);
      
       $validatedData = $request->validate([
            'description' => 'required|max:255',
            
        ]);
    
          Panne::whereId($id)->update($validatedData);
        
    
        return redirect('pannes/liste')->with('Super', 'Panne mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function destroy($id)
    {
        //
        $pane = Panne::find($id);
        $pane->delete();
    
        return redirect('pannes/liste')->with('Super', 'Panne supprimer avec succès');
    }*/
}
