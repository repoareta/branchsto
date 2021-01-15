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
                                    <?php if(Request::routeIs('riding_class.pesan.addCart')){  ?>
                                        PAYMENT METHOD
                                    <?php }elseif(Request::routeIs('riding_class.booking.payment')){ ?>
                                        PAYMENT CONFIRMATION
                                    <?php }elseif(Request::routeIs('riding_class.booking.list.qrcode')){ ?>
                                        ORDER STATUS
                                    <?php } ?>
                                </h4>
                            </div>
                            <div class="row justify-content-center mt-5">
                                <div class="col-lg-6 order-md-2 order-2 order-lg-1">
                                    <div class="card card-booking">
                                    <form action="{{route('riding_class.confirmasion.payment')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            @php
                                                $sum_tot_Price = 0;
                                            @endphp
                                            @foreach ($data_list as $item)
                                                @if ($request->usage_status == 'pony_ride')
                                                    <h4>
                                                        Package {{$item->name}}
                                                    </h4>
                                                    <p>
                                                        Stable {{$item->stable_name}}
                                                    </p>
                                                    <table class="table table-borderless table-dark mb-10">
                                                        <tbody>
                                                            <tr>
                                                                <td width="15%" scope="row">Name</td>
                                                                <td width="5%" scope="row">:</td>
                                                                <td  scope="row">{{Auth::user()->name}}</td>
                                                            </tr>
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
                                                                <td width="15%" scope="row">Name</td>
                                                                <td width="5%" scope="row">:</td>
                                                                <td  scope="row">{{Auth::user()->name}}</td>
                                                            </tr>
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
                                                @php
                                                    $sum_tot_Price =$item->price_subtotal;
                                                @endphp
                                            @endforeach
                                                <h4>
                                                    <b>Price : Rp. {{number_format($sum_tot_Price,0,'.','.')}}</b>
                                                </h4>
                                            <hr>
                                            
                                            <h5>Reminder :</h5>
                                            {{-- <p class="table-danger">
                                                If you don't pay for 1 hour then your booking will expired
                                            </p> --}}
                                            <div class="table-danger">Payment expires in <span id="time">60:00</span> minutes.</div>
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
                                                                    <i class="fas fa-pen icon-sm text-muted"></i>
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
                                                
                                            <input type="hidden" name="booking_id" value="{{$data_booking_id}}">
                                            <button type="submit" class="btn btn-payment w-100" id="add-payment">
                                                PAYMENT
                                            </button>
                                        </div>
                                    </form>
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
<script src="{{url('assets/js/pages/custom/profile/profile.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
    //tampil edit detail
    });

    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.text(minutes + ":" + seconds);

            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);
    }

    jQuery(function ($) {
        var sejam = 60 * 60,
            display = $('#time');
        startTimer(sejam, display);
    });
    </script>
@endsection