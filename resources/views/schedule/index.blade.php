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
                            <a href="{{route('stable.index')}}" class="btn btn-back-page">
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
                                        <a href="" class="text-muted">LIST SCHEDULE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <h5 class="title-text">Filter</h5>
                                    <div class="form-group mb-3 row">
                                        <div class="col-md-6">
                                            <label>Date Range</label>
                                            <div class="input-daterange input-group" id="date_range_filter">
                                                <input type="text" class="form-control" autocomplete="off" name="from_date" id="from_date">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-ellipsis-h"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" name="end_date" autocomplete="off" id="end_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                                            <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <table class="table" id="dataTable">
                                        <thead>
                                            <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time Start</th>
                                            <th scope="col">Time End</th>
                                            <th scope="col">Capacity</th>
                                            <th scope="col">Capacity Booked</th>
                                            <th scope="col">Action</th>
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
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>	
                    </div>	
                    <div class="form-group row">											
                        <div class="col-4">
                            <label>Time Start</label>
                            <input type="text" class="form-control" name="time1[]" maxlength="5" value="08:00">
                        </div>																								
                        <div class="col-4">
                            <label>Time End</label>
                            <input type="text" class="form-control" name="time2[]" maxlength="5" value="09:00">
                        </div>
                        <div class="col-3">
                            <label>Capacity</label>
                            <input type="text" class="form-control" name="capacity[]" value="0">
                        </div>
                    </div>
                    <div class="form-group row">											
                        <div class="col-4">
                            <label>Time Start</label>
                            <input type="text" class="form-control" name="time1[]" maxlength="5" value="09:00">
                        </div>																								
                        <div class="col-4">
                            <label>Time End</label>
                            <input type="text" class="form-control" name="time2[]" maxlength="5" value="10:00">
                        </div>
                        <div class="col-3">
                            <label>Capacity</label>
                            <input type="text" class="form-control" name="capacity[]" value="0">
                        </div>
                    </div>
                    <div class="form-group row" id="after-add-more">											
                        <div class="col-4">
                            <label>Time Start</label>
                            <input type="text" class="form-control" name="time1[]" maxlength="5" value="10:00">
                        </div>																								
                        <div class="col-4">
                            <label>Time End</label>
                            <input type="text" class="form-control" name="time2[]" maxlength="5" value="11:00">
                        </div>
                        <div class="col-3">
                            <label>Capacity</label>
                            <input type="text" class="form-control" name="capacity[]" value="0">
                        </div>
                        <div class="col-1">
                            <label for=""></label>
                            <i class="fas fa-plus-circle pointer-link text-dark icon-2x mt-10" id="add-more"></i> 
                        </div>
                    </div>
                    <div  hidden id="copy">
                        <div  class="form-group row">											
                            <div class="col-4">
                                <label>Time Start</label>
                                <input type="text" class="form-control" name="time1[]" maxlength="5" value="">
                            </div>																								
                            <div class="col-4">
                                <label>Time End</label>
                                <input type="text" class="form-control" name="time2[]" maxlength="5" value="">
                            </div>
                            <div class="col-3">
                                <label>Capacity</label>
                                <input type="text" class="form-control" name="capacity[]" value="0">
                            </div>
                            <div class="col-1">
                                <label for=""></label>
                                <i class="fas fa-times-circle pointer-link text-danger icon-2x mt-10" id="remove"></i> 
                            </div>																								
                            <div class="col-1">
                            </div>
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
<!-- Modal -->
<div class="modal fade" id="modalAddPackageedit"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="title-text " id="title_modal" data-state="add">
                    EDIT SCHEDULE
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
                <form action="{{route('schedule.update')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-11">
                            <label>Date</label>
                            <input type="hidden" class="form-control" name="slot_id" id="slot_id">
                            <input type="text" class="form-control" name="date" id="date" required>
                        </div>	
                    </div>	
                    <div class="form-group row">											
                        <div class="col-4">
                            <label>Time Start</label>
                            <input type="text" class="form-control" name="time1" maxlength="5" id="timePickerEdit1">
                        </div>																								
                        <div class="col-4">
                            <label>Time End</label>
                            <input type="text" class="form-control" name="time2" maxlength="5" id="timePickerEdit2">
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

