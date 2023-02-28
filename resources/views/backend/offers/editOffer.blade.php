@section('title')
Edit Offer
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
                <a href="{{ route('offers') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Show offer"><i class="fa fa-eye" aria-hidden="true"></i> List</a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-15">
                <div class="card-header">
                    <h5 class="card-title">Update Offer Advertisement</h5>
                </div>
                    <div class="card-body">
                        <form action="{{ route('updateOffer', $offer->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="form-group row">
                                        <label for="inputPhone3" class="col-sm-4 col-form-label">Offer_Title</label>
                                        <div class="col-sm-8">
                                            {{-- <input type="text" class="form-control" value="{{ $offer->offer_title }}" name="offer_title" id="inputoffer_title3" placeholder="offer_title"> --}}
                                            <textarea type="text" class="form-control" value="{{ $offer->offer_title }}" name="offer_title" id="mytextarea" placeholder="offer_title"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputWishlist3" class="col-sm-4 col-form-label">Offer_Condition </label>
                                        <div class="col-sm-8">
                                            {{-- <input type="text" class="form-control" value="{{ $offer->offer_condition }}" name="offer_condition" id="inputoffer_condition3" placeholder="offer_condition"> --}}
                                            <textarea type="text" class="form-control" value="{{ $offer->offer_condition }}" name="offer_condition" id="mytextarea" placeholder="offer_condition"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputLogin3" class="col-sm-4 col-form-label">offer_class</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ $offer->offer_class }}" name="offer_class" id="inputoffer_class3" placeholder="offer_class">
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

    {{-- </div> <!-- End row --> --}}
    </div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
