<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Login</title>
    @include('links.headLinks')
</head>

<body class="backImage">
    @include('footAndHead.headerWelcome')
    <main>
        <section class="section section-shaped section-lg bodyBackground">
            <div class="container pt-lg-md">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-white pb-5">
                                <div class="text-muted text-center mb-3">
                                    <small>Inicia con: </small>
                                </div>
                                <div class="btn-wrapper text-center">
                                    <a href="#" class="btn btn-neutral btn-icon">
                                        <span class="btn-inner--icon">
                                            <img src="https://www.eldiario.es/fotos/Icono-Facebook_EDIIMA20171010_0383_19.jpg">
                                        </span>
                                        <span class="btn-inner--text">Facebook</span>
                                    </a>
                                    <a href="#" class="btn btn-neutral btn-icon">
                                        <span class="btn-inner--icon">
                                            <img src="https://yt3.ggpht.com/a/AGF-l7-BBIcC888A2qYc3rB44rST01IEYDG3uzbU_A=s900-mo-c-c0xffffffff-rj-k-no">
                                        </span>
                                        <span class="btn-inner--text">Google</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-muted mb-4">
                                    <small>O inicia con tus credenciales</small>
                                </div>
                                <form role="form" action="{{action('PersonController@sign')}}" method="post">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" name="nickname" placeholder="Nickname" type="text" required>
                                        </div>
                                        <span class="text-danger"> {{$errors->first('nickname')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" name="user_pass" placeholder="Escribir contraseña" type="password" required>
                                        </div>
                                        <span class="text-danger"> {{$errors->first('user_pass')}}</span>
                                    </div>
                                    
                                    <div class="custom-control custom-control-alternative ">                                        
                                            <span>{{$errorMessage}}</span>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-primary my-4" value="Iniciar Sessión">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="#" class="text-light">
                                    <small>Olvidé mi contraseña</small>
                                </a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ URL('register') }}" class="text-light">
                                    <small>Crear una cuenta nueva</small>
                                </a>
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
