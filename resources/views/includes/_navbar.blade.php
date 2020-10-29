
<nav id="navbar" class="navbar navbar-expand-lg fixed-top border-bottom-main">
 <img class="mr-3" width="70" height="70" src="/media/agenzia.png" alt="agenzia">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <i class="fas fa-users fa-2x"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="hover mr-3" class="nav-link active" href="{{route('home')}}">Home</a>
      <a class="hover mr-3" class="nav-link" href="{{route('locations.create')}}">Scegli la meta</a>
      <a class="hover mr-3" class="nav-link" href="{{route('locations.index')}}">Prenotazioni</a>
      <a class="navbar-nav ml-auto hover ml-3" class="nav-link active" href="">Chi siamo</a>
    </div>
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
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest    
                    </ul>
  </div>
</nav>
                   