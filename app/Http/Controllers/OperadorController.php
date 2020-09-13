<?php

namespace App\Http\Controllers;

use App\Operador;
use Illuminate\Http\Request;

class OperadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth', 'roles']);
    }


    public function index()
    {
        $operador = $this->listarOperadr();

        return view('operador.index', compact('operador'));
    }



    public function listarOperadr()
    {
        $operador = Operador::orderBy('id', 'desc')->get();

        return $operador;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operador =new Operador();
        $operador->nombre = $request->nombre;
        $operador->save();
        return back()->with('info', 'Operador creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function show(Operador $operador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operador = Operador::findOrFail($id);

        return view('operador.edit', compact('operador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $operador = Operador::findOrFail($id);
        $operador->nombre = $request->nombre;
        $operador->save();

        return redirect('operador')->with('info', 'Operador editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operador = Operador::findOrFail($id);

        $operador->delete();

        return back()->with('error', 'Operador eliminado');
    }
}
