@section('title')
Country
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
                <a href="{{ route('addCountryPage') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add Country"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Country</a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            {{-- show country --}}
            <table class="table table-stripped text-center">
                <tr class="">
                    <th>Sl No</th>
                    <th>Country Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($country as $countr)
                    <tr>
                        <td>{{ $countr->id }}</td>
                        <td>{{ $countr->country_name }}</td>
                        <td class="d-flex justify-content-center">
                            <div class="mr-3">
                                <a class="btn btn-sm btn-success" href="{{ route('editCountry', $countr->id) }}">Edit</a>
                            </div>
                            <div>
                                <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deleteCountry',$countr->id) }}">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            @isset($editCountry)
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">Country Add From</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updateCountry', $editCountry->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Country</label>
                                <input type="text" class="form-control" name="country_name" value="{{ $editCountry->country_name }}" id="exampleInputEmail1" placeholder="Enter Country">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            @endisset
        </div>
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
