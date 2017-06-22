@extends('layouts.master')

@section('content')
<style >
  .text-center{
    font-family: 'Fredoka One', cursive;
  }
</style>
<!--Carousel-->
<div id="carousel-container">
  <div id="productosCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#productosCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#productosCarousel" data-slide-to="1"></li>
      <li data-target="#productosCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="CelularesPeru/imagenes/10.png" alt="Primer producto" width="80%" height="300px">
        <div class="carousel-caption">
          <h3>Bienvenido a Peruvian Nexus</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="CelularesPeru/imagenes/6.jpg" alt="Segundo producto" width="80%" height="300px">
        <div class="carousel-caption">
          <h3> Compra ya! </h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="CelularesPeru/imagenes/11.jpg" alt="Tercer producto" width="80%" height="300px">
        <div class="carousel-caption">
          <h3>Vamos al catálogo! </h3>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#productosCarousel" role="button" data-slide="prev">
      <span class="icon-prev" aria-hidden="true"></span>
      <span class="sr-only">Producto Anterior</span>
    </a>
    <a class="right carousel-control" href="#productosCarousel" role="button" data-slide="next">
      <span class="icon-next" aria-hidden="true"></span>
      <span class="sr-only">Producto Siguiente</span>
    </a>
  </div>
</div>
<!--/Carousel-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="container">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-4 col-lg-6 col-lg-offset-3 bg-info">
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1">
            <h2 class="text-uppercase text-center" style="color: #08088A"> SE EL PRIMERO EN RECIBIR OFERTAS Y NOVEDADES</h3>
            <h4 class="text-center" style="color:#000">Tu primera compra con 10% de descuento</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1">
            <form>
              <div class="form-group">
                <input class="form-control" type="text" name="" placeholder=  "Ingresa tu nombre">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="" placeholder="Ingresa tu correo electrónico">
              </div>
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <a href="#" class="btn btn-danger btn-block btn-lg">Suscribirse</a>
                  <br><br>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
if(localStorage.num==undefined){
  $(document).ready(function(){
    $('#myModal').modal('show');
    localStorage.num=1;
  });
}
</script>
@stop