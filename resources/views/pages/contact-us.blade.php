@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <h3 class="page-header text-center">Reach us by</h3>
                <table class="table table-responsive">
                    <tbody>
                    <tr>
                        <td><i class="fa fa-envelope fa-3x"></i></td>
                        <td>{{Html::mailto('bookings@deshcarhire.com')}}</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-whatsapp fa-3x"></i> | <i class="fa fa-phone fa-3x"></i></td>
                        <td>0884402175</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-home fa-3x"></i></td>
                        <td>
                            <address>
                                Desh Car Hire & Taxi Services <br />
                                P.O Box 1125 <br />
                                Lilongwe <br />
                                Malawi.
                            </address>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-7">
                <h3 class="page-header text-center">Quick Contact Form</h3>
                {{Form::open(['action'=> 'ContactController@sendMessage'])}}
                {{Form::label('name', 'Full name:')}} <br />
                {{Form::text('fullname', null, ['class' => 'form-control', 'placeholder' => 'Enter your fullname'])}}<br />

                {{Form::label('email', "Email Address:")}}<br />
                {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email address'])}}<br />

                {{Form::label('message', 'Message:')}} <br />
                {{Form::textArea('message_body', null, ['class' => 'form-control', 'placeholder' => 'Type your message or query here']) }}
                <br />

                {{Form::submit('Send', ['class' => 'form-control btn btn-success'])}}
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection