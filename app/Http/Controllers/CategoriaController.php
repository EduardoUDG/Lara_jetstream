<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;


class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::paginate(10);
        return view('categorias.categoriaIndex', compact('categorias'));
    }


    public function create()
    {
        return view('categorias.categoriaCreate');
    }


    public function store(Request $request)
    {
        $categoria = new Categoria();

        $categoria->descripcion = $request->descripcion;
        $categoria->save();

        return redirect()->route('categorias.index');
    }


    public function show(Categoria $categoria)
    {
        return view('categorias.categoriaShow', compact('categoria'));
    }


    public function edit(Categoria $categoria)
    {
        return view('categorias.categoriaEdit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return redirect()->route('categorias.index');
    }


    public function destroy(Categoria $categoria)
    {

        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
