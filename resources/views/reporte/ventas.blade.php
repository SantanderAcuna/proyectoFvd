@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mb-1">
        <div class="container-fluid mt-3">
            <div class="card mb-4">
                <div class="card-footer">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3">
                                <i class="fas fa-table mr-1 "></i>
                                Reporte de ventas
                            </div>

                            <!--     <div class="col-6 ml-2 mr-5">
                                <form action="" method="get">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" name="inicio" id="inicio">
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" name="fin" id="fin">
                                        </div>

                                    </div>

                                </form>
                            </div> -->

                            <div class="col-2">
                                <a href="{{route('export')}}" class="btn btn-success btn-sm">Exportar Ventas</a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>Asesor</th>
                                    <th>Numero</th>
                                    <th>Iccid</th>
                                    <th>Revenue</th>
                                    <th>Tipo</th>
                                    <th>Operador</th>
                                    <th>Producto</th>
                                    <th>Fecha</th>
                                    <th>Accion</th>

                                </tr>
                            </thead>

                            <tbody class="text-center">
                                @foreach($reporte as $item)
                                <tr>

                                    <td>{{$item->usuario}}</td>
                                    <td>{{$item->numero}}</td>
                                    <td>{{$item->iccid}}</td>
                                    <td>{{$item->revenue}}</td>
                                    <td>{{$item->tipo}}</td>
                                    <td>{{$item->operador}}</td>
                                    <td>{{$item->producto}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td class="row">


                                        <form style="display: inline;" action="{{route('reporte.destroy', $item->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                        <a href="{{route('reporte.edit', $item->id)}}" class="btn btn-warning btn-sm text-right ml-1">Editar</a>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection