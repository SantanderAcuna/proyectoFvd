@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mb-1">
        <div class="container-fluid mt-3">
            <div class="card mb-4 col-12">
                @include('include.msg')
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Editar Operador
                </div>
                <div class="card-body">


                    <form action="{{ route('revenue.update', $revenue->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                           
                            <input type="text" class="form-control" id="valor" name="valor" aria-describedby="nombre" value="{{$revenue->valor}}">
                        </div>
                       
                        <div class="modal-footer">
                            <a href="{{ route('revenue.index')}}" class="btn btn-warning btn-sm text-center">
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