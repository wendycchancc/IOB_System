@extends('layouts.app')

@section('content')

{!! Form::open(['action' => ['userController@update', $users], 'method' => 'PUT','files'=>true])!!}

    <div class="form-group">
        {{ Form::label('name', 'User Name') }}
        {{ Form::text('name', $users->name, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('role', 'Role') }}
        {!! Form::select('role', array('admin' => 'admin', 'customer' => 'customer' , 'staff' => 'staff'
        , 'bookseller' => 'bookseller'),$users->role); !!}
    </div>
    <div class="form-group">
        {{ Form::label('phone', 'Phone') }}
        {{ Form::text('phone', $users->phone, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('fax', 'Fax') }}
        {{ Form::text('fax', $users->fax, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('telex', 'Telex') }}
        {{ Form::text('telex', $users->telex, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address', $users->address, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('postcode', 'Post Code') }}
        {{ Form::text('postcode', $users->postcode, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('country', 'Country') }}
        {{ Form::text('country', $users->country, array('class' => 'form-control')) }}
    </div>
    <div class="form-group text-center">
        {{ Form::submit('Update the User Information !', array('class' => 'btn btn-primary')) }}
    </div>
{{ Form::close() }}

@endsection
