@extends('layouts.app')

@section('content')
@section('title', 'product')

<div><h1>product page</h1>
    <div>
        <p><i> For now this is a temporary static array which is found in ProductController</i></p>
    </div>

        <div class='circle-container shadow'>
            @foreach ($products as $product)
                <p>
                    <button class="btn btn-outline-danger shadow">
                        <h5> {{ $product['name'] }} </h5>
                        <img class="thumbnail" src="{{ $product['images'] }}">{{ $product['price'] }}
                    </button>
                </p>
            @endforeach 
            <p class="mid-product flex text-center shadow">selected product</p>
        </div>

</div>
<link href="jCircle.css" rel="stylesheet">
<script src="jCircle.min.js"></script>

@endsection

