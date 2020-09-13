@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mb-1">
        <div class="container-fluid mt-3">
            <div class="card mb-4 col-12">
                @include('include.msg')
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Editar Producto
                </div>
                <div class="card-body">


                    <form action="{{ route('producto.update', $producto->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                           
                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" value="{{$producto->nombre}}">
                        </div>
                       
                        <div class="modal-footer">
                            <a href="{{ route('producto.index')}}" class="btn btn-warning btn-sm text-center">
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