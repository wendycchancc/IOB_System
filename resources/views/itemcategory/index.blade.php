@extends('layouts.app')

@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>Management Date</th>
            <th>Create Date</th>
            <th>Delete Satate</th>
        </tr>
    </thead>
    <tbody>
    @foreach($itemcategory as $key => $value)
        <tr>
            <td><a href="{{ route('itemcategory.show', $value->itemcategoryId)}}">{{ $value->itemcategoryId }}</a></td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->managementdate }}</td>
            <td>{{ $value->createdate }}</td>
            <td>{{ $value->delete }}</td>
            <td>
                <form action="{{ route('itemcategory.destroy', $value->itemcategoryId)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete Order</button>
                </form>
            </td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('itemcategory/' . $value->itemcategoryId) }}">Show this Order</a>
            </td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('itemcategory/' . $value->itemcategoryId . '/edit') }}">Edit this Order</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
