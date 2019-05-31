@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Users</div>

                <div class="card-body"> 
                    <div>Bienvenido al Sice de Universidad Alejandro de Humboldt</div>
                    <!-- @if(Auth::user()->hasRole('Admin'))
                        <div>Acceso como Administrador</div>
                    @else
                        <div>Acceso como Usuario</div>
                    @endif -->
                   
                </div>
                <div class="card-footer text-muted text-center">Has iniciado sesión!</div>
            </div>
        </div>
    </div>
</div>
@endsection
