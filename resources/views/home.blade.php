@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="rounded border border-success pt-5 pr-5 pl-5 pb-5" style="font-size: 20px; text-align: center">
                        <h1>Éxito</h1>
                        <span>Usuario autenticado: {{ Auth::user()->name}}</span><br>
                        <span>Correo: {{ Auth::user()->email}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