<!-- Modal Generate Schedule -->
<div class="modal fade" id="modalGenerateSchedule"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="title-text " id="title_modal" data-state="add">
                    GENERATE SCHEDULE
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
                <form action="{{route('schedule.generate')}}" class="repeater" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-11">
                            <label>Date</label>
                            <div class="input-daterange input-group" id="date_range">
                                <input type="text" class="form-control" name="start" autocomplete="off">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-ellipsis-h"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="end" autocomplete="off">
                            </div>
                        </div>	
                    </div>
                        <!--
                            The value given to the data-repeater-list attribute will be used as the
                            base of rewritten name attributes.  In this example, the first
                            data-repeater-item's name attribute would become group-a[0][text-input],
                            and the second data-repeater-item would become group-a[1][text-input]
                        -->
                    <div data-repeater-list="group-a">
                        <div data-repeater-item class="form-group row">											
                            <div class="col-md-3">
                                <label>Time Start</label>
                                <input type="text" class="form-control" name="time1" id="timePickerGen1">
                            </div>																								
                            <div class="col-md-3">
                                <label>Time End</label>
                                <input type="text" class="form-control" name="time2" id="timePickerGen2">
                            </div>
                            <div class="col-md-3">
                                <label>Capacity</label>
                                <input type="number" class="form-control" name="capacity" id="capacity">
                            </div>
                            <div class="col-md-3 align-self-end">
                                <button data-repeater-delete type="button" class="btn btn-sm font-weight-bolder btn-light-danger">
                                    <i class="la la-trash-o"></i>Delete</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button data-repeater-create type="button" class="btn btn-sm font-weight-bolder btn-light-primary mt-repeater-add">
                        <i class="la la-plus"></i>Add</a>
                    </button>
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
    var collapsedGroups = {};

    $("#sess1").attr('disabled', true);
    $("#sess2").attr('disabled', true);

    //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //jalankan function load_data diawal agar data ter-load
    load_data();
    $('#date_range_filter').datepicker({
		todayHighlight: true,
		orientation: "bottom left",
		autoclose: true,
		// language : 'id',
		format   : 'yyyy-mm-dd'
    });
    $('#date_range').datepicker({
		todayHighlight: true,
		orientation: "bottom left",
		autoclose: true,
		// language : 'id',
        format   : 'yyyy-mm-dd',
        startDate: new Date(),
    });
    $('#filter').click(function () {
        var from_date = $('#from_date').val(); 
        var end_date = $('#end_date').val(); 
        console.log(from_date + end_date);
        if (from_date != '' && end_date != '') {
            $('#dataTable').DataTable().destroy();
            load_data(from_date, end_date);
        } else {
            alert('Both Date is required');
        }
    });

    $('#refresh').click(function () {
        $('#from_date').val('');
        $('#end_date').val('');
        $('#dataTable').DataTable().destroy();
        $('#date_range_filter').datepicker('remove');
        $('#date_range_filter').datepicker({
            todayHighlight: true,
            orientation: "bottom left",
            autoclose: true,
            // language : 'id',
            format   : 'yyyy-mm-dd'
        });
        load_data();
    });

    function load_data(from_date = '', end_date = '')
    {
        var t = $('#dataTable').DataTable({
            scrollX   : true,
            processing: true,
            // serverSide: true
            language: {
                processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
            },
            ajax: {
                        url: "{{ route('schedule.index.json') }}",
                        type: 'GET',
                        data:{from_date:from_date, end_date:end_date} //jangan lupa kirim parameter tanggal 
                    },            
            columns: [
                    {data: 'date', name: 'date', orderable: false, searchable: false},
                    {data: 'time_start', name: 'time_start'},
                    {data: 'time_end', name: 'time_end'},
                    {data: 'capacity', name: 'capacity'},
                    {data: 'capacity_booked', name: 'capacity_booked'},
                    {data: 'action', name: 'action'},
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
        $('#dataTable tbody').on('click', 'tr.dtrg-start', function () {
            var name = $(this).data('name');
            collapsedGroups[name] = !collapsedGroups[name];
            t.draw(false);
        });  
    
        $("#dataTable_filter").append("<button class='btn btn-add-new ml-5' id='openDetail'>Add New +</button>");
    
        $("#dataTable_filter").append("<button class='btn btn-add-new ml-3'  data-toggle='modal' data-target='#modalGenerateSchedule'>Generate Schedule</button>");
    
        $('#openDetail').click(function(e) {
            e.preventDefault();
            $('#modalAddPackage').modal('show');
            $('#title_modal').data('state', 'add');
            $(this).find('form').trigger('reset');
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
        });+
    
        $('#dataTable tbody').on( 'click', '.view-time', function (e) {
            e.preventDefault();
            // get value from row					
            var id = $(this).attr('data-time');
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
                    var time1 = response.time_start;
                    var time2 = response.time_end;
                    console.log(response.date);
                    $('#slot_id').val(response.id);
                    $('#date').val(response.date);
                    $('#time1').val(time1.substr(0,5));
                    $('#time2').val(time1.substr(0,5));
                    $('#capacity').val(response.capacity);
                    // title
                    $('#title_modal').text('Edit data slot');
                    $('#title_modal').data('state', 'update');
                    // open modal
                    $('#modalAddPackageedit').modal('toggle');
                },
                error: function () {
                    alert("Terjadi kesalahan, coba lagi nanti");
                }
            });
        });
    
        $('#dataTable tbody').on( 'click', '.delete-slot', function (e) {
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
                        url: "{{ route('schedule.delete') }}",
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
        $('#date').datepicker({
            todayHighlight: true,
            orientation: "bottom left",
            autoclose: true,
            // language : 'id',
            format   : 'yyyy-mm-dd'
        });
    }    
    
} );
</script>
@endpush

