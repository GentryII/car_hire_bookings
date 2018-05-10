/**
 * Created by Josh on 10-Nov-17.
 */



window.onload = function () {
    var servicesDIV = document.getElementsByClassName('services-info');
    var currentDate = new Date();
    /*This function controls the datepicture from the Jquery UI*/
    $(function () {
        $("#pickup_date").datepicker({
            dateFormat: 'yy-mm-dd'
        });

        $("#pickup_date").datepicker('setDate', currentDate);


        $("#drop_off_date").datepicker({
            dateFormat: 'yy-mm-dd',
        });
        $("#drop_off_date").datepicker('setDate', currentDate);

    });

    /*This function controls the TimePicker*/
    $(function() {
        $('input.timepicker').timepicker({
            defaultTime: '00:00',
            interval: 5,
            timeFormat: 'HH:mm:ss'
        });
    });

    $(window).scroll(function() {
        $('#testing_animation').each(function() {
            var wordPos = $(this).offset().top;
            var bottomOfPage = $(window).scrollTop()+$(window).height();
           /* var animationElement = $('.car-container img');*/
            var servicesAnimationElement = $('.services-section .col-md-3');

            if (wordPos < bottomOfPage) {
                /*animationElement.addClass("animated bounceIn");*/
                servicesAnimationElement.addClass("animated zoomIn");
            }
        });

    });

    // $('div.alert').delay(3000).slideUp(300);
};


function myFunction() {

    /*  alert("You have clicked me");*/
    var x = document.getElementById("myTopnav");
    if (x.className === "nav-bar") {
        x.className += " responsive";
    } else {
        x.className = "nav-bar";
    }
}