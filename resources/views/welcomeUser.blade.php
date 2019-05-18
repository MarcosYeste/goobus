<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Art Coins Web</title>
    @include('links.headLinks')
</head>

<body>
    @include('footAndHead.headerUser')
    <main>
        <div class="position-relative">
            <!-- shape Hero -->
            <!-- shape Hero -->
            <section class="section section-lg section-shaped pb-250">
                <div class="container d-flex">
                    <div class="col px-0">
                        <div class="row">
                            <img src="https://cdn4.iconfinder.com/data/icons/SUPERVISTA/graphics/png/400/palette.png" alt="Smiley face" height="250" width="250">
                            <div class="col-lg-6">
                                <h3 class="text-white">BIENVENIDO A ART COINS WEB!!
                                </h3>
                                <h5 class="text-white">
                                    Vende tu arte y gana dinero!
                                </h5>
                                <p class="lead  text-white">Gana unas moneditas en la sección de anuncios o crea tus propios productos para vender en tu perfil!</p>

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
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                                            <i class="ni ni-check-bold"></i>
                                        </div>
                                        <h6 class="text-primary text-uppercase">¿Como ganar Art-coins?</h6>
                                        <p class="description mt-3">En este video te explicamos como ganar Art-Coins para comprar productos</p>
                                        <a href="#" class="btn btn-primary mt-4">Visualizar video</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                            <i class="ni ni-istanbul"></i>
                                        </div>
                                        <h6 class="text-success text-uppercase">¿Como comprar o vender arte?</h6>
                                        <p class="description mt-3">En este video te explicamos como comprar y vender tus productos artisticos</p>
                                        <a href="#" class="btn btn-success mt-4">Visualizar video</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                                            <i class="ni ni-planet"></i>
                                        </div>
                                        <h6 class="text-warning text-uppercase">¿Como retirar tu dinero?</h6>
                                        <p class="description mt-3">En este video te explicamos como retirar tu dinero acumulado.</p>
                                        <a href="#" class="btn btn-warning mt-4">Visualizar video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    @include('footAndHead.footer')
    @include('links.footLinks')
</body>

</html>
