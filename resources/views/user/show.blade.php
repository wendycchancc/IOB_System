@extends('layouts.app')

@section('content')

<h1>Showing {{ $users->id }}</h1>

<div class="jumbotron text-center">
    <p>ID: {{ $users->id }}</p>
    <p>Name: {{ $users->name }}</p>
    <p>E-mail Address: {{ $users->email }}</p>
    <p>Role: {{ $users->role }}</p>
    <p>Phone: {{ $users->phone }}</p>
    <p>Fax: {{ $users->fax }}</p>
    <p>Telex: {{ $users->telex }}</p>
    <p>Address: {{ $users->address }}</p>
    <p>Post Code: {{ $users->postcode }}</p>
    <p>Country: {{ $users->country }}</p>
</div>

@endsection
