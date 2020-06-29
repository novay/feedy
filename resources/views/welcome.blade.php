<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }} | The easiest way to collect user feedback</title>
    <meta name="description" content="{{ env('APP_NAME') }} makes it quick and easy to collect feedback from users. Powerful feedback editor, privacy built-in, export tools, and more."/>
    <link rel="shortcut icon" href="{{ asset('assets/landing/img/logo.png') }}" type="image/png">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/style.css') }}">
</head>
<body>
    <style>body{overflow-x:hidden;}</style>

    <section class="smart-scroll">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand heading-black" href="/">
                    <i class="fas fa-envelope mr-2"></i> {{ env('APP_NAME') }}
                </a>
                <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span data-feather="menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll black" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll black" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/novay/feedy" target="_blank" class="nav-link page-scroll d-flex flex-row align-items-center text-primary">
                                <span data-feather="github" width="18" height="18" class="mr-2"></span>
                                {{ env('APP_NAME') }} on Github
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <section class="py-7 py-md-0 bg-hero" id="home">
        <div class="container">
            <div class="row vh-md-100">
                <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                    <div class="fa-5x mb-3">
                        {{-- &#x1F4EC --}}
                        <img src="{{ asset('assets/landing/img/logo.png') }}" width="200" class="logo">
                    </div>
                    <h2 class="heading-black">The easy way to collect feedback.</h2>
                    <p class="lead py-3">Functionality & simplicity at its core, {{ env('APP_NAME') }} makes it easier than ever to collect valuable feedback from users, with zero-fuss.</p>
                    <a href="/login" class="btn btn-light d-inline-flex flex-row align-items-center mr-2">
                        Login
                    </a>
                    <a href="/register" class="btn btn-primary d-inline-flex flex-row align-items-center">
                        Register
                        <em class="ml-2" data-feather="arrow-right"></em>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-6 pb-7" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="heading-black">Collect feedback in style.</h2>
                    <p class="text-muted lead">{{ env('APP_NAME') }} offers a wide range of tools to help you run an effective feedback campaign, within seconds.</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-10 mx-auto">
                    <div class="row feature-boxes">
                        <div class="col-md-6 box">
                            <div class="icon-box box-primary">
                                <div class="icon-box-inner">
                                    <span data-feather="edit" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5 class="black">Advanced feedback editor</h5>
                            <p class="text-muted">Tune your feedback to perfection with the built-in feedback editor, full of features.</p>
                        </div>
                        <div class="col-md-6 box">
                            <div class="icon-box box-success">
                                <div class="icon-box-inner">
                                    <span data-feather="monitor" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5 class="black">Works on any device</h5>
                            <p class="text-muted">There's no limitations. Collect feedback from users, whether they're on desktop or mobile.</p>
                        </div>
                        <div class="col-md-6 box">
                            <div class="icon-box box-warning">
                                <div class="icon-box-inner">
                                    <span data-feather="layout" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5 class="black">Easy integrations</h5>
                            <p class="text-muted">Embed {{ env('APP_NAME') }} on your site or use a standalone page to get feedback from anywhere.</p>
                        </div>
                        <div class="col-md-6 box">
                            <div class="icon-box box-info">
                                <div class="icon-box-inner">
                                    <span data-feather="eye-off" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5 class="black">Privacy Mode</h5>
                            <p class="text-muted">Flip one switch and start collecting feedback anonymously, keeping user data private.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-7 bg-dark section-angle top-left bottom-left">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 col-12 divider mx-auto pt-5 text-center">
                    <h3 class="black">Another "ONE DAY" Projects</h3>
                    <p>If you are curious and want to make something like <b>{{ env('APP_NAME') }}</b>, <br/>you can simpy clone this project through my Github page. Thanks!</p>
                    <h6 class="black">Usage Dependencies:</h6>
                    <p class="mb-0"><a href="https://github.com/laravel/laravel" target="_blank">Laravel</a> by Taylor Otwell</p>
                    <p class="mb-0"><a href="https://github.com/laravolt/avatar" target="_blank">Avatar</a> by Laravolt</p>
                    <p class="mb-4"><a href="https://github.com/fruitcake/laravel-cors" target="_blank">Cors</a> by Fruitcake (barryvdh)</p>
                    <a href="https://github.com/novay/feedy" target="_blank" class="btn btn-dark">
                        <span data-feather="github" width="18" height="18"></span> <br/>
                        FORK
                    </a>
                </div>
            </div>
            <div class="row mt-7">
                <div class="col-md-4 mr-auto">
                    <h3 class="black">Plenty to love.</h3>
                    <p class="lead">
                        {{ env('APP_NAME') }} is packed with features that'll help you run a successful feedback campaign. Here are just a few.
                    </p>
                </div>
                <div class="col-md-7 offset-md-1">
                    <ul class="features-list">
                        <li><i class="far fa-check mr-2 text-success"></i> Advanced feedback editor</li>
                        <li><i class="far fa-check mr-2 text-success"></i> Powerful export tools</li>
                        <li><i class="far fa-check mr-2 text-success"></i> Easy integration</li>
                        <li><i class="far fa-check mr-2 text-success"></i> Host it yourself</li>
                        <li><i class="far fa-check mr-2 text-success"></i> Privacy built-in</li>
                        <li><i class="far fa-check mr-2 text-success"></i> Works on any site</li>
                        <li><i class="far fa-check mr-2 text-success"></i> Support included</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-6" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 mr-auto">
                    <h5 class="black">About {{ env('APP_NAME') }}</h5>
                    <p class="text-muted">{{ env('APP_NAME') }} offers a wide range of tools to help you run an effective feedback campaign, within seconds.</p>
                    <ul class="list-inline social social-sm">
                        <li class="list-inline-item black">
                            <a href="https://novay.web.id" target="_blank"><i class="fas fa-globe"></i></a>
                        </li>
                        <li class="list-inline-item black">
                            <a href="https://facebook.com/404vay" target="_blank"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item black">
                            <a href="https://twitter.com/404vay" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-5">
                    <h5 class="black">PART OF BTEKNO!</h5>
                    &copy; 2019 <a href="https://btekno.id" target="_blank" class="black">{{ env('APP_NAME') }}</a> - The easiest way to collect user feedback.<br/>
                    Some rights reserved.
                    <br/><br/>
                    Handcrafted by <a href="https://facebook.com/404vay" class="black">@404vay</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-muted text-center small-xl">
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171037202-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-171037202-1');
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
    <script src="{{ asset('assets/landing/js/script.js') }}"></script>
</body>
</html>