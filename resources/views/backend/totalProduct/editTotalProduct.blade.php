@section('title')
Edit Total Product
@endsection
@extends('backend.layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar my-2">
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


    {{-- list + add btn show --}}
    <div class="row mb-3">
        <div class="col-sm-12"></div>
        <div class="col-sm-12">
            <div class="card-header float-right">
                <a href="{{ route('totalProduct') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Edit Total Product"><i class="fa fa-eye" aria-hidden="true"></i> List</a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-15">
                <div class="card-header">
                    <h5 class="card-title">Edit Total Product</h5>
                </div>
                    <div class="card-body">
                        <form action="{{ route('updateTotalProduct', $totalProduct->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="form-group row">
                                        <label for="inputPhone3" class="col-sm-4 col-form-label">Title</label>
                                        <div class="col-sm-8">
                                            {{-- <input type="text" class="form-control" value="{{ $totalProduct->title }}" name="title" id="inputtitle3" placeholder="title"> --}}
                                            <textarea id="mytextarea" type="text" class="form-control" value="{{ $totalProduct->title }}" name="title" placeholder="title">></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputWishlist3" class="col-sm-4 col-form-label">People</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ $totalProduct->people }}" name="people" id="inputpeople3" placeholder="people">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputLogin3" class="col-sm-4 col-form-label">Total Product</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ $totalProduct->total_product }}" name="total_product" id="inputtotal_product3" placeholder="total_product">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputAbout Us3" class="col-sm-4 col-form-label">tp_image</label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="tp_image" id="inputtp_image3" placeholder="Tp_Image">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputAbout Us3" class="col-sm-4 col-form-label">Old_image</label>
                                        <div class="col-sm-8">
                                            <img src="{{ asset($totalProduct->tp_image) }}" alt="" srcset="" height="150px" width="200px">
                                            <input type="hidden" class="form-control" value="{{ $totalProduct->tp_image }}" name="old_image" id="inputold_image3" placeholder="old_image">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    {{-- </div> <!-- End row --> --}}
    </div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
