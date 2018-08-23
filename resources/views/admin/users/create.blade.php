

@extends('layouts.admin')

@section('content')

    <h1>Create Users </h1>
    {{--  <br></br>  --}}
        @include('includes.validationError')

        {!! Form::open(['method' => 'POST' , 'action' => 'AdminUsersController@store' , 'files' => true]) !!}

            <div class="form-group">

                {!! Form::label('name' , 'Name:', ['class' =>'control-label']) !!}
                {!! Form::text('name' , null , ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('email', 'Email:' , ['class' =>'control-label']) !!}
                {!! Form::email('email' , null , ['class' => 'form-control']) !!}

            </div>
            
            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password' , ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">

                {!! Form::label('role_id' , 'Role:' , ['class' => 'control-label']) !!}
                {!! Form::select('role_id' , ['' => 'Choose Options'] + $roles ,null , ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('status' , 'Status:' , ['class' => 'control-label']) !!}
                {!! Form::select('is_active' , array(1=>'Active', 0 => 'Inactive' ), 0 , ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::file('photo_id', null , ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::submit('Create | User' , ['class' => 'btn btn-primary']) !!}

            </div>

        {!! Form::close() !!}

@stop