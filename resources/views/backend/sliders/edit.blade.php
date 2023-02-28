@section('title')
Banner Edit
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
                <h5 class="card-title">Edit slider </h5>
                    <a href="{{route('slider.index')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> List</a>
                </div>
                    <div class="card-body">
                    <form method="post" action="{{route('slider.update',$slider->id)}}" enctype="multipart/form-data">
                      @csrf
                      @method('PATCH')

                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider img</label>
                                    <input type="file" class="input-file" name="slider_img" value="{{$slider->slider_img}}"  id="slider_img" placeholder="Enter slider img">
                                      @error('slider_img')
                                      <span class="text-danger"><i>{{ $message }}</i></span>
                                      @enderror
                                    </div>

                                    <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider subtitle</label>
                                      <input type="text" class="form-control" name="slider_subtitle" value="{{$slider->slider_subtitle}}" id="exampleInputEmail1" placeholder="Enter slider subtitle">
                                     @error('slider_subtitle')
                                     <span class="text-danger"><i>{{ $message }}</i></span>
                                     @enderror
                                    </div>

                                    <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider title</label>
                                 <textarea id="mytextarea" type="text" class="form-control" name="slider_title" value="{{$slider->slider_title}}" id="exampleInputEmail1" placeholder="Enter slider title">{{$slider->slider_title}} </textarea>

                                    <!-- <input type="text" class="form-control" name="slider_title" value="{{$slider->slider_title}}" id="exampleInputEmail1" placeholder="Enter slider title"> -->
                                     @error('slider_title')
                                    <span class="text-danger"><i>{{ $message }}</i></span>
                                     @enderror
                                    </div>

                                    <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider price</label>
                                    <input type="text" class="form-control" name="slider_price" value="{{$slider->slider_price}}" id="exampleInputEmail1" placeholder="Enter slider price">
                                    @error('slider_price')
                                    <span class="text-danger"><i>{{ $message }}</i></span>
                                    @enderror
                                    </div>

                                    <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider button</label>
                                     <input type="text" class="form-control" name="slider_button"value="{{$slider->slider_button}}" id="exampleInputEmail1" placeholder="Enter slider button">
                                     @error('slider_button')
                                    <span class="text-danger"><i>{{ $message }}</i></span>
                                     @enderror
                                    </div>


                                <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider Link</label>
                                    <input type="text" class="form-control" value="{{$slider->slider_link}}"  name="slider_link" @error('slider_link')
                                        is-invalid @enderror id="exampleInputEmail1" placeholder="Enter slider button">
                                    @error('slider_link')
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
