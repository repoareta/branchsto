@extends('layout.index')
@push('add-style')
<link href="{{url('assets/uppy/uppy.min.css')}}" rel="stylesheet" type="text/css" />
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
							<div class="d-flex align-items-baseline flex-wrap mr-5">
								<!--begin::Page Title-->
								<h4 class="title-text mb-0">
                                    PACKAGE
                                </h4>
								<!--end::Page Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
									<li class="breadcrumb-item active">
										<a href="{{route('competitions.index')}}" class="text-muted">HOME</a>
									</li>
									<li class="breadcrumb-item">
										<a href="{{route('stable.index')}}" class="text-muted">MANAGE PACKAGE</a>
									</li>
									<li class="breadcrumb-item">
										<a href="" class="text-muted">PACKAGE</a>
									</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
                            <form action="{{route('package.update')}}" method="POST" id="formpackage">
                                @csrf
                                <div class="card mt-10">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Name Package</label>
                                                <input type="text" class="form-control" name="name" value="{{$data->name}}">
                                                <input type="hidden" class="form-control" name="stable_id" value="{{$data->stable_id}}">
                                                <input type="hidden" class="form-control" name="package_id" value="{{$data->id}}">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Package Number</label>
                                                <input type="text" name="package_number" class="form-control" value="{{$data->package_number}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Description</label>
                                                <textarea type="text" class="form-control" name="description" >{{$data->description}}</textarea>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Price</label>
                                                <input type="text" class="form-control" name="price" value="{{$data->price}}">
                                            </div>												
                                        </div>
                                        {{-- <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Upload Logo</label>
                                                <div class="custom-file">
                                                    <input type="file" name="files[]" multiple class="custom-file-input form-control" id="customFileLogo">
                                                    <label class="custom-file-label" for="customFileLogo">Upload Logo</label>
                                                    </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Upload Banner</label>
                                                <div class="custom-file">
                                                    <input type="file" name="files[]" multiple class="custom-file-input form-control" id="customFileBanner">
                                                    <label class="custom-file-label" for="customFileBanner">Upload Banner Cover</label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-4 mb-3">
                                                <label>Gallery</label>
                                                <div id="drag-drop-area"></div>
                                            </div>
                                        </div>											 --}}
                                        </form>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="title-text">LIST SESSION</h5>
                                                    <button  type="button" class="btn btn-add-new" id="openDetail">ADD NEW +</button>
                                                </div>
                                                <table class="table table-striped" id="kt_table">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Start Date</th>
                                                        <th scope="col">End Date</th>
                                                        <th scope="col">Capacity</th>
                                                        <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                </table>													
                                            </div>
                                        </div>
                                        <div class="form-group mt-5">
                                            <button type="submit" class="btn btn-add-new mr-2">SUBMIT</button>
                                            <a href="{{route('package.index')}}" class="btn btn-secondary">Back</a>
                                        </div>											
                                    </div>
                                </div>									
                            </form>
                        </div>
                    </div>
                    <!--end::Container-->

                    <!-- Modal -->
                    <div class="modal fade" id="modalAddPackage"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header ">
                                    <h4 class="title-text " id="title_modal" data-state="add">
                                        ADD SESSION
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @php
                                        date_default_timezone_set('Asia/Jakarta');
                                        $time = date('H:i');
                                    @endphp
                                    <form action="{{route('package.slot.detail.store')}}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-11">
                                                <label>Date</label>
                                                <input type="hidden" class="form-control" name="id" id="id">
                                                <input type="date" class="form-control" name="tanggal1" id="date_start">
                                                <input type="date" class="form-control" name="tanggal2" id="date_start">
                                                <input type="hidden" class="form-control" name="package_id" value="{{$data->id}}">
                                            </div>	
                                        </div>	
                                        <div class="form-group row">											
                                            <div class="col-6">
                                                <label>Session</label>
                                                <input type="text" class="form-control" name="time[]" value="08:00">
                                            </div>																								
                                            <div class="col-5">
                                                <label>Capacity</label>
                                                <input type="text" class="form-control" name="capacity[]" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group row">											
                                            <div class="col-6">
                                                <label>Session</label>
                                                <input type="text" class="form-control" name="time[]" value="09:00">
                                            </div>																								
                                            <div class="col-5">
                                                <label>Capacity</label>
                                                <input type="text" class="form-control" name="capacity[]" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group row" id="after-add-more">											
                                            <div class="col-6">
                                                <label>Session</label>
                                                <input type="text" class="form-control" name="time[]" value="10:00">
                                            </div>																								
                                            <div class="col-5">
                                                <label>Capacity</label>
                                                <input type="text" class="form-control" name="capacity[]" value="0">
                                            </div>																								
                                            <div class="col-1">
                                                <label for=""></label>
                                                <i class="fas fa-plus-circle pointer-link text-dark icon-2x mt-10" id="add-more"></i> 
                                            </div>
                                        </div>
                                        {{-- <div hidden id="copy">
                                            <div  class="form-group row">											
                                                <div class="col-6">
                                                    <label>Session</label>
                                                    <input type="text" class="form-control" name="time[]" value="">
                                                </div>																								
                                                <div class="col-5">
                                                    <label>Capacity</label>
                                                    <input type="text" class="form-control" name="capacity[]" value="">
                                                </div>																								
                                                <div class="col-1">
                                                    <i class="fas fa-times-circle pointer-link text-danger icon-2x mt-10" id="remove"></i> 
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="modal-footer">											
                                        <button data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-add-new font-weight-bold">SAVE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--end::Entry-->
            </div>
        </div>
            <!--end::Content-->
            @include('partials._footer')
        </div>
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
@endsection
@push('add-script')
{!! JsValidator::formRequest('App\Http\Requests\PackageStore', '#formpackage') !!}
{!! JsValidator::formRequest('App\Http\Requests\SlotStore', '#formslot') !!}
<script>
    function refreshTable() {
		var table = $('#kt_table').DataTable();
		table.clear();
		table.ajax.url("{{ route('package.slot.detail.index.json', ['package_id' => $data->id])}}").load(function() {
			// Callback loads updated row count into a DOM element
			// (a Bootstrap badge on a menu item in this case):
			var rowCount = table.rows().count();
			$('#id').val(rowCount + 1);
            console.log(1);
		});
	}
    $(document).ready( function () {
        $("#add-more").click(function(){ 
          var html = $("#copy").html();
          $("#after-add-more").after(html);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click","#remove",function(){ 
            $(this).parents(".form-group").remove();
          $('#hide').attr('disabled', true);
        });
        var t = $('#kt_table').DataTable({
            scrollX   : true,
            processing: true,
            searching: false,
            lengthChange: false,
            pageLength: 200,
            ajax: "{{ route('package.slot.detail.index.json', ['package_id' => $data->id]) }}",
            columns: [
                {data: 'profile', name: 'profile', orderable: false, searchable: false, class:'radio-button'},
                {data: 'start_date', name: 'start_date'},
                {data: 'end_date', name: 'end_date'},
                {data: 'capacity', name: 'capacity'},
                {data: 'action', name: 'action'},
            ]        
        });

        $('#openDetail').click(function(e) {
			e.preventDefault();
			refreshTable();
			$('#modalAddPackage').modal('show');
			$('#title_modal').data('state', 'add');
            $(this).find('form').trigger('reset');
		});

        $("#formslot").on('submit', function(){
            if($(this).valid()) {
                // do your ajax stuff here
                var id               = $('#id').val();
                var date_start       = $('#date_start').val();
                var date_end         = $('#date_end').val();
                var capacity         = $('#capacity').val();
                var state            = $('#title_modal').data('state');
                var url, session, swal_title;

                if(state == 'add'){

                    url = "{{ route('package.slot.detail.store') }}";
                    session = false;
                    swal_title = "Create Data Slot";
                } else {
                    url = "{{ route('package.slot.detail.update', [
                        'id'          => ':id',
                        'package_id'  => $data->id,
                        'date_start'  => ':date_start',
                        'date_end'    => ':date_end',
                        'capacity'    => ':capacity'
                    ]) }}";

                    url = url;

                    session = false;
                    swal_title = "Update Data Slot";
                }

                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        id: id,
                        package_id:"{{ $data->id}}",
                        date_start: date_start,
                        date_end: date_end,
                        capacity: capacity,
                        session: session,
                        _token:"{{ csrf_token() }}"		
                    },
                    success: function(dataResult){
                        Swal.fire({
                            type : 'success',
                            title: swal_title,
                            text : 'Success',
                            icon : 'success',
                            timer: 2000
                        });
                        // close modal
                        $('#modalAddPackage').modal('toggle');
                        // clear form
                        $('#modalAddPackage').on('hidden.bs.modal', function () {
                            $(this).find('form').trigger('reset');
                        });
                        // append to datatable
                        t.ajax.reload();
                    },
                    error: function () {
                        alert("Terjadi kesalahan, coba lagi nanti");
                    }
                });
            }
            return false;
        });

        $('#kt_table tbody').on( 'click', '.delete-slot', function (e) {
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
			})
            .then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "{{ route('package.slot.detail.delete') }}",
                        type: 'DELETE',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "package_id":"{{ $data->id}}",
                            "session": false,
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function () {
                            Swal.fire({
                                type  : 'success',
                                title : 'Delete data slot',
                                text  : 'Success',
                                icon  : 'success',
                                timer : 2000
                            }).then(function() {
                                t.ajax.reload();
                            });
                        },
                        error: function () {
                            alert("Terjadi kesalahan, coba lagi nanti");
                        }
                    });
                }
            });
        } );

        $('#kt_table tbody').on( 'click', '.view-time', function (e) {
			e.preventDefault();
            // get value from row					
            var id = $(this).attr('data-id');
            $.ajax({
                url: "{{ route('package.slot.detail.show') }}",
                type: 'GET',
                data: {
                    "id": id,
                    "package_id":"{{ $data->id}}",
                    "session": false,
                    "_token": "{{ csrf_token() }}",
                },
                success: function (response) {
                    // update stuff
                    // append value
                    $('#id').val(response.id);
                    $('#user_id').val(response.user_id);
                    $('#package_id').val(response.package_id);
                    $('#date_start').val(response.date_start);
                    $('#date_end').val(response.date_end);
                    $('#capacity').val(response.capacity);
                    // title
                    $('#title_modal').text('Edit data slot');
                    $('#title_modal').data('state', 'update');
                    // open modal
                    $('#modalAddPackage').modal('toggle');
                },
                error: function () {
                    alert("Terjadi kesalahan, coba lagi nanti");
                }
            });
		});

        $('.tanggal').datepicker({
			todayHighlight: true,
			orientation: "bottom left",
			autoclose: true,
			// language : 'id',
			format   : 'dd-mm-yyyy'
		});
    } );

    var uppy = Uppy.Core()
        .use(Uppy.Dashboard, {
        inline: true,
        target: '#drag-drop-area',
        autoProceed: true,
        allowMultipleUploads: true,
        debug: false
        })
        .use(Uppy.Tus, {endpoint: 'https://master.tus.io/files/'})

    uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
    })
    
    
</script>
@endpush