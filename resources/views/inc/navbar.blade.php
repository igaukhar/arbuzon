<nav class="container navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item" href="{{ route('fruits') }}">Fruites and berries</a>
                    <a class="dropdown-item" href="{{ route('milk') }}">Milk products, eggs</a>
                    <a class="dropdown-item" href="{{ route('vegetables') }}">Vegetables</a>
                    <a class="dropdown-item" href="{{ route('concervi') }}">Concervi</a>
                    <a class="dropdown-item" href="{{ route('souce') }}">Souce, Ketchup, Mionez</a>
                    <a class="dropdown-item" href="{{ route('coffe') }}">Coffe, Cacao, Dry milk</a>
                    <a class="dropdown-item" href="{{ route('pasta') }}">Pasta, Lapsha, Macaroni</a>
                    <a class="dropdown-item" href="{{ route('meats') }}">Meats</a>
                    <a class="dropdown-item" href="{{ route('orehi') }}">Orehi, suhofrukti, semechki</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Healthy Foods</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item" href="#">Healthy juices</a>
                    <a class="dropdown-item" href="#">Sweets</a>
                    <a class="dropdown-item" href="#">Hlebci, Snakes, Celnozernovoe chips</a>
                    <a class="dropdown-item" href="#">Superfoods</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Juices</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item" href="#">Juices, nectars, compot</a>
                    <a class="dropdown-item" href="#">Kisel</a>
                    <a class="dropdown-item" href="#">Water</a>
                    <a class="dropdown-item" href="#">For health</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">For children</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item" href="#">Foods</a>
                    <a class="dropdown-item" href="#">Toys</a>
                    <a class="dropdown-item" href="#">Pampers, gigiena</a>
                    <a class="dropdown-item" href="#">For health</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Care</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item" href="#">Shampoo, Balzam, Masks for hair</a>
                    <a class="dropdown-item" href="#">For women</a>
                    <a class="dropdown-item" href="#">Care body</a>
                    <a class="dropdown-item" href="#">For skin</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zoo</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item" href="#">Corm, vitamines</a>
                    <a class="dropdown-item" href="#">Gigiena</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">News</a>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
