<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Perfil
    </title>
    @include('links.profileHeadLinks')
    @include('links.headLinks')

</head>

<body class="white-content">
    @include('fooAndHead.headerUser')
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
                        <a href="./icons.html">
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
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{action('PersonController@update')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 pr-md-1">
                                            <div class="form-group">
                                                <label>Avatar</label>
                                                <input type="file" class="form-control" name="avatar" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-md-1">
                                         <div class="form-group">
                                               
                                                <label>Nickname</label>
                                                <input type="text" class="form-control" placeholder="nickname" name="nickname" value="{{$user['nickname']}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                 <label for="exampleInputEmail1">Correo electrónico</label>
                                                <input type="email" class="form-control" name="email" placeholder="email" value="{{$user['email']}}">
                                            </div>
                                        </div>                                      
                                    </div>
                                    <div class="row">
                                          <div class="col-md-6 pr-md-1">
                                               <div class="form-group">
                                                <label>Old password</label>
                                                <input type="password" class="form-control" placeholder="Password" name="user_pass" value="{{$user['user_pass']}}">
                                            </div>
                                            
                                        </div>
                                          <div class="col-md-6 pr-md-1">
                                               <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" placeholder="Password" name="user_pass" value="{{$user['user_pass']}}">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control" placeholder="Company" name="name" value="{{$person['name']}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label>Apellidos</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="lastname" value="{{$person['lastname']}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label>Código postal</label>
                                                <input type="number" class="form-control" placeholder="ZIP Code" name="cp" value="{{$person['cp']}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label>Dirección</label>
                                                <input type="text" class="form-control" placeholder="Home Address" name="address" value="{{$person['address']}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$person['phone']}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label>País</label>
                                                <input type="text" class="form-control" placeholder="Country" name="country" value="{{$person['country']}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-md-1">
                                            <div class="form-group">
                                                <label>Sobre mi</label>
                                                <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" name="description" value="{{$person['description']}}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-fill btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="author">
                                        <a href="javascript:void(0)">
                                            <img class="avatar" src="{{$avatar}}" value="{{$avatar}}" alt="...">
                                            <h5 class="title">{{$user['nickname']}}</h5>
                                        </a>
                                        <p class="description">
                                            Diseñadora
                                        </p>
                                    </div>
                                </div>
                                <div class="card-description">
                                    {{$person['description']}}
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="button-container">
                                    <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                                        <i class="fab fa-facebook"></i>
                                    </button>
                                    <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                                        <i class="fab fa-google-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="paddingfoot">
        @include('fooAndHead.footer')
    </div>
    @include('links.profileFootLinks')
    @include('links.footLinks')
</body>

</html>
