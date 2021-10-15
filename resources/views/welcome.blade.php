<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            body{
                background-color:#ECF4F3;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

        </style>

    <body>
        <nav class="navbar navbar-light" style="background-color: #D4ECDD;">
                 <a class="navbar-brand" href="#">
                 <img src="https://texproil.com.ar/images/logo/logobig.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    TEXPROIL
                 </a>
                 <button type="button" class="navbar-toggler ms-auto" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pronostico" >
                 <img src={{ $clima['current']['weather_icons'][0]}} width="20" height="16">
                </button>
                    
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                         data-mdb-target="#navbarToggleExternalContent3" aria-controls="navbarToggleExternalContent3"
                               aria-expanded="false" aria-label="Toggle navigation">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 2.75zm0 5A.75.75 0 011.75 7h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 7.75zM1.75 12a.75.75 0 100 1.5h12.5a.75.75 0 100-1.5H1.75z"></path></svg>
                    </button>
                        
         </nav>
       <br>
                <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                     <!-- Modal Header -->
                                 <div class="modal-header">
                                     <h4 class="modal-title text-center">Pronostico</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                 </div>

                    <!-- Modal body -->
                        <div class="modal-body">
                        <p><b>Localidad :</b> {{$clima['location']['name']}}</p>
                                <p><b> fecha: </b>{{$clima['location']['localtime'] }}</p>
                                <p> <b>temperatura:</b>
                                    {{$clima['current']['temperature']}} C</p>
                                    <img src={{ $clima['current']['weather_icons'][0]}}>
                                    <p> <b>viento:</b>
                                    {{$clima['current']['wind_speed']}} Km/h</p>
                        </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
                </div>
            </div>
  

        <div class="container mt-4">
    <div class="row">
    <div class="col-4 mb-3">
        <a href="{{url('/ordenProduccion')}}">
        <div class="card" style="width: 18rem; background-color:#035397 ;color:white">
                <div class="card-body">
                    <h5 class="card-title">Cargar orden de Produccion</h5>     
                    <br>    
                </div>
            </div>
         </a>
        </div>
        <div class="col-4 mb-3">
        <a href="#">
        <div class="card" style="width: 18rem; background-color:#035397 ;color:white">
                <div class="card-body">
                    <h5 class="card-title">Cargar Oti</h5>
                    <br> 
                    <br>        
                </div>
            </div>
         </a>
        </div>
        <div class="col-4 mb-3">
        <a href="#">
            <div class="card" style="width: 18rem; background-color:#035397 ;color:white">
                <div class="card-body">
                    <h5 class="card-title">Ver Oti</h5>
                    <br> 
                    <br>         
                </div>
            </div>
         </a>
        </div>
        <div class="col-4 mb-3">
        <a href="#">
            <div class="card" style="width: 18rem; background-color:#035397 ;color:white">
                <div class="card-body">
                    <h5 class="card-title">Cargar Tarea</h5>
                    <br>  
                    <br>        
                </div>
            </div>
         </a>
        </div>
        <div class="col-4 mb-3">
        <a href="#">
            <div class="card" style="width: 18rem; background-color:#035397 ;color:white">
                <div class="card-body">
                    <h5 class="card-title">Asignar Tarea</h5>
                    <br>  
                    <br>        
                </div>
            </div>
         </a>
        </div>
        <div class="col-4 mb-3">
        <a href="#">
            <div class="card" style="width: 18rem; background-color:#035397 ;color:white">
                <div class="card-body">
                    <h5 class="card-title">Ver Tarea</h5>
                    <br>  
                    <br>        
                </div>
            </div>
         </a>
        </div>

</div>
        </div>

 
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
        <footer>
            <div class="container text-center text-light">
                <p style="color:black">2021 © TEXPROIL - Todos los derechos reservados</p>
            </div>
        </footer> 
        </body>
    </head>
</html>