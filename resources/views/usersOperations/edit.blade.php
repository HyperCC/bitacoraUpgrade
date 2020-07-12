@extends('helpers.template')

@section('title_head', 'Editar Usuarios')

@section('content_body')

    <div class="container">
        <div class="row">
            <div class="col-12">

                @include('helpers.validate_errors')

                <form class="bg-white py-3 px 3 shadow rounded" method="POST" action="{{ route('users-update', $user) }}">
                    @csrf
                    @method('PATCH')
                    <h2 class="display-4">Editar un Usuario</h2>
                    <hr>

                    <div class="form-group">
                        <label for="name"> Nombre </label>
                        <input class="form-control shadow-sm" name="name" type="text" value="{{ old('name', $user->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="email"> Correo </label>
                        <input class="form-control shadow-sm" name="email" type="email" value="{{ old('email', $user->email) }}">
                    </div>

                    <div class="form-group">
                        <label for="rut"> Rut </label>
                        <input class="form-control shadow-sm" name="rut" type="text" value="{{ old('rut', $user->rut) }}">
                    </div>

                    <div class="form-group">
                        <label for="carrera"> Carrera </label>
                        <input class="form-control shadow-sm" name="carrera" type="text" value="{{ old('carrera', $user->carrera) }}">
                    </div>

                    <div class="form-group">
                        <label for="rol"> Rol </label>
                        <select class="form-control shadow-sm" name="rol" >
                            <option>Estudiante</option>
                            <option>Profesor</option>
                            <option>Secretaria</option>
                            <option>Encargado Titulación</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password"> Contraseña </label>
                        <input class="form-control shadow-sm" name="password" type="password" value="{{ old('password', $user->password) }}">
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit"> Guardar </button>
                    <a class="btn btn-link btn-block" href="{{ route('users-index') }}"> Cancelar </a>

                </form>
            </div>
        </div>


    </div>

@endsection
