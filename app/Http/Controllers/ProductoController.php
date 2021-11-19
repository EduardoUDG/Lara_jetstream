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

    public function show(Producto $producto)
    {
        return view('productos.productoShow', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.productoEdit', compact('producto', 'categorias'));
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->descripcion = $request->descripcion;
        $producto->id_categoria = $request->id_categoria;
        $producto->save();

        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
