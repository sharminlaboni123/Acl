@section('title')
Add Country
@endsection
@extends('backend.layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Contentbar -->
<div class="contentbar" style="margin-top: 70px">
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show p-2 d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>&emsp;
        <strong class="fs-5">{{ session('success') }}</strong>
        {{-- <button type="button" class="btn-close pt-1" data-bs-dismiss="alert"> --}}
        </button>
    </div>
@endif
    {{-- lis + add btn show --}}
    <div class="row mb-3">
        <div class="col-sm-12"></div>
        <div class="col-sm-12">
            <div class="card-header float-right">
                <a href="{{ route('country') }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="See List"><i class="fa fa-eye" aria-hidden="true"></i> List</a>
            </div>
        </div>
    </div>
    {{-- lis + add btn show --}}
    
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Country Add From</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('addCountry') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Country</label>
                            <input type="text" class="form-control" name="country_name" @error('country_name') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter Country">
                            @error('country_name')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
