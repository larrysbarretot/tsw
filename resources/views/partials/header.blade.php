<!--Header-->
<header id="header-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-3">
        <h1><a href="{{url('/')}}"><img class="imagen3" width="350px" height="100px" max-width="100%" src="{{url('CelularesPeru/imagenes/2.png')}}"></a></h1>
      </div>
      <div class="col-xs-6 col-sm-9 text-xs-right" id="textf">
        <button class="navbar-toggler  hidden-sm-up" data-toggle="collapse" data-target="#navMenu">&#9776;</button>
        @if (Auth::guest())
        <a href="{{ url('/register') }}" class="text-uppercase color-f hidden-xs-down font-weigth-bold estilof"><img src="{{url('CelularesPeru/imagenes/mregistrar.png')}}"> Registrar</a>
        <a class="login hidden-xs-down text-uppercase font-weigth-bold estilof " href="{{ url('/login') }}"><img src="{{url('CelularesPeru/imagenes/login.png')}}"> Iniciar Sesión</a>
        @else
        <a href="#" class="login text-uppercase font-weigth-bold" id="displayf">
          {{ Auth::user()->name }}
        </a>
        <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <img src="{{url('CelularesPeru/imagenes/salirmenuf.png')}}" id="imagf">
          Salir
        </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
        @endif
      </div>
    </div>
  </div>
</header>
<!--Menu-->