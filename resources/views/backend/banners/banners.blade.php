@section('title')
Total Banners
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
                <a href="{{ route('addBannersPage') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add Banner"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Banner </a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

    <!-- Start row -->
    <div class="row">

        <div class="col-lg-12">
            @if (isset($banners))
                <table class="table table-stripped text-center">
                    <tr class="">
                        <th>Sl No</th>
                        <th>Banner_Subtitle</th>
                        <th>Banner_Title</th>
                        <th>Banner_Percentage</th>
                        <th>Banner_Type</th>
                        <th>Banner_Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($banners as $banner)
                        <tr>
                            <td>{{ $banner->id }}</td>
                            <td>{{ $banner->banner_subtitle }}</td>
                            <td>{{ $banner->banner_title }}</td>
                            <td>{{ $banner->banner_percentage }}</td>
                            <td>{{ $banner->banner_type }}</td>
                            <td><img src="{{ $banner->banner_image }}" alt="image" srcset="" height="100px" width="100px"></td>
                            <td class="d-flex justify-content-center">
                                <div class="mr-3">
                                    <a class="btn btn-sm btn-success" href="{{ route('editBanner', $banner->id) }}">Edit</a>
                                </div>
                                <div>
                                    <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deleteBanner', $banner->id) }}">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>

    {{-- </div> <!-- End row --> --}}
    </div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
