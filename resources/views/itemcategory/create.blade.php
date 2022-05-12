@extends('layouts.app')

@section('content')

<h1>Create a Item Category</h1>


{!! Form::open(['action' =>'itemcategoryController@store', 'method' => 'POST','files'=>true])!!}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group text-center">
        {{ Form::submit('Create the item category!', array('class' => 'btn btn-primary')) }}
    </div>
{{ Form::close() }}

@endsection
