@extends('layout.index')
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
                                    SCHEDULE PACKAGE
                                </h4>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <table class="table" id="dataTable">
                                        <thead>
                                            <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time Start</th>
                                            <th scope="col">Time End</th>
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Capacity Booked</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
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
    var collapsedGroups = {};

    $("#sess1").attr('disabled', true);
    $("#sess2").attr('disabled', true);
    var t = $('#dataTable').DataTable({
        scrollX   : true,
        processing: true,
        // serverSide: true
        language: {
            processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
        },
        ajax      : "{{ route('stable_approval2.detail.schedule.json', $id) }}",
        columns: [
                {data: 'date', name: 'date', orderable: false, searchable: false},
                {data: 'time_start', name: 'time_start'},
                {data: 'time_end', name: 'time_end'},
                {data: 'capacity', name: 'capacity'},
                {data: 'capacity_booked', name: 'capacity_booked'},
        ],
        columnDefs:[
            {
                // hide columns by index number
                targets: [0],
                visible: false,
            },
        ],
        order: [[0, 'asc']],
        rowGroup: {
            // Uses the 'row group' plugin
            dataSrc: "date",
            startRender: function (rows, group) {
                var collapsed = !!collapsedGroups[group];

                rows.nodes().each(function (r) {
                    r.style.display = collapsed ? 'none' : '';
                });    

                // Add category name to the <tr>. NOTE: Hardcoded colspan
                return $('<tr/>')
                    .append('<td colspan="6">' + group + ' (' + rows.count() + ')</td>')
                    .attr('data-name', group)
                    .toggleClass('collapsed', collapsed);
            }
        }
    });

} );
</script>
@endpush