{{-- Agar tidak conflict dengan dataTable --}}
@push('script-no-dt')
<script>
    $('.repeater').repeater({
    });
    $("#timePickerEdit1").timepicker(
        {
            minuteStep: 1,
            defaultTime: "7:00",
            showMeridian: !1,
            snapToStep: !0
        }
    );
    $("#timePickerEdit2").timepicker(
        {
            minuteStep: 1,
            defaultTime: "8:00",
            showMeridian: !1,
            snapToStep: !0
        }
    );
    $.noConflict();
    jQuery(function($) {
        $("input[id=timePickerGen1]").each(function () {
            $(this).timepicker(
                {
                    minuteStep: 1,
                    defaultTime: "7:00",
                    showMeridian: !1,
                    snapToStep: !0
                }
            );
        });
        $("input[id=timePickerGen2]").each(function () {
            $(this).timepicker(
                {
                    minuteStep: 1,
                    defaultTime: "8:00",
                    showMeridian: !1,
                    snapToStep: !0
                }
            );
        });
        $('.mt-repeater-add').click(function(){
            $("input[id=timePickerGen1]").each(function () {
                $(this).timepicker(
                    {
                        minuteStep: 1,
                        defaultTime: "7:00",
                        showMeridian: !1,
                        snapToStep: !0
                    }
                );
            });
            $("input[id=timePickerGen2]").each(function () {
                $(this).timepicker(
                    {
                        minuteStep: 1,
                        defaultTime: "8:00",
                        showMeridian: !1,
                        snapToStep: !0
                    }
                );
            });
    
        })
    });

</script>
@endpush