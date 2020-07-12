@extends('helpers.template')

@section('title_head', 'Usuario | $user->name')

@section('content_body')

    <div class="container">

        <div class="jumbotron">
            <h1 class="display-4">Bitacora UCN</h1>
            <p class="lead">Bitácora Web para el seguimiento y control de los trabajos de titulación del DISC</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">

                <h1 class="display-4 text-primary">Bitacora UCN </h1>
                <p class="lead text-secondary">
                    Bitácora Web para el seguimiento y control de los trabajos de titulación del DISC
                </p>

                @auth
                    <h4> Hola {{ auth()->user()->name }} / {{ auth()->user()->email }}</h4>
                @endauth

            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid my-4" src="img/bookmarks.svg" alt="actividades bitacora ucn">
            </div>
        </div>
    </div>

@endsection
