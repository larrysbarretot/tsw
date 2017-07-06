<div id="menu-container">
  <nav id="navMenu" class="navbar-toggleable-xs navbar navbar-light collapse">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-lg-9" id="div-nav">
          <ul class="nav navbar-nav" id="nav-f" >
            <li class="nav-item text-xs-center">
              <a href="{{url('/')}}" class="nav-link"><span class="icon-home-outline"></span> Home</a>
            </li>
            <li class="nav-item text-xs-center">
              <a href="{{url('/catalogo')}}" class="nav-link"><span class="icon-news"></span> Catalogo</a>
            </li>
            <li class="nav-item text-xs-center">
              <a href="{{url('/carrito')}}" class="nav-link"><span class="icon-shopping-cart"></span> Carrito <span>{{$productsCount}}</span></a>
            </li>
            <li class="nav-item text-xs-center">
              <a href="{{url('/nosotros')}}" class="nav-link active"><span class="icon-group"></span> Nosotros</a>
            </li>
            <li class="nav-item text-xs-center">
              <a href="{{url('/contacto')}}" class="nav-link"><span class="icon-location"></span> Contacto</a>
            </li>
            @if (Auth::guest())
            <li class="nav-item text-xs-center hidden-sm-up">
              <a href="{{ url('/register') }}" class="nav-link"><span class="icon-input-checked"></span> Registrar</a>
            </li>
            <li class="nav-item text-xs-center hidden-sm-up">
              <a href="{{url('/login')}}" class="nav-link"><span class="icon-power"></span> Entrar</a>
            </li>
            @else
            <li class="nav-item text-xs-center hidden-sm-up">
              <a class="nav-link" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img src="{{url('CelularesPeru/imagenes/salida.png')}}">
                Salir
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
            @endif
          </ul>
        </div>
        <div class="col-xs-12 col-lg-3 hidden-xs-down" id="div-nav2">
          <form>
            <div class="input-group">
              <input  type="text" class="form-control" placeholder="¿Que esta buscando?"></input>
              <span class="input-group-btn">
                <button class="btn btn-celperu" type="button">
                  <span class="hidden-sm-down">Buscar</span>
                  <i class="fa fa-search hidden-md-up"></i>
                </button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <div id="search-bar" class="container hidden-sm-up">
    <div class="row">
      <div class="col-xs">
        <form>
          <div class="input-group">
            <input  type="text" class="form-control" placeholder="¿Que esta buscando?"></input>
            <span class="input-group-btn">
              <button class="btn btn-celperu" type="button">
                <span class="hidden-sm-down">Buscar</span>
                <i class="fa fa-search hidden-md-up"></i>
              </button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/Menu-->