@extends('layouts.app')

@section('content')


{!! Form::open(['action' => ['itemcategoryController@update', $itemcategory], 'method' => 'PUT','files'=>true])!!}

    <div class="form-group">
        {{ Form::label('name', 'Registration Number') }}
        {{ Form::text('name', $itemcategory->name, array('class' => 'form-control')) }}
    </div>
    <div class="form-group text-center">
        {{ Form::submit('Update the item category!', array('class' => 'btn btn-primary')) }}
    </div>
{{ Form::close() }}

@endsection
