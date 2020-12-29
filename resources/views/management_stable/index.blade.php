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
			<div class="d-flex flex-column-fluid">
				<!--begin::Container-->
				<div class="container-fluid stable">
					<div class="stable-header">
						<a href="{{route('profile.index')}}" class="btn btn-back-page">
							<svg xmlns="http://www.w3.org/2000/svg" width="63" height="34" viewBox="0 0 63 34" fill="none">
								<rect opacity="0.25" width="63" height="34" rx="17" fill="#C4C4C4"/>
								<path d="M29 17H15" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M22 24L15 17L22 10" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
								
						</a>
						<div class="profile">
							<div class="profile-item">
								@if ($data->logo)
									<img src="{{asset('storage/stable/logo/'.$data->logo)}}" alt="" class="rounded-circle stable-img">
								@else
									<img src="{{url('assets/media/branchsto/stable-profile.png')}}" alt="" class="rounded-circle stable-img">									
								@endif
								<div class="text">
									<div class="stable-name">
										{{$data->name}}
									</div>
									<div class="stable-desc">
										{{$data->address}}
									</div>
									<div class="email-number">
										<div class="email">
											<img src="{{url('assets/media/branchsto/contact_person.svg')}}" alt="">
											{{$data->contact_person}}
										</div>
										<div class="number">
											<img src="{{url('assets/media/branchsto/cell.svg')}}" alt="">
											{{$data->contact_number}}
										</div>
									</div>
									@if ($data_setup == 1)
										<span class="label label-lg label-light-success label-inline font-weight-bold py-4">Done</span>
									@endif
								</div>
							</div>
								<a href="#" class="btn btn-edit" data-toggle="modal" data-target="#form-edit-stable">
									<i class="fas fa-pen"></i>
									Setup stable
								</a>
						</div>
					</div>
					<div class="stable-body">
						<div class="row">
							<div class="col-md-3">
								<a href="{{route('horse.index')}}">
									<div class="card-action">
										<div class="image">
											<img src="{{url('assets/media/branchsto/horse_deal_icon.svg')}}" alt="">
										</div>
										<div class="text">
											<div class="title-card">Horse</div>
											<div class="subtitle-card">Manage all your horse here</div>
											@if($horse_count > 0)
												<span class="label label-lg label-light-success label-inline font-weight-bold py-4">Done</span>
											@else
												<span class="label label-lg label-light-danger label-inline font-weight-bold py-4">Setup Horse</span>
											@endif
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-3">
								<a href="{{route('package.index')}}">
									<div class="card-action">
										<div class="image">
											<img src="{{url('assets/media/branchsto/package_icon.svg')}}" alt="">
										</div>
										<div class="text">
											<div class="title-card">Package</div>
											<div class="subtitle-card">Manage all your package here</div>
											@if($package_count > 0)
												<span class="label label-lg label-light-success label-inline font-weight-bold py-4">Done</span>
											@else
												<span class="label label-lg label-light-danger label-inline font-weight-bold py-4">Setup Package</span>
											@endif										
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-3">
								<a href="{{route('schedule.index')}}">
									<div class="card-action">
										<div class="image">
											<img src="{{url('assets/media/branchsto/date_icon.svg')}}" alt="">
										</div>
										<div class="text">
											<div class="title-card">Schedule</div>
											<div class="subtitle-card">Manage all your schedule here</div>
											@if($slot_count > 0)
												<span class="label label-lg label-light-success label-inline font-weight-bold py-4">Done</span>
											@else
												<span class="label label-lg label-light-danger label-inline font-weight-bold py-4">Setup Schedule</span>
											@endif										
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-3">
								<a href="{{route('coach.index')}}">
									<div class="card-action">
										<div class="image">
											<img src="{{url('assets/media/branchsto/coach_icon.svg')}}" alt="">
										</div>
										<div class="text">
											<div class="title-card">Coach</div>
											<div class="subtitle-card">Manage all your coach here</div>
											@if($coach_count > 0)
												<span class="label label-lg label-light-success label-inline font-weight-bold py-4">Done</span>
											@else
												<span class="label label-lg label-light-danger label-inline font-weight-bold py-4">Setup Coach</span>
											@endif										
										</div>
									</div>
								</a>
							</div>
						</div>
						<form action="{{route('stable.setup.stable')}}" method="POST">
							@csrf
							@if (($horse_count > 0) and ($coach_count > 0) and ($package_count > 0) and ($slot_count > 0) and ($data_setup == 1))
								<button type="submit" class="btn btn-add-new mt-10">SUBMIT</button>
							@else
								<button type="submit" class="btn btn-add-new mt-10" disabled>SUBMIT</button>
							@endif
						</form>
					</div>
				</div>
				<!--end::Container-->
			</div>
			@include('partials._footer')
		</div>
	</div>
</div>
<!--end::Main-->

<!--begin::Modal Stable-->
@include('management_stable.edit')
<!--end::Modal Stable-->

@endsection