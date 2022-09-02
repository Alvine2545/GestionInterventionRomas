<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Roles;
use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $users = DB::table('users')
                ->where('votes', '=', 100)
                ->where('age', '>', 35)
                ->get();
        $users = User::all();
        $clients = Client::all();
        return view('client/index_clients', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Insertion dans la table
        $roles = Roles::all();
        return view('Client.create_clients', compact('roles'));
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
        if($request->role = 'Client')
        {
            $users->name = $request->name;
            $users->email = $request->email;
            $users->siege = $request->siege;
            $users->tel = $request->phone;
            $users->raisonSocial = $request->raisonsociale;
            //$users->username = $request->username;
           // $users->mdp = $request->password;
            $users->password = $request->identifiant;
            $users->ifu = $request->identifiant;
        }
        if($request->role = 'Responsable')
        {
            $users->nom = $request->nom;
            $users->prenom = $request->prenom;
            $users->email = $request->email;
            $users->tel = $request->tel;
            $users->username = $request->username;
            $users->mdp = $request->password;
        }
        if($request->role = 'Technicien')
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
        $users->roles()->attach($users_role->id);
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
        $client = User::find($id);
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
        $client = User::find($id);
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
        User::find($id)->delete();
        return redirect('/')->with('success', 'Delete Successfully');


    }
    public function verifyclient(Request $request)
    {
        $user = User::where('ifu', '=', $request->identifiant)->get();
        if(collect(['user'])->isNotEmpty())
        {
            if ($user[0]->status == true) {
                $leuser = User::find($user[0]->id);
                $leuser->demande = 1;
                $leuser->password = Hash::make($request->password);
                $leuser->save();
                Alert::success('Félicitation', 'Votre compte a été dejà activé. Vous pouvez à présent vous connectez.');
            } else {
                
                $leuser = User::find($user[0]->id);
                $leuser->demande = 1;
                $leuser->password = Hash::make($request->password);
                $leuser->save();
                Alert::success('Félicitation', 'La demande d\'activation de votre compte a été envoyé avec succés');
            }
            
            return view('homeClient');
        }else{
            Alert::warning('Attention', 'Il semblerait que vous n\'avez de compte. Rapprochez-vous de nos locaux ou contactez-nous pour plus d\'informations');
            return redirect('client');
        }
    }
    public function connexion(Request $request)
    {
        $users = User::all();
        foreach($users as $user)
        {
            if($user->ifu = $request->identifiant && Hash::check($request->password, $user->password))
            {
                $con = true;
                return view('homeClient', compact('con'));
            }
        }
        Alert::info('Information', 'Votre compte rencontre un problème ou n\'a pas encore été activé. Veuillez nous contacter pour plus d\'informations.');
        return redirect('client');

    }
}
