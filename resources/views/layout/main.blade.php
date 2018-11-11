<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{--head-section--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
            <div class="menu-user effect7"><i class="icon-keyboard_arrow_down"></i>
               <div class="menu-user-click"><span>رضا احمدی</span> خوش آمدید</div>
                <div class="menu-list">
                    <ul>
                        <li>پروفایل کاربری</li>
                        <li>متن تست</li>
                        <li>خروج</li>
                    </ul>
                </div>
            </div>
        </div>

    </nav>
</header>
<main role="main">
    {{--sub header section--}}
    <section class="subheader rtl">
        <div>
            <div>
                <div class="content"></div>
                <div class="text-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="title-section">
                                <h1>شرکت یکتافلز</h1>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد. </p>
                                <a href="">درباره یکتافلز</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-from">
                                <div class="title-form">ورود به پنل کاربری</div>
                                <p>جهت ورود به پنل کاربری نام کاربری و رمز عبور را وارد کنید</p>
                                <form action="">
                                    <div class="form-group row ">
                                        <label for="inputEmail3" class="offset-md-1 col-sm-3 col-form-label">نام
                                            کاربری</label>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row ">
                                        <label for="inputEmail3" class="offset-md-1 col-sm-3 col-form-label">کلمه
                                            عبور</label>
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
                                        <div class="col-6 text-center"><a class="forget-pass-link" href="">فراموشی رمز
                                                عبور</a></div>
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
    {{--product section--}}
    <section class="product rtl">
        {{--<div class="linerup"></div>--}}
        {{--<h2>محصولات</h2>--}}
        {{--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>--}}
        <div class="tab-product container">

            <ul class="nav nav-tabs">
                <li><a href="" class="active show"><img src="img/anvae-varagh.png" alt="varagh">ورق</a></li>
                <li><a href=""><img src="img/tirahan-1.png" alt="milgerd">تیرآهن</a></li>
                <li><a href=""><img src="img/milgerd.png" alt="varagh">میلگرد</a></li>
                <li><a href=""><img src="img/profil.png" alt="varagh">لوله و پروفیل</a></li>
                <li><a href=""><img src="img/nabshi.png" alt="varagh">نبشی و ناودانی</a></li>
                <li><a href=""><img src="img/khadamat-va-tajhizat.png" alt="varagh">سایر اقلام</a></li>
            </ul>

            <div class="tab-content">
                <div id="varagh" class="tab-pane active show">
                    <div class="varagh-view">
                        <article class="product-view">
                            <div class="pro">
                                <figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>
                                <a href="">
                                    <div class="title-pro">روغنی، ۱.۵، ۱۲۵۰</div>
                                    <div class="price-pro">تماس بگیرید</div>
                                </a>

                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                <figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>
                                <a href="">
                                    <div class="title-pro">سیاه، ۲، ۱۰۰۰</div>
                                    <div class="price-pro">تماس بگیرید</div>
                                </a></div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                <figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>
                                <a href="">
                                    <div class="title-pro">گالوانیزه، ۱.۲۵، ۱۰۰۰</div>
                                    <div class="price-pro">تماس بگیرید</div>
                                </a>
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                <figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>
                                <a href="">
                                    <div class="title-pro">سیاه، ۲.۵، ۱۰۰۰</div>
                                    <div class="price-pro">تماس بگیرید</div>
                                </a>
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                <figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>
                                <a href="">
                                    <div class="title-pro">گالوانیزه، ۱.۵، ۱۲۵۰</div>
                                    <div class="price-pro">تماس بگیرید</div>
                                </a>
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                <figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>
                                <a href="">
                                    <div class="title-pro">گالوانیزه، ۱.۵، ۱۲۵۰</div>
                                    <div class="price-pro">تماس بگیرید</div>
                                </a>
                            </div>
                        </article>
                    </div>
                    <button type="button" class="btn btn-warning btn-sm">کلیه محصولات گروه ورق</button>
                </div>
                <div id="tirahan" class="tab-pane">
                    <div class="tirahan-view">
                        <article class="product-view">
                            <div class="pro">
                                <figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>
                                <a href="">
                                    <div class="title-pro">گالوانیزه ۲.۵ ۱۰۰۰</div>
                                    <div class="price-pro">تماس بگیرید</div>
                                </a>

                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                    </div>
                    <button type="button" class="btn btn-warning btn-sm">کلیه محصولات گروه تیرآهن</button>
                </div>
                <div id="milgerd" class="tab-pane">
                    <div class="milgerd-view">
                        <article class="product-view">
                            <div class="pro">
                                <figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>
                                <a href="">
                                    <div class="title-pro">گالوانیزه، هفت الماس ۲.۵ ۱۰۰۰</div>
                                    <div class="price-pro">۱۰۰.۰۰۰ تومان</div>
                                </a>

                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                    </div>
                    <button type="button" class="btn btn-warning btn-sm">کلیه محصولات گروه میلگرد</button>
                </div>
                <div id="profil" class="tab-pane">
                    <div class="profil-view">
                        <article class="product-view">
                            <div class="pro">
                                <figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>
                                <a href="">
                                    <div class="title-pro">گالوانیزه، هفت الماس ۲.۵ ۱۰۰۰</div>
                                    <div class="price-pro">۱۰۰.۰۰۰ تومان</div>
                                </a>

                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                    </div>
                    <button type="button" class="btn btn-warning btn-sm">کلیه محصولات گروه پروفیل</button>
                </div>
                <div id="nabshi" class="tab-pane">
                    <div class="your-class nabshi-view">
                        <article class="product-view">
                            <div class="pro">
                                <figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>
                                <a href="">
                                    <div class="title-pro">گالوانیزه، هفت الماس ۲.۵ ۱۰۰۰</div>
                                    <div class="price-pro">۱۰۰.۰۰۰ تومان</div>
                                </a>

                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                    </div>
                    <button type="button" class="btn btn-warning btn-sm">کلیه محصولات گروه نبشی و ناودانی</button>
                </div>
                <div id="saier" class="tab-pane">
                    <div class="saier-view">
                        <article class="product-view">
                            <div class="pro">
                                <figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>
                                <a href="">
                                    <div class="title-pro">گالوانیزه، هفت الماس ۲.۵ ۱۰۰۰</div>
                                    <div class="price-pro">۱۰۰.۰۰۰ تومان</div>
                                </a>

                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                        <article class="product-view">
                            <div class="pro">
                                محصول ۱
                            </div>
                        </article>
                    </div>
                    <button type="button" class="btn btn-warning btn-sm">کلیه محصولات دیگر</button>
                </div>
            </div>
        </div>
    </section>
    {{--blog section--}}
    <section class="blog rtl">
        <div class="linerup"></div>
        <h2>آخرین اخبار و مقالات</h2>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
        <div class="container">
            <div class="posts">
                <article class="single-post">
                    <header>یکتا فلز ۲۰ ساله شد</header>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری
                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</p>
                    <button type="button" class="btn btn-warning btn-sm">ادامه مطلب</button>
                </article>
                <article class="single-post">
                    <header>یکتا فلز</header>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری
                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</p>
                    <button type="button" class="btn btn-warning btn-sm">ادامه مطلب</button>
                </article>
                <article class="single-post">
                    <header>مطلب</header>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری
                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</p>
                    <button type="button" class="btn btn-warning btn-sm">ادامه مطلب</button>
                </article>
            </div>
        </div>

    </section>
    {{--about section--}}
    <section class="about rtl">
        <div class="linerup"></div>
        <h2>چرا یکتا فلز ؟</h2>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
        <div class="atribut container">
            <div class="row">
                <div class="col-sm single-about">
                    <div class="inner">
                        <figure class="oneimg"><img src="img/abute-1.png" alt=""></figure>
                        <div class="imgabout"></div>
                        <h3>سفارش سریع</h3>
                        <p>با هر ابزاری براحتی می توانید در یکتا فلز کالای خود را ثبت سفارش کنید </p>
                    </div>
                </div>
                <div class="col-sm single-about">
                    <div class="inner top">
                        <figure class="oneimg"><img src="img/aboute-2.png" alt=""></figure>
                        <div class="imgabout"></div>
                        <h3>صرفه جویی در زمان و هزینه</h3>
                        <p>با هر ابزاری براحتی می توانید در یکتا فلز کالای خود را ثبت سفارش کنید </p>
                    </div>
                </div>
                <div class="col-sm single-about">
                    <div class="inner">
                        <figure class="oneimg"><img src="img/aboute-3.png" alt=""></figure>
                        <div class="imgabout"></div>
                        <h3>ارائه پیش فاکتور</h3>
                        <p>با هر ابزاری براحتی می توانید در یکتا فلز کالای خود را ثبت سفارش کنید </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--partner section--}}
    <section class="partner rtl">
        <div class="linerup"></div>
        <h2>تامین کنندگان و همکاران</h2>
        <div class="inner container">
            <div class="row">
                <div class="col-sm"><img src="img/partner1.png" alt=""></div>
                <div class="col-sm"><img src="img/partner2.png" alt=""></div>
                <div class="col-sm"><img src="img/partner3.png" alt=""></div>
            </div>
        </div>
    </section>
    {{--newsletter section--}}
    <section class="newsletter">
        <p>آخرین اخبار و تحولات در صندوق ایمیل شما</p>
        <form action="">
            <label class="email-but">
                <input type="email" class="email" name="email" required>
                <img class="email-icon" src="img/mail.svg" alt="">
            </label>
            <button class="btn btn-warning btn-lg" name="submit">ثبت ایمیل</button>
        </form>
    </section>
