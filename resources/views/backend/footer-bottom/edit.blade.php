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
                <h5 class="card-title">Edit footer-bottom </h5>
                    <a href="{{route('footer_bottom.index')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> List</a>
                </div>
                    <div class="card-body">
                    <form method="post" action="{{route('footer_bottom.update',$futter->id)}}" enctype="multipart/form-data">
                      @csrf 
                      @method('PATCH')

                            <div class="row">
                                <div class="col-lg-10">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Enter footer_bottom_img</label>
                                <input type="file" class="input-file" name="footer_bottom_img" value="{{$futter->footer_bottom_img}}"  id="exampleInputEmail1" placeholder="Enter footer_bottom_img">
                                
                                <div class="form-group row">
                                    <label for="inputAbout Us3" class="col-sm-4 col-form-label">Old_image</label>
                                    <div class="col-sm-8">
                                        
                                        <img src="{{asset('storage/footer/' .$futter->footer_bottom_img)}}" alt="" srcset="" height="150px" width="200px">
                                        <input type="hidden" class="form-control" value="{{$futter->footer_bottom_img}}" name="old_image" id="inputold_image3" placeholder="old_image">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter footer_bottom_text</label>
                                <textarea id="" type="text" class="form-control" name="footer_bottom_text" value="{{ $futter->footer_bottom_text }}" id="exampleInputEmail1" placeholder="Enter footer_bottom_text"></textarea>

                                <!-- <input type="text" class="form-control" name="footer_bottom_text" value="{{ $futter->footer_bottom_text }}" id="exampleInputEmail1" placeholder="Enter footer_bottom_text"> -->
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter footer_bottom_link</label>
                                <input type="text"  value="{{ $futter->link }}"  class="input-file" name="link" @error('link') is-invalid @enderror id="link" placeholder="Enterlink">
                                @error('link')
                                    <span class="text-danger"><i>{{ $message }}</i></span>
                                @enderror
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
