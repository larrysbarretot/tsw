@extends('layouts.master')

@section('content')

@include('partials.carousel')
@include('partials.modal')

<script>
localStorage.cont=1;
if(localStorage.cont!=1){
  alert(localStorage.cont); 
}else{
  localStorage.cont=1;
  $(document).ready(function(){
    localStorage.cont++;
    $('#myModal').modal('show');
  });
}  
</script>
@stop