@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="home" class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Admin</div>

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


@section('productos')
<div class="container">
    <div class="row justify-content-center">
        <div id="Productos" class="col-md-8 text-center">
            <h1>Productos</h1>
            <p><button type="button" class="btn btn-success" id="btn-create-producto">Nuevo Producto</button></p><br>
            <table id="tableProductos" class="table table-hover"  cellspacing="0" width="100%">
                <thead class="table-primary"> 
                    <tr>
                        <th>Nombre</th>
                        <th>Stock</th>
                        <th>Precios</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($productos as $producto)
                    <tr>
                         
                        <td>{{ $producto->name }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>{{ $producto->precios }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" onclick="showModal('{{ $producto->id }}','{{ $producto->name }}','{{ $producto->stock }}','{{ $producto->precios }}',1)">Editar</button>
                            <button type="button" class="btn btn-danger" onclick="showModal('{{ $producto->id }}','{{ $producto->name }}','{{ $producto->stock }}','{{ $producto->precios }}',2)">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('modal')
<!-- Modal -->
<div class="modal fade" id="modalProductos" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title mx-auto">Información del Producto</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="home/action" id="formProductos">
                <div class="modal-body">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="producto-name" name="producto-name"  required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Stock:</label>
                        <input type="number" class="form-control" id="producto-stock" name="producto-stock" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Precios:</label>
                        <input type="number" class="form-control" id="producto-precios" name="producto-precios" required>
                        <input type="hidden" id="producto-id" name="producto-id">
                        <input type="hidden" id="producto-status" name="producto-status">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="guardar" form="formProductos" class="btn btn-primary" value="Guardar Producto"/>
                    <button type="button" id="eliminar" class="btn btn-danger">Eliminar Producto</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
