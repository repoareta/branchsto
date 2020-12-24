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
                            <a href="{{route('coach.index')}}" class="btn btn-back-page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="34" viewBox="0 0 63 34" fill="none">
                                    <rect opacity="0.25" width="63" height="34" rx="17" fill="#C4C4C4"/>
                                    <path d="M29 17H15" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 24L15 17L22 10" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </a>
                            <div class="d-flex justify-content-start align-items-center">
                                <h5 class="title-text mb-0">
                                    ADD COACH
                                </h5>
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                    <li class="breadcrumb-item">
										<a href="{{route('competitions.index')}}">HOME</a>
									</li>
									<li class="breadcrumb-item">
										<a href="{{route('stable.index')}}">MANAGE STABLE</a>
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
                                                <label>Coach Name</label>
                                                <input type="hidden" class="form-control" name="stable_id" value="{{$data_stable->id}}">
                                                <input type="text" class="form-control" name="name" placeholder="Coach name">
                                            </div>
                                            <div class="col-4">
                                                <label>Birth Date</label>
                                                <input type="date" class="form-control" name="birth_date" placeholder="Birth Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <label>Sex</label>
                                                <select class="form-control" name="sex">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control" name="contact_number" placeholder="Contact Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <label>Experience</label>
                                                <input type="text" class="form-control" name="experience" placeholder="Experience">
                                            </div>
                                            <div class="col-4">
                                                <label>Certified</label>
                                                <select class="form-control" name="certified">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        @if ($data == 1)
                                            <button type="submit" class="btn btn-add-new mr-2">SAVE DATA</button>
                                        @else
                                            <span id="add-coach" class="btn btn-add-new mr-2">SAVE DATA</span>
                                        @endif                                            
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
{!! JsValidator::formRequest('App\Http\Requests\CoachStore', '#formcoach') !!}
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
        $("#dataTable_filter").append("<button class='btn btn-add-new'>Add New +</button>");
        $('#add-coach').on('click', function(e){
			e.preventDefault();

            Swal.fire({
                title: "Full Coach Capacity.",
                text: "Cancel",
                icon: "info",
                buttonsStyling: false,
                confirmButtonText: "Ok",
                customClass: {
                    confirmButton: "btn btn-dark"
                }
            })
        })
    } );
</script>
@endpush