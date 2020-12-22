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
                                        <div class="card-body">
                                            <h4>
                                                Nama Package
                                            </h4>
                                            <p>
                                                Nama Stable
                                            </p>
                                            <hr>
                                                <h4>
                                                    Session
                                                </h4>
                                                <p>
                                                    26 Desember 2020
                                                </p>
                                                <h4>
                                                    Slot
                                                </h4>
                                                <p class="mb-0">
                                                    09:00 - 10:00
                                                </p>
                                                <p class="mb-0">
                                                    10:00 - 11:00
                                                </p>
                                                <p class="mb-0">
                                                    13:00 - 14:00
                                                </p>
                                                <h5 class="mt-2">Sub Total : Rp. 400.000</h5>
                                            <hr>
                                            <hr>
                                                <h4>
                                                    Session
                                                </h4>
                                                <p>
                                                    26 Desember 2020
                                                </p>
                                                <h4>
                                                    Slot
                                                </h4>
                                                <p class="mb-0">
                                                    09:00 - 10:00
                                                </p>
                                                <p class="mb-0">
                                                    10:00 - 11:00
                                                </p>
                                                <p class="mb-0">
                                                    13:00 - 14:00
                                                </p>
                                                <h5 class="mt-2">Sub Total : Rp. 400.000</h5>
                                            <hr>
                                            <hr>
                                                <h4>
                                                    Session
                                                </h4>
                                                <p>
                                                    26 Desember 2020
                                                </p>
                                                <h4>
                                                    Slot
                                                </h4>
                                                <p class="mb-0">
                                                    09:00 - 10:00
                                                </p>
                                                <p class="mb-0">
                                                    10:00 - 11:00
                                                </p>
                                                <p class="mb-0">
                                                    13:00 - 14:00
                                                </p>
                                                <h5 class="mt-2">Sub Total : Rp. 400.000</h5>
                                            <hr>
                                            <h4 class="text-right">Total : Rp. 1.200.000</h4>
                                            <h5>Reminder :</h5>
                                            <p>
                                                If you don't pay for 1 hour then your payment will expired</p>
                                            <div class="bank-number">
                                                <div class="card-bank">
                                                    <div class="bank">
                                                        <img src="assets/media/branchsto/bni-logo.png" alt="">
                                                        <div class="text">
                                                            <div class="name">A.N Brachsto Indonesia</div>
                                                            <div class="number">0611 8293 8812</div>
                                                        </div>
                                                    </div>
                                                    <div>															
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-payment w-100">
                                                PAYMENT
                                            </button>
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
<!--begin::Modal Stable-->
@include('management_stable.create')
<!--end::Modal Stable-->

@endsection
@section('scripts')
@endsection