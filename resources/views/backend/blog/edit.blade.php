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
                <h5 class="card-title">Edit blog index </h5>
                    <a href="{{route('blog.index')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> List</a>
                </div>
                    <div class="card-body">
                    <form method="post" action="{{route('blog.update',$blog->id)}}" enctype="multipart/form-data">
                      @csrf
                      @method('PATCH')

                      <div class="form-group">
                                <label for="exampleInputEmail1">Enter blog img</label>
                                <input type="file" class="form-control" name="blog_img"  value="{{ $blog->blog_img }}" id="exampleInputEmail1" placeholder="Enter blog_img">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter blog date</label>
                                <input type="text" class="form-control" name="blog_date" value="{{ $blog->blog_date }}" id="exampleInputEmail1" placeholder="Enter blog_date">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter blog title</label>
                                <input type="text" class="form-control" name="blog_title" value="{{ $blog->blog_title }}" id="exampleInputEmail1" placeholder="Enter blog_title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter blog_comment</label>
                                <input type="text" class="form-control" value="{{ $blog->blog_comment }}" name="blog_comment" @error('blog_comment') is-invalid @enderror id="exampleInputEmail1" placeholder="blog_comment">
                                @error('blog_comment')
                                    <span class="text-danger"><i>{{ $message }}</i></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter blog detail</label>
                                <textarea id="" type="text" class="form-control" name="blog_detail" value="{{ $blog->blog_detail }}" id="exampleInputEmail1" placeholder="Enter blog detail">{{ $blog->blog_detail }}</textarea>

                                {{-- <input type="text" class="form-control" name="blog_detail" value="{{ $blog->blog_detail }}" id="exampleInputEmail1" placeholder="Enter blog detail"> --}}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter summary</label>
                                <input type="text" class="form-control" name="summary" value="{{ $blog->summary }}" id="exampleInputEmail1" placeholder="Enter blog detail">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter description</label>
                                <input type="text" class="form-control" name="description" value="{{ $blog->description }}" id="exampleInputEmail1" placeholder="Enter blog detail">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter logo</label>
                                <input type="text" class="form-control" name="logo" value="{{ $blog->logo }}" id="exampleInputEmail1" placeholder="Enter logo">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter link</label>
                                <input type="text" class="form-control" value="{{ $blog->link }}" name="link" @error('link') is-invalid @enderror id="exampleInputEmail1" placeholder="link">
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
