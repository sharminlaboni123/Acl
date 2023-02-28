@section('title')
Total Footer
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
                    <h5 class="card-title">footer-bottom List </h5>
                    <a href="{{route('footer_bottom.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add footer</a>

                </div>
                    <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-stripped text-center">
                <tr class="">
                    <th>Sl No</th>
                    <th>text</th>
                    <th>link</th>
                    <th>img</th>
                    <th>Action</th>
                </tr>
                @foreach ($futter as $footer)
                    <tr>
                    <td>{{ $footer->id }}</td>
                    <td>{{ $footer->footer_bottom_text }}</td>
                    <td>{{ $footer->link }}</td>
                    <td>{{ $footer->footer_bottom_img }}</td>
                    <td><img width="20px" height="30px" src="{{asset('storage/footer/' .$footer->footer_bottom_img)}} "/></td>
                    
                        <td class="d-flex justify-content-center">
                        <a class="btn btn-warning" href="{{ route('footer_bottom.edit', $footer->id) }}"> Edit </a>
                        <form action="{{ route('footer_bottom.destroy', $footer->id) }}" method="post" style="display:inline">
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
