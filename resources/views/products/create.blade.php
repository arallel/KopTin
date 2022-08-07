@extends('layouts.form')
@section('form')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
                <h1 class="text-white mb-2 mt-5">Form!</h1>
                <p class="text-lead text-white">Form</p>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-7 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Create Product</h5>
                    </div>
                    <div class="row px-xl-5 px-sm-4 px-3">
                        <div class="col-3 ms-auto px-1">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-3 px-1">

                        </div>
                        <div class="col-3 me-auto px-1">

                        </div>
                        <div class="mt-2 position-relative text-center">

                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" role="form" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="name" placeholder="nama produk"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    autocomplete="off" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="number" name="price" placeholder="harga produk"
                                    class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"
                                    autocomplete="off" required>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="deskripsi produk" name="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    value="{{ old('description') }}" autocomplete="off" required>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <select name="status" class="form-control" required>
                                    <option hidden>Pilih Status</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <select name="category_id" class="form-control" required>
                                    <option hidden>Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="produk"
                                    class="@error('produk') is-invalid @enderror" value="{{ old('produk') }}"
                                    autocomplete="off" required>
                                @error('produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
