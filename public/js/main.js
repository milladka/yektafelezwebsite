$('.alert-web i').on('click', function(){
    $('.alert-web').removeClass('current');
});
$( '.menu-user' ).click(function() {
    $( '.menu-list' ).toggleClass( "active" );
});
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
