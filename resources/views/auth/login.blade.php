@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Log in</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block mt-4']) !!}
            {!! Form::close() !!}
            
            <p class="mt-2">New user? {!! link_to_route('signup.get', 'Sign up now') !!}</p>
        </div>
    </div>
    
@endsection