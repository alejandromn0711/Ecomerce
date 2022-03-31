<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index()
    {
        $productos = Producto::paginate();

        return view('productos.index', compact('productos'));
    }
        public function celulares(){
        return view('productos.celulares');
    }
    public function computadores()
    {
        return view('productos.computadores');
    }
    public function electrodomesticos()
    {
        return view('productos.electrodomesticos');
    }
}
