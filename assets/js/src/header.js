$(document).ready(function(){


    $('#p-icon').click(function(){
        $(this).toggleClass('open');
        $('#p-main-menu').toggleClass('active-clip');
        $('#p-header').toggleClass('active-header');

        if($('#p-main-menu').hasClass('active-menu')){

            $('#p-main-menu').removeClass('active-menu');

        }
        else{
            setTimeout(function() {

                //your code to be executed after 1 second
                $('#p-main-menu').addClass('active-menu');
            }, 200);
        }

    });

    document.getElementById('link-uzupelnienia-stale').classList.add('active');

});

const navbar = document.getElementById('p-header');
const statistics = document.getElementById("statistics");


// OnScroll event handler
const onScroll = () => {

    // Get scroll value
    const scroll = document.documentElement.scrollTop;
    var positionStatistics = statistics.offsetTop;

    // If scroll value is more than 0 - add class
    if (scroll > 0) { //0
        navbar.classList.add("scrolled");


    } else {
        navbar.classList.remove("scrolled");

    }

    if(scroll > positionStatistics - 550 ){
        const counters = document.querySelectorAll('.statistic-number');
        const speed = 2500;

        counters.forEach( counter => {
            const animate = () => {
                const value = +counter.getAttribute('toval');
                const data = +counter.innerText;

                const time = value / speed;
                if(data < value) {
                    counter.innerText = Math.ceil(data + time);
                    setTimeout(animate, 10);
                }else{
                    counter.innerText = value;
                }

            }

            animate();
        });
    }
}

// Use the function
window.addEventListener('scroll', onScroll);



