@section('title')
Edit Top Menu
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
                <a href="{{ route('topMenuPage') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="View Top Menu"><i class="fa fa-eye" aria-hidden="true"></i> List</a>
            </div>
        </div>
    </div>
    {{-- list + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            {{-- edit option --}}
            @isset($tops)
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Edit Top Menu</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateTopMenu', $tops->id) }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="inputPhone3" class="col-sm-4 col-form-label">Phone</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{ $tops->phone }}" class="form-control" name="phone" id="inputPhone3" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputWishlist3" class="col-sm-4 col-form-label">Wishlist</label>
                            <div class="col-sm-8">
                                {{-- <input type="text" class="form-control" name="wishlist" value="{{ $tops->wishlist }}" id="inputWishlist3" placeholder="Wishlist"> --}}
                                <textarea id="mytextarea" type="text" class="form-control" name="wishlist" value="{{ $tops->wishlist }}" id="inputWishlist3" placeholder="Wishlist"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAbout Us3" class="col-sm-4 col-form-label">About Us</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="about" value="{{ $tops->about }}" id="inputAbout Us3" placeholder="About Us">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputContact3" class="col-sm-4 col-form-label">Contact</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="contact" value="{{ $tops->contact }}" id="inputContact3" placeholder="Contact">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLogin3" class="col-sm-4 col-form-label">Login</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="login" value="{{ $tops->login }}" id="inputLogin3" placeholder="Login">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
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
<script>
    // cke_1_contents
    // CKEDITOR.replace('wishlist');
        tinymce.init({
        selector: '#mytextarea'
        });
</script>
@endsection
