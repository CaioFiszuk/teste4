<nav class="navbar lightGreen">
    <div class="container">
        <a class="navbar-brand h1 title darkBlue" href="{{ url('/') }}"> <i class="fa-solid fa-pencil"></i>
            {{ config('app.name') }}
        </a>

            <ul class="nav nav-pills">
 
                @isset(auth()->user()->admin)
                  @if(auth()->user()->admin)
                   <li class="nav-item"><a href="{{route('stock')}}" class="nav-link darkBlue">Estoque</a></li>
                  @endif
                @endisset

                @isset(auth()->user()->admin)
                  <li class="nav-item mx-4"><a href="{{route('cart.index')}}" class="badge bg-primary rounded-pill"><i class="fa-solid fa-cart-shopping"></i></a></li>
                @endisset
                      
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link darkBlue" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link darkBlue" href="{{ route('register') }}">{{ __('Criar conta') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        
                    </li>
                @endguest
            </ul>      
    </div>
</nav>