<header>
    <h1>Sis-Museo</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active':''}}">Home</a>

            </li>
            <li><a href="{{route('area.index')}}"  class="{{request()->routeIs('area.*') ? 'active':''}}">Areas</a>

            </li>
            <li><a href="{{route('nosotros')}}"  class="{{request()->routeIs('nosotros') ? 'active':''}}">Nosotros</a>

            </li>
        </ul>
    </nav>
</header>
