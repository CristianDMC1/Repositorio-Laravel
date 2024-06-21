<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Producto::all();
        // return $course;
        return view('productos.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request-> all();//
        $course = new Producto();
        $course -> nombre = $request -> input('nombre');
        $course -> marca = $request -> input('marca');
        $course -> descripcion = $request -> input('descripcion');
        $course -> precio = $request -> input('precio');
        $course -> cantidad = $request -> input('cantidad');
        $course -> save ();
        return redirect()->route('productos.create')->with('success', 'Guardado Exitoso');
     }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
