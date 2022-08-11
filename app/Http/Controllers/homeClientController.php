<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class homeClientController extends Controller
{
    public function index()
    {
        $con = false;
        //
        if (Auth::check() == false) {
            $lesproduits = DB::table('produits')->take(4)->get();
            $produits = [];
            return view('homeClient',compact('produits', 'con', 'lesproduits'));
        } else {
            $client_id= Auth::user()->id;
            $lesproduits = DB::table('produits')->take(4)->get();
            $produits = DB::table('Produitinstalles')->join('Produits', 'Produitinstalles.produit_id', '=', 'Produits.id')->join('Installations', 'Produitinstalles.installation_id', '=', 'Installations.id')->where('Installations.user_id',2)->select('Produitinstalles.*', 'Produits.nom')->get();
            
            return view('homeClient',compact('produits', 'con', 'lesproduits'));
        }
        
       //$users = DB::table('users')->select('name', 'email as user_email')->get();
        
    }
}
