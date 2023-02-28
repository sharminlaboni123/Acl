@section('title')
Edit Advertisement
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
                <a href="{{ route('advertisements') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Show Bottom Advertisement"><i class="fa fa-eye" aria-hidden="true"></i> List</a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-15">
                <div class="card-header">
                    <h5 class="card-title">Bottom Edit Advertisement From</h5>
                </div>
                    <div class="card-body">
                        <form action="{{ route('updateBottomAdvertisement', $advertisement->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="form-group row">
                                        <label for="inputPhone3" class="col-sm-4 col-form-label">Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ $advertisement->cta_title }}" name="cta_title" id="inputcta_title3" placeholder="cta_title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputWishlist3" class="col-sm-4 col-form-label">cta_desc</label>
                                        <div class="col-sm-8">
                                            {{-- <input type="text" class="form-control" value="{{ $advertisement->cta_desc }}" name="cta_desc" id="inputcta_desc3" placeholder="cta_desc"> --}}
                                        <textarea id="mytextarea" type="text" class="form-control" value="{{ $advertisement->cta_desc }}" name="cta_desc" id="inputcta_desc3" placeholder="cta_desc"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputLogin3" class="col-sm-4 col-form-label">Cta_Cart_Price</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ $advertisement->cta_cart_price }}" name="cta_cart_price" id="inputcta_cart_price3" placeholder="cta_cart_price">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputAbout Us3" class="col-sm-4 col-form-label">Cta_Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="cta_image" id="inputcta_image3" placeholder="cta_image">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputAbout Us3" class="col-sm-4 col-form-label">Old_image</label>
                                        <div class="col-sm-8">
                                            <img src="{{ asset($advertisement->cta_image) }}" alt="" srcset="" height="150px" width="200px">
                                            <input type="hidden" class="form-control" value="{{ $advertisement->cta_image }}" name="old_image" id="inputold_image3" placeholder="old_image">
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
<script>
    tinymce.init({
    selector: '#mytextarea'
    });
</script>
@endsection
