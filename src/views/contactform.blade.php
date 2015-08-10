@extends('app')

@section('content')
    <div class="row">
        <div class="small-12 columns">
            <h1>Contact us</h1>
            {!! Form::open(['url'=>'/sendmail']) !!}
                <div class="row">
                    <div class="large-6 columns">
                        <label>Firstname
                            <input type="text" name="firstname" />
                        </label>
                    </div>
                    <div class="large-6 columns ">
                        <label>Lastname
                            <input type="text" name="lastname"/>
                        </label>
                    </div>
                </div>
                <input type="text" name="subject">
                <input type="email" name="email" placeholder="Your Email address">
                <textarea placeholder="Your message" name="content"></textarea>
                <input type="submit" class="primary button" value="Send message">
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection
