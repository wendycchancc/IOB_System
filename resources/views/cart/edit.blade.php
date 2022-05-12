@extends('layouts.app')

@section('content')

<h1>Edit {{ $cart->cartId }}</h1>


{!! Form::open(['action' => ['cartController@update', $cart], 'method' => 'PUT','files'=>true])!!}
    <div class="form-group">
        {{ Form::hidden('id', $cart->cartId, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('quantity', 'Item Quantity') }}
        {{ Form::text('quantity', $cart->quantity, array('class' => 'form-control')) }}
    </div>
    <div class="form-group text-center">
        {{ Form::submit('Edit the Item Quantity!', array('class' => 'btn btn-primary')) }}
    </div>

{{ Form::close() }}
@endsection
