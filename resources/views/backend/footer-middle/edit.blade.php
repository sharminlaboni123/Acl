@section('title')
Edit Footer middle
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
                <h5 class="card-title">Edit footer middle </h5>
                    <a href="{{route('footer-middle.index')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> List</a>
                </div>
                    <div class="card-body">
                    <form method="post" action="{{route('footer-middle.update',$footer_m->id)}}" enctype="multipart/form-data">
                      @csrf 
                      @method('PATCH')

                      {{-- <div class="form-group">
                                <label for="exampleInputEmail1">Enter titlelogo</label>
                                <input type="file" class="form-control" name="titlelogo"  value="{{$footer_m->titlelogo}}" id="exampleInputEmail1" placeholder="Enter titlelogo">
                        </div> --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">titletext</label>
                                <textarea id="" type="text" class="form-control" name="titlrtext" value="{{ $footer_m->titletext }}" id="exampleInputEmail1" placeholder="Enter titletext">{{ $footer_m->titletext }}</textarea>

                                <!-- <input type="text" class="form-control" name="titlrtext" value="{{ $footer_m->titletext }}" id="exampleInputEmail1" placeholder="Enter titletext"> -->
                            </div>   
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">useful_head</label>
                                <input type="text" class="form-control" name="footer_middle_useful_head" value="{{ $footer_m->usefullink }}" id="exampleInputEmail1" placeholder="Enter footer_middle_useful_head">
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">useful_about</label>
                                <input type="text" class="form-control" name="footer_middle_useful_about" value="{{ $footer_m->about }}" id="exampleInputEmail1" placeholder="Enter footer_middle_useful_about">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter footer_middle_useful_shop</label>
                                <input type="text" class="form-control" name="footer_middle_useful_shop" value="{{ $footer_m->howtoshop }}" id="exampleInputEmail1" placeholder="Enter footer_middle_useful_shop">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter footer_middle_useful_FAQ</label>
                                <input type="text" class="form-control" name="footer_middle_useful_FAQ" value="{{ $footer_m->FAQ }}" id="exampleInputEmail1" placeholder="Enter footer_middle_useful_FAQ">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter footer_middle_useful_contactus</label>
                                <input type="text" class="form-control" name="footer_middle_useful_contactus" value="{{ $footer_m->contactus }}" id="exampleInputEmail1" placeholder="Enter footer_middle_useful_contactus">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter footer_middle_useful_login</label>
                                <input type="text" class="form-control" name="footer_middle_useful_login" value="{{ $footer_m->login}}" id="exampleInputEmail1" placeholder="Enter footer_middle_useful_login">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">customer_head</label>
                                <input type="text" class="form-control" name="customer_head" value="{{ $footer_m->customerservice }}" id="exampleInputEmail1" placeholder="Enter customer_head">
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">paymentmethod</label>
                                <input type="text" class="form-control" name="paymentmethod" value="{{ $footer_m->paymentmethod }}" id="exampleInputEmail1" placeholder="Enter paymentmethod">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter moneyback</label>
                                <input type="text" class="form-control" name="moneyback" value="{{ $footer_m->moneyback }}" id="exampleInputEmail1" placeholder="Enter moneyback">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter returns</label>
                                <input type="text" class="form-control" name="returns" value="{{ $footer_m->returns }}" id="exampleInputEmail1" placeholder="Enter returns">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter shipping</label>
                                <input type="text" class="form-control" name="shipping" value="{{ $footer_m->shipping }}" id="exampleInputEmail1" placeholder="Enter shipping">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter termcondition</label>
                                <input type="text" class="form-control" name="termcondition" value="{{ $footer_m->termcondition}}" id="exampleInputEmail1" placeholder="Enter termcondition">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter privacypolicy</label>
                                <input type="text" class="form-control" name="privacypolicy" value="{{ $footer_m->privacypolicy}}" id="exampleInputEmail1" placeholder="Enter privacypolicy">
                            </div> 
                       
                            <div class="form-group">
                                <label for="exampleInputEmail1">myaccount</label>
                                <input type="text" class="form-control" name="myaccount" value="{{ $footer_m->myaccount }}" id="exampleInputEmail1" placeholder="Enter myaccount">
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">singin</label>
                                <input type="text" class="form-control" name="signin" value="{{ $footer_m->signin }}" id="exampleInputEmail1" placeholder="Enter signin">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter viewcart</label>
                                <input type="text" class="form-control" name="viewcart" value="{{ $footer_m->viewcart}}" id="exampleInputEmail1" placeholder="Enter viewcart">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter wishlist</label>
                                <input type="text" class="form-control" name="wishlist" value="{{ $footer_m->wishlist }}" id="exampleInputEmail1" placeholder="Enter wishlist">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter takeorder</label>
                                <input type="text" class="form-control" name="takeorder" value="{{ $footer_m->takeorder }}" id="exampleInputEmail1" placeholder="Enter takeorder">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter help</label>
                                <input type="text" class="form-control" name="help" value="{{ $footer_m->help}}" id="exampleInputEmail1" placeholder="Enter help">
                            </div> 
                                    <div class="form-group mb-3">
                                   <button class="btn btn-success" type="submit">Update</button>
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
