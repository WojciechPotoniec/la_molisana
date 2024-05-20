<header class="container">
    <nav class="d-flex justify-content-center align-items-center py-3">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo" />
        <ul class="d-flex">
            @foreach ($links as $link)
                <li>
                    <a class="{{Route::currentRouteName() == 'home' ? 'active' : ''}}"
                        href="{{route('home')}}">{{$link}}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>