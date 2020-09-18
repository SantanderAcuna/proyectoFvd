@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mb-1">
        <div class="container-fluid mt-3">
            <div class="card mb-4 col-12">
                @include('include.msg')
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Agregar simcar para migracion
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-8">
                            <form style="flex: inline;" action="{{ route('migracion.store')}}" method="POST">
                                @csrf
                                {{ method_field('POST') }}
                                <div class="form-group">
                                    <input type="text" name="imsi" id="imsi" class="form-control text-center" required placeholder="Numero">
                                </div>
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col">



                    <table class="table">
                        <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Iccid</th>
                                <th>Contenido</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($migracion as $item)
                            <tr>

                                <td>{{$item->id}}</td>
                                <td>{{$item->iccid}}</td>
                                <td>{{$item->contenido}}</td>
                                <td>{{$item->valor}}</td>
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