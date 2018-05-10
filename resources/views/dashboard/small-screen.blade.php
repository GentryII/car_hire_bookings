@extends('app')
@section('content')
    <div class="container sm-wrapper">
        <div class="">

        </div>
        @if(is_null($booking))
            <div>There are no Bookings</div>
        @else
            <div>
                <a href="{{URL::to('/admin')}}"><i class="fa fa-backward"></i> Return</a>
                <hr />
            </div>
            <p>Hello, {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</p>
            <p>You have a new booking from a client whose details are:</p>
            <hr />
            <table class="table table-responsive">
                <tbody>
                <tr>
                    <td>Client Email Address</td>
                    <td>{{$booking->email}}</td>
                </tr>

                <tr>
                    <td>Client Phone Number</td>
                    <td>{{$booking->contact_number}}</td>
                </tr>

                <tr>
                    <td>Client Location</td>
                    <td>{{$booking->pickup_location}}</td>
                </tr>

                <tr>
                    <td>Client Destination</td>
                    <td>{{$booking->dropoff_location}}</td>
                </tr>

                <tr>
                    <td>Departure Date</td>
                    <td>{{$booking->pickup_date}} at {{$booking->pickup_time}}</td>
                </tr>

                <tr>
                    <td>Arrival Date</td>
                    <td>{{$booking->drop_off_date}} at {{$booking->dropoff_time}}</td>
                </tr>
                <tr class="text-center">
                    <td><a href="{{URL::to('/booking/{status}')}}" class="sm-confirm">Confirm</a></td>
                    <td><a href="" class="sm-reject">Reject</a></td>
                </tr>
                </tbody>
            </table>
        @endif
    </div>
@endsection