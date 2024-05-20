<header class="container">
    <nav class="d-flex justify-content-center align-items-center py-3">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo" />
        <ul class="d-flex">
            <li>
                @foreach ($links as $link)
                    <a class="{{Route::currentRouteName() == 'home' ? 'active' : ''}}"
                        href="{{route('home')}}">{{$link}}</a>
                @endforeach
            </li>
        </ul>
    </nav>
</header>