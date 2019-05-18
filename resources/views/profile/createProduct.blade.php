<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Perfil
    </title>
    @include('links.profileHeadLinks')
    @include('links.headLinks')

</head>

<body class="white-content">
    @include('footAndHead.headerUser')
    <div class="wrapper myBgLightBlue">
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
                        <a href="./notifications.html">
                            <i class="tim-icons icon-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="./user.html">
                            <i class="tim-icons icon-single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="./tables.html">
                            <i class="tim-icons icon-puzzle-10"></i>
                            <p>Table List</p>
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
            <!-- Navbar -->

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
                <div class="row myBgBlue">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Crear nuevo producto artístico</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{action('ProductController@store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 pr-md-1">
                                            <div class="form-group">
                                                <label>Imagen del producto</label>
                                                <input type="file" class="form-control" name="pUrl" accept="image/*" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">

                                                <label>Nombre del producto</label>
                                                <input type="text" class="form-control" placeholder="Nombre del producto" name="pName" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label for="exampleInputTipo">Tipo del producto</label>
                                                <select class="form-control" id="exampleInputTipo" name="pType">
                                                    <option value="Música">Música</option>
                                                    <option value="Ilustración">Ilustración</option>
                                                    <option value="Literatura">Literatura</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label>Precio del producto</label>
                                                <input type="text" class="form-control" placeholder="Precio del producto" name="pPrice" value="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-md-1">
                                            <div class="form-group">
                                                <label>Sobre mi</label>
                                                <textarea rows="4" cols="80" class="form-control" placeholder="Descripción del producto" name="pDesc" value=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-fill btn-primary">Crear</button>
                                    </div>
                                </form>
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
    @include('links.profileFootLinks')
    @include('links.footLinks')
</body>

</html>
