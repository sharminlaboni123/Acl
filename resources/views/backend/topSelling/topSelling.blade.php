@section('title')
Add Top Selling
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
                <a href="{{ route('addTopSellingPage') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add Top Selling"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Top Selling</a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            @if (isset($topSelling))
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
                    @foreach ($topSelling as $selling)
                        <tr>
                            <td>{{ $selling->id }}</td>
                            <td>{{ $selling->l_primary }}</td>
                            <td>{{ $selling->l_sell }}</td>
                            <td><img src="{{ $selling->p_image }}" alt="image" srcset="" height="100px" width="100px"></td>
                            <td>{{ $selling->p_gender }}</td>
                            <td>{{ $selling->p_item }}</td>
                            <td>{{ $selling->p_title }}</td>
                            <td>{{ $selling->p_price }}</td>
                            <td>{{ $selling->p_n_price }}</td>
                            <td>{{ $selling->p_o_price	 }}</td>
                            <td>{{ $selling->p_rating_number }}</td>
                            <td class="d-flex justify-content-center">
                                <div class="mr-3">
                                    <a class="btn btn-sm btn-success" href="{{ route('editTopSelling', $selling->id) }}">Edit</a>
                                </div>
                                <div>
                                    <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deleteTopSelling', $selling->id) }}">Delete</a>
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





