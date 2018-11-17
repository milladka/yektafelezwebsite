@extends('layout.app')


@section('content')
    @include('inc.product')
    @include('inc.blog')
    @include('inc.about')
    @include('inc.partner')
    @include('inc.newsletter')

@endsection

@section('title')
    @parent
    صفحه اصلی
@endsection

<?php
// @package Yektafelezweb
// Web server client in server Windows
$client = new SoapClient('http://192.168.30.122/Yekta_Getinformation.asmx?wsdl');

// Parameter in webserver *user* & *password*
$param = array('username' => 'admin','password' => 'admin');

// Check in and set method detile to web server
$result  = $client->GetInformationTitle($param);
// Check in and set method active to web server
// Check array in method detile
$outterArray  = ((array)$result);
// Check array outter in method detile web service
$innerArray  = ((array)$outterArray['GetInformationTitleResult']);

// Check object in list of method detile
$dataArray  = ((array)$innerArray['listObject']);
//loop array in list object on detile
foreach($dataArray as $holdingObject)
{
    $holdingArray = ((array)$holdingObject);
    $title = $holdingArray['WebTitle'];
    $yektaabout = $holdingArray['WebSubTitle'];
}
?>

@section('subheader')
    @parent
    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="title-section my-lg-5 py-lg-5 my-5 px-lg-5">
                <h1><?php echo $title ?></h1>
                <p><?php echo $yektaabout ?></p>
                <a href="">درباره یکتافلز</a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="section-from my-lg-3 d-none d-sm-block">
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
@endsection