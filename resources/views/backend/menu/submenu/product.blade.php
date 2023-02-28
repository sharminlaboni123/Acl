@section('title')
Add Product
@endsection
@extends('backend.layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show p-2 d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>&emsp;
        <strong class="fs-5">{{ session('success') }}</strong>
        {{-- <button type="button" class="btn-close pt-1" data-bs-dismiss="alert"> --}}
        </button>
    </div>

@endif
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">product Add From</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('addmenuproduct') }}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter page List</label>
                            <input type="text" class="form-control" name="product_list" @error('product_list') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter Product">
                            @error('product_list')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter page Link</label>
                            <input type="text" class="form-control" name="link" id="exampleInputEmail1" placeholder="Enter Product link">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            {{-- show slider --}}
            <table class="table table-stripped text-center">
                <tr class="">
                    <th>Sl No</th>
                    <th>product list</th>
                    <th>product link</th>
                    <th>Action</th>
                </tr>
                @foreach ($menuproduct as $menuproduct)
                    <tr>
                    <td>{{ $menuproduct->id }}</td>
                    <td>{{ $menuproduct->product_list }}</td>
                    <td>{{ $menuproduct->link }}</td>
                        <td class="d-flex justify-content-center">
                            <div class="mr-3">
                                <a class="btn btn-sm btn-success" href="{{ route('editmenuproduct', $menuproduct->id) }}">Edit</a>
                            </div>
                            <div>
                                <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deletemenuproduct',$menuproduct->id) }}">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            @isset($editmenuproduct)
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">edit product Add From</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updatemenuproduct', $editmenuproduct->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter product List</label>
                                <input type="text" class="form-control" name="product_list" value="{{ $editmenuproduct->product_list }}" id="exampleInputEmail1" placeholder="Enter product list">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter product Link</label>
                                <input type="text" class="form-control" name="link" value="{{ $editmenuproduct->link }}" id="exampleInputEmail1" placeholder="Enter product link">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            @endisset
        </div>

    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
