@extends('layouts.app')

@section('content')
@section('title', 'product')

<div class="container-fluid">
    <div class="row text-center p-3">
        <div class="col bg-alert text-dark"><h2>Buy Now and go Broke!!</h2></div>
        <div class="alert alert-warning text-danger p-1" role="alert"><h1>SPECIAL DEAL ONLY TODAY!!</h1><sub>ok... and maybe tomorrow!</sub></div>
    </div>
</div>

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
                    <input type="button" class="btn btn-outline-danger submit-button"  value="Add to cart">
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection
