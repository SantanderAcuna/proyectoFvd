<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestConsulta;
use App\Imports\SimcardImport;
use App\Operador;
use App\Producto;
use App\Reporte;
use App\Revenue;
use App\Simcard;
use App\TipoVenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\Console\Input\Input;

class SimcardController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

        // solo quiero saber si funciona
    }


    public function index()
    {
        $chip = Simcard::orderBy('created_at', 'desc')->get();

        return view('simcard.index', compact('chip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function importarSimcard(Request $request)
    {
        $request->validate([
            'file' => 'required'
        ]);

        $file = $request->file('file')->getRealPath();
        //$path=storage_path('app').'/'.$file;  

        Excel::import(new SimcardImport, $file);
        //Excel::import(new SimcardImport, request()->file('Inventario1.xlsx'));
        //(new SimcardImport)->import($file, null, \Maatwebsite\Excel\Excel::XLSX);

        return back()->with('info', 'Inventario almacenado correctamente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestConsulta $request)
    {
        $simcard = Simcard::where('id', '=', $request->id)->count() > 0;
        if ($simcard == '' || $simcard != $request->id) {

            return redirect('home')->with('error', 'El numero no existe el inventario de CM');
        }


        if (Simcard::where('id', '=', $request->id)->count() > 0) {

            if (Reporte::where('numero', '=', $request->id)->first()) {

                return redirect('home')->with('error', 'El numero ya fue ingresado, intente con otro');
            }

            $sim = Simcard::findOrFail($request->id);
            $operador = (new OperadorController)->listarOperadr();
            $producto = (new ProductoController)->listarProducto();
            $revenue = (new RevenueController)->listarRevenue();
            $tipo = (new TipoVentaController)->listarTipo();

            return view('reporte.index', compact('sim', 'operador', 'producto', 'revenue', 'tipo'));
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Simcard  $simcard
     * @return \Illuminate\Http\Response
     */
    public function show(Simcard $simcard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Simcard  $simcard
     * @return \Illuminate\Http\Response
     */
    public function edit(Simcard $simcard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Simcard  $simcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Simcard $simcard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Simcard  $simcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Simcard $simcard)
    {
        //
    }
}
