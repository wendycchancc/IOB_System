@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="header text-center">Products</h2>
<div class="row">
        @foreach ($items as $key => $value)
            <!-- start single product -->
            <div class="col-md-6 col-sm-12 col-lg-4 product">
                <a href="{{ URL::to('shop', $value->itemsId) }}" class="custom-card">
                    <div class="card view overlay zoom">
                        <div class="container">
                        <img src="{{ URL::asset($value->image) }}" class="card-img-top " alt="..." width="200" height="250"/>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $value->name }}</h5>
                            <h5 class="card-title"><span class="float-left">$ {{ ($value->price) }}</span></h5>
                            {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single product -->
        @endforeach
 </div>
 </div>

@endsection
