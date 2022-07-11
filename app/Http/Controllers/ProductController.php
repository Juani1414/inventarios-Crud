<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){
        $product = Products::create(request(['name','expiration_date','price']));
        return redirect()->to('/products');
    }
}
