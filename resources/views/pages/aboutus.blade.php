{{--sghl {{$id}}--}}
@extends('layout.app')

@section('content')
    @parent
    @include('inc.pageabout')
    @include('inc.newsletter')
@endsection

@section('title')
    @parent
    درباره ما
@endsection

@section('subheader')
    @parent
    <div class="row">
        <div class="col-lg-12">
            <div class="title-section my-lg-5 my-5 pl-lg-5">
                <h1>درباره ما</h1>
                <p>متن کوتاه درباره ما</p>
            </div>
        </div>
    </div>
@endsection