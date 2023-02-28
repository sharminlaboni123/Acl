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
                    <h5 class="card-title">blog post List </h5>
                    <a href="{{route('blog.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fa fa-plus"></i> Add Blog</a>

                </div>
                    <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-stripped text-center table-responsive">
                <tr class="">
                    <th>Sl No</th>
                    <th> img</th>
                    <th>date</th>
                    <th>title</th>
                    <th>comment</th>
                    <th>detail</th>
                    <th>summary</th>
                    <th>description</th>
                    <th>logo</th>
                    <th>link</th>
                    <th>Action</th>
                </tr>
                @foreach ($blog as $blog)
                    <tr>
                    <td>{{ $blog->id }}</td>


                <td><img width="100px" height="100px" src="{{asset('storage/blog/' .$blog->blog_img)}} "/></td>

                  <td>{{ $blog->blog_date }}</td>
                    <td>{{ $blog->blog_title }}</td>
                    <td>{{ $blog->blog_comment }}</td>
                    <td>{{ Str::substr($blog->blog_detail, 0, 15) }} .....</td>
                    <td>{{ Str::substr($blog->summary, 0, 15) }} .....</td>
                    <td>{{ Str::substr($blog->description, 0, 15) }} .....</td>
                    <td>{{ $blog->logo }}</td>
                    <td>{{ $blog->link }}</td>
                        <td class="d-flex justify-content-center">
                        <a class="btn btn-warning" href="{{ route('blog.edit', $blog->id) }}"> Edit </a>
                        <form class="mx-1" action="{{ route('blog.destroy', $blog->id) }}" method="post" style="display:inline">
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
