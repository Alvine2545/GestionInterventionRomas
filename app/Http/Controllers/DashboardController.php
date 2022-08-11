<?php

namespace App\Http\Controllers;

use App\Models\Installation;
use App\Models\Intervention;
use App\Models\Panne;
use App\Models\Produit;
use App\Models\Rapport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $users = count(User::all());
        $clients = count(DB::table('users')->join('roles_users', 'roles_users.user_id', '=', 'users.id')->join('roles', 'roles.id', '=', 'roles_users.roles_id')->where('roles.nom', 'Client')->get());
        $techniciens = count(DB::table('users')->join('roles_users', 'roles_users.user_id', '=', 'users.id')->join('roles', 'roles.id', '=', 'roles_users.roles_id')->where('roles.nom', 'Technicien')->get());
        $pannes = count(Panne::all());
        $produits = count(Produit::all());
        $interventions = count(Intervention::all());
        $installations = count(Installation::all());
        $rapports = count(Rapport::all());
        return view('dashboard', compact('users', 'clients', 'techniciens', 'pannes', 'produits', 'interventions', 'installations', 'rapports'));
    }
}
