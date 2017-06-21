@extends('layouts.master')

@section('content')


    <!--Contacto-->
        <div id="contacto-container">
          <div class="container">
            <div class="row">


              <div class="col-md-4 col-sm-6">
                <h2><strong>Ubicanos</strong></h2>
                <!--div id="gmap"-->
                
                <div id="location">
                  <div id="map"></div>
                  <div id="mensaje" class="mensaje_estilos"></div>

                </div>
              </div>



              <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Peruvian Nexus</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">peruvianexus@gmail.com</a> <br> 
                        Teléfono:  (1) 326-6506 <br> 
                        Celular: (51) 987501482 <br> 
                        </address>

                        <h2>Dirreción</h2>
                        <address>
                        Av Javier Prado 5227 dentro del local Sonax frente a club ACENESPAR al lado de plaza Camacho.<br> 
                        A 5 cuadras del óvalo de la Universidad de Lima.<br> 
                        Lima <br> 
                        Perú <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2><center>Consulta</center></h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="asunto" name="asunto" class="form-control" required="required" placeholder="Asunto">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Consulta"></textarea>
                            </div>                        
                            <div class="form-group" ALIGN=center>
                                <input type="submit" name="submit" class="btn btn-submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>



              </div>
            </div>
            
          </div>
          
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXwj0xZGAU1X7Q2usZb0g8mggpuPIYU5A"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <script src="{{url('/CelularesPeru/dist/maps.js')}}"></script>
    <script src="{{url('/CelularesPeru/js/app.js')}}"></script>    
    <!--/Contacto-->
















@stop
