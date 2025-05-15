@extends('backEnd.layouts.master')
@section('content')
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
      <div class="col-sm-6">
      <h3 class="mb-0">Dashboard</h3>
      </div>
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-end">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Manage</li>
      </ol>
      </div>
    </div>
    <!--end::Row-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content Header-->
  <!--begin::App Content-->
  <div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header">
        <h3 class="card-title">Products Item</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table class="table table-bordered">
          <thead>
          <tr>
            <th style="width: 10px">SL</th>
            <th>Product image</th>
            <th>Title</th>
            <th> Status</th>
            <th colspan="3">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($data as $key => $value)


        <tr class="align-middle">
        <td>{{ $loop->iteration }}</td>
        <td>{{ $value->image }}</td>
        <td>{{ $value->description }}</td>
        <td>
        <div class="badge {{ $value->status == 1 ? 'bg-success' : 'bg-danger' }} ">
          {{ $value->status == 1 ? 'active' : 'inactive' }}
        </div>
        </td>
        <td>
          @if($value->status == 0)
          <form action="{{ route('products.active') }}" method="POST">
            @csrf
            <input type="hidden" name="hidden_id" value="{{ $value->id }}"  />
            <button class="btn btn-danger">
              <i class="fa-solid fa-thumbs-up"></i>
            </button>
          </form>
          @else
          <form action="{{ route('products.inactive') }}" method="POST">
            @csrf
            <input type="hidden" name="hidden_id" value="{{ $value->id }}"  />
            <button class="btn btn-success">
              <i class="fa-solid fa-thumbs-down"></i>
            </button>
          </form>
          @endif
       

        </td>
        <td> <a href="{{ route('products.destroy', $value->id) }}" class="delete-btn "><i
        class="fa-solid fa-trash "></i></a></td>
        <td>  <a href="{{ route('products.edite', $value->id) }}" class="update-btn "><i
        class="fa-solid fa-pen-to-square"></i></a></td>

        </tr>
      @endforeach


          </tbody>
        </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-end">
          <li class="page-item"><a class="page-link" href="#">«</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
        </div>
      </div>
      <!-- /.card -->

      </div>
    </div>

    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content-->
@endsection