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
               <img src="../img/Selfish-logo.svg" class="logo-principal">
            </div>
            <div class="d-grid gap-1 contenedor-botones" role="group" aria-label="Vertical button group">
               <a href="../Admin/Inicio_admin.php" class="btn btn-outline-dark " ><i class="fa fa-home "></i>Inicio</a>
               <a href="../Admin/Notificaciones_admin.php" class="btn btn-outline-dark active"><i class="fa fa-bell "></i>Notificaciones</a>
               <a href="../Admin/Cliente_admin.php" class="btn btn-outline-dark"><i class="fa fa-user " ></i>Clientes</a>
               <a href="../Admin/Proyectos_admin.php" class="btn btn-outline-dark"><i class="fa fa-list " ></i>Proyectos</a>
               <a href="#" class="btn btn-outline-dark"><i class="fa fa-power-off "></i>Cerrar sesion</a>
            </div>
         </div>
         <div class="col-12 col-md-10">
          <div class="cont-title-paginas">
               <h2>NOTIFICACIONES</h2>
            </div>
            <div class="cont-subtitle-pagina">
               <p>"La imaginación es el principio de la creación"</p>
          </div>  
          <div class="contenedor-notificaciones">
            <a class="" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#modal-noti" >
               <td class="cont-tabla-noti">
                  <tr class="sub-cont-noti">
                     <div class="detalle-noti"><i class="fa fa-paper-plane"></i>
                        Notificaciones de los cambios enviados por el cliente
                     </div>
                  </tr>
               </td>
            </a>
          </div>
          <!-- Modal de notificación-->
          <div class="modal fade" id="modal-noti" tabindex="-1" aria-labelledby="modal-noti" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
             <div class=" d-flex modal-content">
                <div class=" modal-header modal-noti-head">
                <h1 class="modal-title fs-5" id="modal-noti">Titulo</h1>
                <div class="align-middle">
                <p class="num-noti fs-5">#15255</p>
                </div>
             </div>
                <div class="modal-body notificaciones">
                 <div class="row">
                  <div class="col-8 col-sm-7">
                     <div class="title-modificacion">
                        <p>Modificación "en le tipo de fuente"</p>
                     </div>
                     <div class="">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled" disabled></textarea>
                     </div>
                     <div>
                     <audio controls>
                        <source src="mi-archivo-de-audio.ogg" type="audio/ogg">
                        <source src="mi-archivo-de-audio.mp3" type="audio/mpeg">
                        <source src="mi-archivo-de-audio.wav" type="audio/wav">
                           <object type="application/x-shockwave-flash" data="">
                                 <param name="movie" value="">
                           </object>
                     </audio>
                     </div>
                     <div class="">
                       <img src="..." class="img-thumbnail" alt="...">
                     </div>
                  </div>
                  <div class="col-4 col-sm-5" style="text-align: center;">
                    <div>
                     <p>Costo por modificación del proyecto</p>
                    </div>
                    <div>
                     <p>Estimado cliente la modificación que desea realizar tiene un monto de:</p>
                    </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           Incluido
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                           Costo extra
                        </label>
                     </div>
                     <div class="input-group mb-3">
                     <span class="input-group-text">$</span>
                     <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                     <span class="input-group-text">.00</span>
                  </div>
                  </div>
                  </div>
                 </div>
                </div>
             </div>
          </div>
         </div>
      </div>
   </div>
</div>
</body>
</html>