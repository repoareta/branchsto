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
                                    BOOKING DETAIL & RESCHEDULE
                                </h5>
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="">HOME</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="">PROFILE</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">BOOKING DETAIL</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-8">
                                    <div class="card card-booking">
                                        <div class="card-body">
                                            <h6 class="title-text">You can reset the schedule here</h6>
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th width="15%" scope="row">Name</th>
                                                        <td  width="5%">:</td>
                                                        <td>Muiz</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Age</th>
                                                        <td>:</td>
                                                        <td>15</td>
                                                    </tr>
                        
                                                    <tr>
                                                        <th scope="row">Class</th>
                                                        <td>:</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Date Time</th>
                                                        <td>:</td>
                                                        <td>12-12-2020 13::00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="image">                                      
                                                {!! QrCode::size(130)->generate('QRco'); !!}
                                                <h6 class="title-text">QRco</h6>
                                                {{-- <h2 class="title-text">TICKET</h2>                                        
                                                <p>Scan me to visit the class,<br> please show this QR Code<br> to officer</p> --}}
                                            </div>
                                            
                                            <div class="button-dibawah">
                                                <div class="d-flex justify-content-start align-self-end">
                                                    <button class="btn btn-add-new md-4" id="add-reschedule">RESCHEDULE</button>
                                                </div>
                                            </div>
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
                                            DETAIL
                                        </div>
                                        <div class="title-detail">
                                            REGULAR CLASS
                                        </div>
                                        <table class="table package-detail">
                                            <tr>
                                                <td>
                                                    BRANCHSTO
                                                </td>
                                                <td class="text-right">
                                                    Rp. 150.0000
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
                                        </table>
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

<!-- Modal -->
<div class="modal fade" id="btn-reschedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form id="formreschedule">
                    @csrf
                    <div class="form-group">
                        {{-- <div class="modal-body">
                        </div> --}}
                        <h2 class="title-text" id="title-boking"></h2>
                        <div >
                            <div id="tanggal-reschedule"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-add-new font-weight-bold" data-dismiss="modal">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end::modal-->
@endsection
@push('add-script')
<script type="text/javascript">
$(document).ready(function () {
    $('#add-reschedule').on('click', function(e) {
        e.preventDefault();
        var dataid = $(this).attr('data-id');
        var datano = $(this).attr('data-no');
        $('#title-boking').html("RESCEDULE");
        $('#btn-reschedule').modal('show');    
        $('#tanggal-reschedule').datepicker({
            minDate: 0,
        });
    });

    
$("#formreschedule").on('click',function(e) {
    e.preventDefault();

    Swal.fire({
        title: "<h2 class='title-text' >Reschedule</h2>",
        text: "Only 1 chance to reschedule, are you sure?",
        icon: "warning",
        confirmButtonText: "Agree",
        confirmButtonColor: '#141D31',
        showCancelButton: true,
        reverseButtons: true
    }).then(function(result) {
        if (result.value) {
            Swal.fire(
                "Deleted!",
                "Your file has been deleted.",
                "success"
            )
        }
    });
});


});
</script>
@endpush