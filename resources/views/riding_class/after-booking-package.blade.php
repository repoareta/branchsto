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
                                            @foreach ($data_list_package as $item)
                                            <h4>
                                                <b>Package {{$item['package_name']}}</b>
                                                <input type="hidden" name="package_id" value="{{$item['package_id']}}">
                                            </h4>
                                            <p>
                                                <b>Stable  {{$item['stable_name']}}</b>
                                            </p>
                                            @endforeach

                                            @if ($data_session_usage == 'riding_class')
                                            {{-- detail riding class --}}
                                                <input type="hidden" name="usage_status" value="riding_class">
                                                @foreach ($data_list_slot as $row)   
                                                    <input type="hidden" name="slot_id" value="{{$row['slot_id']}}">
                                                        <table class="table table-borderless table-dark mb-10">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="15%" scope="row">Day</td>
                                                                    <td width="5%" scope="row">:</td>
                                                                    <td  scope="row">{{date('l',strtotime($row['date']))}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="15%" scope="row">Date</td>
                                                                    <td width="5%" scope="row">:</td>
                                                                    <td  scope="row">{{$row['date']}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="15%" scope="row">Session</td>
                                                                    <td width="5%" scope="row">:</td>
                                                                    <td  scope="row">{{date('H:i', strtotime($row['time_start']))}} - {{date('H:i', strtotime($row['time_end']))}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                <hr>
                                                @endforeach
                                                {{-- end detail riding class --}}
                                            @else
                                                {{-- pony rise --}}
                                                <input type="hidden" name="usage_status" value="pony_ride">
                                                @foreach ($data_list_package as $item)
                                                    <input type="hidden" value="{{$item['booking_at']}}" name="booking_at">
                                                    <table class="table table-borderless table-dark mb-10">
                                                        <tbody>
                                                            <tr>
                                                                <td width="15%" scope="row">Day</td>
                                                                <td width="5%" scope="row">:</td>
                                                                <td  scope="row">{{date('l',strtotime($item['booking_at']))}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="15%" scope="row">Date</td>
                                                                <td width="5%" scope="row">:</td>
                                                                <td  scope="row">{{$item['booking_at']}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                @endforeach
                                                {{-- end pony ride --}}
                                            @endif
                                            <input type="hidden" name="price_subtotal[]" value="{{$item['price_subtotal']}}">
                                            @php
                                                $sum_tot_Price = $item['price_subtotal'];
                                            @endphp


                                            <h4>
                                                <b>Price : Rp. {{number_format($sum_tot_Price,0,'.','.')}}</b>
                                            </h4>
                                            <input type="hidden" name="price_total" value="{{$sum_tot_Price}}">
                                            <div class="bank-number">
                                                <div class="card-bank">
                                                    @foreach ($data_payment as $item)
                                                    <div class="bank">
                                                        <img src="{{ asset('storage/'.$item->photo) }}" alt="">
                                                        <div class="text">
                                                            <div class="name">{{$item->account_name}}</div>
                                                            <div class="number">{{$item->account_number}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-check align-items-center d-flex">
                                                        <input class="form-check-input pointer-link" type="radio" name="payment" checked value="{{$item->id}}">
                                                    </div>
                                                    @endforeach
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