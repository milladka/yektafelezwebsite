$('.alert-web i').on('click', function(){
    $('.alert-web').removeClass('current');
});
$( '.menu-user-click' ).click(function() {
    $( '.menu-list' ).toggleClass( "active" );
});
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});



$(document).ready(function() {
    function doAjax(content)
    {
        $.ajax({
            'url': '/echo/html/',
            'data':{
                'html': content
            },
            'method':'post',
            'success':function(response) {
                // On done, fade out the current content
                $('#loading').fadeOut('slow',function() {
                    // On done, fade in new content
                    $(this).html(response).fadeIn('slow');
                });
            }
        });
    }
    // Load first content
    doAjax($('.active').find('a').data('tab'));
    // Onclick of the tab
    $(this).on('click','.tab-button',function(){
        // Remove the instance of active
        $('.active').removeClass('active');
        // Traverse and add active
        $(this).parents('li').addClass('active');
        // Load the ajax for this tab
        doAjax($(this).data('tab'));
    });
});