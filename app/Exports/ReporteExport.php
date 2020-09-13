<?php

namespace App\Exports;

use App\Reporte;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

class ReporteExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('reporte.informe', [
            'reporte' => Reporte::join('users', 'users.id', '=', 'reportes.user_id')
            ->join('revenues', 'revenues.id', '=', 'reportes.revenue_id')
            ->leftJoin('tipo_ventas', 'tipo_ventas.id', '=', 'reportes.tipo_venta_id')
            ->leftJoin('operadors', 'operadors.id', '=', 'reportes.operador_id')
            ->Join('productos', 'productos.id', '=', 'reportes.producto_id')
            ->select('reportes.id','reportes.nombre','reportes.telefono','reportes.documento', 'reportes.numero','reportes.iccid', 'users.name as usuario', 'reportes.created_at', 'productos.nombre as producto', 'operadors.nombre as operador', 'revenues.valor as revenue', 'tipo_ventas.nombre as tipo')
            ->get()
        ]);
    }
}

