<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Creamos un array para poder manipular información de la tabla cursos
        a su vez el array actuara como un objeto.*/
        $courseto = Curso::all();
        return view('cursos.index',compact('courseto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
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
        $courseto = new Curso();
        ///esto me permitira manipular la tabla
        $courseto-> name = $request->input('name');
        $courseto-> dsc = $request->input('dsc');

        if ($request->hasfile('img')){
            $courseto-> img = $request->file('img')->store('public');
        }

        $courseto-> save();
        return 'Wow, lograste guardar';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courseto = Curso::find($id);
        return view('cursos.show', compact('courseto'));
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
        //
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
