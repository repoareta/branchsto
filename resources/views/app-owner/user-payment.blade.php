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
                                    LIST USER PAYMENT APPROVAL
                                </h6>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-data table-danger" id="dataTableunapprov">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">User</th>													                                                												
                                                <th scope="col">Image</th>													
                                                <th scope="col">Status</th>									
                                                <th scope="col">Bank</th>									
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mt-20">
                                <h6 class="title-text mb-0 table-success">
                                    LIST USER PAYMENT APPROVED
                                </h6>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-data table-success" id="dataTable">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">User</th>													                                                												
                                                <th scope="col">Image</th>													
                                                <th scope="col">Status</th>	
                                                <th scope="col">Bank</th>										
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
                            <p class="mb-0">User</p>
                            <h4 class="mb-4" id="user"></h4>                            
                            <p class="mb-0">Image</p>
                            <h4 class="mb-4" id="image"></h4>
                            <p class="mb-0">Status</p>
                            <h4 class="mb-4" id="approval_status"></h4>
                            <p class="mb-0">Bank</p>
                            <h4 class="mb-4" id="bank"></h4>
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
                ajax      : "{{ route('owner.userpayment.listJson.approv') }}",
                columns: [
                    {data: 'no', render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }},
                    {data: 'name', name: 'name'},                    
                    {data: 'photo', name: 'photo'},
                    {data: 'approval_status', name: 'approval_status'},
                    {data: 'bank', name: 'bank'},
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
                ajax      : "{{ route('owner.userpayment.listJson.unapprov') }}",
                columns: [
                    {data: 'no', render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }},
                    {data: 'name', name: 'name'},                    
                    {data: 'photo', name: 'photo'},
                    {data: 'approval_status', name: 'approval_status'},
                    {data: 'bank', name: 'bank'},
                    {data: 'action', name: 'action'},
                ]
            }); 

            $('body').on( 'click', '#openBtn', function () {
                var id = $(this).data('id');
                $.get('{{route('owner.userpayment.index')}}'+'/detail/booking/' + id , function (data) {
                    $('#user').html(data.user.name);
                    $('#price_total').html(data.price_total);
                    $('#image').html(data.image);                    
                    $('#approval_status').html(data.approval_status);                    
                    if(data.approval_status == null){
                        $('#approval_status').html('Need Approval');    
                    }
                    $('#bank').html(data.bank.account_name);
                    $('#modalDetail').modal('show');
                })
            });              
		} );
</script>
@endpush