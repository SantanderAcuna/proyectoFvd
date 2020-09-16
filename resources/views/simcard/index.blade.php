@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mb-1">
        <div class="container-fluid mt-3">

            <div class="card mb-3">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Subir inventario</li>
                            </ol>
                            @include('include.validacion')

                            <form action="{{route('importar.simcard')}}" id="form" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="file" id="file" class="form-control-file">
                                </div>
                                <button type="submit" class="btn btn-primary">Importar</button>

                            </form>

                        </div>

                      

                    </div>



                </div>

                @include('include.msg')
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Inventario Chip disponible
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Numero</th>
                                    <th>iccid</th>
                                    <th>Contenido</th>
                                    <th>Valor</th>
                                    <th>Fecha </th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($chip as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->iccid}}</td>
                                    <td>{{$item->contenido}}</td>
                                    <td>{{$item->valor}}</td>
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

@endsection
@section('js')

<script src="{{ asset('js/file.js') }}" defer></script>

@endsection