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
                                            @foreach ($data_list as $item)
                                                @if ($item->session_usage == null)
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
                                                                <td  scope="row">{{date('l',strtotime($item->booking_at))}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="15%" scope="row">Date</td>
                                                                <td width="5%" scope="row">:</td>
                                                                <td  scope="row">{{date('d-m-Y', strtotime($item->booking_at))}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="15%" scope="row">No</td>
                                                                <td width="5%" scope="row">:</td>
                                                                <td  scope="row">{{$item->queue_no}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                @else
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
                                                                <td  scope="row">{{date('H:i', strtotime($item->time_start))}} - {{date('H:i', strtotime($item->time_end))}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                @endif
                                            @endforeach
                                            
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
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <div class="image-input" id="kt_image_2">
                                                                        <div class="image-input-wrapper" style="background-image: url({{url('assets/media/users/user-1.png')}});"></div>
                                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Upload proof of payment">
                                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                                            <input type="file" name="photo" accept=".png, .jpg, .jpeg">
                                                                            <input type="hidden" name="file_remove" value="0">
                                                                        </label>
                                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel">
                                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                        </span>
                                                                    </div>
                                                                    <span class="form-text text-muted">Upload proof of payment types: png, jpg, jpeg.</span>
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
                                                    <div class="image">  
                                                        @foreach ($booking_detail as $row)
                                                            <img src="{{ asset('storage'.$row->qr_code) }}" />                                                       
                                                        @endforeach                                    
                                                    </div>
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
			<!--end::Content-->
			@include('partials._footer')
		</div>
	</div>
	<!--end::Page-->
</div>
<!--end::Main-->
@endsection
@section('scripts')
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
        document.getElementById("time").innerHTML = "";
    }
    }, 1000);
</script>
@endsection