@extends('layouts.userpage')
@section('userpage')
<!-- Navbar Dark -->
<nav
  class="navbar navbar-expand-lg position-absolute  navbar-dark bg-gradient-dark z-index-3 py-3 w-100 shadow-none my-3 mt-0">
  <div class="container">
    <a class="navbar-brand text-white" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
      Argon Dashboard
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">
        <div class="row">
          <div class="bg-white col-auto border-radius-lg d-flex me-2">
              <input type="text" class="form-control border-0 ps-3" placeholder="Type here...">
              <button class="btn bg-gradient-primary my-1 me-1">Search</button>
            </div>
          <div class="col-auto m-auto">
            <a class="text-white cursor-pointer">
              <i class="fas fa-sign-in"></i>

            </a>
            <label class="text-white">login</label>
          </div>
          <div class="col-auto m-auto">
            <a class="text-white cursor-pointer position-relative">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </div>
        </div>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<main  class="main-content">
  <div class="container px-0 py-4 mx-6">  
    <div class="row row-cols-1 row-cols-md-4 mt-5 g-6">
  <div class="col">
    <div class="card"  style="width: 20rem;">
      <img src="imgdummy/makanandummy.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         <a href="#" class="btn btn-icon btn-3 btn-outline-primary" type="button">
  <span class="btn-inner--icon"><i class="fas fa-shopping-cart"></i></span>
  <span class="btn-inner--text">tambah ke keranjang</span>
</a>
         <a href="#" class="btn btn-primary">beli</a>
       </div>
    </div>
  </div>
  
</div>
    </div>
  </div>
</main>
@endsection