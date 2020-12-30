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
                            <div class="d-flex justify-content-start align-items-center">
                                <h6 class="title-text mb-0 table-danger">
                                    LIST STABLE APPROVAL STEP 2
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
                                                <th scope="col">Owner</th>													
                                                <th scope="col">Contact Person</th>													
                                                <th scope="col">Contact Number</th>													
                                                <th scope="col">Date Created</th>											
                                                <th scope="col">Status</th>											
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mt-20">
                                <h6 class="title-text mb-0 table-success">
                                    LIST STABLE APPROVED STEP 2
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
                                                <th scope="col">Owner</th>													
                                                <th scope="col">Contact Person</th>													
                                                <th scope="col">Contact Number</th>													
                                                <th scope="col">Date Created</th>													
                                                <th scope="col">Status</th>
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
            <div class="modal-header ">
                <h4 class="title-text " id="title_modal" data-state="add">
                    DETAIL STABLE
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="mb-0">Stable Name</p>
                        <h4 class="mb-4" id="name"></h4>
                        <p class="mb-0">Owner</p>
                        <h4 class="mb-4" id="owner"></h4>
                        <p class="mb-0">Manager</p>
                        <h4 class="mb-4" id="manager"></h4>
                        <p class="mb-0">Contact Person</p>
                        <h4 class="mb-4" id="contact_person"></h4>
                        <p class="mb-0">Contact Number</p>
                        <h4 class="mb-4" id="contact_number"></h4>
                        <p class="mb-0">Capacity of Stable</p>
                        <h4 class="mb-4" id="capacity_of_stable"></h4>
                        <p class="mb-0">Capacity of Arena</p>
                        <h4 class="mb-4" id="capacity_of_arena"></h4>
                        <p class="mb-0">Number of Coach</p>
                        <h4 class="mb-4" id="number_of_coach"></h4>
                        <p class="mb-0">Address</p>
                        <h4 class="mb-4" id="address"></h4>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0">Province</p>
                        <h4 class="mb-4" id="province"></h4>
                        <p class="mb-0">City</p>
                        <h4 class="mb-4" id="city"></h4>
                        <p class="mb-0">District</p>
                        <h4 class="mb-4" id="district"></h4>
                        <p class="mb-0">Village</p>
                        <h4 class="mb-4" id="village"></h4>
                        <p class="mb-0">Facilities</p>
                        <h4 class="mb-4" id="facilities"></h4>
                        <p class="mb-0">Logo</p>
                        <img src="" alt="" id="logo" style="max-width: 100px">
                        <p class="mb-0">Approval At</p>
                        <h4 class="mb-4" id="approval_at"></h4>
                        <p class="mb-0">Approval By</p>
                        <h4 class="mb-4" id="approval_by"></h4>
                        <p class="mb-0">Approval Status</p>
                        <h4 class="mb-4" id="approval_status"></h4>
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
                ajax      : "{{ route('stable_approval2.listJson.approv') }}",
                columns: [
                    {data: 'no', render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }},
                    {data: 'stable_name', name: 'stable_name'},
                    {data: 'owner', name: 'owner'},
                    {data: 'contact_person', name: 'contact_person'},
                    {data: 'contact_number', name: 'contact_number'},
                    {data: 'date_created', name: 'date_created'},
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
                ajax      : "{{ route('stable_approval2.listJson.unapprov') }}",
                columns: [
                    {data: 'no', render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }},
                    {data: 'stable_name', name: 'stable_name'},
                    {data: 'owner', name: 'owner'},
                    {data: 'contact_person', name: 'contact_person'},
                    {data: 'contact_number', name: 'contact_number'},
                    {data: 'date_created', name: 'date_created'},
                    {data: 'approval_status', name: 'approval_status'},
                    {data: 'action', name: 'action'},
                ]
            }); 

            $('body').on( 'click', '#openBtn', function () {
                var id = $(this).data('id');
                $.get('{{route('stable_approval2.index')}}'+'/detail/stable/' + id , function (data) {
                    $('#name').html(data[0].name);
                    $('#owner').html(data[0].owner);
                    $('#manager').html(data[0].manager);
                    $('#contact_person').html(data[0].contact_person);
                    $('#contact_number').html(data[0].contact_number);
                    $('#capacity_of_stable').html(data[0].capacity_of_stable);
                    $('#capacity_of_arena').html(data[0].capacity_of_arena);
                    $('#number_of_coach').html(data[0].number_of_coach);
                    $('#address').html(data[0].address);
                    if(data[1][0].name == null){
                        $('#province').html('Empty');
                    }else{
                        $('#province').html(data[1][0].name);
                    }
                    if(data[1][1].name == null){
                        $('#city').html('Empty');
                    }else{                        
                        $('#city').html(data[1][1].name);
                    }
                    if(data[1][2].name == null){
                        $('#district').html('Empty');
                    }else{                        
                        $('#district').html(data[1][2].name);
                    }                    
                    if(data[1][3].name == null){
                        $('#village').html('Empty');
                    }else{                        
                        $('#village').html(data[1][3].name);
                    }
                    $('#facilities').html(data[0].facilities);
                    $('#logo').attr('src','{{asset("storage/stable/logo/")}}/'+(data[0].logo));
                    $('#approval_status').html(data[0].approval_status);
                    $('#approval_at').html(data[0].approval_at);                    
                    if(data[0].approval_at == null){
                        $('#approval_at').html('Need Approval');    
                    }
                    if(data[0].approval_by == null){
                        $('#approval_by').html('Need Approval');    
                    }else{
                        $('#approval_by').html(data[0].approvalby_stable.name);
                    }
                    if(data[0].approval_status == null){
                        $('#approval_status').html('Need Approval');    
                    }
                    $('#modalDetail').modal('show');
                })
            });              
		} );
</script>
@endpush