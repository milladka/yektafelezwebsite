{{--product section--}}
<section class="product rtl">
    {{--<div class="linerup"></div>--}}
    {{--<h2>محصولات</h2>--}}
    {{--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>--}}
    <div class="tab-product container">

        <ul class="nav nav-tabs">
            <li><button onclick="openpro(event, 'varagh')"  class="tablinkss active show"><img src="{{ asset('img/anvae-varagh.png')}}" alt="varagh">ورق</button></li>
            <li><button onclick="openpro(event, 'tirahan')" class="tablinkss"><img src="{{ asset('img/tirahan-1.png')}}" alt="milgerd">تیرآهن</button></li>
            <li><button onclick="openpro(event, 'milgerd')" class="tablinkss"><img src="{{ asset('img/milgerd.png')}}" alt="varagh">میلگرد</button></li>
            <li><button onclick="openpro(event, 'profil')"  class="tablinkss"><img src="{{ asset('img/profil.png')}}" alt="varagh">لوله و پروفیل</button></li>
            <li><button onclick="openpro(event, 'nabshi')"  class="tablinkss"><img src="{{ asset('img/nabshi.png')}}" alt="varagh">نبشی و ناودانی</button></li>
            <li><button onclick="openpro(event, 'saier')"   class="tablinkss"><img src="{{ asset('img/khadamat-va-tajhizat.png')}}" alt="varagh">سایر اقلام</button></li>
        </ul>

        <div class="tab-content">
            <div id="varagh" class="tab-pane active show">
                <div class="varagh-view">
                    <article class="product-view">
                        <div class="pro">
                            <figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>
                            <a href="">
                                <div class="title-pro">روغنی، ۱.۵، ۱۲۵۰</div>
                                <div class="price-pro">تماس بگیرید</div>
                            </a>

                        </div>
                    </article>
                    <article class="product-view">
                        <div class="pro">
                            <figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>
                            <a href="">
                                <div class="title-pro">سیاه، ۲، ۱۰۰۰</div>
                                <div class="price-pro">تماس بگیرید</div>
                            </a></div>
                    </article>
                    <article class="product-view">
                        <div class="pro">
                            <figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>
                            <a href="">
                                <div class="title-pro">گالوانیزه، ۱.۲۵، ۱۰۰۰</div>
                                <div class="price-pro">تماس بگیرید</div>
                            </a>
                        </div>
                    </article>
                    <article class="product-view">
                        <div class="pro">
                            <figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>
                            <a href="">
                                <div class="title-pro">سیاه، ۲.۵، ۱۰۰۰</div>
                                <div class="price-pro">تماس بگیرید</div>
                            </a>
                        </div>
                    </article>
                    <article class="product-view">
                        <div class="pro">
                            <figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>
                            <a href="">
                                <div class="title-pro">گالوانیزه، ۱.۵، ۱۲۵۰</div>
                                <div class="price-pro">تماس بگیرید</div>
                            </a>
                        </div>
                    </article>
                    <article class="product-view">
                        <div class="pro">
                            <figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>
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
                            <figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>
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
                            <figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>
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
                            <figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>
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