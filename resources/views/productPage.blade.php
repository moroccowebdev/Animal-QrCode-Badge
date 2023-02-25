@extends('layout.app')

@section('title', 'product page')

@section('content')

<section>
    @if (Session::has('sucssess'))
        <script>
            Swal.fire({
            icon: 'sucssess',
            title: 'Congratulation',
            text: '{{Session::get('sucssess')}}',
            })
        </script>
    @endif
    <div class="product">
        <div class="product__left">
            <img src="{{ asset('dan-barrett-0EhFkzIinlk-unsplash.jpg') }}" alt="...">
        </div>
        <div class="product__right">
            <h1 class="product__right__title title">{{ $product->title }}</h1>
            <p class="product__right__price text">{{ $product->price }} MAD</p>
            <p class="product__right__text text">
                {{ $product->description }}
            </p>
            <a href="#form" class="product__right__cta">buy Now</a>
        </div>
    </div>
    <div class="container my-5">
        <form id="form" action="{{route('buyNow', $product->id)}}" method="post" class="card w-75 mx-auto my-5 p-5" enctype="multipart/form-data">
            @csrf
            <div class="my-3">
                <label for="fullname" class="form-label">Full name</label>
                <input type="text" class="form-control" id="fullname" placeholder="Your fullname" name="fullname">
            </div>
            <div class="my-3">
                <label for="city" class="form-label">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Your city" name="city">
            </div>
            <div class="my-3">
                <label for="Tel" class="form-label">Tel:</label>
                <input type="text" class="form-control" id="phone" placeholder="Your phone" name="phone">
            </div>
            <div class="my-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity">
            </div>
            <button type="submit" class="mt-3 btn btn-warning">Buy Now</button>
        </form> 
    </div>
</section>

@endsection