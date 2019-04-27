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
    @include('fooAndHead.headerWelcome')
    <main>
        <div class="position-relative">
            <!-- shape Hero -->
            <section class="section section-lg section-shaped pb-250">
                @include('resources.ballsImage')
                <div class="container py-lg-md d-flex">
                    <div class="col px-0">
                        <div class="row">
                            <img src="https://cdn4.iconfinder.com/data/icons/SUPERVISTA/graphics/png/400/palette.png" alt="Smiley face" height="300" width="300">
                            <div class="col-lg-6">
                                <h1 class="display-3  text-white">ART COINS WEB
                                    <span>Vende tu arte y gana dinero!</span>
                                </h1>
                                <p class="lead  text-white">Art-Coins Web ofrece la posibilidad de ganar dinero de forma muy sencilla y divertida. Además puedes vender o comprar contenido artistico-digital!</p>
                                <div class="btn-wrapper">
                                    <a href="{{ URL('register') }}" class="btn btn-warning mt-4">
                                        <span class="btn-inner--icon"><i class="fas fa-user-plus"></i></span>
                                        <span class="btn-inner--text">Registrate</span>
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- SVG separator -->
                <div class="separator separator-bottom separator-skew">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
            </section>
            <!-- 1st Hero Variation -->
        </div>
        <section class="section section-lg pt-lg-0 mt--200">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row row-grid">
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0 wellBox">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                                            <i class="fas fa-coins"></i>
                                        </div>
                                        <h5 class="text-primary text-uppercase">Gana Art Coins</h5>
                                        <p class="description mt-3">Visualiza anuncios, videos y gana monedas. !</p>

                                        <div>
                                            <span class="badge badge-pill badge-primary">Art Coins</span>
                                            <span class="badge badge-pill badge-primary">Anuncios</span>
                                            <span class="badge badge-pill badge-primary">Videos</span>
                                        </div>
                                        <!--<img src="http://icons.iconarchive.com/icons/antialiasfactory/jewelry/256/Coin-icon.png" class="artCoin"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                            <i class="fas fa-shopping-cart"></i>
                                        </div>
                                        <h5 class="text-success text-uppercase">Compra y vende</h5>
                                        <p class="description mt-3">Gana dinero comprando y vendiendo productos en la tienda.</p>
                                        <div>
                                            <span class="badge badge-pill badge-success">Comprar</span>
                                            <span class="badge badge-pill badge-success">Vender</span>
                                            <span class="badge badge-pill badge-success">Dinero</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                                            <i class="fas fa-euro-sign"></i>
                                        </div>
                                        <h5 class="text-warning text-uppercase">Retirar dinero</h5>
                                        <p class="description mt-3">Retira tu dinero cuando quieras o canjealo por regalos.</p>
                                        <div>
                                            <span class="badge badge-pill badge-warning">Dinero</span>
                                            <span class="badge badge-pill badge-warning">Regalos</span>
                                            <span class="badge badge-pill badge-warning">Retirar</span>
                                        </div>
                                    </div>
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
