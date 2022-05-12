@extends('layouts.app')

@section('content')

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>role</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $value)
        <tr>
            <td><a href="{{ route('user.show', $value->id)}}">{{ $value->id }}</a></td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->role }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('user/' . $value->id) }}">Show this User</a>
            </td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('user/' . $value->id . '/edit') }}">Edit this User</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
