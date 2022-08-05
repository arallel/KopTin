@extends('layouts.main')
@section('isi')
<div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Product table</h6> <a href="{{ route('product.create') }}" class="btn bg-gradient-info">create</a>
            </div>
            <div class="card-body px-0 pt-0 pb-1">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-left" align="center">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" align="center">image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">deskripsi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($products as $product)
                    <?php $i = 1 ?>
                    <tr>
                      <td class="text-xs mb-0" align="center">
                        {{ $i++ }}
                      </td>
                      <td align="left">
                        {{ $product->name }}
                      </td>
                      <td class=" text-sm">
                        {{ $product->name }}
                        {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                      </td>
                      <td class="align-middle text-center">
                        {{-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> --}}
                        <textarea class="form-control" rows="3" cols="15" >{{ $product->name }}</textarea>
                      </td>
                      <td class="align-middle" align="center"><span class="badge badge-sm bg-gradient-success">Tersedia</span></td>
                      <td class="align-right" align="right">
                        <button type="button" class="btn bg-gradient-warning btn-sm">edit</button>
                        <button type="button" class="btn bg-gradient-danger btn-sm">delete</button>
                      </td>
                    </tr>
                    @empty
                    <td class="text-center align-middle" colspan="6" align="center">no data</td>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection