@extends('layouts.detail')
@section('detail')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="https://assets-a1.kompasiana.com/items/album/2021/04/21/dinkes-sebut-ratusan-kantin-sekolah-kurang-sehat-m-14211-607feece349d1d45cc3803a2.jpeg"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6">
                                <h6><a class="decoration-none" href="{{ route('product.index') }}">Home</a> /
                                    {{ $product->category->name }}</h6>
                                <h3 class="py-2">{{ $product->name }}</h3>
                                <h2>Rp. {{ $product->price }}</h2>
                                <a href="" class="btn btn-primary">Add to Cart</a>
                                <h4 class="py-3">Product Details</h4>
                                <span>
                                    {{ $product->description }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
