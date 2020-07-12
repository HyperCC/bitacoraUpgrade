<nav class="navbar navbar-light">

    <a class="navbar-brand" href="{{ route('home') }}">
        {{ config('app.name') }}
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users-index') }}">about </a>
        </li>
    </ul>

</nav>
