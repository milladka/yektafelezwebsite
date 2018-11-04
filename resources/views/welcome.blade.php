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
        <link href="{{ asset('css/flickity.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <title>تست</title>
    </head>
    <body>
    <header class="fixed-top">
        <div class="alert-web current col-12">
            تست
            <i class="icon-cross"></i>
        </div>
        <nav class="navbar navbar-expand-md navbar-dark rtl">
                    <a class="navbar-brand" href="#"><img src="/img/logo.png" alt=""></a>
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
                        <div class="phone"><i class="icon-phone"></i><a href="tel:+982175214">۰۲۱-۷۵۲۱۴</a></div>
                        <div class="menu-user effect7"><i class="icon-keyboard_arrow_down"></i><span>رضا احمدی</span> خوش آمدید

                        <div class="menu-list">
                            <ul>
                                <li>پروفایل کاربری</li>
                                <li>متن تست</li>
                                <li>خروج</li>
                            </ul></div>
                        </div>

                    </div>
                </nav>
    </header>
    {{--sub header section--}}
    <main role="main">
        <section class="subheader rtl">
            <div>
                <div>
                     <div class="content"></div>
                    <div class="text-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="title-section">
                                    <h1>یکتا فلز خاورمیانه پیشرو در صنعت</h1>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                                    <a href="">درباره یکتافلز</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section-from">
                                    <div class="title-form">ورود به پنل کاربری</div>
                                    <p>جهت ورود به پنل کاربری نام کاربری و رمز عبور را وارد کنید</p>
                                    <form action="">
                                        <div class="form-group row ">
                                            <label for="inputEmail3" class="offset-md-1 col-sm-3 col-form-label">نام کاربری</label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row ">
                                            <label for="inputEmail3" class="offset-md-1 col-sm-3 col-form-label">کلمه عبور</label>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-sm-10 btn-submit">
                                                <button type="submit" class="btn btn-warning">ورود</button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-6 text-center"><a class="forget-pass-link" href="">فراموشی رمز عبور</a></div>
                                            <div class="col-6"><a class="new-user-link" href="">ثبت نام کاربر جدید</a></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="subheader-bg"></div>
        </section>
        <section class="product rtl">
            <div class="linerup"></div>
            <h2>محصولات</h2>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
        </section>
    </main>






    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/jquery.slim.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
