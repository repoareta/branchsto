@extends('layout.index')
@push('addon-style')
<link rel="stylesheet" href="{{url('assets/datatables/datatables.min.css')}}" type="text/css">
@endpush
@section('content')
<!--begin::Main-->
@include('partials._header-mobile')
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        @include('partials._aside')
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            @include('partials._header')
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-fluid stable">
                        <div class="stable-body">
                            <div class="d-flex justify-content-start align-items-center">
                                <h5 class="title-text mb-0">
                                    ADD COACH
                                </h5>
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="">HOME</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="">MANAGE STABLE</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">ADD COACH</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <form action="{{route('coach.store')}}" method="POST" id="formcoach">			
                                        @csrf								
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <input type="hidden" class="form-control" name="stable_id" value="{{$data['data']['id']}}">
                                                <input type="text" class="form-control" name="name" placeholder="Horse name">
                                            </div>
                                            <div class="col-4">
                                                <input type="date" class="form-control" name="birth_date" placeholder="Birth Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <select class="form-control" name="sex">
                                                    <option value="">Sex</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control" name="contact_number" placeholder="Contact Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <input type="text" class="form-control" name="experience" placeholder="Experience">
                                            </div>
                                            <div class="col-4">
                                                <select class="form-control" name="certified">
                                                    <option value="">Certified</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-add-new mr-2">SAVE DATA</button>
                                            <a href="{{route('coach.index')}}" class="btn btn-secondary">Back</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            @include('partials._footer')
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
@endsection
@push('add-script')
{!! JsValidator::formRequest('App\Http\Requests\Coach', '#formcoach') !!}
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
        $("#dataTable_filter").append("<button class='btn btn-add-new'>Add New +</button>")
    } );
</script>
@endpush