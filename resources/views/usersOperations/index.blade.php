@extends('helpers.template')

@section('title_head', 'Usuarios')

@section('content_body')

    <div class="container">
        <h1>Index Users</h1>

        <ul class="list-group">
            @forelse($user as $us)
                <li class="list-group-item">
                    <a href="{{route('users-show', $us)}}" class="d-flex text-secondary">
                        <span class="font-weight-bold">
                            {{$us->email}}
                        </span>
                        <span class="text-black-50">
                            {{$us->rol}}
                        </span>
                    </a>
                </li>
            @empty
                <li class="list-group-item">
                    Database Empty - Error.
                </li>
            @endforelse

        </ul>
    </div>

@endsection




