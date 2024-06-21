<?php

namespace App\Http\Controllers;


use App\Models\Cursodb;
use Illuminate\Http\Request;

class CursodbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $course = Cursodb::all();
       // return $course;
       return view('cursodbs.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursodbs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // return $request-> all();//
       $course = new Cursodb();
       $course -> nombre = $request -> input('nombre');
       $course -> descripcion = $request -> input('descripcion');
       $course -> save ();
       return 'Guardado Exitoso';
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
