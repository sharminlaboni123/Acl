@section('title')
Total Footer
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
                    <h5 class="card-title">Add slider </h5>
                    <a href="{{route('footer_bottom.index')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> List</a>

                </div>
                    <div class="card-body">
                    <form method="post" action="{{route('footer_bottom.store')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-10">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Enter slider footer_bottom_img</label>
                            <input type="file" class="input-file" name="footer_bottom_img" @error('footer_bottom_img') is-invalid @enderror id="footer_bottom_img" placeholder="Enter footer_bottom_img">
                            @error('footer_bottom_img')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter footer_bottom_text</label>
                            <textarea id="" type="text" class="input-file" name="footer_bottom_text" @error('footer_bottom_text') is-invalid @enderror id="footer_bottom_text" placeholder="Enterfooter_bottom_text"></textarea>

                            <!-- <input type="text" class="input-file" name="footer_bottom_text" @error('footer_bottom_text') is-invalid @enderror id="footer_bottom_text" placeholder="Enterfooter_bottom_text"> -->
                            @error('footer_bottom_text')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter footer_bottom_link</label>
                            <input type="text" class="input-file" name="link" @error('link') is-invalid @enderror id="link" placeholder="Enterlink">
                            @error('link')
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
