@extends('layouts.admin')

@section('content')

    <h1> Edit User </h1>
    {{--  <br></br>  --}}
        @include('includes.validationError')

    <div class="col-sm-3">
        {{--  <img src=" {{ $user->photo ? $user->photo->file : 'codehacking/public/Images/placeholder/placeholder.png'}}" alt="" class="img-responsive img-rounded">  --}}
        <img src=" {{ $user->photo->file }}" alt="" class="img-responsive img-rounded">

    </div>

    <div class="col-sm-9">
        {!! Form::model($user , ['method' => 'PATCH' , 'action' => ['AdminUsersController@update' ,$user->id] , 'files' => true]) !!}

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
                {!! Form::select('is_active' , array(1=>'Active', 0 => 'Inactive' ), null , ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::file('photo_id', null , ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::submit('Create | User' , ['class' => 'btn btn-primary']) !!}

            </div>

        {!! Form::close() !!}
    </div>

@stop