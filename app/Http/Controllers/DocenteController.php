<?php

namespace App\Http\Controllers;

use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docencito = docente::all();
        return view('Docentes.index',compact('docencito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docencito = docente::all();
        return view('Docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Con el metodo all() veo toda la información
        //return $request ->all();

        //Obtuvimos el dato del lo que usuario envia por el input cuyo name es ('name')
        //return $request->input('dsc');
        //Creamos una nueva instacia o reflejo del modelo
        $docencito = new docente();
        ///esto me permitira manipular la tabla
        $docencito-> name = $request->input('name');
        $docencito-> lastname = $request->input('lastname');
        $docencito-> title = $request->input('title');
        $docencito-> cursoA = $request->input('cursoA');



        if ($request->hasfile('img')){
            $docencito-> img = $request->file('img')->store('public');
        }

        $docencito-> save();
        return 'Wow, lograste guardar';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docencito = docente::find($id);
        return view('Docentes.show', compact('docencito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docencito = docente::find($id);
        return view('Docentes.edit', compact('docencito'));
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
        $docencito = docente::find($id);
        $docencito->fill($request->except('img'));
        if ($request->hasfile('img')){
            $docencito-> img = $request->file('img')->store('public');
        }
        $docencito->save();
        return 'Actualizado con éxito';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
