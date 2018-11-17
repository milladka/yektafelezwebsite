{{--blog section--}}
<?php
// $url     = "http://service.yektafelez.com/Yekta_Getinformation.asmx?wsdl";
$url     = "http://192.168.30.122/Yekta_Getinformation.asmx?wsdl";
$context = stream_context_create(array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
));

$client = new SoapClient($url, array('stream_context' => $context));
$param = array('username' => 'admin','password' => 'admin','feature' => 'SOAP_SINGLE_ELEMENT_ARRAYS');
$result  = $client->GetInformationWeblog($param);
$outterArray  = ((array)$result);
$innerArray  = ((array)$outterArray['GetInformationWeblogResult']);
$dataArray  = ((array)$innerArray['listObject']);
$array = json_decode(json_encode($dataArray), True);

        ?>

<section class="blog">
    <div class="linerup"></div>
    <h2>آخرین اخبار و مقالات</h2>
    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
    <div class="container">
        <div class="posts">
            <?php
            foreach ($array['OPMWebBlog'] as $item) {
                echo "<article class='single-post rtl'>";
                echo "<header>" . $item['WebTitle'] . "</header>";
                echo "<p>". $item['WebBody'] ."</p>";
                echo "<button type='button' class='btn btn-warning btn-sm'>ادامه مطلب</button>";
                    echo "</article>";
            }
            ?>
            {{--<article class="single-post rtl">--}}
                {{--<header></header>--}}
                {{--<p></p>--}}
                {{--<button type="button" class="btn btn-warning btn-sm"></button>--}}
            {{--</article>--}}
            {{--<article class="single-post">--}}
                {{--<header>یکتا فلز</header>--}}
                {{--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}
                    {{--چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی--}}
                    {{--مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه--}}
                    {{--درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری--}}
                    {{--را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</p>--}}
                {{--<button type="button" class="btn btn-warning btn-sm">ادامه مطلب</button>--}}
            {{--</article>--}}
            {{--<article class="single-post">--}}
                {{--<header>مطلب</header>--}}
                {{--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}
                    {{--چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی--}}
                    {{--مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه--}}
                    {{--درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری--}}
                    {{--را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</p>--}}
                {{--<button type="button" class="btn btn-warning btn-sm">ادامه مطلب</button>--}}
            {{--</article>--}}
        </div>
    </div>

</section>