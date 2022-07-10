$(document).ready(function(){
    //$('.menu-item-has-children a:not(.sub-menu a)').append('<i class="e-header-chevron ms-2 e-chevron-right"></i>');
    $( '<i class="e-header-chevron ms-2 e-chevron-right"></i>' ).insertAfter( '.menu-item-has-children a:not(.sub-menu a)' );
    $('#p-icon').click(function(){
        $(this).toggleClass('open');
        $('#e-main-menu').toggleClass('active-clip');
        $('#e-header').toggleClass('active-header');
        $('#e-main-menu').removeClass('collapse');
        if($('#e-main-menu').hasClass('active-menu')){

            $('#e-main-menu').removeClass('active-menu');

        }
        else{
            setTimeout(function() {

                //your code to be executed after 1 second
                $('#e-main-menu').addClass('active-menu');
            }, 200);
        }

    });
    $('.e-header-chevron').click(function(){
        console.log('test');
        $(this).parent('li').toggleClass('active-submenu');
        var parent = $(this);
        console.log(parent);
        $(this).next(' .sub-menu' ).slideToggle();
    });
});

const navbar = document.getElementById('e-header');


// OnScroll event handler
const onScroll = () => {

    // Get scroll value
    const scroll = document.documentElement.scrollTop;

    // If scroll value is more than 0 - add class
    if (scroll > 0) { //0
        navbar.classList.add("scrolled");


    } else {
        navbar.classList.remove("scrolled");

    }
}

// Use the function
window.addEventListener('scroll', onScroll);