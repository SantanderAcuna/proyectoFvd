<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestReporte;
use App\Http\Requests\ValidarReporte;
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


    public function export()
    {
        return Excel::download(new ReporteExport, 'reporte.xlsx');
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
        if (Reporte::where('numero', '=', $request->chip)->first()) {

            return redirect('home')->with('error', 'El numero ya fue ingresado por un asesor');
        }

        $reporte = new Reporte();
        $reporte->user_id = Auth()->user()->id;
        $reporte->documento = $request->cedula;
        $reporte->nombre = $request->nombre;
        $reporte->telefono = $request->telefono;
        $reporte->numero = $request->chip;
        $reporte->iccid = $request->iccid;
        $reporte->valor = $request->valor;
        $reporte->operador_id = $request->operador;
        $reporte->tipo_venta_id = $request->tipoventa;
        $reporte->producto_id = $request->producto;
        $reporte->revenue_id = $request->revenue;

        $reporte->save();

        return redirect('home')->with('info', 'venta registrada con exito');
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

    public function ventasExports()
    {
        $reporte = Reporte::join('users', 'users.id', '=', 'reportes.user_id')
            ->join('revenues', 'revenues.id', '=', 'reportes.revenue_id')
            ->leftJoin('tipo_ventas', 'tipo_ventas.id', '=', 'reportes.tipo_venta_id')
            ->leftJoin('operadors', 'operadors.id', '=', 'reportes.operador_id')
            ->Join('productos', 'productos.id', '=', 'reportes.producto_id')
            ->select('reportes.id', 'users.name as usuario', 'productos.nombre', 'operadors.nombre as operador', 'revenues.valor as revenue', 'tipo_ventas.nombre as tipo')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('reporte.ventas', compact('reporte'));
    }

    public function ventas()
    {
        // $reporte = Reporte::all();
        $reporte = Reporte::join('users', 'users.id', '=', 'reportes.user_id')
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
            )
            ->orderBy('created_at', 'DESC')
            ->get();


        return view('reporte.ventas', compact('reporte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reporte = Reporte::findOrFail($id);

        return view('reporte.edit', compact('reporte'));
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
        $reporte = Reporte::findOrFail($id);

        $reporte->user_id = Auth()->user()->id;
        $reporte->documento = $request->cedula;
        $reporte->nombre = $request->nombre;
        $reporte->telefono = $request->telefono;
        $reporte->numero = $request->chip;
        $reporte->iccid = $request->iccid;
        $reporte->valor = $request->valor;
        $reporte->operador_id = $request->operador;
        $reporte->tipo_venta_id = $request->tipoventa;
        $reporte->producto_id = $request->producto;
        $reporte->revenue_id = $request->revenue;

        $reporte->save();

        return redirect('reporte')->with('info', 'Reporte actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rep = Reporte::findOrFail($id);

        $rep->delete();

        return back()->with('error', 'Venta eliminada exitosamente');
    }
}
