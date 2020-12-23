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
                                        <form action="{{route('riding_class.booking.payment')}}" method="POST">
                                            @csrf
                                            @php
                                                $sum_tot_Price = 0;
                                            @endphp
                                            @foreach ($data_list_package as $item)
                                            <h4>
                                                Nama Package : {{$item['package_name']}}
                                                <input type="hidden" name="package_id" value="{{$item['package_id']}}">
                                            </h4>
                                            <p>
                                                Nama Stable  : {{$item['stable_name']}}
                                            </p>
                                            @endforeach

                                            @foreach ($data_list_slot as $row)   
                                            <input type="hidden" name="slot_id[]" value="{{$row['slot_id']}}">                                             
                                            <hr>
                                                <h4>
                                                    Session
                                                </h4>
                                                @foreach (DB::table('slots')->where('id',$row['slot_id'])->get() as $item1)
                                                    <p>
                                                        {{$item1->date}}
                                                    </p>
                                                    <h4>
                                                        Slot
                                                    </h4>
                                                    <p class="mb-0">
                                                        {{$item1->time_start}} - {{$item1->time_end}}
                                                    </p>
                                                    <h5 class="mt-2">Sub Total : Rp. {{number_format($item['price_subtotal'],0,'.','.')}}</h5>
                                                    <input type="hidden" name="price_subtotal[]" value="{{$item['price_subtotal']}}">
                                                    @php
                                                        $sum_tot_Price += $item['price_subtotal'];
                                                    @endphp
                                                @endforeach
                                            <hr>
                                            @endforeach
                                            <h4 class="text-right">Total : Rp. {{number_format($sum_tot_Price,0,'.','.')}}</h4>
                                            <input type="hidden" name="price_total" value="{{$sum_tot_Price}}">
                                            <div class="bank-number">
                                                <div class="card-bank">
                                                    <div class="bank">
                                                        <img src="assets/media/branchsto/bni-logo.png" alt="">
                                                        <div class="text">
                                                            <div class="name">A.N Brachsto Indonesia</div>
                                                            <div class="number">0611 8293 8812</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-check align-items-center d-flex">
                                                        <input class="form-check-input pointer-link" type="radio" name="payment" checked value="1">
                                                    </div>
                                                </div>
                                                <div class="card-bank">
                                                    <div class="bank">
                                                        <img src="assets/media/branchsto/bca-logo.png" alt="">
                                                        <div class="text">
                                                            <div class="name">A.N Brachsto Indonesia</div>
                                                            <div class="number">0221 283 124</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-check align-items-center d-flex">
                                                        <input class="form-check-input pointer-link" type="radio" name="payment" value="2">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-payment w-100">
                                                BOOKING
                                            </button>
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
@endpush