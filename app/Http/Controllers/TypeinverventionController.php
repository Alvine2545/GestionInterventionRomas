<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



use App\Models\TypeIntervention;

class TypeinverventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $types = TypeIntervention::all();

        return view('type_intervention.index_typeintervention', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('type_intervention.create_typeintervention');
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
        ]);
    
        $type_inter = TypeIntervention::create($validatedData);
    
        return redirect('admin/typeintervention/liste')->with('Super', 'Votre type intervention créer avec succès');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_inter = TypeIntervention::find($id);
        //dd( $type_inter );

    return view('type_intervention.edit_typeintervention', compact('type_inter'));
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
        $type_inter = TypeIntervention::find($id);
       // $type_inter = TypeIntervention::find($id);
       //$type_inter->update();
       $validatedData = $request->validate([
            'nom' => 'required|max:255',
        ]);
    
        TypeIntervention::whereId($id)->update($validatedData);
        //$type_inter->update($request->all());*/
    
        return redirect('admin/typeintervention/liste')->with('Super', 'Type intervention mise à jour avec succès');
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
        $type_inter = TypeIntervention::find($id);
        $type_inter->truncate();
    
        return redirect('admin/typeintervention/liste')->with('Super', 'Type intervention supprimer avec succès');
    }
}
