@extends('layouts.app')
@section('content')

    <div class="container">
        <!-- Aqui se mostrará la agenda -->
        <div id="agenda"></div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="$4$" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Datos del evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="" id="formularioEventos">
                        <!-- Llave(identificador) que permitira trabajar con todos los datos que lleguen solo de este formulario -->
                        {!! csrf_field() !!}

                    <!-- con d-none oculto campos <div class="form-group d-none"> -->
                        <div class="form-group d-none">
                            <label for="id">ID:</label>
                            <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="id">
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Titulo del evento">
                            <small id="helpId" class="form-text text-muted">Escribe el titulo de la actividad</small>
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción del evento</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>

                        <!-- Fecha inicio -->
                        <!-- con d-none oculto campos <div class="form-group d-none"> -->
                        <div class="form-group">
                            <label for="start">Fecha inicio</label>
                            <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="start">
                            <small id="helpId" class="form-text text-muted">Selecciona en el calendario la fecha</small>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>

                    @if(auth()->check() and auth()->user()->tipo_usuario==='admin')
                    <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                    @endif

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>

@endsection
