@extends('layouts.app')

@section('content')

<h1>Showing {{ $items->itemsId }}</h1>

<div class="jumbotron text-center">
    <p>ID: {{ $items->itemsId }}</p>
    <p>Name: {{ $items->name }}</p>
    <p>Descriptions: {{ $items->descriptions }}</p>
    <p>Price: {{ $items->price }}</p>
    <p>Stock: {{ $items->stock }}</p>
    <img src="{{ URL::asset($items->image) }}" width="400" height="600"/><br>
    <p>File: {{ $items->file }}</p>
    <p>Status: {{ $items->status }}</p>
    <p>Delete: {{ $items->delete }}</p>
    <p>Management Date: {{ $items->managementdate }}</p>
    <p>Create Date: {{ $items->createdate }}</p>
    <p>Owner Id: {{ $items->ownerId }}</p>
    <p>Item category Id: {{ $items->itemcategoryId }}</p>
</div>

@endsection
