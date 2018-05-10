@extends('app')
@section('content')

  {{--  {!! Form::open(array('route' => 'announcements.store')) !!}
    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title', null, array('class' => 'form-control'))}}

    {{Form::label('body', 'Body:')}}
    {{Form::textArea('body', null, array('class' => 'form-control')) }}

    {{Form::submit('Create Announcement', array('class' => 'btn btn-success btn-lg btn-block'))}}--}}

    {!! Form::close() !!}

<section class="booking-section">
    <div class="bookings-management-login-section">
        <p>Login to Manage your bookings</p>
        {{Form::open(['url' => ''])}}
        {{Form::label('username', 'Username:')}}
        {{Form::text('username', null, ['placeholder' => 'Enter your username'])}}

        <br />

        {{Form::label('password', "Password:")}}
        {{Form::password('password', null, ['placeholder' => 'Enter your password'])}}

        {{Form::submit('Login', array())}}
        {{Form::close()}}
    </div>
</section>
@endsection