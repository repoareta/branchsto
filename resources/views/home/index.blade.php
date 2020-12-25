@extends('layout.index')
@section('content')
<!--begin::Main-->

		<!--[html-partial:include:{"file":"partials/_header-mobile.html"}]/-->
		@include('partials._header-mobile')
		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">

				<!--[html-partial:include:{"file":"partials/_aside.html"}]/-->
				@include('partials._aside')
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<!--[html-partial:include:{"file":"partials/_header.html"}]/-->
					@include('partials._header')

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class="container-fluid dashboard">
                                
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carousel-content">
                                            <h5 class="title">
                                                RIDING CLASS FOR EVERYONE
                                            </h5>
                                            <p class="subtitle">
                                                Choose a class that you can take according to your current abilities
                                            </p>
                                            <a href="{{route('riding_class.search_class', ['name' => null])}}" class="btn btn-join-class">
                                                JOIN THE CLASS
                                            </a>
                                        </div>
                                        <div class="overlay"></div>
                                        <img class="d-block w-100" src="{{url('assets/media/branchsto/slider-img.png')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-content">
                                            <h5 class="title">
                                                RIDING CLASS FOR EVERYONE
                                            </h5>
                                            <p class="subtitle">
                                                Choose a class that you can take according to your current abilities
                                            </p>
                                            <a href="{{route('riding_class.search_class', ['name' => null])}}" class="btn btn-join-class">
                                                JOIN THE CLASS
                                            </a>
                                        </div>
                                        <div class="overlay"></div>
                                        <img class="d-block w-100" src="{{url('assets/media/branchsto/slider-img.png')}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-content">
                                            <h5 class="title">
                                                RIDING CLASS FOR EVERYONE
                                            </h5>
                                            <p class="subtitle">
                                                Choose a class that you can take according to your current abilities
                                            </p>
                                            <a href="{{route('riding_class.search_class', ['name' => null])}}" class="btn btn-join-class">
                                                JOIN THE CLASS
                                            </a>
                                        </div>
                                        <div class="overlay"></div>
                                        <img class="d-block w-100" src="{{url('assets/media/branchsto/slider-img.png')}}" alt="Third slide">
                                    </div>
                                </div>
                                </div>
                                
                                {{-- <h5 class="title-text">
                                    LASTEST COMPETITIONS
                                </h5>
    
                                <div class="lastest-competitions">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card-competitions">
                                                <div class="header-competitions">
                                                    <div class="title">
                                                        JAKARTA HORSE EVENT
                                                    </div>
                                                    <div class="subtitle">
                                                        Choose a class that you can take
                                                    </div>
                                                </div>
                                                <div class="overlay"></div>
                                                <img src="{{url('assets/media/branchsto/lastest-competition.png')}}" alt="">
                                            </div>
                                            <div class="body-competitions">
                                                <table class="table">
                                                    <tr>
                                                        <td>#1</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-1.png')}}" alt="">
                                                        </td>
                                                        <td>Bessie Cooper</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#2</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-2.png')}}" alt="">
                                                        </td>
                                                        <td>Wadde Warren</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#3</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-3.png')}}" alt="">
                                                        </td>
                                                        <td>Ronald Richards</td>
                                                        <td>2387</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-competitions">
                                                <div class="header-competitions">
                                                    <div class="title">
                                                        JAKARTA HORSE EVENT
                                                    </div>
                                                    <div class="subtitle">
                                                        Choose a class that you can take
                                                    </div>
                                                </div>
                                                <div class="overlay"></div>
                                                <img src="{{url('assets/media/branchsto/lastest-competition.png')}}" alt="">
                                            </div>
                                            <div class="body-competitions">
                                                <table class="table">
                                                    <tr>
                                                        <td>#1</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-1.png')}}" alt="">
                                                        </td>
                                                        <td>Bessie Cooper</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#2</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-2.png')}}" alt="">
                                                        </td>
                                                        <td>Wadde Warren</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#3</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-3.png')}}" alt="">
                                                        </td>
                                                        <td>Ronald Richards</td>
                                                        <td>2387</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-competitions">
                                                <div class="header-competitions">
                                                    <div class="title">
                                                        JAKARTA HORSE EVENT
                                                    </div>
                                                    <div class="subtitle">
                                                        Choose a class that you can take
                                                    </div>
                                                </div>
                                                <div class="overlay"></div>
                                                <img src="{{url('assets/media/branchsto/lastest-competition.png')}}" alt="">
                                            </div>
                                            <div class="body-competitions">
                                                <table class="table">
                                                    <tr>
                                                        <td>#1</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-1.png')}}" alt="">
                                                        </td>
                                                        <td>Bessie Cooper</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#2</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-2.png')}}" alt="">
                                                        </td>
                                                        <td>Wadde Warren</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#3</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-3.png')}}" alt="">
                                                        </td>
                                                        <td>Ronald Richards</td>
                                                        <td>2387</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-competitions">
                                                <div class="header-competitions">
                                                    <div class="title">
                                                        JAKARTA HORSE EVENT
                                                    </div>
                                                    <div class="subtitle">
                                                        Choose a class that you can take
                                                    </div>
                                                </div>
                                                <div class="overlay"></div>
                                                <img src="{{url('assets/media/branchsto/lastest-competition.png')}}" alt="">
                                            </div>
                                            <div class="body-competitions">
                                                <table class="table">
                                                    <tr>
                                                        <td>#1</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-1.png')}}" alt="">
                                                        </td>
                                                        <td>Bessie Cooper</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#2</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-2.png')}}" alt="">
                                                        </td>
                                                        <td>Wadde Warren</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#3</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-3.png')}}" alt="">
                                                        </td>
                                                        <td>Ronald Richards</td>
                                                        <td>2387</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>
                    <!--end::Content-->                    

                    <!--[html-partial:include:{"file":"partials/_footer.html"}]/-->
                    @include('partials._footer')
				</div>

				<!--end::Wrapper-->

				<!--[html-partial:include:{"file":"partials/_sidebar.html"}]/-->
				@include('partials._sidebar')

			</div>

			<!--end::Page-->
		</div>

        <!--end::Main-->
@endsection
@push('add-script')
<script>
    $(document).ready(function() {        
        $('#timePickerStart').timepicker('setTime', '12:45 AM');
        $('#timePickerEnd').timepicker('setTime', '12:45 AM');
        $('#datePicker').datepicker({});
    });    
</script>
@endpush