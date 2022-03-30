@extends('layouts.app')

@section('content')
@section('title', 'Products Showcase')


<div class="container-fluid">
    <div class="row text-center p-3">
        <div class="col bg-alert text-dark">
            <h2>Buy Now and go Broke!!</h2>
        </div>
        <div class="alert alert-warning text-danger p-1" role="alert">
            <h1>SPECIAL DEAL ONLY TODAY!! <br>€ 1000 MORE EXPENSIVE!</h1><sub>ok... and maybe tomorrow!</sub>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-6 text-center">
                <h1 class="card display-3">Hello, Meet {{ $product->name }}</h1>
                <img class="card text-center" src="/images/webshop/{{ $product->image }}" alt="..." width="100%">
                <p class="details alert-warning text-danger ">{{ $product->details }}</p>
                <p class="card alert-warning display-3 text-danger"> € {{ $product->price }}</p>
                <div class="btn btn-outline-danger"><a href="/cart">Buy me now!</a></div>

            </div>
        </div>
    </div>
</main>

@endsection