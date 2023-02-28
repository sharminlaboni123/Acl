@section('title')
Arrival
@endsection
@extends('backend.layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar my-2">
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

    {{-- list + add btn show --}}
    <div class="row mb-3">
        <div class="col-sm-12"></div>
        <div class="col-sm-12">
            <div class="card-header float-right">
                <a href="{{ route('addNewArrivalPage') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add Arrival"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Arrival</a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            @if (isset($arrivals))
                <table class="table table-stripped text-center table-responsive">
                    <tr class="">
                        <th>Sl No</th>
                        <th>l_primary</th>
                        <th>l_sell</th>
                        <th>p_image</th>
                        <th>p_gender</th>
                        <th>p_item</th>
                        <th>p_title</th>
                        <th>p_price</th>
                        <th>p_n_price</th>
                        <th>p_o_price</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($arrivals as $arrival)
                        <tr>
                            <td>{{ $arrival->id }}</td>
                            <td>{{ $arrival->l_primary }}</td>
                            <td>{{ $arrival->l_sell }}</td>
                            <td><img src="{{ $arrival->p_image }}" alt="image" srcset="" height="100px" width="100px"></td>
                            <td>{{ $arrival->p_gender }}</td>
                            <td>{{ $arrival->p_item }}</td>
                            <td>{{ $arrival->p_title }}</td>
                            <td>{{ $arrival->p_price }}</td>
                            <td>{{ $arrival->p_n_price }}</td>
                            <td>{{ $arrival->p_o_price	 }}</td>
                            <td>{{ $arrival->p_rating_number }}</td>
                            <td class="d-flex justify-content-center">
                                <div class="mr-3">
                                    <a class="btn btn-sm btn-success" href="{{ route('editArrival', $arrival->id) }}">Edit</a>
                                </div>
                                <div>
                                    <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deleteArrival', $arrival->id) }}">Delete</a>
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
