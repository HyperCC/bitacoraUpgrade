<nav class="navbar navbar-light">

    <a class="navbar-brand" href="{{ route('home') }}">
        {{ config('app.name') }}
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}"> Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users-index') }}"> Usuarios  </a>
        </li>
    </ul>

</nav>
