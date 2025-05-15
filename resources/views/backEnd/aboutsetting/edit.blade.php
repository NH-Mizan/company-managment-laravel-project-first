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
        <li class="breadcrumb-item active" aria-current="page">Create</li>
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
      <!--begin::Quick Example-->
      <div class="card card-primary card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header">
        <div class="card-title">About update Now</div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form action="{{ route('about.update') }}" method="post">
        @csrf
        <input type="hidden" name="hidden_id" value="{{$about->id }}">
        <!--begin::Body-->
        <div class="card-body">
          <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $about->name }}">

          </div>
          <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Description</label>
          <input type="text" class="form-control" id="des" name="des" value="{{ $about->des }}">

          </div>

          <!-- <div class="input-group mb-3">
              <input type="file" class="form-control" id="inputGroupFile02">
              <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div> -->

          <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-secondary active">
            <input type="radio" name="status" value="1" id="option_a1" autocomplete="off" checked=""> Active
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="status" value="0" id="option_a2" autocomplete="off"> Inactive
          </label>

          </div>

        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!--end::Footer-->
        </form>
        <!--end::Form-->
      </div>

      </div>
    </div>

    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content-->
@endsection