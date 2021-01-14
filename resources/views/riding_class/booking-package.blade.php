@extends('layout.index')
@push('add-style')
<style>
.table-checkout td,.table-checkout th{
    vertical-align: middle;
}
.table-checkout{
    display: table;
}
</style>
@endpush
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
                                    CHECKOUT
                                </h5>
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('competitions.index')}}">HOME</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{route('riding_class.search_class')}}">SEARCH RIDING CLASS</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">CHECKOUT</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="row mt-5 justify-content-center align-items-center">
                                <div class="col-lg-8">
                                    <div class="card card-booking">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p class="mb-0">Stable Name</p>
                                                <h2 class="title-text mb-2">
                                                    {{strtoupper($list_detail->stable->name)}}
                                                </h2>
                                            </div>
                                            <form action="{{route('riding_class.booking.addCart')}}" method="POST">
                                                @csrf
                                                @php
                                                $count=0;
                                                @endphp
                                                <input type="hidden" value="{{$list_detail->attendance}}" id="attendance">
                                                <table class="table table-borderless table-dark table-checkout mb-10">
                                                    <tbody>
                                                        <tr>
                                                            <th width="15%" scope="row">Package Name</th>
                                                            <td  width="5%">:</td>
                                                            <td >{{strtoupper($list_detail->name)}}</td>
                                                            <input type="hidden" name="package_name" value="{{$list_detail->name}}">
                                                            <input type="hidden" name="stable_name" value="{{$list_detail->stable->name}}">
                                                        </tr>
                                                        <tr>
                                                            <th width="15%" scope="row">Name</th>
                                                            <td  width="5%">:</td>
                                                            <td >{{strtoupper(Auth::user()->name)}}</td>
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
                                                            <td >Rp. {{number_format($list_detail->price,0,'.','.')}}</td>
                                                        </tr>
                                                        @if ($list_detail->session_usage == null)
                                                        <tr>
                                                            <td >Choose Date</td>
                                                            <td>:</td>
                                                            <td >
                                                                <div class="form-group row">
                                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                                        <input type="text" id="kt_datepicker_6" name="date_pony_ride" required autocomplete='off'>
                                                                        <input type="hidden" name="usage_status" value="pony_ride">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @else
                                                        @foreach ($data_slot as $item)
                                                            <input type="hidden" name="slot_id" value="{{$item->id}}">
                                                            <input type="hidden" name="time_start" value="{{$item->time_start}}">
                                                            <input type="hidden" name="time_end" value="{{$item->time_end}}">
                                                            <input type="hidden" name="date" value="{{$item->date}}">
                                                            <tr>
                                                                <th scope="row">Date</th>
                                                                <td>:</td>
                                                                <td >{{$item->date}}</td>
                                                            </tr>                                          
                                                            <tr>
                                                                <th scope="row">Time</th>
                                                                <td>:</td>
                                                                <td >{{$item->time_start}} - {{$item->time_end}}</td>
                                                            </tr>
                                                        @endforeach
                                                        @endif
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
                                                    <a href="{{ URL::previous() }}" class="btn btn-secondary">BACK</a>
                                                    @if ($list_detail->session_usage == null)
                                                        <button type="submit" class="btn btn-add-new font-weight-bold">SUBMIT</button>
                                                    @else
                                                        <button type="submit" class="btn btn-add-new font-weight-bold">SUBMIT</button>
                                                    @endif
                                                </div>
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
    $('#kt_datepicker_6').datepicker({
        todayHighlight: true,
		orientation: "bottom left",
        autoclose: true,
        startDate: new Date()
    });
</script>
@endpush