<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>proyecto</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/iniciodesesion.css" />
  </head>
  <body>
    <section class="login-block">
      <div class="container">
        <div class="row">
           <!-- contenedor secundario derecho -->
          <div class="col-md-6 banner-sec">
              <img
                class="img-inicio"
                src="./img/e288be710ef58e4a2735ecd627e1f191.png"
                alt="Card image cap"
              />
            </div>
         <!-- contenedor secundario izquierdo -->
          <div class="col-md-6 login-sec">
            <div class="img-fomulario">
              <img
                class="img-logo"
                src="./img/selfish-logo-6A0845C041-seeklogo.com.png"
                alt="Card image cap"
              />
            </div>
            <div class="intranet">
              <h3 class="text-center">INTRANET</h3>
            </div>
            <div class="bienvenido">
              <h1>Bienvenido</h1>
              <h2 clase="iniciar-sesion">Iniciar sesion</h2>
            </div>
            <!-- formulario -->
            <form>
              <div class="form-group-correo">
                <label for="correo">CORREO</label>
                <span>
                  <input
                    id="correo"
                    name="correo"
                    class="form-control"
                    type="email"
                    placeholder="Correo electrónico"
                  />
                </span>
              </div>
              <div class="form-group-contrasena">
                <label for="palabraSecreta">CONTRASEÑA</label>
                <span>
                  <input
                    id="palabraSecreta"
                    name="palabraSecreta"
                    class="form-control"
                    type="password"
                    placeholder="Contraseña"
                  />
                </span>
              </div>
              <input
                type="submit"
                class="btn"
                value="INICIAR SESIÓN"
                style="margin: 0px auto"
              />
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
