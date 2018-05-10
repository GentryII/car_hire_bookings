<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('bs/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('js/timepicker/jquery.timepicker.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}"  />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('animate/animate.min.css')}}"  />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/media_queries.css')}}"/>
    <title>Home | Desh Car Hire Company</title>
</head>
<body>
<div class="top-contacts-list">
    <span><i class="fa fa-phone"></i> | <i class="fa fa-whatsapp"></i> 0884402175</span>
    <span><i class="fa fa-envelope"></i> bookings@deshcarhire.com</span>
</div>
<section class="header-wrapper">
    <div class="nav-bar" id="myTopnav" >
        <img src="{{URL::asset('images/Desh_Logo_sample 5.png')}}"/>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        <a href="{{URL::to('/contact-us')}}">Contact Us</a>
        {{--<a href="{{URL::to('/bookings')}}">Bookings</a>--}}
        <a href="{{URL::to('/about-us')}}">About Desh</a>
        <a href="{{URL::to('/')}}">Home</a>
    </div>
</section> <!--End of the header section-->
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <div class="alert-content">
            {{Session::get('flash_message')}}
        </div>
    </div>
@endif
{{--this is where all the other pages are rendered--}}
@yield('content')

<section class="footer-section"><!--End of main body section-->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="text-center page-header">Quick Links</h3>
                    <ul>
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('/about-us')}}">About Desh</a></li>
                        <li><a href="{{URL::to('/bookings')}}">Bookings</a></li>
                        <li><a href="{{URL::to('/terms-and-conditions')}}">Terms and Conditions</a></li>
                        <li><a href="{{URL::to('/contact-us')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center page-header">Contact Us</h3>
                    <ul>
                        <li>Call us on&nbsp; : &nbsp;+265 888 928 077</li>
                        <li>Email us on&nbsp;  : &nbsp;bookings@deshcarhire.com</li>
                        <li>
                            <address>
                                Desh Car Hire & Taxi Services <br />
                                P.O Box 1125 <br />
                                Lilongwe <br />
                                Malawi.
                            </address>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center page-header">Why Ride With Us?</h3>
                    <p>We have the best rental fares for all our categories of cars for your errands.</p>
                    <p>Make your online reservations and secure a confirmation of your booking.</p>
                    <p>We provide you with round the clock assistance. Please contact our 24-hours Customer Service number (+265) 884 402 175 for any enquires.</p>
                </div>
            </div>
        </div>
        <hr />
        <div class="social-links">
            <ul class="list-inline">
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-instagram"></i></a> </li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </footer>
    <p class="copyright-text">&copy;2017 DESH Car hire Company</p>
</section> <!--End of the footer section-->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46156385-1', 'cssscript.com');
    ga('send', 'pageview');

</script>
<script type="text/javascript" src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('bs/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/timepicker/jquery.timepicker.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/custom_js.js')}}"></script>
</body>
</html>