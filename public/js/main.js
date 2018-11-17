$('.alert-web i').on('click', function(){
    $('.alert-web').removeClass('current');
});
$( '.menu-user-click' ).click(function() {
    $( '.menu-list' ).toggleClass( "active" );
});
// $(document).ready(function(){
//     $(".nav-tabs a").click(function(){
//         $(this).tab('show');
//     });
// });



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

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontents");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

function openpro(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tab-pane");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinkss");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
$('.your-class').owlCarousel({
    loop:true,
    margin:10,
    autoplay:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
$('.posts').owlCarousel({
    loop:true,
    margin:10,
    autoplay:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});