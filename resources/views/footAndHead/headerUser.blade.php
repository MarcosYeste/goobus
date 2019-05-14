<header class="header-global">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-purple" id="navbar1">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="{{ URL('home') }}">
                <img src="img/brand/temp_brand.jpg">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="{{ URL('home') }}">
                                <img src="img/brand/temp_brand.jpg">
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
                    <ul class="navbar-nav align-items-lg-center">
                        <li class="nav-item dropdown">
                            <a href="{{ URL('ads') }}" class="media d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-purple rounded-circle text-white">
                                    <i class="ni ni-spaceship"></i>
                                </div>
                                <div class="media-body ml-3">
                                    <h6 class="heading myBlueGold mb-md-1">Anuncios</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ URL('art') }}" class="media d-flex align-items-center">
                                <div class="icon icon-shape bg-gradient-purple rounded-circle text-white">
                                    <i class="ni ni-palette"></i>
                                </div>
                                <div class="media-body ml-3">
                                    <h6 class="heading myBlueGold mb-md-1">Art</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- <a href="#" class="media d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                <i class="ni ni-ui-04"></i>
                            </div>
                            <div class="media-body ml-3">
                                <h5 class="heading text-warning mb-md-1">Help</h5>
                            </div>
                        </a>-->
                </div>
                <!--
                <div class="row ">
                    <h5 class="text-white">{{$user['nickname']}}</h5>
                    <h5 class="text-white">{{$person['artcoins']}} ArtCoins</h5>
                    <h5 class="text-white">{{$person['money']}} Euros</h5>
                </div> 
                -->
                <span class="navbar-nav  ml-lg-auto"></span>
                <!--Se parador -->
                <div class="d-flex justify-content-around headbodywidth">
                    <ul class="navbar-nav align-items-lg-center">
                        <li class="nav-item">
                            <a href="#" class="media d-flex align-items-center">
                                <div class="media-body ml-3">
                                    <h5 class="heading myBlueGold mb-md-1 myBlueGold">{{$user['nickname']}}</h5>
                                </div>
                                <div class="icon icon-shape myBlueGold">
                                    <i class="far fa-hand-point-left"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="media d-flex align-items-center ">
                                <div class="media-body ml-3">
                                    <h5 class="heading myBlueGold mb-md-1 myBlueGold">{{$person['artcoins']}}</h5>
                                </div>
                                <div class="icon icon-shape rounded-circle myBlueGold">
                                    <i class="fas fa-piggy-bank"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="media d-flex align-items-center ">
                                <div class="media-body ml-3">
                                    <h5 class="heading myBlueGold mb-md-1 myBlueGold">{{$person['money']}}</h5>
                                </div>
                                <div class="icon icon-shape myBlueGold">
                                    <i class="fas fa-euro-sign"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- <a href="#" class="media d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                <i class="ni ni-ui-04"></i>
                            </div>
                            <div class="media-body ml-3">
                                <h5 class="heading text-warning mb-md-1">Help</h5>
                            </div>
                        </a>-->
                </div>
                <div class="d-flex justify-content-around">

                    <ul class="navbar-nav align-items-lg-center">
                        <li class="nav-item dropdown">

                            <a href="#" class="media d-flex align-items-center no-bottom" data-toggle="dropdown" role="button">
                                <div class="icon icon-shape bg-gradient-purple rounded-circle text-white headIcons">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="media-body ml-3">
                                    <h5 class="heading myBlueGold mb-md-1">Perfil</h5>
                                </div>
                            </a>
                            <div class="dropdown-menu mg-top">
                                <a href="{{ URL('profile') }}" class="dropdown-item">configurar mi perfil</a>
                                <a href="{{ URL('myArt') }}" class="dropdown-item">Mis productos</a>
                                <a href="../examples/login.html" class="dropdown-item">Transferencias</a>
                                <a href="{{ URL('logout') }}" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
