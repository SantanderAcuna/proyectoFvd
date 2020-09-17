<?php

namespace App\Http\Controllers;

use App\Imports\SimcardImport;
use App\Reporte;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
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


    public function asesordia()
    {
        $fecha = Carbon::parse(now());
        $fecha->day;

        $venta = Reporte::whereDay('created_at', '=', $fecha)
          
            ->get();

        return view('asesor.ventadia', compact('venta'));
    }



    public function importarSimcard(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new SimcardImport, $file);

        return back()->with('info', 'Inventario almacenado correctamente');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new SimcardImport, $file);

        return back()->with('info', 'Inventario almacenado correctamente');
    }


    public function misVentas()
    {
        $date = Carbon::now();

        $venta = Reporte::where('user_id', '=', auth()->user()->id)
            ->join('users', 'users.id', '=', 'reportes.user_id')
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

        return view('asesor.index', compact('venta'));
    }
}
