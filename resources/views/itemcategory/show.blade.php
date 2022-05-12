@extends('layouts.app')

@section('content')

<h1>Showing {{ $itemcategory->itemcategoryId }}</h1>

<div class="jumbotron text-center">
    <p>ID: {{ $itemcategory->itemcategoryId }}</p>
    <p>Name: {{ $itemcategory->name }}</p>
    <p>Management Date: {{ $itemcategory->managementdate }}</p>
    <p>Create Date: {{ $itemcategory->createdate }}</p>
    <p>Delete Satate: {{ $itemcategory->delete }}</p>
</div>



@endsection
