@extends('layouts.userpage')
@section('userpage')

<!-- End Navbar -->
<main  class="main-content">
    <div class="container px-0 py-4 mx-6">
        <div class="row row-cols-1 row-cols-md-4 mt-5 g-6">
            @forelse ($products as $product)
            <div class="col">
    <div class="card"  style="width: 21rem;">
      <img src="storage/{{ $product->produk }}"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->description }}</p>
          <a href="#" class="btn btn-icon btn-3 btn-outline-primary" type="button">
  <span class="btn-inner--icon"><i class="fas fa-shopping-cart"></i></span>
  <span class="btn-inner--text">tambah ke keranjang</span>
</a>
         <a href="{{ route('detail.produk',$product->id) }}" class="btn btn-primary">detail</a>
       </div>
    </div>
</div>
@empty
{{ "product tidak ada" }}
@endforelse

</div>
    </div>
  </div>
</main>
@endsection

