@section('title')
Add Blog Menu
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
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">blog Add From</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('addmenublog') }}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter element List</label>
                            <input type="text" class="form-control" name="blog_list" @error('blog_list') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter slider price">
                            @error('blog_list')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter element link</label>
                            <input type="text" class="form-control" name="link" placeholder="Enter link">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            {{-- show slider --}}
            <table class="table table-stripped text-center">
                <tr class="">
                    <th>Sl No</th>
                    <th>blog list</th>
                    <th>blog link</th>
                    <th>Action</th>
                </tr>
                @foreach ($menublog as $menublog)
                    <tr>
                    <td>{{ $menublog->id }}</td>
                    <td>{{ $menublog->blog_list }}</td>
                    <td>{{ $menublog->link }}</td>

                        <td class="d-flex justify-content-center">
                            <div class="mr-3">
                                <a class="btn btn-sm btn-success" href="{{ route('editmenublog', $menublog->id) }}">Edit</a>
                            </div>
                            <div>
                                <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deletemenublog',$menublog->id) }}">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            @isset($editmenublog)
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">edit blog Add From</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updatemenublog', $editmenublog->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter blog List</label>
                                <input type="text" class="form-control" name="blog_list" value="{{ $menublog->blog_list }}" id="exampleInputEmail1" placeholder="Enter slider price">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter blog link</label>
                                <input type="text" class="form-control" name="link" value="{{ $menublog->link }}" id="exampleInputEmail1" placeholder="Enter link">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            @endisset
        </div>

        <!-- End col -->
        <!-- Start col -->


    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
