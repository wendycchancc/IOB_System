@extends('layouts.app')

@section('content')
{!! Form::open(['action' => ['itemsController@update', $items], 'method' => 'PUT','files'=>true])!!}

    <div class="form-group">
        {{ Form::label('name', 'User Name') }}
        {{ Form::text('name', $items->name, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('descriptions', 'Descriptions') }}
        {{ Form::text('descriptions', $items->descriptions, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{ Form::text('price', $items->price, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('stock', 'Stock') }}
        {{ Form::text('stock', $items->stock, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('image', 'Image') }}
        {{ Form::text('image', $items->image, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('file', 'File') }}
        {{ Form::text('file', $items->file, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('status', 'Status') }}
        {{ Form::text('status', $items->status, array('class' => 'form-control')) }}
    </div>
    <div class="form-group text-center">
        {{ Form::submit('Update the Item Information !', array('class' => 'btn btn-primary')) }}
    </div>
{{ Form::close() }}

@endsection
