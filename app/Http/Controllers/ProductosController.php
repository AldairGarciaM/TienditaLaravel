<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\productos;

class ProductosController extends Controller
{

    public function index () {
        $product=productos::all();
        return view('index', compact('product'));
    }

    //Categorias

    public function videojuegos () {
        $product=productos::where("Categoria", "=", "Videojuegos")-> get();
        return view('index', compact('product'));
    }

    public function electronica () {
        $product=productos::where("Categoria", "=", "Electronica")-> get();
        return view('index', compact('product'));
    }

    public function tecnologia () {
        $product=productos::where("Categoria", "=", "Tecnologia")-> get();
        return view('index', compact('product'));
    }

    public function hogar () {
        $product=productos::where("Categoria", "=", "Hogar")-> get();
        return view('index', compact('product'));
    }

    public function mascotas () {
        $product=productos::where("Categoria", "=", "Mascotas")-> get();
        return view('index', compact('product'));
    }

    //Subcategorias

    public function entretenimiento () {
        $product=productos::where("Subcategoria", "=", "Entretenimiento")-> get();
        return view('index', compact('product'));
    }

    public function familiar () {
        $product=productos::where("Subcategoria", "=", "Familiar")-> get();
        return view('index', compact('product'));
    }

    public function computacion () {
        $product=productos::where("Subcategoria", "=", "Computacion")-> get();
        return view('index', compact('product'));
    }

    public function salud () {
        $product=productos::where("Subcategoria", "=", "Salud")-> get();
        return view('index', compact('product'));
    }

    public function telefonia () {
        $product=productos::where("Subcategoria", "=", "Telefonia")-> get();
        return view('index', compact('product'));
    }

    public function paseo () {
        $product=productos::where("Subcategoria", "=", "Paseo")-> get();
        return view('index', compact('product'));
    }

    //Precios
    public function precio1 () {
        $product=productos::where("Precio", "<", 500)-> get();
        return view('index', compact('product'));
    }

    public function precio2 () {
        $product=productos::where("Precio", ">", 500)-> where("Precio", "<", 2500)->get();
        return view('index', compact('product'));
    }

    public function precio3 () {
        $product=productos::where("Precio", ">", 2500)-> where("Precio", "<", 7500)->get();
        return view('index', compact('product'));
    }

    public function precio4 () {
        $product=productos::where("Precio", ">", 7500)-> where("Precio", "<", 12500)->get();
        return view('index', compact('product'));
    }

    public function precio5 () {
        $product=productos::where("Precio", ">", 12500)-> where("Precio", "<", 22000)->get();
        return view('index', compact('product'));
    }
}