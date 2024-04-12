<header>
    <h1>Veterinaria Tomy</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? "active" : ""}}">Home</a></li>
                @dump(request()->routeIs('home'))
            <li><a href="{{route('personas.index')}}"  class="{{request()->routeIs('personas.*') ? "active" : ""}}">Personas</a></li>
                @dump(request()->routeIs('personas.index'))
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? "active" : ""}}">Nosotros</a></li>
                @dump(request()->routeIs('nosotros'))
        </ul>
    </nav>
</header>