{{--sghl {{$id}}--}}
@extends('layout.app')

@section('content')
    @parent
    @include('inc.pagecontact')
    @include('inc.newsletter')
@endsection

@section('title')
    @parent
تماس با ما
@endsection

@section('subheader')
    @parent
    <div class="row">
        <div class="col-lg-12">
            <div class="title-section my-lg-5 my-5 pl-lg-5">
                <h1>تماس با ما</h1>
                <p>سوالی دارید؟ با استفاده از فرم زیر سوال خود را مطرح کنید. سعی می کنیم در اسرع وقت پاسخ دهیم.</p>
            </div>
        </div>
    </div>
@endsection
@section('style')
@endsection