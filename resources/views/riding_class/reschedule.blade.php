@extends('layout.index')
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
                    <div class="container-fluid package-page stable">
                        <div class="stable-body">
                            <div class="d-flex justify-content-center align-items-center">
                                <h5 class="title-text mb-0">
                                    RESCHEDULE REGULAR
                                </h5>
                            </div>
                            <div class="row mt-5 justify-content-center">
                                <div class="col-lg-8">
                                    <div class="card card-booking">
                                        <div class="card-body">
                                            <form action="{{route('riding_class.reschedule')}}" id="formSubmit" method="POST">
                                                @csrf
                                                @php
                                                $count=0;
                                                @endphp
                                                <input type="hidden" name="id" value="{{Crypt::encryptString($booking_detail->id)}}">
                                                {{ Form::hidden('uid', Auth::user()->id) }}
                                                <input type="hidden" name="slot_user_id" value="{{Crypt::encryptString($slot_user->id)}}">
                                                {{-- <input type="hidden" value="{{$list_detail->attendance}}" id="attendance"> --}}
                                                <table class="table table-borderless table-dark mb-10" style="vertical-align: middle;">
                                                    <tbody class="text-left">
                                                        <tr>
                                                            <td width="20%">Package Name</td>
                                                            <td width="5%">:</td>
                                                            <td>{{$package->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%">Package Description</td>
                                                            <td width="5%">:</td>
                                                            <td>{{$package->description}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%">Slot Date</td>
                                                            <td width="5%">:</td>
                                                            <td>{{$slots->date}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%">Slot Time</td>
                                                            <td width="5%">:</td>
                                                            <td>{{$slots->time_start}} - {{$slots->time_end}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%">Choose Date</td>
                                                            <td>:</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                <ul id="browser" class="filetree">
                                                                    @foreach ($slot as $item)
                                                                    <li  class="closed"><span class="folder pointer-link kt-subheader__breadcrumbs-link" >{{$item->date}}</span>
                                                                        <ul class="jstree-container-ul jstree-children">
                                                                            @foreach (DB::table('slots')->where('user_id',$item->user_id)->where('date', $item->date)->where('capacity','<>','0')->orderBy('time_start','asc')->get() as $item2)
                                                                                <li style="margin-left:-30px">
                                                                                    <span class="file pointer-link kt-subheader__breadcrumbs-link pointer-link" data-toggle="kt-tooltip" data-placement="top" title="Click Time">
                                                                                        {{$item2->time_start}} - {{$item2->time_end}}
                                                                                        @if ($item2->capacity > $item2->capacity_booked)
                                                                                            <input type="checkbox" name="slot_id" data-exval="1" value="{{$item2->id}}" class="ponter-link">
                                                                                        @else
                                                                                            <input type="checkbox" disabled>
                                                                                        @endif
                                                                                        <input type="hidden" name="time1" value="{{$item2->time_start}}" class="ponter-link">
                                                                                        <input type="hidden" name="time2" value="{{$item2->time_end}}" class="ponter-link">
                                                                                        <input type="hidden" name="date" value="{{$item2->date}}" class="ponter-link">
                                                                                    </span>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                                <input type="hidden" name="usage_status" value="riding_class">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <span class="form-text text-muted" id="result"></span>
                                                <div class="modal-footer">
                                                    <a href="{{redirect()->back()}}" class="btn btn-secondary">BACK</a>
                                                    <button type="submit" disabled class="btn btn-add-new font-weight-bold" id="submitbutton">SUBMIT</button>
                                                </div>
                                            </form>
                                        </div>
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
@endsection
@push('add-script')
<script type="text/javascript">
$(document).ready(function () {
//tampil edit detail
    $("#browser").treeview();  
    
    $('li').on('click','input[type="checkbox"]', function(){
        var total=0;
        //lOOP THROUGH CHECKED
        $('li').on('click','input[type="checkbox"]', function(){
            //Update total
            var total = $("input:checked").length;
            console.log(total);
            if(total == 1){
                $("#result").html("");
                document.getElementById('submitbutton').disabled = false;
            }else{
                $("#result").html("<p style='color:red'>You can only choose one schedule to submit.</p>");
                document.getElementById('submitbutton').disabled = 'disabled';

            }
        });
    });  

    $('tbody').on('click','#submitbutton"', function(e) {
    
        e.preventDefault();
            
        Swal.fire({
            title: 'Are you sure?',
            icon: 'info',
            text: 'You are only have one chance to reschedule.',
            type: 'info',
            showCancelButton: true,
            confirmButtonText: 'Accept',
            cancelButtonText: 'Cancel',
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(getAction) {
            if (getAction.value === true) {
                $('#formSubmit').submit();
            }
        });
    });
});    
    $('#kt_datepicker_6').datepicker({
        todayHighlight: true,
		orientation: "bottom left",
        autoclose: true,
        startDate: new Date()
    });
</script>
@endpush