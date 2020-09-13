@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                @include('include.validacion')

                <div class="card-header text-center text-white bg-primary mt3">{{ __('Consultar simcard') }}</div>

                <div class="card-body col-md-12">
                    <form method="POST" id="form" action="{{ route('simcard.store') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control text-center" autofocus  id="input" name="id" value="{{old('id')}}">
                            </div>

                        </div>

                        @include('include.msg')

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="btn" class="btn btn-primary btn-xs">
                                    {{ __('Consultar') }}
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
</div>
@endsection
