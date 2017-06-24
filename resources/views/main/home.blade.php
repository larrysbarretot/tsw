@extends('layouts.master')

@section('content')
<style >
  .text-center{
    font-family: 'Fredoka One', cursive;
  }
</style>
@include('partials.carousel')
@include('partials.modal')

<script>
if(localStorage.num==undefined){
  $(document).ready(function(){
    $('#myModal').modal('show');
    localStorage.num=1;
  });
}
</script>
@stop