<Header>
    <div class="container d-flex justify-content-center ">
        <div class="navbar">
            <ul class="d-flex">
                <li class="px-4 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="px-4 {{ Route::currentRouteName() === 'about' ? 'active' : '' }}">
                    <a href="{{ route('about') }}">Chi Siamo</a>
                </li>
                <li class="px-4 {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">
                    <a href="{{ route('movies') }}">Movies</a>
                </li>
            </ul>
        </div>
    </div>

</Header>
