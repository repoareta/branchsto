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
                                            @foreach ($data['data'] as $row)
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
                                                @endforeach
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