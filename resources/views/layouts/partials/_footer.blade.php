<footer>

    @if(! Route::is('about'))
        <p>&copy; Copyright 2021 JPV &middot;  &circlearrowleft; <a href="{{ route('about') }}">à propos de moi</a> </p>
    @endif
    </footer>
