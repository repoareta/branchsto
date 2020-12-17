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
                            <a href="#" class="btn btn-back-page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="34" viewBox="0 0 63 34" fill="none">
                                    <rect opacity="0.25" width="63" height="34" rx="17" fill="#C4C4C4"/>
                                    <path d="M29 17H15" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 24L15 17L22 10" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </a>
                            <div class="d-flex justify-content-start align-items-center">
                                <h5 class="title-text mb-0">
                                    ADD HORSE
                                </h5>
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="">HOME</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="">MANAGE STABLE</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">ADD HORSE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <form action="{{route('horse.store')}}" method="POST" id="formhorse">
                                        @csrf											
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <label>Horse Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Horse name" autocomplete='off'>
                                                <input type="hidden" value="{{$data['data']['id']}}" class="form-control" name="stable_id">
                                            </div>
                                            <div class="col-4">
                                                <label>Horse Owner</label>
                                                <input type="text" class="form-control" name="owner" placeholder="Horse Owner" autocomplete='off'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <label>Sex</label>
                                                <select class="form-control" name="sex">
                                                    <option value="">Sex</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label>Birth Date</label>
                                                <input type="date" class="form-control" name="birth_date" placeholder="Birth Date" autocomplete='off'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <label>Passport Number</label>
                                                <input type="number" class="form-control" name="passport_number" placeholder="Passport Number" autocomplete='off'>
                                            </div>
                                            <div class="col-4">
                                                <label>Horse Breed</label>
                                                <select class="form-control" name="breeds">
                                                    <option value="Indonesian">Indonesian</option>
                                                    <option value="European">European</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <label>Pedigree</label>
                                                <input type="text" class="form-control" name="pedigree" placeholder="Pedigree" autocomplete='off'>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-add-new mr-2">SAVE DATA</button>
                                            <a href="{{route('horse.index')}}" class="btn btn-secondary">Back</a>
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
{!! JsValidator::formRequest('App\Http\Requests\Horse', '#formhorse') !!}
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
        $("#dataTable_filter").append("<button class='btn btn-add-new'>Add New +</button>")
    } );
</script>
@endpush