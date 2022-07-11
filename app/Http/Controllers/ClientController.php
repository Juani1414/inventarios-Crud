<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function index(Request $request){
        $client = Clientes::create(request(['name','lastname','email','phone','age','address']));
        return redirect()->to('/home');
    }
    public function edit(Clientes $cliente){
        return view('edit.client',compact('cliente'));
    }
}
