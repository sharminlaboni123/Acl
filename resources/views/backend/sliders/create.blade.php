@section('title')
Add Slider
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
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" /></svg>&emsp;
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
                    <a href="{{route('slider.index')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip"
                        data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> List</a>

                </div>
                <div class="card-body">
                    <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider img</label>

                                    <input type="file" class="input-file" name="slider_img" @error('slider_img')
                                        is-invalid @enderror id="slider_img" placeholder="Enter slider img">
                                    @error('slider_img')
                                    <span class="text-danger"><i>{{ $message }}</i></span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider subtitle</label>
                                    <!-- <textarea id="mytextarea" type="text" class="form-control" name="slider_subtitle" @error('slider_subtitle') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter slider subtitle"></textarea>  -->

                                    <input type="text" class="form-control" name="slider_subtitle"
                                        @error('slider_subtitle') is-invalid @enderror id="exampleInputEmail1"
                                        placeholder="Enter slider subtitle">
                                    @error('slider_subtitle')
                                    <span class="text-danger"><i>{{ $message }}</i></span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider title</label>
                                    <textarea id="mytextarea" type="text" class="form-control" name="slider_title"
                                        @error('slider_title') is-invalid @enderror id="exampleInputEmail1"
                                        placeholder="Enter slider title"></textarea>

                                    <!-- <input type="text" class="form-control" name="slider_title" @error('slider_title') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter slider title"> -->
                                    @error('slider_title')
                                    <span class="text-danger"><i>{{ $message }}</i></span>
                                    @enderror
                                </div>



                                <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider price</label>
                                    <input type="text" class="form-control" name="slider_price" @error('slider_price')
                                        is-invalid @enderror id="exampleInputEmail1" placeholder="Enter slider price">
                                    @error('slider_price')
                                    <span class="text-danger"><i>{{ $message }}</i></span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider button</label>
                                    <input type="text" class="form-control" name="slider_button" @error('slider_button')
                                        is-invalid @enderror id="exampleInputEmail1" placeholder="Enter slider button">
                                    @error('slider_button')
                                    <span class="text-danger"><i>{{ $message }}</i></span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputEmail1">Enter slider Link</label>
                                    <input type="text" class="form-control" name="slider_link" @error('slider_link')
                                        is-invalid @enderror id="exampleInputEmail1" placeholder="Enter slider button">
                                    @error('slider_link')
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

        <!-- <div class="col-lg-12">
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
        </div> -->

        {{-- </div> <!-- End row --> --}}
    </div>
    <!-- End Contentbar -->
    @endsection
    @section('script')

    @endsection
