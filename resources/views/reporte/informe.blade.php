<div class="container-fluid">
    <div class="row justify-content-center mb-1">
        <div class="container-fluid mt-3">
            <div class="card mb-4">
                <div class="card-footer">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-10">
                                <i class="fas fa-table mr-1 "></i>
                                Reporte de ventas
                            </div>


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
                                    <th>Imsi</th>
                                    <th>Iccid</th>
                                    <th>Asesor</th>
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
                                @foreach($reporte as $item)
                                <tr>
                                    <td>{{$item->numero}}</td>
                                    <td>{{$item->iccid}}</td>
                                    <td>{{$item->usuario}}</td>
                                    <td>{{$item->documento}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td>{{$item->revenue}}</td>
                                    <td>{{$item->tipo}}</td>
                                    <td>{{$item->operador}}</td>
                                    <td>{{$item->producto}}</td>
                                    <td>{{$item->created_at}}</td>


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