<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Client Login </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/preloader.min.css') }}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="index.html" class="d-block auth-logo">
                                    <img src="{{ asset('backend/assets/images/logo-sm.svg') }}" alt="" height="28"> <span class="logo-txt">Client Login</span>
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0">Welcome Back !</h5>
                                    <p class="text-muted mt-2">Sign in to continue to Client.</p>
                                </div>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{$error }}</li>
    @endforeach
@endif

@if (Session::has('error'))
    <li>{{ Session::get('error') }}</li>
@endif
@if (Session::has('success'))
    <li>{{ Session::get('success') }}</li>
@endif                            
<form class="mt-4 pt-2" action="{{ route('client.login_submit') }}"  method="post">
    @csrf

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
    </div>
    <div class="mb-3">
        <div class="d-flex align-items-start">
            <div class="flex-grow-1">
                <label class="form-label">Password</label>
            </div>
            <div class="flex-shrink-0">
                <div class="">
                    <a href="{{ route('admin.forget_password') }}" class="text-muted">Forgot password?</a>
                </div>
            </div>
        </div>
        
        <div class="input-group auth-pass-inputgroup">
            <input type="password" name="password"  class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
            <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-check">
                
            </div>  
        </div>
        
    </div>
    <div class="mb-3">
        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
    </div>
</form>

                                <div class="mt-4 pt-2 text-center">
                                    <div class="signin-other-title">
                                        <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign in with -</h5>
                                    </div>

                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript:void()"
                                                class="social-list-item bg-primary text-white border-primary">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void()"
                                                class="social-list-item bg-info text-white border-info">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void()"
                                                class="social-list-item bg-danger text-white border-danger">
                                                <i class="mdi mdi-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-5 text-center">
                                    <p class="text-muted mb-0">Don't have an account ? <a href="auth-register.html"
                                            class="text-primary fw-semibold"> Signup now </a> </p>
                                </div>
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> EasyLearing   . Crafted with <i class="mdi mdi-heart text-danger"></i> by EasyLearing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            <div class="col-xxl-9 col-lg-8 col-md-7">
                <div class="auth-bg pt-md-5 p-4 d-flex">
                    <div class="bg-overlay bg-primary"></div>
                    <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- end bubble effect -->
<div class="row justify-content-center align-items-center">
<div class="col-xl-7">
    <div class="p-0 p-sm-4 px-xl-0">
        <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <!-- end carouselIndicators -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testi-contain text-white">
                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                        <h4 class="mt-4 fw-medium lh-base text-white">“I feel confident
                            imposing change
                            on myself. It's a lot more progressing fun than looking back.
                            That's why
                            I ultricies enim
                            at malesuada nibh diam on tortor neaded to throw curve balls.”
                        </h4>
                        <div class="mt-4 pt-3 pb-5">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" class="avatar-md img-fluid rounded-circle" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3 mb-4">
                                    <h5 class="font-size-18 text-white">Richard Drews
                                    </h5>
                                    <p class="mb-0 text-white-50">Web Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testi-contain text-white">
                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                        <h4 class="mt-4 fw-medium lh-base text-white">“Our task must be to
                            free ourselves by widening our circle of compassion to embrace
                            all living
                            creatures and
                            the whole of quis consectetur nunc sit amet semper justo. nature
                            and its beauty.”</h4>
                        <div class="mt-4 pt-3 pb-5">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" class="avatar-md img-fluid rounded-circle" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3 mb-4">
                                    <h5 class="font-size-18 text-white">Rosanna French
                                    </h5>
                                    <p class="mb-0 text-white-50">Web Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testi-contain text-white">
                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                        <h4 class="mt-4 fw-medium lh-base text-white">“I've learned that
                            people will forget what you said, people will forget what you
                            did,
                            but people will never forget
                            how donec in efficitur lectus, nec lobortis metus you made them
                            feel.”</h4>
                        <div class="mt-4 pt-3 pb-5">
                            <div class="d-flex align-items-start">
                                <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" class="avatar-md img-fluid rounded-circle" alt="...">
                                <div class="flex-1 ms-3 mb-4">
                                    <h5 class="font-size-18 text-white">Ilse R. Eaton</h5>
                                    <p class="mb-0 text-white-50">Manager
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end carousel-inner -->
        </div>
        <!-- end review carousel -->
    </div>
</div>
</div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>


        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
        <!-- pace js -->
        <script src="{{ asset('backend/assets/libs/pace-js/pace.min.js') }}"></script>
        <!-- password addon init -->
        <script src="{{ asset('backend/assets/js/pages/pass-addon.init.js') }}"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>



    </body>

</html>