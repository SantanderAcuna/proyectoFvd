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
                                    <th>Email</th>
                                    <th>Rol </th>
                                    <th>Accion </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($user as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->rol}}</td>
                                    <td class="row">
                                        <div class="col-12">
                                        <form style="display: inline;" action="{{route('user.delete', $item->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>

                                        <a href="{{ route('user.edit',$item->id)}}" class="btn btn-warning btn-sm text-right my-2">
                                            Editar

                                        </a>
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
</div>

@endsection