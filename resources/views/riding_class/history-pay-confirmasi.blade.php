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
                                            <h4>
                                                Name Package {{$item->name}}
                                            </h4>
                                            <p>
                                                Name Stable {{$item->stable_name}}
                                            </p>
                                            <hr>
                                                <h4>
                                                    Session
                                                </h4>
                                                <p>
                                                    {{$item->date}}
                                                </p>
                                                <h4>
                                                    Slot
                                                </h4>
                                                <p class="mb-0">
                                                    {{$item->time_start}} - {{$item->time_end}}
                                                </p>
                                            <hr>
                                            @endforeach
                                            
                                            <p class="mb-0">
                                                <h4>
                                                    <b>Price : {{number_format($status_booking->price_total)}}</b>
                                                </h4>
                                            </p>
                                            <hr>
                                            <h5>Reminder :</h5>
                                            @if ($status_booking->photo == null )
                                                <p class="table-danger">
                                                    If you don't pay for 1 hour then your payment will expired
                                                </p>
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
                                                                <span class="form-text text-muted">Upload proof of paymen types: png, jpg, jpeg.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        
                                                    <input type="hidden" name="booking_id" value="{{$status_booking->id}}">
                                                    <button type="submit" class="btn btn-payment w-100" id="add-payment">
                                                        PAYMENT
                                                    </button> 
                                                </form>                                           
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
    </script>
@endsection