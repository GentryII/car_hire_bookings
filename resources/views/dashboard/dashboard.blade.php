@extends('app')
@section('content')
    <div class="container dashboard-wrapper">
        <table class="table table-responsive table-striped">
            <caption>Bookings</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Pick-up location</th>
                <th>Destination</th>
                <th>Pick-up date</th>
                <th>Pick-up time</th>
                <th>Drop-off date</th>
                <th>Drop-off time</th>
                <th>Confirmation</th>

            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$booking->email}}</td>
                    <td>{{$booking->contact_number}}</td>
                    <td>{{$booking->pickup_location}}</td>
                    <td>{{$booking->dropoff_location}}</td>
                    <td>{{$booking->pickup_date}}</td>
                    <td>{{$booking->pickup_time}}</td>
                    <td>{{$booking->drop_off_date}}</td>
                    <td>{{$booking->dropoff_time}}</td>
                    <td>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-info">Confirm</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-danger">Reject</button>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="small-screens" style="margin-top: 10px">
            <div class="small-screen-header">
                <ul class="list-inline" style="text-align: right">
                    <li><i class="fa fa-user-circle fa-3x"></i> Welcome,  {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</li>
                </ul>

                <hr/>
            </div>
            @if(is_null($bookings))
                <h1>You do not have new Bookings</h1>
            @else
                @foreach($bookings as $booking)
                    @if($booking->bk_status == 0)
                         <h4 ><a href="{{URL::to('/booking/'.$booking->id.'/')}}" class="text-danger">{{$booking->pickup_location}} &nbsp;&nbsp;{{$booking->created_at}} </a></h4>
                         <hr />
                    @else
                        <h4><a href="{{URL::to('/booking/'.$booking->id.'/')}}">{{$booking->pickup_location}} &nbsp;&nbsp;{{$booking->created_at}}</a></h4>
                        <hr />
                    @endif
                @endforeach
            @endif

        </div>
    </div>
@endsection