@extends('layout.app')
@section('style')
    @parent
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/sc-1.5.0/datatables.min.css"/>
@endsection

@section('content')
    @parent
    @include('inc.pageproduct')
    @include('inc.newsletter')
@endsection

@section('script')
    @parent
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/sc-1.5.0/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#table_id').DataTable();
            $('#table_id tbody')
                .on( 'mouseenter', 'td', function (){
                    var colIdx = table.cell(this).index().column;
                    $( table.cells().nodes() ).removeClass( 'highlight' );
                    $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                });
        });
    </script>
@endsection

@section('title')
    @parent
    محصولات
@endsection

@section('subheader')
    @parent
    <div class="row">
        <div class="col-lg-12">
            <div class="title-section my-lg-5 my-5 pl-lg-5">
                <h1>درباره ما</h1>
                <p>محصولات گروه</p>
            </div>
        </div>
    </div>
@endsection