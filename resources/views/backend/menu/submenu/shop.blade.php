@section('title')
Add Country
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
                    <form action="{{ route('addshop') }}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter shop List</label>
                            <input type="text" class="form-control" name="shop_list" @error('shop_list') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter shop">
                            @error('shop_list')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter shop Link</label>
                            <input type="text" class="form-control" name="link" placeholder="Enter Link">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            {{-- show slider --}}
            <table class="table table-stripped text-center">
                <tr class="">
                    <th>Sl No</th>
                    <th>shop list</th>
                    <th>shop link</th>
                    <th>Action</th>
                </tr>
                @foreach ($shop as $shop)
                    <tr>
                    <td>{{ $shop->id }}</td>
                    <td>{{ $shop->shop_list }}</td>
                    <td>{{ $shop->link }}</td>
                        <td class="d-flex justify-content-center">
                            <div class="mr-3">
                                <a class="btn btn-sm btn-success" href="{{ route('editshop', $shop->id) }}">Edit</a>
                            </div>
                            <div>
                                <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deleteshop',$shop->id) }}">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            @isset($editshop)
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">edit shop Add From</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updateshop', $editshop->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter  shop List</label>
                                <input type="text" class="form-control" name="shop_list" value="{{ $editshop->shop_list }}" id="exampleInputEmail1" placeholder="Enter product list">
                                <input type="text" class="form-control" value="{{ $editshop->link }}" name="link" placeholder="Enter Link">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter  shop link</label>
                                <input type="text" class="form-control" value="{{ $editshop->link }}" name="link" placeholder="Enter Link">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            @endisset
        </div>

        <!-- End col -->
        <!-- Start col -->


    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
