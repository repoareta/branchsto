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
                                                Nama Package {{$item->name}}
                                            </h4>
                                            <p>
                                                Nama Stable {{$item->stable_name}}
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
                                            
                                            <h5>Reminder :</h5>
                                            @foreach ($status_booking as $item)
                                                @if ($item->approval_status == null)
                                                    <span class="label label-lg label-light-danger label-inline">Pending.</span> 
                                                @else
                                                    <span class="label label-lg label-light-success label-inline">{{$item->approval_status}}.</span> 
                                                    <div class="image">  
                                                        @foreach ($booking_detail as $row)
                                                            <img src="{{ asset('storage'.$row->qr_code) }}" />                                                       
                                                        @endforeach                                    
                                                    </div>
                                                @endif
                                            @endforeach
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