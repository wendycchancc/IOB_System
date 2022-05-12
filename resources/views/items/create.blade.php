@extends('layouts.app')

@section('content')
<h1>Create a Item</h1>


{!! Form::open(['action' =>'itemsController@store', 'method' => 'POST','files'=>true])!!}
    <div class="form-group">
        <select name="itemcategoryId" id="itemcategoryId">
        @foreach($itemcategory as $key => $value)
            <option value="{{$value->itemcategoryId}}">{{$value->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        {{ Form::hidden('id', $user->id, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('name', 'Item Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('descriptions', 'Descriptions') }}
        {{ Form::text('descriptions', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{ Form::text('price', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('stock', 'Stock') }}
        {{ Form::text('stock', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('image', 'Image') }}
        {{ Form::text('image', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('file', 'File') }}
        {{ Form::text('file', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group text-center">
        {{ Form::submit('Create the item !', array('class' => 'btn btn-primary')) }}
    </div>
{{ Form::close() }}
@endsection
