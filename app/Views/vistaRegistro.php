<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HogarAnimal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/estilos.css")) ?>">
</head> 
<body>
    <header>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">CasaHogar</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
     <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo (base_url("public/img/1.jpg")) ?>" class="d-block w-100 imagenes" alt="baner1">
    </div>
    <div class="carousel-item">
      <img src="<?php echo (base_url("public/img/2.jpg")) ?>" class="d-block w-100 imagenes" alt="baner2">
    </div>
    <div class="carousel-item">
      <img src="<?php echo (base_url("public/img/3.jpg")) ?>"  class="d-block w-100 imagenes" alt="baner3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



  <form class="mt-5" method="POST" action="<?php echo(base_url("public/animales/registro")) ?>">
                <h5>REGISTRO DE ANIMALES:</h5>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="number" class="form-control" placeholder="Edad" name="edad">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Comida" name="comida">
                    </div>
                    <div class="col-12 col-md-6" >
                        <select class="form-control" name= "tipo">
                            <option value="0">Domestico</option>
                            <option value="1">Fauna Silvestre</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <textarea class="form-control" rows="3"name= "descripcion"></textarea>
                    </div>   
                </div>

                  <div class="row mt-3">
                    <div class="col-12"> 
                      <input type="text" class="form-control" placeholder="URL imagen" name="foto"> 
                    </div> 
                 </div>

              <button type="submit" class="btn btn-info btn-block mt-3">registrar</button>
            
              <h5> <?php echo(session('mensaje')) ?> </h5>

            </form>
    </div>

    </header>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
</body>
</html>