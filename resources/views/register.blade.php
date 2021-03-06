<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Register</title>
    @include('links.headLinks')
</head>

<body>
    @include('footAndHead.headerWelcome')
    <main>
        <section class="section section-shaped section-lg">
            <div class="container pt-lg-md">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-white pb-5">
                                <div class="text-muted text-center mb-3">
                                    <small>Sign up with</small>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn btn-neutral btn-icon mr-4">
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
                                    <small>Or sign up with credentials</small>
                                </div>
                                <form class="form-inline " role="form" action="{{action('PersonController@store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Nickname" name="nickname" type="text">
                                        </div>
                                    </div>
                                    <span class="text-danger"> {{$errors->first('nickname')}} </span>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Email" name="email" type="email">
                                        </div>
                                    </div>

                                    <span class="text-danger"> {{$errors->first('email')}}</span>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>


                                            <input class="form-control" placeholder="Password" name="user_pass" type="password">
                                        </div>

                                    </div>
                                    <span class="text-danger"> {{$errors->first('user_pass')}}</span>
                                    <div class="row my-4">
                                        <div class="col-12">
                                            <div class="custom-control custom-control-alternative custom-checkbox">
                                                <input class="custom-control-input" id="customCheckRegister" type="checkbox" required>
                                                <label class="custom-control-label" for="customCheckRegister">
                                                    <span>I agree with the
                                                        <a href="{{ URL('privacidad') }}">Privacy Policy</a>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-4">Create account</button>
                                    </div>
                                </form>
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
