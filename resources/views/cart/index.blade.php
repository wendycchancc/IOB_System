@extends('layouts.app')

@section('content')

{!! Form::open(['action' =>'cartController@store', 'method' => 'POST','files'=>true])!!}

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Cart Id</th>
            <th>Item Image</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Select</th>
        </tr>
    </thead>
    <tbody>
    <div class="form-group">
    @foreach($cart as $key => $value)
        <tr>
            <td>{{ $value->cartId }}</td>
            <td><img src="{{ URL::asset($value->image) }}"
            width="150" height="200"/></td>
            <td><a href="{{ route('items.show', $value->itemsId)}}">{{ $value->name }}</a></td>
            <td>{{ $value->quantity }}</td>
            <td>{{ $value->price }}</td>
            <td>
                <input type="checkbox" name="cartId" value={{$value->cartId}}>
            </td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('cart/' . $value->cartId . '/edit') }}">Edit this Item Quantity</a>
            </td>
        </tr>
    @endforeach
    </div>
    </tbody>
</table>

<div class="form-group text-center">
    {{ Form::submit('Checkout !', array('class' => 'btn btn-primary')) }}
</div>
{{ Form::close() }}

@endsection
