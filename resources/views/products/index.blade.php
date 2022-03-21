@extends('layouts.app')

@section('content')
@section('title', 'Products')

<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 p-2 product-col">
            <div class="card shadow">
                <div class="card-body text-center">
                    <a href="/images/webshop/{{ $product->image }}">
                        <img src="/images/webshop/{{ $product->image }}" class="card-img-top" alt="...">
                    </a>
                    <h5 class="card-title text-style">{{ $product->name }}</h5>
                    <p class="details alert-warning text-danger ">{{ $product->details }}</p>
                    <p class="price text-style"> &euro; {{ $product->price }}</p>
                    <input type="button" class="btn btn-outline-danger submit-button shadow" value="Add to cart">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection