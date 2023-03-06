<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" >
    <link href="../js/bootstrap.min.js">
    <link rel="stylesheet" href="../css/estilo_admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
   <div class="container contenedor-principal">
      <div class="row">
         <div class="col-12 col-md-2" >
            <div class="container-logo-principal">
               <img src="../img/logo-selfish.jpg" class="logo-principal">
            </div>
            <div class="d-grid gap-1 contenedor-botones" role="group" aria-label="Vertical button group">
               <a href="../Admin/Inicio_admin.php" class="btn btn-outline-dark"><i class="fa fa-home "></i>Inicio</a>
               <a  class="btn btn-outline-dark"><i class="fa fa-bell "></i>Notificaciones</a>
               <a  class="btn btn-outline-dark"><i class="fa fa-user " ></i>Clientes</a>
               <a href="../Admin/Proyectos_admin.php" class="btn btn-outline-dark"><i class="fa fa-list " ></i>Proyectos</a>
            </div>
         </div>
         <div class="col-12 col-md-8">
            <div class="cont-title-paginas">
               <h2>PROYECTOS</h2>
            </div>
            <div class="cont-subtitle-pagina">
               <p>"La imaginación es el principio de la creación"</p>
            </div>
            <div class="nombre-proyecto">
                <h3>Nombre</h3>
            </div>
            <div class="cont-text-area">
               <textarea name="" id="" cols="30" rows="10">Descripción del proyecto</textarea>
            </div>
            <div class="d-grid gap-1 container-img-proyect">
               <img src="../img/logo-selfish.jpg">
               <div class="datos-proyecto">
                  <p>Nombre</p>
                  <p>Tipo de proyecto</p>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-2">
            <div class="d-grid gap-1 btn-proyect" role="group" aria-label="Vertical button group">
               <a class="btn btn-dark" href="">Buscar</a>
               <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#contenedor-modal" href="">Nuevo proyecto</a>
            </div>
            <div class="d-grid gap-1 btn-proyect btn-cambios-proyecto">
               <a class="btn btn-dark" href="">Cambios</a>
            </div>
         </div>
         <!--MODAL-->
         <!-- Button trigger modal -->
         <!-- Modal -->
         <div class="modal fade" id="contenedor-modal"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
               <div class="modal-header" style="text-align: center;">
                  <h1 class="modal-title fs-5" id="contenedor-modal">Agregar nuevo proyecto</h1>
                  <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-md-6" style="background-color: aqua;">
                        <div class="d-grid gap-1 cont-input">
                           <input type="text" placeholder="Nombre del proyecto">
                           <textarea name="" id="" cols="30" rows="10" placeholder="Descripción general del proyecto"></textarea>
                           <input type="text" placeholder="Nombre del cliente">
                        </div>
                        <div class="input-group mb-3">
                           <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                           <select class="form-select" id="inputGroupSelect01">
                             <option selected>Choose...</option>
                             <option value="1">One</option>
                             <option value="2">Two</option>
                             <option value="3">Three</option>
                           </select>
                         </div>
                     </div>
                     <div class="col-md-6 contenedor-img-proyect" style="background-color: chartreuse;">
                        <div class="mb-3 contenedor-file-modal">
                           <input class="form-control" type="file" id="formFile">
                         </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-dark btn-modal-proyect" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-dark btn-modal-proyect">Agregar</button>
               </div>
            </div>
            </div>
         </div>
   </div>
</div>
</body>
</html>