@extends('layouts.app')

@section('content')
@section('title', 'product')

<div class="container-fluid">
    <div class="row text-center p-3">
        <div class="col bg-alert text-dark"><h2>Buy Now and go Broke!!</h2></div>
        <div class="alert alert-warning text-danger p-1" role="alert"><h1>SPECIAL DEAL ONLY TODAY!!</h1><sub>ok... and maybe tomorrow!</sub></div>
    </div>
</div>

@foreach($products as $product)
    <div class="container-fluid" id="itemApp">     
        <div class="product-card p-4 shadow">
            <p class="clearfix pt-3">
                <div class="product-name display-5 text-danger">{{ $product->name }}</div>
                    <div>
                        <img class="product-image " src="images/webshop/{{ $product->image }}" width="100%">
                    </div>
                    <p><i>{{ $product->details }}</i></p>
                <div class="product-price text-center"><h1>${{ $product->price}},-</h1></div>
            </p>
        </div>
    </div>
@endforeach

@endsection
