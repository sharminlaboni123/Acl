@section('title')
Add Page
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
                    <h5 class="card-title">page Add From</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('addpage') }}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter page List</label>
                            <input type="text" class="form-control" name="page_list" @error('page_list') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter slider price">
                            @error('page_list')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter page link</label>
                            <input type="text" class="form-control" name="link" id="exampleInputEmail1" placeholder="link">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            {{-- show slider --}}
            <table class="table table-stripped text-center">
                <tr class="">
                    <th>Sl No</th>
                    <th>page list</th>
                    <th>Action</th>
                </tr>
                @foreach ($page as $page)
                    <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->page_list }}</td>
                    <td>{{ $page->link }}</td>

                        <td class="d-flex justify-content-center">
                            <div class="mr-3">
                                <a class="btn btn-sm btn-success" href="{{ route('editpage', $page->id) }}">Edit</a>
                            </div>
                            <div>
                                <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deletepage',$page->id) }}">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            @isset($editpage)
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">edit page Add From</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updatepage', $editpage->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter page List</label>
                                <input type="text" class="form-control" name="page_list" value="{{ $editpage->page_list }}" id="exampleInputEmail1" placeholder="Enter slider price">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter page Link</label>
                                <input type="text" class="form-control" name="link" value="{{ $editpage->link }}" id="exampleInputEmail1" placeholder="Link">
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
