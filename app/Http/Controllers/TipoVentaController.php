<?php

namespace App\Http\Controllers;

use App\TipoVenta;
use Illuminate\Http\Request;

class TipoVentaController extends Controller
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
        $tipo = $this->listarTipo();
        return view('tipo.index', compact('tipo'));
    }

    public function listarTipo()
    {
        $tipo = TipoVenta::orderBy('id', 'DESC')->get();

        return $tipo;
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
        $tipo = new TipoVenta();

        $tipo->nombre = $request->nombre;

        $tipo->save();

        return redirect('tipo')->with('info', 'Tipo de venta creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoVenta  $tipoVenta
     * @return \Illuminate\Http\Response
     */
    public function show(TipoVenta $tipoVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoVenta  $tipoVenta
     * @return \Illuminate\Http\Response
     * 
     * no encueno 
     */
    public function edit($id)
    {
        $tipo = TipoVenta::findOrFail($id);

        return view('tipo.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoVenta  $tipoVenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo = TipoVenta::findOrFail($id);

        $tipo->nombre = $request->tipo;

        $tipo->save();

       return redirect('tipo')->with('info', 'Tipo de venta editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoVenta  $tipoVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = TipoVenta::findOrFail($id);

        $tipo->delete();

        return back()->with('error', 'Tipo de venta eliminado exitosamente');
    }
}
