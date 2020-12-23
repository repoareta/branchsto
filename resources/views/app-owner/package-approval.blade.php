@extends('layout.admin')
@push('add-style')
    
@endpush
@section('content')
<!--begin::Main-->
@include('partials.admin._header-mobile')
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--[html-partial:include:{"file":"partials/_aside.html"}]/-->
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
                        <div class="stable-body data">
                            <a href="" class="btn btn-back-page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="34" viewBox="0 0 63 34" fill="none">
                                    <rect opacity="0.25" width="63" height="34" rx="17" fill="#C4C4C4"/>
                                    <path d="M29 17H15" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 24L15 17L22 10" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </a>
                            <div class="d-flex justify-content-start align-items-center">
                                <h6 class="title-text mb-0 table-danger">
                                    LIST PACKAGE
                                </h6>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-data table-danger" id="dataTableunapprov">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Stable Name</th>
                                                <th scope="col">Package</th>													
                                                <th scope="col">Price</th>													
                                                <th scope="col">Approval Status</th>													
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mt-20">
                                <h6 class="title-text mb-0 table-success">
                                    LIST PACKAGE APPROVED
                                </h6>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-data table-success" id="dataTable">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Stable Name</th>
                                                <th scope="col">Package</th>													
                                                <th scope="col">Price</th>	
                                                <th scope="col">Approval Status</th>											
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
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

<!-- Modal -->
<div class="modal fade" id="modalDetail"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title-text " id="title_modal" data-state="add">
                    DETAIL PACKAGE
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="mb-0">Package Number</p>
                        <h4 class="mb-4" id="package_number"></h4>
                        <p class="mb-0">Name</p>
                        <h4 class="mb-4" id="name"></h4>
                        <p class="mb-0">Description</p>
                        <h4 class="mb-4" id="description"></h4>
                        <p class="mb-0">Price</p>
                        <h4 class="mb-4" id="price"></h4>
                        <p class="mb-0">Approval At</p>
                        <h4 class="mb-4" id="approval_at"></h4>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0">Approval By</p>
                        <h4 class="mb-4" id="approval_by"></h4>
                        <p class="mb-0">Approval Status</p>
                        <h4 class="mb-4" id="approval_status"></h4>
                        <p class="mb-0">Image</p>
                        <img src="" alt="">
                        <p class="mb-0">Stable</p>
                        <h4 class="mb-4" id="stable"></h4>
                        <p class="mb-0">Attendance</p>
                        <h4 class="mb-4" id="attendance"></h4>
                    </div>
                </div>
                <div class="modal-footer">											
                    <button data-dismiss="modal" class="btn btn-add-new font-weight-bold">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->


@endsection
@push('add-script')
    <script type="text/javascript">
		$(document).ready( function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			$('#dataTable').DataTable({
                scrollX   : true,
                processing: true,
                // serverSide: true,
                language: {
                    processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
                },
                ajax      : "{{ route('package_approval.listJson.approv') }}",
                columns: [
                    {data: 'no', render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }},
                    {data: 'stable_name', name: 'stable_name'},
                    {data: 'package_name', name: 'package_name'},
                    {data: 'price', name: 'price'},
                    {data: 'approval_status', name: 'approval_status'},
                    {data: 'action', name: 'action'},
                ]
            }); 
			$('#dataTableunapprov').DataTable({
                scrollX   : true,
                processing: true,
                // serverSide: true,
                language: {
                    processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
                },
                ajax      : "{{ route('package_approval.listJson.unapprov') }}",
                columns: [
                    {data: 'no', render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }},
                    {data: 'stable_name', name: 'stable_name'},
                    {data: 'package_name', name: 'package_name'},
                    {data: 'price', name: 'price'},
                    {data: 'approval_status', name: 'approval_status'},
                    {data: 'action', name: 'action'},
                ]
            }); 
            
            $('body').on('click', '#openBtn', function () {
                var id = $(this).data('id');
                $.get('{{route('package_approval.index')}}'+'/detail/package/' + id , function (data) {
                    $('#package_number').html(data.package_number);
                    $('#name').html(data.name);
                    $('#description').html(data.description);
                    $('#price').html(data.price);
                    $('#approval_at').html(data.approval_at);
                    $('#approval_by').html(data.approval_by);
                    $('#approval_status').html(data.approval_status);
                    if(data.approval_at == null){
                        $('#approval_at').html('Need Approval');    
                    }
                    if(data.approval_by == null){
                        $('#approval_by').html('Need Approval');    
                    }
                    if(data.approval_status == null){
                        $('#approval_status').html('Need Approval');    
                    }                    
                    $('#stable').html(data.stable.name);
                    $('#attendance').html(data.attendance);
                    $('#modalDetail').modal('show');
                })
            });

            $('tbody').on('click','#accept', function(e) {
    
                e.preventDefault();
                    
                Swal.fire({
                    title: "Are you sure?",
                    icon: "warning",
                    text: "This is will be accepted the stable",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Accept",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }).then(function(getAction) {
                    if (getAction.value === true) {
                        $('#formAccept').submit();
                    }
                });
            });

            $('tbody').on('click','#decline', function(e) {

                e.preventDefault();
                    
                Swal.fire({
                    title: "Are you sure?",
                    icon: "warning",
                    text: "This is will be declined the stable",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Accept",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }).then(function(getAction) {
                    if (getAction.value === true) {
                        $('#formDecline').submit();
                    }
                });
            });
		} );
</script>
@endpush