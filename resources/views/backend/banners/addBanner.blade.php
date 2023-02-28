@section('title')
Add Total Banners
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
                <a href="{{ route('banners') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Show Banner"><i class="fa fa-eye" aria-hidden="true"></i> List</a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-15">
                <div class="card-header">
                    <h5 class="card-title">Add Banner Advertisement</h5>
                </div>
                    <div class="card-body">
                        <form action="{{ route('addBanner') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="form-group row">
                                        <label for="inputPhone3" class="col-sm-4 col-form-label">Banner_Subtitle</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="banner_subtitle" id="inputbanner_subtitle3" placeholder="banner_subtitle">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputWishlist3" class="col-sm-4 col-form-label">Banner_Title </label>
                                        <div class="col-sm-8">
                                            {{-- <input type="text" class="form-control" name="banner_title" id="inputbanner_title3" placeholder="banner_title"> --}}
                                            <textarea type="text" class="form-control" name="banner_title" id="mytextarea" placeholder="banner_title"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputLogin3" class="col-sm-4 col-form-label">Banner_Percentage</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="banner_percentage" id="inputbanner_percentage3" placeholder="banner_percentage">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputLogin3" class="col-sm-4 col-form-label">Banner_Type</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="banner_type" id="inputbanner_type3" placeholder="banner_type">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputAbout Us3" class="col-sm-4 col-form-label">banner_image</label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="banner_image" id="inputbanner_image3" placeholder="banner_image">
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
