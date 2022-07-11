<?php

namespace App\Http\Controllers;

use App\Models\Asigneds;
use App\Models\Clientes;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        if(auth()->check()){
            $clientes = Clientes::all();
            return view('home.index',compact('clientes'));
        }        
        return redirect('/');
    }
    public function products(){
        if(auth()->check()){
            $products = Products::all();
            return view('home.products',compact('products'));
        }
        return redirect('/');
    }
    
    public function asign(){
        if(auth()->check()){
            $asign = Asigneds::all();
            $clientes = Clientes::all();
            $products = Products::whereNull('client_asigned')->get();
            $all_p = Products::all();
            return view('home.asign',compact('asign','clientes','products','all_p'));
        }
        return redirect('/');
    }
}
