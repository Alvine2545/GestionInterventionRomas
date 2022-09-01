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
            if (Auth::user()->roles[0]->id == 3) {
                return redirect('admin/dashboard');
            }
            if(Auth::user()->roles[0]->id == 2){
                return redirect('admin/dashboard');
            }
            if(Auth::user()->roles[0]->id == 1){
                
            $client_id= Auth::user()->id;
            $lesproduits = DB::table('produits')->take(4)->get();
            $produits = DB::table('Produitinstalles')->join('Produits', 'Produitinstalles.produit_id', '=', 'Produits.id')->join('Users', 'Produitinstalles.user_id', '=', 'Users.id')->where('Users.id',$client_id)->select('Produitinstalles.*', 'Produits.nom')->get();
            $con = DB::table('pannes_plannings')->join('plannings', 'pannes_plannings.planning_id', '=', 'plannings.id')->join('pannes', 'pannes_plannings.panne_id', '=', 'pannes.id')->where('pannes.user_id', Auth::user()->id)->where('pannes_plannings.estTraiter', true)->select('pannes.*', 'plannings.*')->get();
            return view('homeClient',compact('produits', 'con', 'lesproduits'));
            }
        }
        
       //$users = DB::table('users')->select('name', 'email as user_email')->get();
        
    }
    public function controle(){
        if (Auth::user()->roles[0]->id == 3) {
            return redirect('admin/dashboard');
        }
        if(Auth::user()->roles[0]->id == 2){
            return redirect('admin/dashboard');
        }
        if(Auth::user()->roles[0]->id == 1){
            return redirect('client');
        }
        
    }
}
