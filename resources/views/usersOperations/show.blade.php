@extends('helpers.template')

@section('title_head', 'Usuario | $user->name')

@section('content_body')

    <div class="container">

        <a href="{{ route('users-index') }}">Regresar</a>

        <h2> {{ $user->name }} | {{ $user->email }}</h2>

        <p class="lead text-secondary">
            {{ $user->rut}}
        </p>

        <p class="lead text-secondary">
            {{ $user->carrera}}
        </p>

        <p class="lead text-secondary">
            {{ $user->rol}}
        </p>

        <p class="lead text-secondary">
            {{ $user->rol_secundario}}
        </p>

        <p class="lead text-secondary">
            {{ $user->estado}}
        </p>

        <p class="text-black-50">
            <small> {{$user->created_at->diffForHumans() }}</small>
        </p>

        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a class="btn btn-primary" href="{{ route('users-edit', $user) }}"> Editar </a>

                <a class="btn btn-danger" href="{{ route('users-destroy', $user) }}"> Eliminar </a>
            </div>
        </div>

    </div>

@endsection
