@section('title')
Add Blog
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
                    <h5 class="card-title">Add Blog </h5>
                    <a href="{{route('blog.index')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fa fa-plus"></i> List</a>

                </div>
                    <div class="card-body">
                    <form method="post" action="{{route('blog.store')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-10">
                                <div class="form-group">
                            <label for="exampleInputEmail1">Enter blog img</label>
                            <input type="file" class="input-file" name="blog_img" @error('blog_img') is-invalid @enderror id="blog_img" placeholder="Enter slider img">
                            @error('blog_img')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                         <label for="category">post_category</label>
                        <select class="form-control" name="post_cat_id" id="post_cat_id">
                          @foreach( $postcategory as $category)
                       <option value="{{ $category->id }}">{{ $category->category_list}}</option>
                         @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="tag">post_tag</label>
                            <select class="form-control" name="post_tag_id" id="post_tag_id">
                         @foreach ($posttag as $tag)
                           <option value="{{$tag->id}}">{{$tag->tag_list}}</option>
                          @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter blog_date</label>
                            <input type="text" class="form-control" name="blog_date" @error('blog_date') is-invalid @enderror id="exampleInputEmail1" placeholder="blog_date">
                            @error('blog_date')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter blog_comment</label>
                            <input type="text" class="form-control" name="blog_comment" @error('blog_comment') is-invalid @enderror id="exampleInputEmail1" placeholder="blog_comment">
                            @error('blog_comment')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter blog_title</label>
                            <input type="text" class="form-control" name="blog_title" @error('blog_title') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter blog_title">
                            @error('blog_title')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter blog_detail</label>
                          <textarea id="" type="text" class="form-control" name="blog_detail" @error('blog_detail') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter slider price"> </textarea>

                            <!-- <input type="text" class="form-control" name="blog_detail" @error('blog_detail') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter slider price"> -->
                            @error('blog_detail')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter summary </label>
                            <input type="text" class="form-control" name="summary" @error('summary') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter summary">
                            @error('summary')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter description </label>
                            <input type="text" class="form-control" name="description" @error('description') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter logo">
                            @error('description')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter logo </label>
                            <input type="text" class="form-control" name="logo" @error('logo') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter logo">
                            @error('logo')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter link</label>
                            <input type="text" class="form-control" name="link" @error('link') is-invalid @enderror id="exampleInputEmail1" placeholder="link">
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

    {{-- </div> <!-- End row --> --}}
    </div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
