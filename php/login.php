<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Administrador</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/iniciosesion.css" />
</head>

<body>

  <div class="login">
    <!-- <div class="circulo" style="top: -55%; left: 60%;">
    <div class="circulo-banner">
    </div>
    </div>
    <div class="circulo" style="top: 55%; left: -15%;">
    <div class="circulo-banner">
    </div>
    </div> -->
    <div class="container">
      <div class="row">
        <!-- contenedor secundario derecho -->
        <div class="col-md-6 banner-sec">
          <img class="img-inicio" src="https://intranet.selfish.com.mx/assets/Collage.png" alt="Card image cap" />
        </div>
        <!-- contenedor secundario izquierdo -->
        <div class="col-md-6 login-sec">
          <div class="img-fomulario">
            <img class="img-logo" src="https://intranet.selfish.com.mx/assets/Selfish-logo.svg" alt="Card image cap" />
          </div>
          <div class="cliente">
            <h4 class="text-center">ADMIN</h4>
          </div>
          <div class="bienvenido">
            <h3>Bienvenido</h3>
            <div class="iniciar-sesion">
              <h5>Iniciar sesion</h5>
            </div>
          </div>
          <!-- formulario -->
          <form action="../php/Sesion_Admin.php" class="formulario" method="POST">
            <div class="input">
              <label for="correo">CORREO</label>
              <span>
                <input name="email" type="email" placeholder="Correo electrónico" required autocomplete="on" value="" />
              </span>
            </div>
            <div class="input">
              <label for="contrasena">CONTRASEÑA</label>
              <span>
                <input name="password" type="password" placeholder="Contraseña" required autocomplete="off" value="" />
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="2 0.5 16 17">
                    <path d="M2.5 8.718A11.13 11.13 0 0 0 5 10.955m12.5-2.237a11.13 11.13 0 0 1-2.5 2.237m-6.667 1.353-.416 1.826m.416-1.825a8.827 8.827 0 0 0 3.334 0m-3.334 0A9.397 9.397 0 0 1 5 10.955m6.667 1.353.416 1.826m-.416-1.825A9.397 9.397 0 0 0 15 10.955m0 0 1.25 1.513M5 10.955l-1.25 1.513" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                  </svg>
                </i>
              </span>
            </div>
            <input type="submit" class="btn" value="INICIAR SESIÓN" style="margin: 0px auto" />
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>