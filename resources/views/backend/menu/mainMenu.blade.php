@section('title')
Menu Bar
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
                    <h5 class="card-title">Add Menu</h5>
                </div>
                    <div class="card-body">
                        <form action="{{ route('addMainMenu') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="form-group row">
                                        <label for="inputPhone3" class="col-sm-4 col-form-label">Menu Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name" id="inputname3" placeholder="name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputWishlist3" class="col-sm-4 col-form-label">Menu Type</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="type" id="inputtype3" placeholder="type">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            @if (isset($mainMenus))
                <table class="table table-stripped text-center">
                    <tr class="">
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($mainMenus as $mainMenu)
                        <tr>
                            <td>{{ $mainMenu->id }}</td>
                            <td>{{ $mainMenu->name }}</td>
                            <td>{{ $mainMenu->type }}</td>
                            <td class="d-flex justify-content-center">
                                <div class="mr-3">
                                    <a class="btn btn-sm btn-success" href="{{ route('editMainMenu', $mainMenu->id) }}">Edit</a>
                                </div>
                                <div>
                                    <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deleteMainMenu', $mainMenu->id) }}">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>

    {{-- </div> <!-- End row --> --}}
    </div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
