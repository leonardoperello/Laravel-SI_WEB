<!DOCTYPE html>
<html>
    <head>
        <title> Orden de producción </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

        <style>
    body{
        background-color:#ECF4F3;
        
    }

    </style>

        <body>
        <nav class="navbar navbar-light" style="background-color: #D4ECDD;">
                 <a class="navbar-brand" href="#">
                 <img src="https://texproil.com.ar/images/logo/logobig.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    TEXPROIL
                 </a>
               
     
                
                    <button class="navbar-toggler ms-auto" type="button" data-mdb-toggle="collapse"
                         data-mdb-target="#navbarToggleExternalContent3" aria-controls="navbarToggleExternalContent3"
                               aria-expanded="false" aria-label="Toggle navigation">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 2.75zm0 5A.75.75 0 011.75 7h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 7.75zM1.75 12a.75.75 0 100 1.5h12.5a.75.75 0 100-1.5H1.75z"></path></svg>
                    </button>
                        
         </nav>
       
    <div class="container-xxl mt-1" >
        <div class="row" >
            <div class="col-8">
                <h1 class="fw-bold  py-5 ">Datos del cliente
                </h1>
                
                    <div class="col-8 mb-2">
                        <div class="input-group">
                        <div class="input-group-text ml-1" id="btnGroupAddon">CUIT</div>
                        <input type="text" class="form-control ml-1" placeholder="cuit" aria-label="Input group example" aria-describedby="btnGroupAddon">
                        <div class="input-group-text ml-1" id="btnGroupAddon2">Nombre</div>
                        <input type="text" class="form-control ml-1" placeholder="nombre" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                         </div>
                    </div>
                    <hr>
                    <h4 class="fw-bold  py-2">Listado clientes
                </h4>
                <hr>
                <table class="table table-striped">
                        <thead>
                                <tr>
                                     <th scope="col">Empresa</th>
                                     <th scope="col">CUIT</th>
                                     <th scope="col">Telefono</th>
                                     <th scope="col">Correo</th>
                                 </tr>
                        </thead>
                     <tbody>
                          @foreach ($clientes as $cliente)
                          <tr>
                                 <td>{{ $cliente-> nombreEmpresa }}</td> 
                                 <td>{{ $cliente-> CUIT }}</td>  
                                 <td>{{ $cliente-> telefono }}</td>
                                 <td>{{ $cliente-> correo }}</td>
                          </tr>
                       
                          @endforeach
                      </tbody>
                </table>
               
            </div>
         
            
           <div class="col-4" style="background-color:#006A71">
             <form action="/ordenProduccion" method="POST">
             @csrf
                         <h3 class="fw-bold text-center py-5 text-light mb-0" >Orden de producción
            
                        </h3> 

                 <div class="mb-0">
                    <label for="user" class="form-label">Fecha</label>
                    <input type="Date" class="form-control" name="fecha">
                     </div>
                     <div class="mb-0">
                    <label for="user" class="form-label">Detalle</label>
                    <input type="text" class="form-control" name="detalle"> 
                     </div>
                        <div class="mb-0">
                        <label for="rosca" class="form-label">Seleccione la rosca</label>
                        <select name="rosca" class="form-select" aria-label="Default select example">
                        @foreach ($roscas as $rosca)
                    <option value="{{ $rosca['tipoDeRosca']['nombre'] }}" >{{ $rosca["tipoDeRosca"]["nombre"] }}</option>
                    @endforeach
                    </select>
                     </div>
                     <div class="mb-0">
                    <label for="user" class="form-label">Descripcion Tecnica</label>
                    <input type="text" class="form-control" name="DescripcionTecnica"> 
                     </div>
                     <div class="mb-2">
                    <label for="user" class="form-label">Medidas</label>
                    <input type="text" class="form-control" name="medidas"> 
                     </div>

                 <div class="text-center">
                    <button type="submit" value="Submit" class="btn btn-primary">Guardar</button>                    
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
            <br>
            <div class="container text-center">
                <p>2021 © TEXPROIL - Todos los derechos reservados</p>
            </div>
        </footer>
    <nav class="navbar navbar-light bg-transparent"></nav>
    </body>
    </head>

</html>