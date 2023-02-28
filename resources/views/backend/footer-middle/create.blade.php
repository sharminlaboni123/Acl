@section('title')
Footer Middle
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
                    <h5 class="card-title">Add Footer </h5>
                    <a href="{{route('footer-middle.index')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> List</a>

                </div>
                    <div class="card-body">
                    <form method="post" action="{{route('footer-middle.store')}}" enctype="multipart/form-data" >
                            @csrf
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Enter titlelogo</label>
                            <input type="file" class="input-file" name="titlelogo" @error('titlelogo') is-invalid @enderror id="titlelogo" placeholder="Enter Footer titlelogo">
                            @error('titlelogo')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter titletext</label>
                            <textarea id="" type="text" class="form-control" name="titletext" @error('titletext') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter titletext"></textarea>

                            <!-- <input type="text" class="form-control" name="titletext" @error('titletext') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter titletext"> -->
                            @error('titletext')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter slider footer_middle_useful_head</label>
                            <input type="text" class="form-control" name="footer_middle_useful_head" @error('footer_middle_useful_head') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter footer_middle_useful_head">
                            @error('footer_middle_useful_head')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter slider footer_middle_useful_about</label>
                            <input type="text" class="form-control" name="footer_middle_useful_about" @error('footer_middle_useful_about') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter footer_middle_useful_about">
                            @error('footer_middle_useful_about')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter slider footer_middle_useful_shop</label>
                            <input type="text" class="form-control" name="footer_middle_useful_shop" @error('footer_middle_useful_shop') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter footer_middle_useful_shop">
                            @error('footer_middle_useful_shop')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter slider footer_middle_useful_FAQ</label>
                            <input type="text" class="form-control" name="footer_middle_useful_FAQ" @error('footer_middle_useful_FAQ') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter footer_middle_useful_FAQ">
                            @error('footer_middle_useful_FAQ')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter slider footer_middle_useful_contactus</label>
                            <input type="text" class="form-control" name="footer_middle_useful_contactus" @error('footer_middle_useful_contactus') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter footer_middle_useful_contactus">
                            @error('footer_middle_useful_contactus')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter slider footer_middle_useful_login</label>
                            <input type="text" class="form-control" name="footer_middle_useful_login" @error('footer_middle_useful_login') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter footer_middle_useful_login">
                            @error('footer_middle_useful_login')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter customer_head</label>
                            <input type="text" class="form-control" name="customer_head" @error('customer_head') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter customer services">
                            @error('customer_head')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter paymentmethod</label>
                            <input type="text" class="form-control" name="paymentmethod" @error('paymentmethod') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter paymentmethod">
                            @error('paymentmethod')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter moneyback grantee</label>
                            <input type="text" class="form-control" name="moneyback" @error('moneyback') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter moneyback">
                            @error('moneyback')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter returns</label>
                            <input type="text" class="form-control" name="returns" @error('returns') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter returns">
                            @error('returns')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter shipping</label>
                            <input type="text" class="form-control" name="shipping" @error('shipping') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter shipping">
                            @error('shipping')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter termcondition</label>
                            <input type="text" class="form-control" name="termcondition" @error('termcondition') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter <div class="form-group">
                            @error('termcondition')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter privacypolicy</label>
                            <input type="text" class="form-control" name="privacypolicy" @error('privacypolicy') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter privacypolicy">
                            @error('privacypolicy')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter myaccount</label>
                            <input type="text" class="form-control" name="myaccount" @error('myaccount') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter myaccount">
                            @error('myaccount')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter signin</label>
                            <input type="text" class="form-control" name="signin" @error('signin') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter signin">
                            @error('signin')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter viewcart</label>
                            <input type="text" class="form-control" name="viewcart" @error('viewcart') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter viewcart">
                            @error('viewcart')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter wishlist</label>
                            <input type="text" class="form-control" name="wishlist" @error('wishlist') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter wishlist">
                            @error('wishlist')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter takeorder</label>
                            <input type="text" class="form-control" name="takeorder" @error('takeorder') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter takeorder">
                            @error('takeorder')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter help</label>
                            <input type="text" class="form-control" name="help" @error('help') is-invalid @enderror id="exampleInputEmail1" placeholder="Enter help">
                            @error('help')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>

                        <div class="form-group">
                        <div class="form-group mb-3">
                        <button type="reset" class="btn btn-warning">Reset</button>
                            <button class="btn btn-primary" type="submit">Submit</button>
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
