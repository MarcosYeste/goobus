<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Black Dashboard by Creative Tim
    </title>
    @include('links.profileHeadLinks')
    @include('links.headLinks')
</head>

<body class="white-content">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle d-inline">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="search-bar input-group">
                        <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                            <span class="d-lg-none d-md-block">Search</span>
                        </button>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <div class="notification d-none d-lg-block d-xl-block"></div>
                            <i class="tim-icons icon-sound-wave"></i>
                            <p class="d-lg-none">
                                Notifications
                            </p>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                            <li class="nav-link">
                                <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                            </li>
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                            </li>
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
                            </li>
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                            </li>
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <div class="photo">
                                <img src="../assets/img/anime3.png" alt="Profile Photo">
                            </div>
                            <b class="caret d-none d-lg-block d-xl-block"></b>
                            <p class="d-lg-none">
                                Log out
                            </p>
                        </a>
                        <ul class="dropdown-menu dropdown-navbar">
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a>
                            </li>
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="nav-link">
                                <a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a>
                            </li>
                        </ul>
                    </li>
                    <li class="separator d-lg-none"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="sidebar">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:void(0)" class="simple-text logo-mini">
                        CT
                    </a>
                    <a href="javascript:void(0)" class="simple-text logo-normal">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a href="{{ URL('profile') }}">
                            <i class="tim-icons icon-atom"></i>
                            <p>Perfil</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL('myArt') }}">
                            <i class="tim-icons icon-atom"></i>
                            <p>Productos</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tim-icons icon-bell-55"></i>
                            <p>Transferencias</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="{{ URL('stadistics') }}">
                            <i class="tim-icons icon-single-02"></i>
                            <p>Estadisticas</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
          
            <!-- End Navbar -->
            <div class="content">
                
                 <h3>Página en construcción</h3>
               
                <div class="">
                    @include('footAndHead.footer')
                </div>
            </div>
        </div>
    </div>
    @include('links.footLinks')
</body>

</html>
