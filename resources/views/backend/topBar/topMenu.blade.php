@section('title')
Top Menu
@endsection
@extends('backend.layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Contentbar -->
<div class="contentbar" style="margin-top: 70px">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show p-2 d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>&emsp;
            <strong class="fs-5">{{ session('success') }}</strong>
            {{-- <button type="button" class="btn-close pt-1" data-bs-dismiss="alert"> --}}
            </button>
        </div>
    @endif

    {{-- list + add btn show --}}
    <div class="row mb-3">
        <div class="col-sm-12"></div>
        <div class="col-sm-12">
            <div class="card-header float-right">
                <a href="{{ route('addTopMenuPage') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add Top Menu"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Top Menu</a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            @if (isset($topbars))
                <table class="table table-stripped text-center">
                    <tr class="">
                        <th>Sl No</th>
                        <th>Phone</th>
                        <th>Wishlist</th>
                        <th>About</th>
                        <th>Login</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($topbars as $topbar)
                        <tr>
                            <td>{{ $topbar->id }}</td>
                            <td>{{ $topbar->phone }}</td>
                            <td>{{ $topbar->wishlist }}</td>
                            <td>{{ $topbar->about }}</td>
                            <td>{{ $topbar->login }}</td>
                            <td class="d-flex justify-content-center">
                                <div class="mr-3">
                                    <a class="btn btn-sm btn-success" href="{{ route('editTopbar', $topbar->id) }}">Edit</a>
                                </div>
                                <div>
                                    <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deleteTopMenu', $topbar->id) }}">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
