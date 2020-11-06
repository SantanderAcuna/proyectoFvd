@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center p-1">
        <div class="col-md-12 mt-2">
            @include('include.msg')
            <div class="card-body">
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Crear Producto
                    </a>
                </p>

                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <form action="{{ route('producto.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Operador">
                            </div>

                            <button type="submit" class="btn btn-primary">Crear</button>

                        </form>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-md-12">
            <div class="card-body border-gray">
                <div class="table-responsive-sm">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text text-center">Id</th>
                                <th class="text text-center">Nombre</th>

                                <th class="text text-center">Accion </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($producto as $item)
                            <tr class="text text-center">
                                <td class="text text-center" width="70px">{{$item->id}}</td>
                                <td class="text text-center" width="70px">{{$item->nombre}}</td>

                                <td class="text text-center" width="30px">
                                    <div class="row text text-center">
                                        <form action="{{route('producto.destroy', $item->id)}}" method="post" class="text text-center ml-5">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            <a href="{{ route('producto.edit', $item->id)}}" class="btn btn-warning btn-sm ml-3 text text-center">
                                                Editar

                                            </a>

                                        </form>


                                    </div>
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
@endsection
@section('js')

<script src="{{ asset('js/validacion.js') }}" defer></script>

@endsection