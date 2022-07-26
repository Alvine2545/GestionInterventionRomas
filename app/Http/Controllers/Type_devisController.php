<?php

namespace App\Http\Controllers;

use App\Models\TypeDevis;
use Illuminate\Http\Request;

class Type_devisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $typedevis =TypeDevis::all();
        return view('typedevis/index_typedevis', compact('typedevis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('typedevis/create_typedevis');

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
        $typedevis = new TypeDevis();
        $typedevis->nom = $request->nom;
        $typedevis->save();
        //$task = Task::create($request->all());
        return redirect('admin/typedevis/liste')->with('success', 'Create Successfully');
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
        $typedevis = TypeDevis::find($id);
        return view('typedevis.update', compact('typedevis'));
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
        $typedevis = TypeDevis::find($id);
        return view('typedevis.update', compact('typedevis'));
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
        $typedevis = TypeDevis::find($id);
        $typedevis->update([
            "nom"=>$request->nom
        ]);
        return redirect(route("admin/typedevis/liste"));
        //return redirect('typedevis')->with('success', 'Create Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Destruction
        TypeDevis::destroy($id);
        return redirect('admin/typedevis/liste')->with('success', 'Delete Successfully');

    }
}
