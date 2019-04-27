<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom bg-dark ">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="{{ URL('/home') }}">
                <img src="webMedia/img/brand/temp_brand.jpg">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse collapse" id="navbar_global">


                    <ul class="navbar-nav align-items-lg-center ml-lg-auto ">
                        <li class="nav-item ">
                            <!-- mx-auto para centrar elemento-->
                            <p>Hemos repartido más de 35000 €</p>
                            <!--PROVISIONAL -->
                        </li>
                        <li class="nav-item">

                            <a href="{{ URL('aboutUs') }}" class="media d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white headIcons">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="media-body ml-2">
                                    <h5 class="heading text-warning mb-md-1">About Us</h5>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a href="{{ URL('tutorial') }}" class="media d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white headIcons">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <div class="media-body ml-2">
                                    <h5 class="heading text-warning mb-md-1">Tutorial</h5>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a href="{{ URL('login') }}" class="media d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white headIcons">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="media-body ml-2">
                                    <h5 class="heading text-warning mb-md-1">LOGIN</h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
