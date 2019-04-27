   <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom bg-dark">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="{{ URL('/home') }}">
                    <img src="webMedia/img/brand/temp_brand.jpg">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="{{ URL('/home') }}">
                                    <img src="webMedia/img/brand/temp_brand.jpg">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around headbodywidth">
                        <a href="#" class="media d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                                <i class="ni ni-spaceship"></i>
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="heading text-primary mb-md-1">Anuncios</h6>
                            </div>
                        </a>
                        <a href="#" class="media d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                                <i class="ni ni-palette"></i>
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="heading text-primary mb-md-1">Art</h6>
                            </div>
                        </a>
                       <!-- <a href="#" class="media d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                <i class="ni ni-ui-04"></i>
                            </div>
                            <div class="media-body ml-3">
                                <h5 class="heading text-warning mb-md-1">Help</h5>
                            </div>
                        </a>-->
                    </div>
                    <span class="navbar-nav  ml-lg-auto"></span><!--Se parador -->
                    <div class="d-flex justify-content-around headbodywidth" >
                    <h5>1500 Arts</h5>
                     <h5>4,35€</h5>
                     <h5>Marcos</h5>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                                <span class="nav-link-inner--text">Perfil</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="../examples/landing.html" class="dropdown-item">configurar mi perfil</a>
                                <a href="../examples/profile.html" class="dropdown-item">Mis productos</a>
                                <a href="../examples/login.html" class="dropdown-item">Transferencias</a>
                                <a href="../examples/register.html" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
