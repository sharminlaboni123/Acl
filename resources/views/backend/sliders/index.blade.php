@section('title')
Total Banners
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
                    <h5 class="card-title">slider List </h5>
                    <a href="{{route('slider.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Slider</a>

                </div>
                    <div class="card-body">
                    <div class="table-responsive">
      <table class="table table-stripped text-center table-responsive">
                <tr class="">
                    <th>Sl No</th>
                    <th>slider img</th>
                    <th>slider subtitle</th>
                    <th>slider title</th>
                    <th>slider price</th>
                    <th>slider button</th>
                    <th>slider link</th>
                    <th>Action</th>
                </tr>
                @foreach ($slider as $slider)
                    <tr>
                    <td>{{ $slider->id }}</td>


                <td><img width="100px" height="100px" src="{{asset('storage/slider/' .$slider->slider_img)}} "/></td>

                  <td>{{ $slider->slider_subtitle }}</td>
                    <td>{{ $slider->slider_title }}</td>
                    <td>{{ $slider->slider_price }}</td>
                    <td>{{ $slider->slider_button }}</td>
                    <td>{{ $slider->slider_link }}</td>

                    <td>
                        <a class="btn btn-warning mb-1" href="{{ route('slider.edit', $slider->id) }}"> Edit </a>
                        <form action="{{ route('slider.destroy', $slider->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure want to Delete')">Delete</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </table>

      </div>
                </div>
            </div>
        </div>


    {{-- </div> <!-- End row --> --}}
    </div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
