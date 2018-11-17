<header class="fixed-top">
    <?php
    // @package Yektafelezweb
    // Web server client in server Windows
    $client = new SoapClient('http://192.168.30.122/Yekta_Getinformation.asmx?wsdl');

    // Parameter in webserver *user* & *password*
    $param = array('username' => 'admin','password' => 'admin');

    // Check in and set method detile to web server
    $result  = $client->GetInformationShowWarning($param);
    // Check in and set method active to web server
    // Check array in method detile
    $outterArray  = ((array)$result);
    // Check array outter in method detile web service
    $innerArray  = ((array)$outterArray['GetInformationShowWarningResult']);

    // Check object in list of method detile
    $dataArray  = ((array)$innerArray['listObject']);
    //loop array in list object on detile
    foreach($dataArray as $holdingObject)
    {
        $holdingArray = ((array)$holdingObject);
        $showwarning = $holdingArray['WebShowWarning'];
        $WebShowMessage = $holdingArray['WebShowMessage'];
    }
    ?>
    <div class="alert-web current col-12" style="<?php
    if( $showwarning === true ){
        echo 'display:block;';
    }else{
        echo 'display:none;';
        }
        ?>"><?php echo $WebShowMessage ?><i class="icon-cross"></i>
    </div>
    <nav class="navbar navbar-expand-md navbar-dark rtl">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png')}}" alt="یکتافلزخاورمیانه - yektafelez khavarmianeh"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ ((Request::is('/')) ? 'active' : '') }}">
                    <a class="nav-link" href="{{ URL::to('/') }}">صفحه اصلی<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">خرید آنلاین</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">لیست قیمت</a>
                </li>
                <li class="nav-item {{ ((Request::is('contact-us')) ? 'active' : '') }}">
                    <a class="nav-link" href="{{ URL::to('contact-us') }}">تماس با ما</a>
                </li>
                <li class="nav-item {{ ((Request::is('about-us')) ? 'active' : '') }}">
                    <a class="nav-link" href="{{ URL::to('about-us') }}">درباره ما</a>
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