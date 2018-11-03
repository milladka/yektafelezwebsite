<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <title>تست</title>
    </head>
    <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top rtl">
                <a class="navbar-brand" href="#">یکتافلز</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">صفحه اصلی<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">خرید آنلاین</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">لیست قیمت</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">تماس با ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">درباره ما</a>
                        </li>
                    </ul>
                    <div class="phone"><i class="icon-phone"></i>۰۲۱-۲۳۴۵۶۷۸۹</div>
                </div>
    </nav>





     <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/jquery.slim.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    </body>
</html>