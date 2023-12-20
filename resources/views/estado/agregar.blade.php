@extends('layout.base')
@section('titulo', 'Agregar Matrícula')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <h1 class="mt-5">
                Agregar Estado de Matricula
            </h1>
            <hr>
            <form action="{{ route('estado.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                
                <div class="mb-3">
                    <label for="matricula_id" class="form-label">Matricula</label>
                    <select class="form-select" id="matricula_id" name="matricula_id" required>
                        <option value="" disabled selected>Selecciona una materia</option>
                        @foreach($matriculas as $matricula)
                            <option value="{{ $matricula->id }}">{{ $matricula->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
