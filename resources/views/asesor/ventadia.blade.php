@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center p-1">
        <div class="col-md-12 mt-2">
            @include('include.msg')
            <div class="card-body">
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Ventas de hoy
                    </a>
                </p>
            </div>

        </div>
        <div class="col-md-12">
            <div class="card-body border-gray">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                          
                                <th>Imsi</th>
                                <th>Iccid</th>
                                <th>Documento</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
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
@endsection
@section('js')

<script src="{{ asset('js/validacion.js') }}" defer></script>

@endsection