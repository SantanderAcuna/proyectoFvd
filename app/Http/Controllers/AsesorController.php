<?php

namespace App\Http\Controllers;


use App\Reporte;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Exports\ReporteExport;
use FilenameFilter;
use Maatwebsite\Excel\Facades\Excel;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
    }

    public function ventasDia()
    {

        $venta = Reporte::whereDay('created_at', date('d'))
        ->join('revenues', 'revenues.id', '=', 'reportes.revenue_id')
        ->rightJoin('tipo_ventas', 'tipo_ventas.id', '=', 'reportes.tipo_venta_id')
        ->leftJoin('operadors', 'operadors.id', '=', 'reportes.operador_id')
        ->Join('productos', 'productos.id', '=', 'reportes.producto_id')
        ->select(
            'reportes.id',
            'reportes.nombre',
            'reportes.telefono',
            'reportes.documento',
            'reportes.numero',
            'reportes.iccid',
            'users.name as usuario',
            'reportes.created_at',
            'productos.nombre as producto',
            'operadors.nombre as operador',
            'revenues.valor as revenue',
            'tipo_ventas.nombre as tipo'
        ) ->get();

        return view('reporte.venta-dia', compact('venta'));
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
    }

   


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
