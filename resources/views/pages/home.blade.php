@extends('app')
@section('content')
    <div class="pic-wrapper">
        <figure class="pic-1"></figure>
        <figure class="pic-2"></figure>
        <figure class="pic-3"></figure>
        <figure class="pic-4"></figure>
    </div>
    <section class="services-section" id="testing_animation">
        <p class="caption">Our Services</p>
        <p class="services-heading-text">Safe, Reliable and affordable travelling with Desh Car Hire </p>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <i class="fa fa-car fa-5x"></i>
                    <h3>Car Rental Services</h3>
                    <p>
                        Planning on travelling somewhere with your family or friends?
                        We have a wide range of cars tailored for your various needs
                        rent a car from us at affordable prices.
                    </p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-plane fa-5x"></i>
                    <h3>Airport Transfers</h3>
                    <p>
                        Don't be late for your flight! Book Desh car hire to transport you
                        to the Airport. Likewise, do not spend a lot of time at the airport,
                        let Desh car hire company take you home so you can
                        see your family.
                        Book us now.
                    </p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-map-marker fa-5x"></i>
                    <h3>Sightseeing trips</h3>
                    <p>
                        If you are planning on going for siteseeing trips across across
                        Malawi, the Desh Car Hire Company is the right solution for you.
                        Book us now Safely, comfortable and conveniently take you there.
                    </p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-taxi fa-5x"></i>
                    <h3>Taxi Services</h3>
                    <p>
                        Desh Car Hire Company also provides Taxi Services. If you are stranded and you
                        need a quick ride, call us or book us using our booking form and we wil
                        come and take your destinat
                    </p>
                </div>
            </div>
        </div>
    </section>{{--End of the services section of website--}}
    <section>
        <div class="fast-booking-form">
            <form action="{{action('BookingsController@book')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <table><!--Beginning of the table section-->
                    <tbody>
                    <tr>
                        <td style="border-left: 1px solid deepskyblue; padding-left: 10px;"><label
                                    for="pickup_location">Pick-up
                                location</label></td>
                        <td colspan="8">
                            <input type="text" name="pickup_location" placeholder="Where are you?..."
                                   id="pickup_location" required>
                        </td>
                    </tr>

                    <tr>
                        <td style="border-left: 1px solid deepskyblue; padding-left: 10px;"><label
                                    for="dropoff_location">Destination</label></td>
                        <td colspan="8">
                            <input type="text" name="dropoff_location" placeholder="Where are you going..."
                                   id="dropoff_location" required>
                        </td>
                    </tr>

                    <tr>
                        <td style="border-left: 1px solid deepskyblue; padding-left: 10px;"><label for="contact_number">Contact
                                Number</label></td>
                        <td colspan="8">
                            <input type="text" id="contact_number" name="contact_number" placeholder="Phone number"
                                   required/>
                        </td>
                    </tr>

                    <tr>
                        <td style="border-left: 1px solid deepskyblue; padding-left: 10px;"><label
                                    for="email_address">Email</label></td>
                        <td colspan="8">
                            <input type="email" id="email_address" name="email" placeholder="Enter your email address"/>
                        </td>
                    </tr>

                    <tr>
                        <td style="border-left: 1px solid deepskyblue; padding: 10px"><label for="pickup_date">Pick-up
                                <br/>date</label>
                        </td>
                        <td><input type="text" name="pickup_date" id="pickup_date"/></td>
                        <!--<td><label for="time">Pick-up <br/>time</label></td>-->
                        <td><input type="text" class="timepicker" name="pickup_time" id="time"/></td>

                        <td style="width: 50px;"></td>

                        <td style="border-left: 1px solid deepskyblue; padding-left: 10px; padding-right: 10px;"><label
                                    for="drop_off_date">Drop-off<br/> date</label></td>
                        <td><input type="text" name="drop_off_date" id="drop_off_date"/></td>
                        <!--<td style="border-left: 1px solid deepskyblue; padding-left: 10px; padding-right: 10px;"><label for="drop_off_time">Drop-off <br />time</label></td>-->
                        <td style="padding-left: 5px"><input type="text" class="timepicker" name="dropoff_time"
                                                             id="drop_off_time"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8"><input type="submit" value="Book"></td> <!--Submit button-->
                    </tr>
                    </tbody>
                </table><!--End of table section-->
            </form><!--End of form section-->
        </div><!--End of fast-booking form section-->
    </section>

    <section class="always-on-the-road-section">{{--beginning of the always on the road section--}}
        <div class="text-wrapper">
            <p><i class="fa fa-road fa-3x`"></i></p>
            <p>With our <span class="">energetic team</span> and <span>reliable fleet, we are
                Always on the road</span>, ready to take you there...</p>
        </div>
    </section>{{--End of the always on the road section--}}

    <section class="fleet-options" id="testing_animation">{{--Beginning of the fleet section where some of our vehicles are displayed--}}
        <p class="serve-your-needs-text">Explore Malawi With Desh Car Hire Company</p>
        <hr />

       {{-- <div class="container convinient-affordable-reliable">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-12">
                        <p><i class="fa fa-clock fa-4x"></i></p>
                        <h3>Convinient</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <p><i class="fa fa-usd fa-4x"></i></p>
                        <h3>Affordable Rates</h3>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <p><i class="fa fa-handshake-o fa-4x"></i></p>
                        <h3>Reliable</h3>
                    </div>

                </div>
            </div>
        </div>--}}
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="car-container">
                        <img src="{{URL::asset('images/demio.jpg')}}" alt="" class="image">
                        <div class="overlay">
                            <div class="text">
                                Mazda Demio
                                <button type="button" class="btn btn-info">Book now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="car-container">
                        <img src="{{URL::asset('images/toyota_corolla.png')}}" alt="" class="image">
                        <div class="overlay">
                            <div class="text">
                                Toyota Corolla
                                <button type="button" class="btn btn-info">Book now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="car-container">
                        <img src="{{URL::asset('images/nissan_note.jpg')}}" alt="" class="image">
                        <div class="overlay">
                            <div class="text">
                                Nissan Note
                                <button type="button" class="btn btn-info">Book now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="car-container">
                        <img src="{{URL::asset('images/xtrail_2001.jpg')}}" alt="" class="image">
                        <div class="overlay">
                            <div class="text">
                                Nissan Xtrail
                                <button type="button" class="btn btn-info">Book now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">

                <div class="col-md-3">
                    <div class="car-container">
                        <img src="{{URL::asset('images/tiida.png')}}" alt="" class="image">
                        <div class="overlay">
                            <div class="text">
                                Nissan Tiida
                                <button type="button" class="btn btn-info">Book now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="car-container">
                        <img src="{{URL::asset('images/toyota_wish.png')}}" alt="" class="image">
                        <div class="overlay">
                            <div class="text">
                                Toyota Wish
                                <button type="button" class="btn btn-info">Book now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="car-container">
                        <img src="{{URL::asset('images/bongo.jpg')}}" alt="" class="image">
                        <div class="overlay">
                            <div class="text">
                                Mazda Bongo
                                <button type="button" class="btn btn-info">Book now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="car-container">
                        <img src="{{URL::asset('images/toy_prado_cruiser.jpg')}}" alt="" class="image">
                        <div class="overlay">
                            <div class="text">
                                Toyota Prado
                                <button type="button" class="btn btn-info">Book now</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <hr />
    <section>

    </section>
    {{--<section class="discover-malawi">
        <div class="container">
            <div class="col-md-6">
                <h2>Discover Malawi</h2>
                <p class="discover-malawi-text">
                    Peaceful and stable, friendly people, abundant vegetation, amazing beaches,
                    wonderful waterfall, unique culture, historical heritage...
                    Discover all the Amazing places in Malawi with Desh Car Hire.
                    We have a wide range of services for you.
                </p>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{URL::asset('images/discover_mw.JPG')}}" class="img img-responsive"/>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    <section class="modal-section">
        <button type="button" class="modal-open-button" data-toggle="modal" data-target="#myModal">Book A car Now!</button>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Car Booking Section</h4>
                    </div>

                    <div class="modal-body">
                        <form action="{{action('BookingsController@book')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <label>Pickup location:</label>
                            <input type="text" name="pickup_location" class="form-control"/>

                            <label>Destination:</label>
                            <input type="text" name="dropoff_location" class="form-control"/>

                            <label>Contact Number:</label>
                            <input type="text" name="contact_number" c
                            <label>Email Address:</label>
                            <input type="email" name="email" class="form-control"/>
                            <br />
                            <table>
                                <tbody>lass="form-control"/>

                                <tr>
                                    <td>Pickup date</td>
                                    <td><input type="date" class="form-control" name="pickup_date" id="pickup_date" style="width: 100px" /></td>
                                    <td>time</td>
                                    <td><input type="time" name="pickup_time"  class="form-control" style="width: 100px;"/></td>
                                </tr>
                                <tr>
                                    <td>Drop off<br /> date</td>
                                    <td><input type="date" name="drop_off_date"class="form-control" style="width: 100px;"/></td>
                                    <td>time</td>
                                    <td><input type="time"  name="dropoff_time" class="form-control" style="width: 100px;"/></td>
                                </tr>
                                </tbody>

                            </table>
                            <br />
                            <input type="submit" class="form-control" value="Book">
                        </form><!--End of form section-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection