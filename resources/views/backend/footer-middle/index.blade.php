@section('title')
Total Footer Middle
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
                    <h5 class="card-title">footer-middle List </h5>
                    <a href="{{route('footer-middle.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add footer middle</a>

                </div>
                    <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-stripped text-center">
                <tr class="">
                    <th>Sl No</th>
                    {{-- <th>title logo</th> --}}
                    <th>title text</th>
                    <th>useful_link</th>
                    <th>about</th>
                     <th>shop</th>
                     <th>FAQ</th>
                     <th>contactus</th>
                     <th>login</th>
                     <th>customer service</th>
                    <th>paymentmethod</th>
                    <th>moneyback</th>
                     <th>returns</th>
                    <th>shipping</th>
                    <th>termcondition</th>
                    <th>privacypolicy</th>
                    <th>myaccount</th>
                    <th>signin</th>
                    <th>viewcart</th>
                    <th>wishlist</th>
                   <th>takeorder</th>
                    <th>help</th>

                    <th>Action</th>
                </tr>
                @foreach ($footer_m as $footer_m))
                    <tr>
                    <td>{{ $footer_m->id }}</td>
                    {{-- <td><img width="20px" height="30px" src="{{asset('storage/about/' .$footer_m->titlelogo)}} "/></td> --}}
                    <td>{{ $footer_m->titletext}}</td>
                    <td>{{$footer_m->usefullink}}</td>
                    <td>{{$footer_m->about}}</td>
                    <td>{{ $footer_m->howtoshop}}</td>
                    <td>{{$footer_m->FAQ}}</td>
                    <td>{{ $footer_m->contactus}}</td>
                    <td>{{$footer_m->login}}</td>
                    <td>{{ $footer_m->customerservice}}</td>
                    <td>{{ $footer_m->paymentmethod}}</td>
                    <td>{{ $footer_m->moneyback}}</td>
                    <td>{{ $footer_m->returns	}}</td>
                    <td>{{ $footer_m->shipping}}</td>
                    <td>{{ $footer_m->termcondition}}</td>
                    <td>{{ $footer_m->privacypolicy}}</td>
                    <td>{{ $footer_m->myaccount}}</td>
                    <td>{{ $footer_m->signin}}</td>
                    <td>{{ $footer_m->viewcart}}</td>
                    <td>{{ $footer_m->wishlist}}</td>
                    <td>{{ $footer_m->takeorder}}</td>
                    <td>{{ $footer_m->help}}</td>

                        <td class="d-flex justify-content-center">
                        <a class="btn btn-warning" href="{{ route('footer-middle.edit', $footer_m->id) }}"> Edit </a>
                        <form action="{{ route('footer-middle.destroy', $footer_m->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure want to Delete')">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </table>


      </div>
                </div>
            </div>
        </div>


    {{-- </div> <!-- End row --> --}}
    </div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
