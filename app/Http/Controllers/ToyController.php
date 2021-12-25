<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

use App\Http\Requests\StoreToy;

class ToyController extends Controller
{

    public function index()
    {
        $toys = Toy::all();
        return view('toys.toyIndex', compact('toys'));
    }

    public function create()
    {
        return view('toys.toyCreate');
    }

    public function store(StoreToy $request )
    {
        Toy::create( $request->all() );
        return redirect()->route('toys.index')->with('info', 'Juguete creado!');
    }

    public function show(Toy $toy)
    {
        //
    }

    public function edit(Toy $toy)
    {
        //
    }

    public function update(Request $request, Toy $toy)
    {
        //
    }

    public function destroy(Toy $toy)
    {
        //
    }
}
