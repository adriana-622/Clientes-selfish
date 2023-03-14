<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Clientes</title>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../js/bootstrap.min.js">
   <link rel="stylesheet" href="../css/estilo_admin.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
   <div class="container">
      <div class="row ">
         <div class="col-2 section-menu-cliente">
            <div class="container-logo-principal">
               <img src="../img/Selfish-LOGO.SVG" class="logo-principal">
            </div>
            <div class="d-grid gap-1 contenedor-botones" role="group" aria-label="Vertical button group">
               <a href="../Admin/Inicio_admin.php" class="btn btn-outline-dark"><i class="fa fa-home "></i>Inicio</a>
               <a class="btn btn-outline-dark"><i class="fa fa-bell "></i>Notificaciones</a>
               <a href="../Admin/Cliente_admin.php"class="btn btn-outline-dark"><i class="fa fa-user "></i>Clientes</a>
               <a href="../Admin/Proyectos_admin.php" class="btn btn-outline-dark"><i class="fa fa-list "></i>Proyectos</a>
               <a href="#" class="btn btn-outline-dark"><i class="fa fa-power-off "></i>Cerrar sesion</a>
            </div>
         </div>
         <div class="col-10 pt-4">
            <div class="container text-center">
               <div class="row align-items-start pt-4">
                  <div class="col-6">
                     <div class="d-flex ">
                        <div class="cont-title-paginas">
                           <h2>CLIENTES</h2>
                        </div>
                     </div>
                     <div class="d-flex justify-content-star align-items-star">
                        <div>
                           <p>"La imaginacion es el pricipio de la creacion"</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="d-flex justify-content-end align-items-end">
                        <?php
                        include '../php/date.php';
                        ?>
                     </div>
                  </div>
               </div>
               <div class="row align-items-end pt-4">
                  <div class="col-10">

                  </div>
                  <div class="col-2">
                     <div class="d-flex justify-content-end align-items-end pt-5">
                        <a class="btn btn-dark client" data-bs-toggle="modal" data-bs-target="#Nuevo-Cliente" href="">Nuevo Cliente</a>
                     </div>
                  </div>
               </div>            
                  <br>
                  <div class="table-responsive">
                     <table class="table table-hover table-condensed table-bordered ">
                        <thead class="table-dark">
                           <tr>
                              <td>Nombre</td>
                              <td>Apellido</td>
                              <td>Telefono</td>
                              <td>Email</td>
                              <td>Fecha nacimiento</td>
                              <td>Proyectos</td>
                              <td>Editar</td>
                              <td>Eliminar</td>
                           </tr>
                        </thead>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td>
                              <a class="btn btn-dark client" data-bs-toggle="modal" data-bs-target="#Update" href="">Editar</a>
                              <!--<button class="btn btn-warning  bi bi-pen" data-toggle="modal" data-target="#ModEditarMascotas/*<?php echo $ver[0]; ?>*/"> Editar</button>-->
                           </td>
                           <td>
                              <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Delete" href="">Eliminar</a>
                              <!--<button id="btnBorrar" class="btn btn-danger  bi bi-trash3" data-toggle="modal" data-target="#ModEliminarMascotas<?php echo $ver[0]; ?>"> Borrar</button>-->
                           </td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!--MODAL NUEVO CLIENTE-->
         <div class="modal fade" id="Nuevo-Cliente" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
               <div class="modal-content">
                  <div class="modal-header" style="text-align: center;">
                     <h1 class="modal-title fs-3" id="contenedor-modal">NUEVO CLIENTE</h1>
                     <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                  </div>
                  <div class="modal-body">
                     <div class="row align-items-end">
                        <div class="col-4">
                           <div class="mb-2 contenedor-file-modal">
                              <input class="form-control" type="file" id="formFile">
                           </div>
                        </div>
                        <div class="col-8">
                           <div class="mb-2">
                              <input type="text" class="form-control" placeholder="Nombre">
                           </div>
                           <div class="mb-2">
                              <input type="text" class="form-control" placeholder="Apellido">
                           </div>
                           <div class="mb-2">
                              <input type="number" class="form-control" placeholder="Telefono">
                           </div>
                           <div class="mb-2">
                              <input type="email" class="form-control" placeholder="Name@example.com">
                           </div>
                           <div class="mb-2">
                              <input type="text" class="form-control" placeholder="Fecha de nacimiento">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-dark btn-modal-proyect" data-bs-dismiss="modal">Cerrar</button>
                     <button type="submit" class="btn btn-dark btn-modal-proyect">Agregar</button>
                  </div>
               </div>
            </div>
         </div>
         <!--MODAL EDITAR--> <!--MODAL EDITAR--> <!--MODAL EDITAR--> <!--MODAL EDITAR--> <!--MODAL EDITAR-->
         <!--MODAL EDITAR--> <!--MODAL EDITAR--> <!--MODAL EDITAR--> <!--MODAL EDITAR--> <!--MODAL EDITAR-->
         <div class="modal fade" id="Update" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
               <div class="modal-content">
                  <div class="modal-header" style="text-align: center;">
                     <h1 class="modal-title fs-3" id="contenedor-modal">EDITAR CLIENTE</h1>
                     <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                  </div>
                  <div class="modal-body">
                     <div class="row align-items-end">
                        <div class="col-4">
                           <div class="mb-2 contenedor-file-modal">
                              <input class="form-control" type="file" id="formFile">
                           </div>
                        </div>
                        <div class="col-8">
                           <div class="mb-2">
                              <input type="text" class="form-control" placeholder="Nombre">
                           </div>
                           <div class="mb-2">
                              <input type="text" class="form-control" placeholder="Apellido">
                           </div>
                           <div class="mb-2">
                              <input type="number" class="form-control" placeholder="Telefono">
                           </div>
                           <div class="mb-2">
                              <input type="email" class="form-control" placeholder="Name@example.com">
                           </div>
                           <div class="mb-2">
                              <input type="text" class="form-control" placeholder="Fecha de nacimiento">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-dark btn-modal-proyect" data-bs-dismiss="modal">Cerrar</button>
                     <button type="submit" class="btn btn-dark btn-modal-proyect">Actualizar</button>
                  </div>
               </div>
            </div>
         </div>
         <!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE-->
         <!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE--><!--DELETE-->
         <div class="modal fade" id="Delete" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
               <div class="modal-content">
                  <div class="modal-header text-center" style="background-color: #BB2D3B !important;">
                     <h1 class="fs-3" style="color:antiquewhite">¿Seguro que deceas eliminar a?</h1>
                     <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                  </div>
                  <form action="" method="POST" name="form">
                     <div class="modal-body">
                        <div class="row align-items-end">
                           <div class="modal-body">
                              <strong style="text-align: center !important">
                                 <h3>Cliente</h3>
                              </strong>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-modal-proyect" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger btn-modal-proyect">Eliminar</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
</body>

</html>