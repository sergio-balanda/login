<nav>
    <div class="nav-wrapper indigo grey lighten-4">
      <a href="{{ url('/') }}" class="brand-logo red-text text-lighten-1">Login</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons red-text text-lighten-1">menu</i></a>
      
      <ul class="right hide-on-med-and-down">
      <!-- Dropdown Trigger -->
      <a class='dropdown-button btn red lighten-1' href='#' data-activates='dropdown1'>Acceso</a>
      <!-- Dropdown Structure -->
      <ul id='dropdown1' class='dropdown-content'>
        <!-- Authentication Links -->
        @if (Auth::guest())
        <li>
            <a href="{{ route('login') }}" class="red-text text-lighten-2">
                Iniciar 
            </a>
        </li>
        <li>
            <a href="{{ route('register') }}" class="red-text text-lighten-2">
                Registrar
            </a>
        </li>
        @else
        <li><a href="#">
            <center>
                <i class="material-icons red-text text-lighten-1">account_circle</i>
            </center>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#" class="red-text text-lighten-1">
                {{ Auth::user()->name }}
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" class="red-text text-lighten-1">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        @endif
      </ul>
      </ul>
    
        <!-- Side Links -->
        <ul class="side-nav" id="mobile-demo">
            <!-- Authentication Links -->
            @if (Auth::guest())
            <li><a href="{{ route('login') }}" class="red-text text-lighten-2">Iniciar</a></li>
            <li><a href="{{ route('register') }}" class="red-text text-lighten-2">Registrar</a></li>
            @else
            <li><a href="#">
                <center>
                    <i class="material-icons red-text text-lighten-1">account_circle</i>
                </center>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#" class="red-text text-lighten-1">
                    {{ Auth::user()->name }}
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" class="red-text text-lighten-1">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            @endif            
        </ul>
    </div>
</nav>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
<script>
     $(".button-collapse").sideNav();
     $(".dropdown-button").dropdown();
</script>