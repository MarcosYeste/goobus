<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Design System - Free Design System for Bootstrap 4</title>
    @include('links.headLinks')
</head>

<body>
    @include('fooAndHead.headerUser') 
    <main>
        <section class="section section-lg bg-gradient-secondary">
            <div class="container pt-lg pb-300">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="display-3 text-black">Art Coins Team</h2>
                        <p class="lead text-black">Bienvenido al soporte técnico de Art Coins Web, rellana el formulario con tus datos y tu problema, te mandaremos una respuesta lo antes posible.</p>
                    </div>
                </div>
                <div class="row row-grid mt-5">
                    <div class="col-lg-4">
                        <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                            <i class="fas fa-video-slash"></i>
                        </div>
                        <h5 class="text-black mt-3">¿Por qué no puedo visualizar anuncios en la web?</h5>
                        <p class="text-black mt-3">Es posible que el navegador no haya cargado algúnos anuncios, refrescando la página podria cargarse de nuevo. Otra opcion es tener activo el bloqueo de anuncios con extensiones como Adblock.Si continua el problema rellena el formulario y trateremos tu tema personalmente.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">

                            <i class="ni ni-settings text-primary"></i>
                        </div>
                        <h5 class="text-black mt-3">He creado un producto y no se visualiza en la tienda.</h5>
                        <p class="text-black mt-3">Al colgar un producto deberia aparecer automaticamente como recien subido. En ocasiones es posible que tarde en subirse esperar unos minutos y actualizar la página podria funcionar.Si continua el problema rellena el formulario y trateremos tu tema personalmente.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <h5 class="text-black mt-3">No puedo realizar transferencia bancaria</h5>
                        <p class="text-black mt-3">Revisa en tu perfil que toda la información sobre el apartado de cuenta esta rellenado adecuadamente o asegurate de haber alcanzado el minimo para retirar dinero.Si continua el problema rellena el formulario y trateremos tu tema personalmente.</p>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section section-lg pt-lg-0 section-contact-us">
            <div class="container">
                <div class="row justify-content-center mt--300">
                    <div class="col-lg-8">
                        <div class="card bg-gradient-secondary shadow">
                            <div class="card-body p-lg-5">
                                <h4 class="mb-1">Contacta con nosotros</h4>
                                <p class="mt-0">Rellena el formulario y formula tu pregunta</p>
                                <div class="form-group mt-5">
                                    <label for="exampleFormControlSelect1">Usuario: </label>
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Username" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Correo electrónico: </label>
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email address" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tipo de problema: </label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option value="1">Anuncios</option>
                                        <option value="2">Productos</option>
                                        <option value="3">Pefil y configuración</option>
                                        <option value="4">Transferencias</option>
                                        <option value="5">Otros</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlSelect1">Descripción del problema</label>
                                    <textarea class="form-control form-control-alternative" name="name" rows="4" cols="80" placeholder="Descripción del problema"></textarea>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-default btn-round btn-block btn-lg">Enviar mensaje</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    @include('fooAndHead.footer')
    @include('links.footLinks')
</body>

</html>
