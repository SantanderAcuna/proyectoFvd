@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mb-1">
        <div class="container-fluid mt-3">
            <div class="card mb-4 col-12">
                @include('include.msg')
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Editar usuarios
                </div>
                <div class="card-body">


                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" value="{{$usuario->name}} {{$usuario->apellidos}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="nombre" value="{{$usuario->email}}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="nombre" value="{{$usuario->telefono}}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Rol</label>
                            <input type="text" class="form-control" id="rol" name="rol" value="{{$usuario->rol}}">
                        </div>


                        <div class="modal-footer">
                            <a href="{{ route('listar.usaurios')}}" class="btn btn-warning btn-sm text-center">
                                Atras

                            </a>

                            <button type="submit" class="btn btn-success btn-sm text-center">Enviar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection