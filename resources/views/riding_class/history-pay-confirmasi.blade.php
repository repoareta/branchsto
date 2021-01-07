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
                    <div class="container-fluid stable">
                        <div class="stable-body">
                            <div class="d-flex justify-content-center align-items-center">
                                <h4 class="title-text mb-0">
                                    BOOKING DETAIL
                                </h4>
                            </div>
                            <div class="row justify-content-center mt-5">
                                <div class="col-lg-6 order-md-2 order-2 order-lg-1">
                                    <div class="card card-booking">
                                        @csrf
                                        <div class="card-body">                                            
                                            @if ($cekPackage->session_usage == null)
                                                <h4>
                                                    Package {{$data_list[0]->name}}
                                                </h4>
                                                <p>
                                                    Stable {{$data_list[0]->stable_name}}
                                                </p>
                                                <table class="table table-borderless table-dark mb-5">
                                                    <tbody>
                                                        <tr>
                                                            <td width="15%" scope="row">Day</td>
                                                            <td width="5%" scope="row">:</td>
                                                            <td  scope="row">{{date('l',strtotime($booking_detail->booking_at))}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="15%" scope="row">Date</td>
                                                            <td width="5%" scope="row">:</td>
                                                            <td  scope="row">{{date('d-m-Y', strtotime($booking_detail->booking_at))}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="15%" scope="row">No</td>
                                                            <td width="5%" scope="row">:</td>
                                                            <td  scope="row">{{$booking_detail->queue_no}}</td>
                                                        </tr>
                                                        @if($status_booking->approval_status == 'Accepted')
                                                            <tr>
                                                                <td width="15%" scope="row">Status</td>
                                                                <td width="5%" scope="row">:</td>
                                                                <td  scope="row">
                                                                    @if ($booking_detail->queue_status == null)
                                                                        <span class="label label-lg label-light-success label-inline">
                                                                            Active
                                                                        </span>
                                                                    @else
                                                                        <span class="label label-lg label-light-danger label-inline">
                                                                            {{$booking_detail->queue_status}}
                                                                        </span>
                                                                    @endif
                                                                </td>
                                                            </tr>                                                        
                                                        @endif
                                                    </tbody>
                                                </table>
                                                @if ($count_booking > 1)
                                                <span class="label label-lg label-light-danger label-inline mb-5">
                                                    You are not allowed to reschedule again
                                                </span>
                                                @else
                                                    @if($status_booking->approval_status == 'Accepted')
                                                        <div class="table-danger d-none">Payment expires in <span id="time">60:00</span> minutes.</div>
                                                        <button class="btn btn-light-success font-weight-bold mr-2 mb-5" data-toggle='modal' id="reSchedulePony" data-id="{{$booking_detail->id}}">
                                                            <i class="far fa-calendar-alt"></i>
                                                            Reschedule
                                                        </button>
                                                    @endif
                                                @endif
                                            @else
                                                @foreach ($data_list as $item)
                                                <h4>
                                                    Package {{$item->name}}
                                                </h4>
                                                <p>
                                                    Stable {{$item->stable_name}}
                                                </p>
                                                <table class="table table-borderless table-dark mb-10">
                                                    <tbody>
                                                        <tr>
                                                            <td width="15%" scope="row">Day</td>
                                                            <td width="5%" scope="row">:</td>
                                                            <td  scope="row">{{date('l',strtotime($item->date))}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="15%" scope="row">Date</td>
                                                            <td width="5%" scope="row">:</td>
                                                            <td  scope="row">{{$item->date}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="15%" scope="row">Session</td>
                                                            <td width="5%" scope="row">:</td>
                                                            <td  scope="row">{{$item->time_start}} - {{$item->time_end}}</td>
                                                        </tr>                                                                                                                    
                                                            @if ($item->qr_code_status == null)
                                                                <tr>
                                                                    <td width="15%" scope="row">Status</td>
                                                                    <td width="5%" scope="row">:</td>
                                                                    <td  scope="row">
                                                                        <span class="label label-lg label-light-success label-inline">
                                                                            Active
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            @else
                                                            <tr>
                                                                <td width="15%" scope="row">Status</td>
                                                                <td width="5%" scope="row">:</td>
                                                                <td  scope="row">
                                                                    <span class="label label-lg label-light-success label-inline">
                                                                        {{$item->qr_code_status}}
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            @endif
                                                    </tbody>
                                                </table>
                                                <div class="table-danger d-none">Payment expires in <span id="time">60:00</span> minutes.</div>
                                                @if(!$check_schedule)
                                                    <form id="formSchedule{{$item->slot_user_id}}" method='get' action="{{route("riding_class.booking.list.slot_user")}}">
                                                        @csrf
                                                            {!! Form::hidden('id', Crypt::encryptString($item->slot_user_id)) !!}
                                                            <button class="btn btn-light-success font-weight-bold mr-2 mb-5" id="reSchedule{{$item->slot_user_id}}" data-id="{{$item->slot_user_id}}">
                                                                <i class="far fa-calendar-alt"></i>
                                                                Reschedule
                                                            </button>
                                                    </form>
                                                @else
                                                    <span class="label label-lg label-light-danger label-inline mb-5">
                                                        You are not allowed to reschedule again
                                                    </span>
                                                @endif
                                                
                                                <div class="image mb-19">  
                                                    <img src="{{ asset('storage'.$item->qr_code) }}" />
                                                </div>
                                                @endforeach
                                            @endif                                            
                                            <p class="mb-0">
                                                @if ($status_booking->approval_status == 'Expired')
                                                    
                                                @else
                                                    <h4>
                                                        <b>Price : {{number_format($status_booking->price_total)}}</b>
                                                    </h4>
                                                @endif
                                            </p>
                                            <hr>
                                            <h5>Reminder :</h5>
                                            @if ($status_booking->photo == null )
                                                @if ($status_booking->approval_status == 'Expired')
                                                    <p class="table-danger">
                                                    <b> Time Limit For The Payment Is 1 Hour Or Your Booking Will Expire.</b>
                                                    </p>
                                                @else
                                                    {{-- <p class="table-danger">
                                                        If you don't pay for 1 hour then your booking will expired
                                                    </p> --}}
                                                    <div class="table-danger">Payment expires in <span id="time">60:00</span> minutes.</div>
                                                    <form action="{{route('riding_class.confirmasion.payment')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="bank-number">
                                                            <div class="card-bank">
                                                                <div class="bank">
                                                                    <img src="{{ asset('storage/'.$data_payment->photo) }}" alt="">
                                                                    <div class="text">
                                                                        <div class="name">{{$data_payment->account_name}}</div>
                                                                        <div class="number">{{$data_payment->account_number}}</div>
                                                                    </div>
                                                                </div>
                                                                <div>															
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-10">
                                                            <div class="col-12">
                                                                <div class="form-group row">
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <label>Picture Proof of Payment</label>
                                                                        <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
                                                                            <div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)"></div>
                                                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                                                <input type="file" name="photo" accept=".png, .jpg, .jpeg" />
                                                                                <input type="hidden" name="profile_avatar_remove" />
                                                                            </label>
                                                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                            </span>
                                                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                            </span>
                                                                        </div>
                                                                        <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            
                                                        <input type="hidden" name="booking_id" value="{{$status_booking->id}}">
                                                        <button type="submit" class="btn btn-payment w-100" id="add-payment">
                                                            PAYMENT
                                                        </button> 
                                                    </form>
                                                @endif                                           
                                            @else
                                                @if ($status_booking->approval_status == null)
                                                    <span class="label label-lg label-light-danger label-inline">Pending.</span> 
                                                @else
                                                    <span class="label label-lg label-light-success label-inline">{{$status_booking->approval_status}}.</span> 

                                                    @if($booking_detail->qr_code)
                                                        <div class="image">  
                                                            <img src="{{ asset('storage'.$booking_detail->qr_code) }}" />                              
                                                        </div>
                                                    @endif
                                                @endif
                                            @endif
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

            <!-- Modal -->
            <div class="modal fade" id="modalReschedulePony" tabindex="-1" role="dialog" aria-labelledby="modalReschedulePony" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header justify-content-end">										
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body justify-content-center">
                            <h2 class="title-text ">
                                RESCHEDULE
                            </h2>
                            <p class="title-desc">
                                You have only one chance to rescheduling package
                            </p>
                            <form method="POST" action="{{route('riding_class.reschedule')}}">
                                @csrf                              
                                    {{ Form::hidden('id', Crypt::encryptString($booking_detail->id)) }}
                                    {{ Form::hidden('uid', Auth::user()->id) }}
                                    <div class="form-group d-flex justify-content-center">
                                        <div id="datePickerPony">                                        
                                            <input type="hidden" name="date" id="my_hidden_input">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">											
                                <button class="btn btn-secondary" data-dismiss="modal">RESET</button>
                                <button type="submit" class="btn btn-add-new font-weight-bold">SAVE</button>
                            </form>
                        </div>
                    </div>
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
@section('scripts')
<script src="{{url('assets/js/pages/custom/profile/profile.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
    //tampil edit detail
    });
    // Set the date we're counting down to
    var countDownDate = new Date("{{date('F d, Y G:i:s', strtotime($status_booking->created_at) + 60 * 60 ) }}").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();
        
    // Find the distance between now and the count down date
    var distance = countDownDate - now;

        
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;
    
    // Output the result in an element with id="demo"
    document.getElementById("time").innerHTML =  minutes + ":" + seconds;
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("time").innerHTML = "EXPIRED";
    }
        
    }, 1000);
        

    $('body').on('click', '#reSchedulePony', function () {
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
                $('#modalReschedulePony').modal('show');                
            }
        });        
    });

    $('body').on('click', '#reSchedule', function () {
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
                var id = $(this).data('id');
                $.get('{{route('riding_class.booking.list.qrcode')}}'+'/slotuser/' + id , function (data) {
                    $('#name').val(data.name);
                    $('#modalReschedule').modal('show');                
                });
            }
        });        
    });

</script>
@endsection
@push('script-no-dt')
<script>
    $('#timePickerStart').timepicker({
        minuteStep: 1,
        defaultTime: "7:00",
        showMeridian: !1,
        snapToStep: !0
    });
    $('#timePickerEnd').timepicker({
        minuteStep: 1,
        defaultTime: "7:00",
        showMeridian: !1,
        snapToStep: !0
    });
    $('#datePickerPony').datepicker({
        startDate: new Date(),
    });
    $('#datePicker').datepicker({
        startDate: new Date(),
    });
</script>
@endpush