@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mb-1">
        <div class="container-fluid mt-3">
            <div class="card mb-4">
                @include('include.msg')
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Usuarios registrados
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Cedula</th>
                                    <th>Direccion</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Rol </th>
                                    <th>Accion </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($user as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->apellidos}}</td>
                                    <td>{{$item->cedula}}</td>
                                    <td>{{$item->direccion}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td>{{$item->rol}}</td>
                                    <td class="row">
                                        <form action="{{route('user.delete', $item->id)}}" method="post" class="ml-3">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>

                                        <a href="{{ route('user.edit',$item->id)}}" class="btn btn-warning btn-sm text-center ml-1">
                                            Editar

                                        </a>

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