@extends('layout.index')
@push('addon-style')

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
                            <a href="{{route('schedule.index')}}" class="btn btn-back-page">
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
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('competitions.index')}}">HOME</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{route('stable.index')}}">MANAGE STABLE</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">LIST DETAIL SCHEDULE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <table class="table table-striped" id="dataTable">
                                        <thead>
                                            <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{date('H:i:s',strtotime($item->date_start))}}</td>
                                                    <td>{{$item->capacity}}</td>
                                                    <td>
                                                        <a href='#' class='btn btn-success'>
                                                            <i class='fas fa-pen text-center mr-2 view-time' id='openDetail' data-id='{{$item->id}}'></i>
                                                        </a>
                                                        <a class='btn btn-danger'>
                                                            <i class='fas fa-trash delete-slot pointer-link' data-id='".$data->id."'></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
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
            @include('partials._footer')
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->


<!-- Modal -->
<div class="modal fade" id="modalAddPackage"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="title-text " id="title_modal" data-state="add">
                    ADD SCHEDULE
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
                <form action="{{route('schedule.store')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-11">
                            <label>Date</label>
                            <input type="hidden" class="form-control" name="id" id="id">
                            <input type="text" class="form-control" name="tanggal" id="date_start">
                        </div>	
                    </div>	
                    <div class="form-group row">											
                        <div class="col-3">
                            <label>Session</label>
                            <input type="text" class="form-control" name="time" id="time">
                        </div>																								
                        <div class="col-3">
                            <label>Capacity</label>
                            <input type="text" class="form-control" name="capacity" id="capacity">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">											
                    <button data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-add-new font-weight-bold">SAVE</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('add-script')
<script>
$(document).ready( function () {
    $("#sess1").attr('disabled', true);
    $("#sess2").attr('disabled', true);
    var t = $('#dataTable').DataTable({
        scrollX   : true,
        processing: true,
        // serverSide: true
        language: {
            processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
        },
    });


    $('#kt_table tbody').on( 'click', '.view-time', function (e) {
        e.preventDefault();
    });

    $("body").on("click","#add-more",function(){ 
        $("#sess1").attr('disabled', false);
        $("#sess2").attr('disabled', false);
        var html = $("#copy").html();
        $("#after-add-more").after(html);
    });

    // saat tombol remove dklik control group akan dihapus 
    $("body").on("click","#remove",function(){ 
        $(this).parents(".form-group").remove();
        // $("#sess1").attr('disabled', true);
        // $("#sess2").attr('disabled', true);
    });
    $('#openDetail').click(function(e) {
        e.preventDefault();
        // get value from row					
        var id = $(this).attr('data-id');
        $.ajax({
            url: "{{ route('schedule.detail.show') }}",
            type: 'GET',
            data: {
                "id": id,
                "_token": "{{ csrf_token() }}",
            },
            success: function (response) {
                // update stuff
                // append value
                console.log(response.);
                $('#date_start').val(response.date_start);
                $('#time').val(response.time);
                $('#capacity').val(response.capacity);
                // title
                $('#title_modal').text('Update Session');
                $('#title_modal').data('state', 'update');
                // open modal
                $('#modalAddPackage').modal('toggle');
            },
            error: function () {
                alert("Terjadi kesalahan, coba lagi nanti");
            }
        });
    });
    $('#dataTable tbody').on( 'click', '.delete-package', function (e) {
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
                    url: "{{ route('package.delete') }}",
                    type: 'DELETE',
                    dataType: 'json',
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function () {
                        Swal.fire({
                            title: "Delete Data package",
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

    $('#dataTable tbody').on( 'click', '.edit-package', function (e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        location.replace("{{url('package/edit')}}"+ '/' +id);
    });
} );
</script>
@endpush