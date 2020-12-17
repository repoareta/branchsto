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
                    <div class="container-fluid checkout">														
                        <div class="checkout-body">
                            <div class="title">
                                CHECKOUT
                            </div>
                            <div class="payment">
                                <img src="{{url('assets/media/branchsto/payment-logo.svg')}}" alt="">
                                <div class="title">
                                    PAYMENT
                                </div>
                                <div class="subtitle">
                                    Please complete your payment to get Starting order (SO)
                                </div>
                            </div>
                            <div class="total">
                                <div class="title">
                                    TOTAL
                                </div>
                                <div class="price">
                                    RP {{number_format($data['data']['price_total'],0,'.','.')}},-
                                </div>
                                <a href="" class="download-invoice">
                                    <img src="{{url('assets/media/branchsto/eye-icon.svg')}}" alt=""><span>Download Invoice</span>
                                </a>
                            </div>
                            <div class="bank-number">
                                <div class="card-bank">
                                    <div class="bank">
                                        <img src="{{url('assets/media/branchsto/bni-logo.png')}}" alt="">
                                        <div class="text">
                                            <div class="name">A.N Brachsto Indonesia</div>
                                            <div class="number">0611 8293 8812</div>
                                        </div>
                                    </div>
                                    <button class="copy-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="22" viewBox="0 0 18 22" fill="none">
                                            <path d="M13 3H15C15.5304 3 16.0391 3.21071 16.4142 3.58579C16.7893 3.96086 17 4.46957 17 5V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V5C1 4.46957 1.21071 3.96086 1.58579 3.58579C1.96086 3.21071 2.46957 3 3 3H5" stroke="#BDBDBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 1H6C5.44772 1 5 1.44772 5 2V4C5 4.55228 5.44772 5 6 5H12C12.5523 5 13 4.55228 13 4V2C13 1.44772 12.5523 1 12 1Z" stroke="#BDBDBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                    </button>
                                </div>
                                <div class="card-bank">
                                    <div class="bank">
                                        <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="">
                                        <div class="text">
                                            <div class="name">A.N Brachsto Indonesia</div>
                                            <div class="number">0221 283 124</div>
                                        </div>
                                    </div>
                                    <button class="copy-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="22" viewBox="0 0 18 22" fill="none">
                                            <path d="M13 3H15C15.5304 3 16.0391 3.21071 16.4142 3.58579C16.7893 3.96086 17 4.46957 17 5V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V5C1 4.46957 1.21071 3.96086 1.58579 3.58579C1.96086 3.21071 2.46957 3 3 3H5" stroke="#BDBDBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 1H6C5.44772 1 5 1.44772 5 2V4C5 4.55228 5.44772 5 6 5H12C12.5523 5 13 4.55228 13 4V2C13 1.44772 12.5523 1 12 1Z" stroke="#BDBDBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                    </button>
                                </div>
                            </div>
                            <button class="btn btn-payment" id="add-payment">
                                PAYMENT CONFIRMATION
                            </button>
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
<div class="modal fade" id="payment-now" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-default" role="document">
        <div class="modal-content">
            <div class="modal-body mb-0">
                <h2 class="title-text" id="title-PAYMENT"></h2>
            </div>
            <div class="modal-body">
                <form action="{{route('riding_class.confirmasion.payment')}}" method="POST" id="formpayment">
                    @csrf
                    <div class="form-group">
                        <div class="col-12">
                            <input type="text" name="Sender_bank_account_name" class="form-control" placeholder="Sender's bank account name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12">
                            <input type="text" name="bank_transfer" class="form-control" placeholder="Bank Transfer">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12">
                            <input type="date" name="date_transfer" class="form-control" placeholder="Date Transfer">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12">
                            <div class="col-lg-9 col-xl-6">
                                <label for="">Upload proof of payment</label>
                                <div class="image-input" id="kt_image_2">
                                    <div class="image-input-wrapper" style="background-image: url({{url('assets/media/users/user-1.png')}});"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Upload proof of payment">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="file" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="file_remove" value="0">
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                                <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">											
                        <button class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-add-new font-weight-bold">CONFIRMATION</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end::modal-->
@endsection
@push('add-script')
{!! JsValidator::formRequest('App\Http\Requests\Payment', '#formpayment') !!}
<script type="text/javascript">
$(document).ready(function () {
//tampil edit detail
    $('#add-payment').on('click', function(e) {
        e.preventDefault();
        var dataid = $(this).attr('data-id');
        var datano = $(this).attr('data-no');
        $('#title-PAYMENT').html("PAYMENT CONFIRMATION");
        $('#payment-now').modal('show');     
    });
});
</script>
@endpush