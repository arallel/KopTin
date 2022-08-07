@extends('layouts.main')
@section('isi')
<div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Category Table</h6> <a href="{{ route('category.create') }}" class="btn bg-gradient-info">Create</a>
            </div>
            <div class="card-body px-0 pt-0 pb-1">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-left" align="center">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                      @php $i = 1; @endphp
                    @forelse($categories as $category)
                    @if ($category->id >= 2)
                    <tr>
                        <td class="text-xs mb-0" align="center">
                          {{ $i++ }}
                        </td>
                        <td class=" text-sm">
                          {{ $category->name}}
                          {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                        </td>
                        <td class="align-center" align="center">
                          <form action="{{ route('category.destroy', $category->id) }}" onsubmit="return confirm('Apakah Anda Yakin ?')" method="post">
                              <a class="btn bg-gradient-warning btn-sm" href="{{ route('category.edit', $category->id) }}">Ubah</a>
                              @csrf
                              @method('DELETE')
                              <button class="btn bg-gradient-danger btn-sm">Hapus</button>
                          </form>
                        </td>
                      </tr>
                    @else

                    <td class="text-center align-middle" colspan="6" align="center"></td>
                    @endif

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
