<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Black Dashboard by Creative Tim
    </title>
    @include('links.headLinks')
</head>

<body class="white-content">
    @include('footAndHead.headerUser')
    <div class="wrapper">
        <div class="sidebar">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
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
                    <li class="active-pro">
                        <a href="">
                            <i class=""></i>
                            <p></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Mis Productos</h5>
                                <form method="get" action="{{action('ProductController@create')}}">
                                    <input type="submit" class="btn btn-primary mt-3" value="Crear producto">
                                </form>
                            </div>
                            <div class="card-body all-icons">
                                <div class="row">
                                    @foreach ($products as $product)
                                <div class="card myMargin myBgLightBlue " style="width: 19rem;">
                                        <div class="d-flex pt-3">
                                            <div class="col ">
                                                <img src="../storage/product/images/{{$product->pUrl}}" alt="..." width="120" height="120">
                                                <div>
                                                    <span class="fa fa-star checkedStar"></span>
                                                    <span class="fa fa-star checkedStar"></span>
                                                    <span class="fa fa-star checkedStar"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="d-flex mt-3">
                                                    <p class="card-text">{{ $product->pPrice }} <i class="fas fa-coins "></i></p>
                                                    <p class="card-text ml-2">{{ $product->pClientBenefit }} <i class="fas fa-euro-sign"></i></p>
                                                </div>

                                            </div>
                                            <div class="card-body p-0">
                                                <h5 class="card-title">{{ $product->pName }}</h5>
                                                <a href="{{action('ProductController@show', $product->id )}}" class="btn btn-primary mt-3">Detalles</a>


                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    @include('footAndHead.footer')
                </div>
            </div>

        </div>
    </div>
    @include('links.footLinks')
</body>

</html>
