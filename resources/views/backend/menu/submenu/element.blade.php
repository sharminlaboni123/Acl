@section('title')
Add Element
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
                    <h5 class="card-title">Element Add From</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('addelement') }}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter element List</label>
                            <input type="text" class="form-control" name="element_list" @error('element_list') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter slider price">
                            @error('element_list')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter element Link</label>
                            <input type="text" class="form-control" name="link" placeholder="Enter Link">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            {{-- show slider --}}
            <table class="table table-stripped text-center">
                <tr class="">
                    <th>Sl No</th>
                    <th>element list</th>
                    <th>element link</th>
                    <th>Action</th>
                </tr>
                @foreach ($element as $element)
                    <tr>
                    <td>{{ $element->id }}</td>
                    <td>{{ $element->element_list }}</td>
                    <td>{{ $element->link }}</td>
                        <td class="d-flex justify-content-center">
                            <div class="mr-3">
                                <a class="btn btn-sm btn-success" href="{{ route('editelement', $element->id) }}">Edit</a>
                            </div>
                            <div>
                                <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deleteelement',$element->id) }}">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            @isset($editelement)
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">edit element Add From</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updateelement', $editelement->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter element List</label>
                                <input type="text" class="form-control" name="element_list" value="{{ $editelement->element_list }}" id="exampleInputEmail1" placeholder="Enter slider price">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter element Link</label>
                                <input type="text" class="form-control" name="link" value="{{ $editelement->link }}" id="exampleInputEmail1" placeholder="Enter Link">
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
