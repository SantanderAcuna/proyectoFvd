<?php

namespace App\Http\Controllers;

use App\Imports\SimcardImport;
use App\Reporte;
use App\Simcard;
use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // solo quiero saber si funciona
    }

    public function misVentas()
    {
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
            )->get();

        return view('asesor.index', compact('venta'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function mostrar()
    {
        $user = User::all();

        return view('usuario.index', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return back()->with('info', 'Usuario eliminado');
    }



    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        return view('usuario.edit', compact('usuario'));
    }



    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->rol = $request->rol;

        $usuario->save();

        return redirect('usuario')->with('info', 'Usuario actualizado correctamente');
    }
}
