<?php

namespace App\Http\Controllers;

use App\Models\Asigneds;
use App\Models\Clientes;
use App\Models\Products;
use Illuminate\Http\Request;

class AsignController extends Controller
{
    //

    public function index(Request $request){
        $id = $request->get('product');
        $id_client = $request->get('client');
        $product = Products::findOrFail($id);
        $product->client_asigned = $id_client;
        $product->update();
        $asign = Asigneds::create(request(['product','client']));
        return redirect()->to('/asign');
    }
}
