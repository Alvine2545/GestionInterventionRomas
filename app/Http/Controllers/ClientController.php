<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Roles;
use App\Models\User;
use App\Models\Utilisateur;

class ClientController extends Controller
{
    public function home()
    {
        dd('You are active');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Récupération des éléments de la table
        //$clients = User::where();
        $users = User::all();
        $clients = Client::all();
        return view('client/index_clients', compact('clients'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Insertion dans la table
      
        return view('client.create_clients');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Enregistrement dans la base
        $users = new User();
        $users_role = new Roles();
        $users_role->nom = $request->role;
        $users_role->save();
        if($request->role = 'client')
        {
            $users->nom = $request->nom;
            $users->email = $request->email;
            $users->adresse = $request->siege;
            $users->tel = $request->tel;
            $users->raisonSocial = $request->raisonsociale;
            $users->username = $request->username;
            $users->mdp = $request->password;
        }
        if($request->role = 'responsable')
        {
            $users->nom = $request->nom;
            $users->prenom = $request->prenom;
            $users->email = $request->email;
            $users->tel = $request->tel;
            $users->username = $request->username;
            $users->mdp = $request->password;
        }
        if($request->role = 'technicien')
        {
            $users->nom = $request->nom;
            $users->prenom = $request->prenom;
            $users->email = $request->email;
            $users->adresse = $request->siege;
            $users->tel = $request->tel;
            $users->disponibilite = $request->disponibilite;
            $users->poste = $request->poste;
            $users->username = $request->username;
            $users->mdp = $request->password;
        }
        $users->save();
        //$users->roles()->attach($users_role->id);
        return view('Client.index_clients');
        //return redirect('/')->with('success', 'Create Successfully');
        //return view('store_clients', compact('clients'));
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
        $client = Client::find($id);
        return view('client.update', compact('client'));
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
        $client = Client::find($id);
        return view('client.update', compact('client'));
      
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
        $client = Client::find($id);
        $client->update($request->all());
        
        //$task = Task::create($request->all());
        return redirect('client')->with('success', 'Create Successfully');
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
        Client::find($id)->truncate();
        return redirect('/')->with('success', 'Delete Successfully');
        

    }
}
