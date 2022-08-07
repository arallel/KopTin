@extends('layouts.form')
@section('form')
<div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">C A T E G O R Y</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-7 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Edit Category</h5>
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
              <form action="{{ route('category.update', $category->id) }}" role="form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <input type="text" name="name" placeholder="Nama Category"
                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name',$category->name) }}"
                    autocomplete="off" required>
                    @error('name')
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
