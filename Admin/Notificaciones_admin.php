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
         <div class="col-12 col-md-3" >
            <div class="container-logo-principal">
               <img src="../img/logo-selfish.jpg" class="logo-principal">
            </div>
            <div class="d-grid gap-1 contenedor-botones" role="group" aria-label="Vertical button group">
               <a href="../Admin/Inicio_admin.php" class="btn btn-outline-dark " ><i class="fa fa-home "></i>Inicio</a>
               <a href="../Admin/Notificaciones_admin.php" class="btn btn-outline-dark active"><i class="fa fa-bell "></i>Notificaciones</a>
               <a  class="btn btn-outline-dark"><i class="fa fa-user " ></i>Clientes</a>
               <a href="../Admin/Proyectos_admin.php" class="btn btn-outline-dark"><i class="fa fa-list " ></i>Proyectos</a>
            </div>
         </div>
         <div class="col-12 col-md-9">
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
          <!-- Modal -->
          <div class="modal fade" id="modal-noti" tabindex="-1" aria-labelledby="modal-noti" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
             <div class="modal-content">
                <div class="d-flex justify-content-end modal-header modal-noti-head">
                <h1 class="modal-title fs-5" id="modal-noti">Titulo</h1>
                <h3 class="d-flex justify-content-end num-noti">#15255</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                  <div class="col-8 col-sm-8">
                     <div class="title-modificacion">
                        <h3>Modificación "en le tipo de fuente"</h3>
                     </div>
                  </div>
                  <div class="col-4 col-sm-4">
                     level2
                  </div>
               </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
             </div>
          </div>
          </div>
        </div>
   </div>
</div>
</body>
</html>