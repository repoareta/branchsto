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
                                    LIST STABLE APPROVAL
                                </h6>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-data table-danger" id="dataTable">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Stable Name</th>
                                                <th scope="col">Owner</th>													
                                                <th scope="col">Contact Person</th>													
                                                <th scope="col">Contact Number</th>													
                                                <th scope="col">Date Created</th>													
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mt-20">
                                <h6 class="title-text mb-0 table-success">
                                    LIST STABLE APPROVED
                                </h6>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-data table-success" id="dataTable2">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Stable Name</th>
                                                <th scope="col">Owner</th>													
                                                <th scope="col">Contact Person</th>													
                                                <th scope="col">Contact Number</th>													
                                                <th scope="col">Date Created</th>													
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
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="title-text " id="title_modal" data-state="add">
                    DETAIL STABLE
                </h4>
            </div>
            <div class="modal-body">
                <form action="{{route('package.slot.detail.store')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Stable Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>	
                        <div class="col-6">
                            <label>Owner</label>
                            <input type="text" class="form-control" id="owner">
                        </div>	
                    </div>	
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Contact Person</label>
                            <input type="text" class="form-control" id="contact_person">
                        </div>	
                        <div class="col-6">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" id="contact_number">
                        </div>	
                    </div>	
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Manager</label>
                            <input type="text" class="form-control" id="manager">
                        </div>	
                        <div class="col-6">
                            <label>Capacity Of Stable</label>
                            <input type="text" class="form-control" id="capacity_of_stable">
                        </div>	
                    </div>	
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Capacity Of Arena</label>
                            <input type="text" class="form-control" id="capacity_of_arena">
                        </div>	
                        <div class="col-6">
                            <label>Capacity Of Coach</label>
                            <input type="text" class="form-control" id="number_of_coach">
                        </div>	
                    </div>	
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Address</label>
                            <textarea type="text" class="form-control" id="address"></textarea>
                        </div>	
                    </div>	
                </div>
                <div class="modal-footer">											
                    <button data-dismiss="modal" class="btn btn-add-new font-weight-bold">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->


@endsection
@push('add-script')
	<script type="text/javascript">
		$(document).ready( function () {
			$('#dataTable').DataTable({
                scrollX   : true,
                processing: true,
                // serverSide: true,
                language: {
                    processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
                },
                ajax      : "{{ route('stable_approval.listJson.approv') }}",
                columns: [
                    {data: 'profile', name: 'profile'},
                    {data: 'stable_name', name: 'stable_name'},
                    {data: 'owner', name: 'owner'},
                    {data: 'contact_person', name: 'contact_person'},
                    {data: 'contact_number', name: 'contact_number'},
                    {data: 'date_created', name: 'date_created'},
                    {data: 'action', name: 'action'},
                ]
            }); 
			$('#dataTable2').DataTable({
                scrollX   : true,
                processing: true,
                // serverSide: true,
                language: {
                    processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
                },
                ajax      : "{{ route('stable_approval.listJson.unapprov') }}",
                columns: [
                    {data: 'profile', name: 'profile'},
                    {data: 'stable_name', name: 'stable_name'},
                    {data: 'owner', name: 'owner'},
                    {data: 'contact_person', name: 'contact_person'},
                    {data: 'contact_number', name: 'contact_number'},
                    {data: 'date_created', name: 'date_created'},
                    {data: 'action', name: 'action'},
                ]
            }); 

            $('#dataTable tbody').on( 'click', '#openDetail', function (e) {
                e.preventDefault();
                // get value from row					
                var id = $(this).attr('data-id');
                $.ajax({
                    url: "{{ route('stable_approval.detail.stable') }}",
                    type: 'GET',
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        // update stuff
                        // append value
                        $('#name').val(response.name);
                        $('#owner').val(response.owner);
                        $('#contact_person').val(response.contact_person);
                        $('#contact_number').val(response.contact_number);
                        $('#manager').val(response.manager);
                        $('#capacity_of_stable').val(response.capacity_of_stable);
                        $('#capacity_of_arena').val(response.capacity_of_arena);
                        $('#number_of_coach').val(response.number_of_coach);
                        $('#address').val(response.address);
                        // title
                        $('#title_modal').text('Detail Stable');
                        // open modal
                        $('#modalDetail').modal('show');
                    },
                    error: function () {
                        alert("An error occurred, please try again later.");
                    }
                });
            });  

            $('#dataTable tbody').on( 'click', '#approv-stable', function (e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                $.ajax({
                    url: "{{ route('stable_approval.approv.stable') }}",
                    type: "POST",
                    data: {
                        id: id,
                        _token:"{{ csrf_token() }}"		
                    },
                    success: function(dataResult){
                        Swal.fire({
                            type : 'success',
                            title: 'Approve success.',
                            text : 'Success',
                            icon : 'success',
                            timer: 2000
                        });
                        // append to datatable
                        t.ajax.reload();
                    },
                    error: function () {
                        alert("An error occurred, please try again later.");
                    }
                });
            });

            $('#dataTable tbody').on( 'click', '#unapprov-stable', function (e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                $.ajax({
                    url: "{{ route('stable_approval.unapprov.stable') }}",
                    type: "POST",
                    data: {
                        id: id,
                        _token:"{{ csrf_token() }}"		
                    },
                    success: function(dataResult){
                        Swal.fire({
                            type : 'success',
                            title: 'Decline success.',
                            text : 'Success',
                            icon : 'success',
                            timer: 2000
                        });
                        // append to datatable
                        t.ajax.reload();
                    },
                    error: function () {
                        alert("An error occurred, please try again later.");
                    }
                });
            });
			
		} );
</script>
@endpush