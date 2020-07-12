@extends('helpers.template')

@section('title_head', 'Usuarios')

@section('content_body')

    <div class="container">
        <h1> Todos los Usuarios registrados</h1>

        <ul class="list-group">
            @forelse($user as $us)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a href="{{route('users-show', $us)}}" class="d-flex text-secondary">
                        <div class="font-weight-bold">
                            <i>{{$us->name}}</i>
                        </div>
                        #
                        <div class="font-weight-bold">
                            {{$us->email}}
                        </div>
                        #
                        <div class="text-black-50">
                            {{$us->rol}}
                        </div>
                    </a>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3">
                    Database Empty - Error.
                </li>
            @endforelse

        </ul>
    </div>

@endsection




