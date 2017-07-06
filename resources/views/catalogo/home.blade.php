@extends('layouts.master')

@section('content')
<div ng-app="Tienda" ng-controller="CatalogoController">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        @include('catalogo.sidebar')
      </div>        
      <div class="col-md-9">
        <div class="row">
          @foreach ($products as $product)
          <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="panel panel-default producto_marco">
              <div  class="panel-body">
                @if($product->extension)
                <img  src="{{url("/products/images/$product->id.$product->extension")}}" class="img-responsive">
                @endif
                <h3 class="text-center tituloprod">{{$product->title}} </h3>
                <h2 class="text-center"><strong>s/{{$product->pricing}}</strong></h2>
                <p><strong>Marca: </strong>{{$product->marca}}</p>
                <p><strong>Gama: </strong>{{$product->gama}}</p>
                <p><strong>Conectividad: </strong>{{$product->conectividad}}</p>
                <p><strong>Descripcion</strong></p>
                <p>{{$product->description}}</p>
                <br>
                
                <p class="text-xs-center">
                  @include("in_shopping_carts.form",["product"=>$product])
                </p>
                @if(Auth::check() && $product->user_id == Auth::user()->id)
                <div>
                  <a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
                  @include('products.delete',['product'=>$product])
                </div>
                @endif
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@stop