</main>
<footer>
    <section class="footer container rtl">
        <div class="row">
            <div class="col-sm about-footer">
                <div class="col-sm">
                    <img src="img/logo.png" alt="">
                    <h5>یکتافلز خاورمیانه</h5>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه </p>
                </div>
            </div>
            <div class="col-sm">
                <ul class="contact">
                    <li>۰۲۱<span>۷۵۲۱۴</span></li>
                    <li><i class="icon-location"></i>پاسداران, نارنجستان چهارم</li>
                    <li><i class="icon-mail"></i>Info@yektafelez.com</li>
                </ul>
                <ul class="social">
                    <li><i class="icon-facebook2"></i></li>
                    <li><i class="icon-instagram"></i></li>
                    <li><i class="icon-telegram"></i></li>
                    <li><i class="icon-whatsapp"></i></li>
                    <li><i class="icon-twitter"></i></li>
                    <li><i class="icon-linkedin2"></i></li>
                </ul>
            </div>
            <div class="col-sm">
                <div class="licence">
                    <img src="img/samandehi.png" alt="">
                    <img src="img/enamd.png" alt="">
                    <p></p>
                </div>
            </div>
        </div>
    </section>
</footer>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.varagh-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 3000
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.tirahan-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 3000
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.milgerd-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 3000
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.profil-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 3000
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.nabshi-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 3000
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.saier-view').slick({
            autoplay: true,
            centerMode: true,
            rtl: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            focusOnSelect: true,
            autoplaySpeed: 4000
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.posts').slick({
            rtl: true,
            dots: true,
            arrows: false,
            focusOnSelect: true
        });
    });
</script>
</body>
</html>