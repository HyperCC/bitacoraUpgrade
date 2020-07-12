@extends('helpers.template')

@section('title_head', 'Usuario | $user->name')

@section('content_body')

    <div class="container">
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

    </div>

@endsection
