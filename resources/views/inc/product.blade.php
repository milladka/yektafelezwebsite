{{--product section--}}
<?php
$url     = "http://192.168.30.122/Yekta_Getinformation.asmx?wsdl";
$context = stream_context_create(array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
));
$client = new SoapClient($url);
$param = array('username' => 'admin','password' => 'admin');
$result3  = $client->GetInformationGroupMainVaragh($param);
$outterArray3  = ((array)$result3);
$innerArray3  = ((array)$outterArray3['GetInformationGroupMainVaraghResult']);
$dataArray3  = ((array)$innerArray3['listObject']);
$dataArray4 = ((array)$dataArray3['OPMGroupVaragh']);
?>



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

        <div class="tab-content" style="direction: ltr;">
            <div id="varagh" class="tab-pane active show">
                <div class="varagh-view your-class owl-theme ">

                    <?php

                    foreach($dataArray4 as $holdingObject) {
                    $holdingArray = ((array)$holdingObject);
                    //serial group
                    $Grp1SerialNumber =  $holdingArray['Grp1SerialNumber'];
                    //detile group
                    $Grp1Detail =  $holdingArray['Grp1Detail'];
                    $imageData = ($holdingArray['Grp1Picture']);
                    $img=base64_encode($imageData);
                    //image group
                    $img2 = $img;
?>
                    <article class='item product-view'>
                            <div class="pro">
                                <figure> <img alt="105x105" class="img-responsive" src="data:image/jpg;charset=utf8;base64,<?php echo $img2 ?>"/></figure>
                                <a href="/product/<?php echo $Grp1SerialNumber?>">
                                    <div class="title-pro"><?php echo $Grp1Detail ?></div>
                                    <div class="price-pro"></div>
                                </a>
                            </div>
                        </article>

<?php
                    }
                    ?>



                    {{--<article class="item product-view">--}}
                        {{--<div class="pro">--}}
                            {{--<figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>--}}
                            {{--<a href="">--}}
                                {{--<div class="title-pro">سیاه، ۲، ۱۰۰۰</div>--}}
                                {{--<div class="price-pro">تماس بگیرید</div>--}}
                            {{--</a></div>--}}
                    {{--</article>--}}
                    {{--<article class="item product-view">--}}
                        {{--<div class="pro">--}}
                            {{--<figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>--}}
                            {{--<a href="">--}}
                                {{--<div class="title-pro">گالوانیزه، ۱.۲۵، ۱۰۰۰</div>--}}
                                {{--<div class="price-pro">تماس بگیرید</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="item product-view">--}}
                        {{--<div class="pro">--}}
                            {{--<figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>--}}
                            {{--<a href="">--}}
                                {{--<div class="title-pro">سیاه، ۲.۵، ۱۰۰۰</div>--}}
                                {{--<div class="price-pro">تماس بگیرید</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="item product-view">--}}
                        {{--<div class="pro">--}}
                            {{--<figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>--}}
                            {{--<a href="">--}}
                                {{--<div class="title-pro">گالوانیزه، ۱.۵، ۱۲۵۰</div>--}}
                                {{--<div class="price-pro">تماس بگیرید</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="item product-view">--}}
                        {{--<div class="pro">--}}
                            {{--<figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>--}}
                            {{--<a href="">--}}
                                {{--<div class="title-pro">گالوانیزه، ۱.۵، ۱۲۵۰</div>--}}
                                {{--<div class="price-pro">تماس بگیرید</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</article>--}}
                </div>
                <button type="button" class="btn btn-warning btn-sm">کلیه محصولات گروه ورق</button>
            </div>
            <div id="tirahan" class="tab-pane">
                {{--<div class="tirahan-view">--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--<figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>--}}
                            {{--<a href="">--}}
                                {{--<div class="title-pro">گالوانیزه ۲.۵ ۱۰۰۰</div>--}}
                                {{--<div class="price-pro">تماس بگیرید</div>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<button type="button" class="btn btn-warning btn-sm">کلیه محصولات گروه تیرآهن</button>--}}
            </div>
            <div id="milgerd" class="tab-pane">
                {{--<div class="milgerd-view">--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--<figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>--}}
                            {{--<a href="">--}}
                                {{--<div class="title-pro">گالوانیزه، هفت الماس ۲.۵ ۱۰۰۰</div>--}}
                                {{--<div class="price-pro">۱۰۰.۰۰۰ تومان</div>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<button type="button" class="btn btn-warning btn-sm">کلیه محصولات گروه میلگرد</button>--}}
            </div>
            <div id="profil" class="tab-pane">
                {{--<div class="profil-view">--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--<figure><img src="{{ asset('img/varagh-siyah-min.jpg')}}" alt=""></figure>--}}
                            {{--<a href="">--}}
                                {{--<div class="title-pro">گالوانیزه، هفت الماس ۲.۵ ۱۰۰۰</div>--}}
                                {{--<div class="price-pro">۱۰۰.۰۰۰ تومان</div>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<button type="button" class="btn btn-warning btn-sm">کلیه محصولات گروه پروفیل</button>--}}
            </div>
            <div id="nabshi" class="tab-pane">
                {{--<div class="your-class nabshi-view">--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--<figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>--}}
                            {{--<a href="">--}}
                                {{--<div class="title-pro">گالوانیزه، هفت الماس ۲.۵ ۱۰۰۰</div>--}}
                                {{--<div class="price-pro">۱۰۰.۰۰۰ تومان</div>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<button type="button" class="btn btn-warning btn-sm">کلیه محصولات گروه نبشی و ناودانی</button>--}}
            </div>
            <div id="saier" class="tab-pane">
                {{--<div class="saier-view">--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--<figure><img src="img/varagh-siyah-min.jpg" alt=""></figure>--}}
                            {{--<a href="">--}}
                                {{--<div class="title-pro">گالوانیزه، هفت الماس ۲.۵ ۱۰۰۰</div>--}}
                                {{--<div class="price-pro">۱۰۰.۰۰۰ تومان</div>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="product-view">--}}
                        {{--<div class="pro">--}}
                            {{--محصول ۱--}}
                        {{--</div>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<button type="button" class="btn btn-warning btn-sm">کلیه محصولات دیگر</button>--}}
            </div>
        </div>
    </div>
</section>