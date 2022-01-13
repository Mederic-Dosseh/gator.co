<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Recover Password | Minible - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg">
        <div class="account-pages my-5  pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div>

                            <a href="index.html" class="mb-5 d-block auth-logo">
                                <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="22" class="logo logo-dark">
                                <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="22" class="logo logo-light">
                            </a>
                            <div class="card">

                                <div class="card-body p-4">

                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Réinitialiser le mot de passe</h5>

                                    </div>
                                    <div class="p-2 mt-4">
                                        <div class="alert alert-success text-center mb-4" role="alert">
                                            Entrez votre email et les instructions vous seront envoyées!
                                        </div>
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="useremail">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Entrer email">
                                            </div>

                                            <div class="mt-3 text-end">
                                                <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Réinitialiser</button>
                                            </div>


                                            <div class="mt-4 text-center">
                                                <p class="mb-0">Souviens toi ?<a href="{{route('login')}}" class="fw-medium text-primary"> Se connecter </a></p>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <p>© <script>document.write(new Date().getFullYear())</script> Gator. Crafted with <i class="mdi mdi-heart text-danger"></i> by Agence Cauris</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
