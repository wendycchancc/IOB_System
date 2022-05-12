@extends('layouts.app')

@section('content')

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Image</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Item Satate</th>
            <th>Delete Satate</th>
            <th>Owner ID</th>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $key => $value)
        <tr>
            <td><a href="{{ route('items.show', $value->itemsId)}}">{{ $value->itemsId }}</a></td>
            <td>{{ $value->name }}</td>
            <td><img src="{{ URL::asset($value->image) }}"
            width="150" height="200"/></td>
            <td>{{ $value->stock }}</td>
            <td>{{ $value->price }}</td>
            <td>{{ $value->status }}</td>
            <td>{{ $value->delete }}</td>
            <td>{{ $value->ownerId }}</td>
            <td>
                <form action="{{ route('items.destroy', $value->itemsId)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete Item</button>
                </form>
            </td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('items/' . $value->itemsId) }}">Show this Item</a>
            </td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('items/' . $value->itemsId . '/edit') }}">Edit this Item</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
