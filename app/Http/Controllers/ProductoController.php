<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::paginate(10);
        return view('productos.productoIndex', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.productoCreate', compact('categorias'));
    }

    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->descripcion = $request->descripcion;
        $producto->id_categoria = $request->id_categoria;
        $producto->save();

        return redirect()->route('productos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
