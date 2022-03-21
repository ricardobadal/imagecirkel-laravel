@extends('layouts.app')

@section('content')
@section('title', 'products')

<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 p-2 product-col shadow">
            <div class="card">
                <img src="/images/webshop/{{ $product->image }}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title text-style">{{ $product->name }}</h5>
                    <p class="details alert-warning text-danger ">{{ $product->details }}</p>
                    <p class="price text-style"> &euro; {{ $product->price }}</p>
                    <input type="button" class="btn btn-outline-danger submit-button" value="Add to cart">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection