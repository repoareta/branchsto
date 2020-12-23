@extends('layout.admin')
@push('add-style')
    
@endpush
@section('content')
<!--begin::Main-->

		<!--[html-partial:include:{"file":"partials/_header-mobile.html"}]/-->
		@include('partials.admin._header-mobile')
		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">

				<!--[html-partial:include:{"file":"partials/_aside.html"}]/-->
				@include('partials.admin._aside')
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<!--[html-partial:include:{"file":"partials/_header.html"}]/-->
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
                                        <h5 class="title-text mb-0">
                                            Bank Sex Management
                                        </h1>
                                    </div>
                                    <div class="card mt-10">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-data table-striped" id="dataTable">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Account Number</th>
                                                        <th scope="col">Account Name</th>
                                                        <th scope="col">Branch</th>
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Action</th>
                                                      </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <!-- Modal -->
                            @include('app-owner.bank.create')
                            @include('app-owner.bank.edit')
                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>
					<!--end::Content-->

					<!--[html-partial:include:{"file":"partials/_footer.html"}]/-->
					@include('partials._footer')
				</div>

				<!--end::Wrapper-->

			</div>

			<!--end::Page-->
		</div>

<!--end::Main-->
@endsection
@push('add-script')
<script type="text/javascript">
    $(document).ready( function () {
        var t = $('#dataTable').DataTable({
			scrollX   : true,
			processing: true,
			// serverSide: true
			language: {
            	processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
			},
			ajax      : "{{ route('owner.bank.list.json') }}",
			columns: [
                {data: 'id', name: 'id'},
                {data: 'account_number', name: 'account_number'},
                {data: 'account_name', name: 'account_name'},
                {data: 'branch', name: 'branch'},
                {data: 'photo', name: 'photo'},
                {data: 'action', name: 'action'},
			]
		});
        $("#dataTable_filter").append("<button class='btn btn-add-new ml-5' data-toggle='modal' data-target='#modalAdd'>Add New +</button>");		

		$('#dataTable tbody').on( 'click', '.delete-bank', function (e) {
			e.preventDefault();
			var id = $(this).attr('data-id');
			Swal.fire({
				title: "Are you sure?",
				text: "You won't be able to revert this!" ,
				icon: "warning",
				confirmButtonText: "Delete",
				confirmButtonColor: '#141D31',
				showCancelButton: true,
				reverseButtons: true
			}).then(function(result) {
				if (result.value) {
					$.ajax({
						url: "{{ route('owner.bank.delete') }}",
						type: 'DELETE',
						dataType: 'json',
						data: {
							"id": id,
							"_token": "{{ csrf_token() }}",
						},
						success: function () {
							Swal.fire({
								title: "Delete Data Bank",
								text: "success",
								icon: "success",
								buttonsStyling: false,
								confirmButtonText: "Ok",
								customClass: {
									confirmButton: "btn btn-dark"
								}
							}).then(function() {
								location.reload();
							});
						},
						error: function () {
							alert("An error occurred, please try again later.");
						}
					});
				}
			});
		});

		$('body').on('click', '#editData', function () {
                var id = $(this).data('id');
                $.get('{{route('owner.bank')}}'+'/edit/' + id , function (data) {
                    $('#idData').val(data.id);
                    $('#account_number').val(data.account_number);
                    $('#account_name').val(data.account_name);
                    $('#branch').val(data.branch);
                    
                    $('#modalEdit').modal('show');
                })
            });
    } );
</script>
<!--end::Page Scripts-->
@endpush