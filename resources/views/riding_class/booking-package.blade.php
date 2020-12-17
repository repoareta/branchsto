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
                            <div class="d-flex justify-content-start align-items-center">
                                <h5 class="title-text mb-0">
                                    BOOKING PACKAGE
                                </h5>
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="">HOME</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="">LIST PACKAGE</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">BOOKING PACKAGE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-8">
                                    <div class="card card-booking">
                                        <div class="card-body">
                                            @if ($list_detail == null)
                                            <div class="modal-footer">											
                                                <div class="modal-body">
                                                    <h2 class="title-text">Your package cart is empty</h2>
                                                </div>
                                                <a href="{{route('riding_class.search_class')}}" class="btn btn-add-new font-weight-bold">Shopping Now</a>
                                            </div>
                                            @else
                                            <form action="{{route('riding_class.booking.payment')}}" method="POST">
                                                @csrf
                                                @php
                                                $sum_tot_Price =0;
                                                $count=0;
                                                @endphp
                                                @foreach ($list_detail as $row)
                                                <table class="table table-borderless table-dark mb-10">
                                                    <tbody>
                                                        <tr>
                                                            <th width="15%" scope="row">Name Package</th>
                                                            <td  width="5%">:</td>
                                                            <td >{{strtoupper($row['name'])}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Description</th>
                                                            <td>:</td>
                                                            <td>{{($row['description'])}}</td>
                                                        </tr>
                            
                                                        <tr>
                                                            <th scope="row">Price</th>
                                                            <td>:</td>
                                                            <td >{{number_format($row['price'],0,'.','.')}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @php
                                                    $count++;
                                                    $sum_tot_Price += $row['price'];
                                                @endphp
                                                <input type="hidden" name="package_id[{{$count}}]" value="{{$row['id']}}">
                                                <input type="hidden" name="price_subtotal[{{$count}}]" value="{{$row['price']}}">
                                                @php
                                                    $count++;
                                                @endphp
                                                @endforeach
                                                <input type="hidden" name="price_total" value="{{$sum_tot_Price}}">
                                                <div class="modal-footer">											
                                                    <div class="modal-body">
                                                        <h6 class="title-text">Total</h6>
                                                        <h2 class="title-text">Rp. {{number_format($sum_tot_Price,0,'.','.')}}-</h2>
                                                    </div>
                                                    <a href="{{route('riding_class.search_class')}}" class="btn btn-secondary">LIST PACKAGE</a>
                                                    <button type="submit" class="btn btn-add-new font-weight-bold">CHECKOUT</button>
                                                </div>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">										
                                    <div class="competition-card package h-100">
                                        <div class="image">					
                                            <div class="register">
                                                <a href="#">
                                                    REGISTER NOW
                                                </a>
                                                <a href="#">
                                                    <img src="{{url('assets/media/branchsto/double-arrow.svg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="live">Priority</div>
                                            <img src="{{url('assets/media/branchsto/Rectangle 140.png')}}" alt="">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="subtitle-detail">
                                        </div>
                                        {{-- <div class="title-detail">
                                            Name
                                        </div>
                                        <table class="table package-detail">
                                            <tr>
                                                <td>
                                                    
                                                </td>
                                                <td class="text-right">
                                                    Rp. 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-right">
                                                    <a href="">
                                                        <i class="fas fa-share-alt"></i>
                                                    </a>
                                                    <a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                            <path d="M14 10L11 14V28C11 28.5304 11.2107 29.0391 11.5858 29.4142C11.9609 29.7893 12.4696 30 13 30H27C27.5304 30 28.0391 29.7893 28.4142 29.4142C28.7893 29.0391 29 28.5304 29 28V14L26 10H14Z" stroke="#2A4158" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M11 14H29" stroke="#2A4158" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M24 18C24 19.0609 23.5786 20.0783 22.8284 20.8284C22.0783 21.5786 21.0609 22 20 22C18.9391 22 17.9217 21.5786 17.1716 20.8284C16.4214 20.0783 16 19.0609 16 18" stroke="#2A4158" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table> --}}
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
    $('#add-booking').on('click', function(e) {
        e.preventDefault();
        var dataid = $(this).attr('data-id');
        var datano = $(this).attr('data-no');
        $('#title-boking').html("BOOKING DETAIL");
        $('#title-boking-sub').html("Double check your order before proceeding to payment");
        $('#boking-now').modal('show');
        // $('#select-bagian').val(data.bagian).trigger('change');
        // $('#select-acc').val(data.account).trigger('change');
        // $('#select-jb').val(data.jb).trigger('change');
        // $('#select-cj').val(data.cj).trigger('change');       
    });
});
</script>
@endpush