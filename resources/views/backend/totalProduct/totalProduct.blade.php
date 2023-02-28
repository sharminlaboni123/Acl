@section('title')
Total Product
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
                <a href="{{ route('addTotalProductPage') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add Total Produc"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Total Product</a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

<!-- Start row -->
    <div class="row">

        <div class="col-lg-12">
            @if (isset($totalProducts))
                <table class="table table-stripped text-center">
                    <tr class="">
                        <th>Sl No</th>
                        <th>title</th>
                        <th>People</th>
                        <th>Total Product</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($totalProducts as $totalProduct)
                        <tr>
                            <td>{{ $totalProduct->id }}</td>
                            <td>{{ $totalProduct->title }}</td>
                            <td>{{ $totalProduct->people }}</td>
                            <td>{{ $totalProduct->total_product }}</td>
                            <td><img src="{{ $totalProduct->tp_image }}" alt="image" srcset="" height="100px" width="100px"></td>
                            <td class="d-flex justify-content-center">
                                <div class="mr-3">
                                    <a class="btn btn-sm btn-success" href="{{ route('editTotalProduct', $totalProduct->id) }}">Edit</a>
                                </div>
                                <div>
                                    <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deleteTotalProduct', $totalProduct->id) }}">Delete</a>
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
