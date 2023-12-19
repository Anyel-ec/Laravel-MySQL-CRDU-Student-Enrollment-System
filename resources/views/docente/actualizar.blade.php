@extends('layout.base')
@section('titulo', 'Actualizar Docente')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Actualizar Docente
            </h1>
            <hr>

            <form action="{{ route('docente.update', $docente->id) }}" method="POST">
                @csrf
                {{-- @method('PUT') <!-- Asegúrate de incluir el método PUT en el formulario --> --}}
                
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $docente->nombre }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $docente->apellido }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular" value="{{ $docente->celular }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="cedula" class="form-label">Cédula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $docente->cedula }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" value="{{ $docente->correo }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
