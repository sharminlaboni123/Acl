@section('title')
postcategory Edit
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
                <h5 class="card-title">Edit post category </h5>
                    <a href="{{route('postcategory.index')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> List</a>
                </div>
                    <div class="card-body">
                    <form method="post" action="{{route('postcategory.update',$postcategory->id)}}" enctype="multipart/form-data">
                      @csrf 
                      @method('PATCH')

                           
                            <div class="form-group">
                                <label for="category_list">Enter category_list</label>
                                <textarea id="mytextarea" type="text" class="form-control" name="category_list" value="{{ $postcategory->category_list }}" id="exampleInputEmail1" placeholder="Enter category_list">{{ $postcategory->category_list }}</textarea>

                            </div>  
                            

                                    
                                   


                                    <div class="form-group mb-3">
                                   <button class="btn btn-success" type="submit">Update</button>
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
