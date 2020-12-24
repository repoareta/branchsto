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
                                            <form action="{{route('riding_class.booking.addCart')}}" method="POST">
                                                @csrf
                                                @php
                                                $count=0;
                                                @endphp
                                                <input type="hidden" value="{{$list_detail->attendance}}" id="attendance">
                                                <table class="table table-borderless table-dark mb-10">
                                                    <tbody>
                                                        <tr>
                                                            <th width="15%" scope="row">Name Package</th>
                                                            <td  width="5%">:</td>
                                                            <td >{{strtoupper($list_detail->name)}}</td>
                                                            <input type="hidden" name="package_name" value="{{$list_detail->name}}">
                                                            <input type="hidden" name="stable_name" value="{{$list_detail->stable->name}}">
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Description</th>
                                                            <td>:</td>
                                                            <td>{{($list_detail->description)}}</td>
                                                            <input type="hidden" name="description" value="{{$list_detail->description}}">
                                                        </tr>
                            
                                                        <tr>
                                                            <th scope="row">Price</th>
                                                            <td>:</td>
                                                            <td >{{number_format($list_detail->price,0,'.','.')}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td >Choose Date</td>
                                                            <td>:</td>
                                                            <td >
                                                                <div class="card-body">
                                                                    <ul id="browser" class="filetree">
                                                                        @foreach ($data_slot as $item)
                                                                        <li  class="closed"><span class="folder pointer-link kt-subheader__breadcrumbs-link" >{{$item->date}}</span>
                                                                            <ul class="jstree-container-ul jstree-children">
                                                                                @foreach (DB::table('slots')->where('user_id',$item->user_id)->where('date', $item->date)->orderBy('time_start','asc')->get() as $item)
                                                                                    <li style="margin-left:-30px">
                                                                                        <span class="file pointer-link kt-subheader__breadcrumbs-link pointer-link" data-toggle="kt-tooltip" data-placement="top" title="Click Time">
                                                                                            {{$item->time_start}} - {{$item->time_end}}
                                                                                            @if ($item->capacity >= $item->capacity_booked)
                                                                                                <input type="checkbox" name="chackbox[]" data-exval="1" value="{{$item->id}}" class="ponter-link">
                                                                                            @else
                                                                                                <input type="checkbox" disabled>
                                                                                            @endif
                                                                                            <input type="hidden" name="time1[]" value="{{$item->time_start}}" class="ponter-link">
                                                                                            <input type="hidden" name="time2[]" value="{{$item->time_end}}" class="ponter-link">
                                                                                            <input type="hidden" name="date[]" value="{{$item->date}}" class="ponter-link">
                                                                                        </span>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <span class="form-text text-muted" id="result"></span>

                                                @php
                                                    $sum_tot_Price = $list_detail->price;
                                                @endphp
                                                <input type="hidden" name="package_id" value="{{$list_detail->id}}">
                                                <input type="hidden" name="price_subtotal" value="{{$list_detail->price}}">
                                                @php
                                                    $count++;
                                                @endphp
                                                <input type="hidden" name="price_total" value="{{$sum_tot_Price}}">
                                                <div class="modal-footer">											
                                                    <div class="modal-body">
                                                        <h6 class="title-text">Total</h6>
                                                        <h2 class="title-text">Rp. {{number_format($sum_tot_Price,0,'.','.')}}-</h2>
                                                    </div>
                                                    <a href="{{route('riding_class.search_class')}}" class="btn btn-secondary">LIST PACKAGE</a>
                                                    <button type="submit" disabled class="btn btn-add-new font-weight-bold" id="submitbutton">CHECKOUT</button>
                                                </div>
                                            </form>
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
                                        <div class="title">
                                            {{strtoupper($list_detail->stable->name)}}
                                        </div>
                                        <div class="subtitle">
                                            {{strtoupper($list_detail->name)}}
                                        </div>
                                        <table class="table package-detail">
                                            <tr>
                                                <td>
                                                    
                                                </td>
                                                <td class="text-right">
                                                    Rp. {{number_format($list_detail->price,0,'.','.')}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-right">
                                                    <a href="">
                                                        <i class="fas fa-share-alt"></i>
                                                    </a>
                                                    <a href="#">
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
@endsection
@push('add-script')
<script type="text/javascript">
$(document).ready(function () {
//tampil edit detail
    $("#browser").treeview();  

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
    
    $('li').on('click','input[type="checkbox"]', function(){
        var total=0;
        //lOOP THROUGH CHECKED
        $('li').on('click','input[type="checkbox"]', function(){
            var attendance = $('#attendance').val();
            //Update total
            var total = $("input:checked").length;
            if(total <= attendance){
                $("#result").html("");
                document.getElementById('submitbutton').disabled = false;
            }else{
                $("#result").html("<p style='color:red'>Attandance out of limit.</p>");
                document.getElementById('submitbutton').disabled = 'disabled';

            }
        });
    });  
});

</script>
@endpush