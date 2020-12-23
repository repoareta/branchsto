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
                                    
                                    <div class="d-flex justify-content-start align-items-center">
                                        <h5 class="title-text mb-0">
                                            Horse Sex Management
                                        </h1>
                                    </div>
                                    <div class="card mt-10">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-data table-striped" id="dataTable">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
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
                            @include('app-owner.horse-sex.create')
                            @include('app-owner.horse-sex.edit')
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
			ajax      : "{{ route('owner.horse-sex.list.json') }}",
			columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'action', name: 'action'},
			]
		});
        $("#dataTable_filter").append("<button class='btn btn-add-new ml-5' data-toggle='modal' data-target='#modalAdd'>Add New +</button>");		

		$('#dataTable tbody').on( 'click', '.delete-horse', function (e) {
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
						url: "{{ route('owner.horse-sex.delete') }}",
						type: 'DELETE',
						dataType: 'json',
						data: {
							"id": id,
							"_token": "{{ csrf_token() }}",
						},
						success: function () {
							Swal.fire({
								title: "Delete Data Horse",
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
                $.get('{{route('owner.horse-sex')}}'+'/edit/' + id , function (data) {
                    $('#idData').val(data.id);
                    $('#name').val(data.name);
                    
                    $('#modalEdit').modal('show');
                })
            });
    } );
</script>
<!--end::Page Scripts-->
@endpush