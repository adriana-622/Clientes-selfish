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
               <a href="../Admin/Notificaciones_admin.php" class="btn btn-outline-dark"><i class="fa fa-bell "></i>Notificaciones</a>
               <a  class="btn btn-outline-dark"><i class="fa fa-user " ></i>Clientes</a>
               <a href="../Admin/Proyectos_admin.php" class="btn btn-outline-dark"><i class="fa fa-list " ></i>Proyectos</a>
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
            <u style="text-decoration: none;">
               <li style="list-style: none;">
                <a href="#">
                 <div class="icono"></div>
                   <div class="contenido">
                    <span style="text-decoration: none;" class="titulo">Título de la notificación</span>
                    <span class="descripcion">Descripción de la notificación</span>
                  </div>
                 </a>
               </li>
            </u>
          </div>
       </div>
   </div>
</div>
</body>
</html>