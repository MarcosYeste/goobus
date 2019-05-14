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
        <section class="section section-lg myBgBlue">
            <div class="container">
                <div class="row justify-content-center text-center mb-lg">
                    <div class="col-lg-8">
                        <h2 class="display-3">ES HORA DE GANAR UNAS MONEDITAS</h2>
                        <p class="lead text">Visualiza nuestro contenido y apresurate a ganar moneras!</p>
                        <p class="lead text">Recuerda que cada 3 horas aparecerá nuestro anuncio especial con el que podrás obtener Art Coins extra!!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="data:image/png;base64,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" class=" img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">visualiza Video</span>
                                    <small class="h6 text-muted">50 Art Coins</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="https://2.bp.blogspot.com/-jxOxA324Hok/WEmhHc5p9yI/AAAAAAAAAFo/VzN4Bp843Bwo86GneZoCGRsQ5CMVc_jkQCLcB/s1600/eee.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Clica!</span>
                                    <small class="h6 text-muted">10 Art Coins</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgxlCOsnER3zpoQgiCh5PuOfUDDgfxbkH-sfbUmzs1B1Ua7AeKOg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Clica!</span>
                                    <small class="h6 text-muted">5 Art Coins</small>
                                </h5>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="https://lahistoriadelascosas.files.wordpress.com/2015/07/hqdefault.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Clica!</span>
                                    <small class="h6 text-muted">10 Art Coins</small>
                                </h5>                               
                            </div>
                        </div>
                    </div>






 <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="data:image/png;base64,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" class=" img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">visualiza Video</span>
                                    <small class="h6 text-muted">50 Art Coins</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="https://2.bp.blogspot.com/-jxOxA324Hok/WEmhHc5p9yI/AAAAAAAAAFo/VzN4Bp843Bwo86GneZoCGRsQ5CMVc_jkQCLcB/s1600/eee.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Clica!</span>
                                    <small class="h6 text-muted">10 Art Coins</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgxlCOsnER3zpoQgiCh5PuOfUDDgfxbkH-sfbUmzs1B1Ua7AeKOg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Clica!</span>
                                    <small class="h6 text-muted">5 Art Coins</small>
                                </h5>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="https://lahistoriadelascosas.files.wordpress.com/2015/07/hqdefault.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Clica!</span>
                                    <small class="h6 text-muted">10 Art Coins</small>
                                </h5>                               
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                     <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="data:image/png;base64,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" class=" img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">visualiza Video</span>
                                    <small class="h6 text-muted">50 Art Coins</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="https://2.bp.blogspot.com/-jxOxA324Hok/WEmhHc5p9yI/AAAAAAAAAFo/VzN4Bp843Bwo86GneZoCGRsQ5CMVc_jkQCLcB/s1600/eee.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Clica!</span>
                                    <small class="h6 text-muted">10 Art Coins</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgxlCOsnER3zpoQgiCh5PuOfUDDgfxbkH-sfbUmzs1B1Ua7AeKOg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Clica!</span>
                                    <small class="h6 text-muted">5 Art Coins</small>
                                </h5>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="px-4">
                            <img src="https://lahistoriadelascosas.files.wordpress.com/2015/07/hqdefault.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
                            <div class="pt-4 text-center">
                                <h5 class="title">
                                    <span class="d-block mb-1">Clica!</span>
                                    <small class="h6 text-muted">10 Art Coins</small>
                                </h5>                               
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
