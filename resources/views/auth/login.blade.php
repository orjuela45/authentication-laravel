@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <div class="form-group row">
                        <a href="{{ route('login.microsoft') }}" class="btn btn-info m-2">Iniciar sesión con Microsoft</a>
                        <a href="{{ route('login.google') }}" class="btn btn-danger m-2">Iniciar sesión con Microsoft</a>
                        <a href="{{ route('login.orcid') }}" class="btn btn-success m-2">Iniciar sesión con Microsoft</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
