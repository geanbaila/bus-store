<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list() {
        $prg_producto = null;
        $data = ['prg_producto' => $prg_producto];
        return view('product/list', $data);
    }
}
