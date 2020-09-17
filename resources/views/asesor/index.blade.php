@extends('layouts.app')
@section('content')
<div class="card-body">

    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Mis ventas</li>
    </ol>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-center">
                <tr>
                    
                    <th>Imsi</th>
                    <th>Iccid</th>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Revenue</th>
                    <th>Tipo</th>
                    <th>Operador</th>
                    <th>Producto</th>
                    <th>Fecha</th>
                </tr>
            </thead>

            <tbody class="text-center">
                @foreach($venta as $item)
                <tr>
                    
                    <td>{{$item->numero}}</td>
                    <td>{{$item->iccid}}</td>
                    <td>{{$item->documento}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>{{$item->revenue}}</td>
                    <td>{{$item->tipo}}</td>
                    <td>{{$item->operador}}</td>
                    <td>{{$item->producto}}</td>
                    <td>{{$item->reated_at}}</td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection