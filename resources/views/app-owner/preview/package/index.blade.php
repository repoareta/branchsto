@extends('layout.admin')
@push('addon-style')

@endpush
@section('content')
<!--begin::Main-->
@include('partials.admin._header-mobile')
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        @include('partials.admin._aside')
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            @include('partials.admin._header')
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-fluid stable">
                        <div class="stable-body">
                            <a href="{{URL::previous()}}" class="btn btn-back-page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="34" viewBox="0 0 63 34" fill="none">
                                    <rect opacity="0.25" width="63" height="34" rx="17" fill="#C4C4C4"/>
                                    <path d="M29 17H15" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 24L15 17L22 10" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </a>
                            <div class="d-flex justify-content-start align-items-center">
                                <h4 class="title-text mb-0">
                                    PACKAGE
                                </h4>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <table class="table table-striped table-data" id="dataTable">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name Package</th>
                                            <th scope="col">Package Number</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Attendance</th>
                                            <th scope="col">Package Status</th>
                                            <th scope="col">Approval Status</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            @include('partials.admin._footer')
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>

<!--end::Main-->
@endsection
@push('add-script')
<script>
$(document).ready( function () {
    var t = $('#dataTable').DataTable({
        scrollX   : true,
        processing: true,
        // serverSide: true
        language: {
            processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
        },
        ajax      : "{{ route('stable_approval2.detail.package.json', $id) }}",
        columns: [
            {data: 'profile', name: 'profile'},
            {data: 'name', name: 'name'},
            {data: 'package_number', name: 'package_number'},
            {data: 'description', name: 'description'},
            {data: 'price', name: 'price'},
            {data: 'attendance', name: 'attendance'},
            {data: 'package_status', name: 'package_status'},
            {data: 'approval_status', name: 'approval_status'},
        ]
    });
} );
</script>
@endpush