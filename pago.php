<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>proyecto</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/pago.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
            <div class="col-md-6 cabecera"></div>
            <div class="col-md-8 arriba">
              <div class="dirfactu">
                <div class="misdatos">
                  <h1>PROCESO DE PAGO</h1>
                  <p>"Realiza tu pago"</p>
                </div>
              </div>
            <div class="row">
            <div class="col-md-6 izquierdo">
              <div class="bienvenido">
                <h2>Titulo</h2>
                <h3 clase="iniciar-sesion">$10.00   MX</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit nisl, facilisi consequat massa est sociis montes sollicitudin risus, netus lectus elementum et enim ornare odio</p>
                </div>
            </div>
            <div class="col-md-6 derecho">
              <div class="sprit">
              <div class="col-md-6 sp">
                <div class="stripe">
                  <img
                    src="../img/2560px-Stripe_Logo,_revised_2016.svg.png"
                    alt="stripe"
                  />
                </div>
              </div>
            </div>
              <div class="col-md-6 formco">
                <form>
                  <div class="input">
                    <label for="correo">Correo</label>
                    <span>
                      <input
                        id="correo"
                        name="correo"
                        type="email"
                        placeholder="Correo electrónico"
                      />
                    </span>
                  </div>
                  <div class="row">
                    <div class="col-md-6 nomb">
                      <div class="input">
                        <label for="correo"> Nombre
                        </label>
                        <span>
                          <input
                            id="nomt"
                            name="nombre"
                            type="nombre"
                            placeholder=" Nombres "
                            />
                           <span>
                      </div>
                  </div>
                      <div class="col-md-6 apelli">
                        <div class="input">
                          <label for="correo">Apellido</label>
                          <span>
                            <input
                              id="apt"
                              name="apellido"
                              type="apellido"
                              placeholder=" Apellidos"
                              />
                             <span>
                          </div>
                        </div>  
                      </div>  
                      <div class="input">
                        <label for="correo">Numero de tarjeta</label>
                        <span>
                          <input
                            id="informaciont"
                            name="tarjeta"
                            type="tarjeta"
                            placeholder="1228 9387 6942 2349"
                            />
                            <i>
                            <img class="visa" href="#" src="https://js.stripe.com/v3/fingerprinted/img/visa-729c05c240c4bdb47b03ac81d9945bfe.svg" alt="visa" />
                            </i>
                            <i>
                              <img class="master" href="#" src="https://js.stripe.com/v3/fingerprinted/img/mastercard-4d8844094130711885b5e41b28c9848f.svg" alt="master" />
                           </i>
                           <i>
                            <img class="amex" href="#" src="https://js.stripe.com/v3/fingerprinted/img/amex-a49b82f46c5cd6a96a6e418a6ca1717c.svg" alt="amex" />
                          </i>
                        </span>
                        </div>
                    <div class="row">
                      <div class="col-md-6 ven">
                        <div class="input">
                          <label for="correo"> Vencimiento
                          </label>
                          <span>
                            <input
                              id="vencimientot"
                              name="vencimiento"
                              type="vencimiento"
                              placeholder="       MM / YY  "
                              />
                             <span>
                        </div>
                      </div>
                        <div class="col-md-6 cvcta">
                          <div class="input">
                            <label for="correo">CVC</label>
                            <span>
                              <input
                                id="cvct"
                                name="cvctarje"
                                type="cvctarje"
                                placeholder=" CVC"
                                />
                               <span>
                          </div>  
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-6 pais">
                      <div class="input">
                        <label for="oppais">País
                        </label>
                        <select  id="country" required="">
                          <option value="">México</option>
                          <option>España</option>
                          <option>Colombia</option>
                        </select>
                        </div>
                      </div>
                      <div class="col-md-6 pos">
                        <div class="input">
                          <label for="correo">Codigo Postal</label>
                          <span>
                            <input
                              id="cpostal"
                              name="codpostal"
                              type="cpostal"
                              placeholder=" Codigo Postal"
                              />
                             <span>
                        </div>  
                </div>
                </div>

                <div class="realtn">
                  <button class="btn">
                    <a href="#"
                      >Realizar Pago</a
                    >
                  </button>
                </div>
                            
                </form>
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
