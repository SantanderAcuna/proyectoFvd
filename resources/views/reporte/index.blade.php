@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card mt-4">

                <div class="card-header text-center text-white bg-primary">{{ __('Reporte de ventas') }}</div>
                @include('include.validacion')
                @include('include.msg')
                <div class="card-body ">
                    <form method="POST" id="form" action="{{ route('reporte.store')}}" onsubmit="return true">
                        @csrf


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="numero">Numero</label>

                                <input type="text" class="form-control " id="chip" name="chip" readonly value="{{ $sim->id}}">

                            </div>
                            <div class="form-group col-md-4">
                                <label for="iccid">Iccid</label>
                                <input type="text" class="form-control" id="iccid" name="iccid" readonly value="{{ $sim->iccid}}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="valor">Valor simcard</label>
                                <input type="text" class="form-control" id="valor" name="valor" readonly value="{{$sim->valor}}">
                            </div>
                        </div>
                        <div class="card-header text-center mt-3 text-center text-white bg-primary">{{ __('Datos del cliente') }}</div>
                        <div class="form-row">

                            <div class="form-group col-md-3 mt-3">
                                <label for="cedula">Cedula</label>
                                <input type="text" class="form-control" autofocus id="cedula" autofocus name="cedula" placeholder="Numero de cedula" value="{{old('cedula')}}">
                            </div>
                            <div class="form-group col-md-3 mt-3">
                                <label for="nombre">Nombre completo</label>
                                <input type="text" class="form-control" autofocus id="nombre" autofocus name="nombre" placeholder="Nombres y apellidos" value="{{old('nombre')}}">
                            </div>

                            <div class="form-group col-md-3 mt-3">
                                <label for="telefono">Numero de celular</label>
                                <input type="text" class="form-control" autofocus id="telefono" autofocus name="telefono" placeholder="Numero valido" value="{{old('cedula')}}">
                            </div>

                            <div class="form-group col-md-3 mt-3">
                                <label for="operador">Operador</label>
                                <select name="operador" required autofocus id="operador" class="form-control">
                                    <option class="form-control" id="operador" value="0">Seleccionar </option>
                                    @foreach($operador as $item)
                                    <option value="{{$item->id}}" class="form-control">{{$item->nombre}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="card-header text-center mt-3 text-center text-white bg-primary">{{ __('Informar venta') }}</div>
                        <div class="form-row">

                            <div class="form-group col-md-4 mt-3">
                                <label for="tipoventa">Tipo de venta</label>
                                <select name="tipoventa" id="tipoventa" autofocus class="form-control">
                                    <option value="0">Seleccionar</option>
                                    @foreach($tipo as $item)
                                    <option value="{{$item->id}}" class="form-control">{{$item->nombre}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group col-md-4 mt-3">
                                <label for="producto">Producto vendido</label>
                                <select name="producto" id="producto" autofocus class="form-control">
                                    <option value="0">Seleccionar</option>
                                    @foreach($producto as $item)
                                    <option value="{{$item->id}}" class="form-control">{{$item->nombre}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group col-md-4 mt-3">
                                <label for="revenue">Revenue vendido</label>
                                <select name="revenue" id="revenue" autofocus class="form-control">
                                    <option value="0">Seleccionar</option>
                                    @foreach($revenue as $item)
                                    <option value="{{$item->id}}" class="form-control">{{$item->valor}}</option>
                                    @endforeach
                                </select>

                            </div>


                        </div>


                        <div class="form-group row mb-1">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="btn" class="btn btn-primary btn-xs">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('js')

<script src="{{ asset('js/validacion.js') }}" defer></script>

@endsection