@section('title')
Add Arrival
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
                <a href="{{ route('newArrival') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="View Arrival"><i class="fa fa-eye" aria-hidden="true"></i> List</a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-15">
                <div class="card-header">
                    <h5 class="card-title">Arrival Add From</h5>
                </div>
                    <div class="card-body">
                        <form action="{{ route('addArrival') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group row">
                                        <label for="inputPhone3" class="col-sm-4 col-form-label">l_primary</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="l_primary" id="inputl_primary3" placeholder="l_primary">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputWishlist3" class="col-sm-4 col-form-label">l_sell</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="l_sell" id="inputl_sell3" placeholder="l_sell">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputLogin3" class="col-sm-4 col-form-label">p_gender</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="p_gender" id="inputp_gender3" placeholder="p_gender">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputLogin3" class="col-sm-4 col-form-label">p_rating_number</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="p_rating_number" id="inputp_rating_number3" placeholder="p_rating_number">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputPhone3" class="col-sm-4 col-form-label">p_item</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="p_item" id="inputp_item3" placeholder="p_item">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="inputWishlist3" class="col-sm-4 col-form-label">p_title</label>
                                    <div class="col-sm-8">
                                        {{-- <input type="text" class="form-control" name="p_title" id="inputp_title3" placeholder="p_title"> --}}
                                        <textarea id="mytextarea" type="text" class="form-control" name="p_title" id="inputp_title3" placeholder="p_title"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputAbout Us3" class="col-sm-4 col-form-label">p_price Us</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="p_price" id="inputp_price Us3" placeholder="p_price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputContact3" class="col-sm-4 col-form-label">p_n_price</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="p_n_price" id="inputp_n_price3" placeholder="p_n_price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputLogin3" class="col-sm-4 col-form-label">p_o_price</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="p_o_price" id="inputp_o_price3" placeholder="p_o_price">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputAbout Us3" class="col-sm-4 col-form-label">p_image</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="p_image" id="inputp_image3" placeholder="p_image">
                                    </div>
                                </div>
                                <!-- End col -->

                                <div class="form-group float-right">
                                    <div class="">
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
