<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\Produit;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Liste des produits
        $produits = Produit::all();

        return view('produits.index_produit', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retourne la vue de création
        return view('produits.create_produit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'type' => 'required|max:255',
            'photo' => 'required',
        ]);
        $produit = New Produit();
        $produit->nom = $request->nom;
        $produit->type = $request->type;
        $path = $request->photo->store('Produits', 'public');
        $produit->photo = $path;
        $produit->save();
    
        return redirect('admin/produit/liste')->with('Super', 'Produit créer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $produit = Produit::find($id);
        return view('produits.update', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $produit = Produit::find($id);
        return view('produits/update', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //$type_inter = Produit::find($id);
       // $type_inter = TypeIntervention::find($id);
       //$type_inter->update();
      /* $validatedData = $request->validate([
            'nom' => 'required|max:255',
        ]);
        
        Produit::whereId($id)->update($validatedData);*/
        $client = Produit::find($id);
        $client->update($request->all());
    
        return redirect('admin/produit/liste')->with('Super', 'Produit mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        /*$type_inter = Produit::find($id);
        $type_inter->truncate();*/
        Produit::destroy($id);
    
        return redirect('admin/produit/liste')->with('Super', 'Produit supprimer avec succès');
    }
}
