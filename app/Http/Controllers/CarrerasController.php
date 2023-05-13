<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carreras;

class CarrerasController extends Controller

{
    

    public function index(Request $request)
    {
        $cantidad = $request->input('cantidad', 1); // Obtener la cantidad de carreras que el usuario desea ver (5 por defecto)
        $usuarios = Carreras::orderBy('id')->limit($cantidad)->get();
         // Obtener las carreras ordenadas por ID y limitar la cantidad
        return view('carreras', compact('usuarios', 'cantidad'));
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $carrera = new Carreras($request->input());
        $carrera->saveOrFail();
        return redirect('carreras');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carreras = Carreras::all();
        $carrera=Carreras::find($id);
        return view('editCarrera',compact('carrera'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $carrera=Carreras::find($id);
        $carrera->fill($request->input())->saveOrFail();
        return redirect('carreras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrera = Carreras::find($id);
        $carrera->delete();
        return redirect('carreras');
    }


}
