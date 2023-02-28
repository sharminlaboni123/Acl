@section('title')
Total posttag
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
        <div class="col-lg-12">
            <div class="card m-b-15">
                <div class="card-header">
                    <h5 class="card-title">Add post tag</h5>
                    <a href="{{route('posttag.index')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> List</a>

                </div>
                    <div class="card-body">
                    <form method="post" action="{{route('posttag.store')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-10">
                            
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter tag_list</label>
                            <textarea id="mytextarea" type="text" class="form-control" name="category_list" @error('tag_list') is-invalid @enderror id="tag_list" placeholder="Enter tag_list"></textarea>

                            @error('tag_list')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>

                                   
                                   
                        <div class="form-group">
                        <div class="form-group mb-3">
                        <button type="reset" class="btn btn-warning">Reset</button>
                         <button class="btn btn-primary" type="submit">Submit</button>
                         </div>
                         </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>

       
                  \

    {{-- </div> <!-- End row --> --}}
    </div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
