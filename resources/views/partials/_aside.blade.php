<!--begin::Aside-->
<div class="aside aside-left d-flex flex-column" id="kt_aside">
	<!--begin::Brand-->
	<div class="aside-brand d-flex flex-column align-items-center flex-column-auto pt-5 pt-lg-10 pb-10">
		<!--begin::Logo-->
		<div class="btn p-0 pt-10 symbol-light-primary" href="?page=index"
			id="kt_quick_user_toggle">
				<img alt="Logo" src="{{url('assets/media/branchsto/logo-branchsto.svg')}}" class="align-self-end logo-brand" />
		</div>
		<!--end::Logo-->
	</div>
	<!--end::Brand-->
	<!--begin::Nav Wrapper-->
	<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pb-10">
		<!--begin::Nav-->
		<ul class="nav flex-column">
			<!--begin::Item-->
			<li class="nav-item mb-10" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="Home">
				<a href="{{route('competitions.index')}}" class="nav-link btn btn-icon btn-hover-text-primary btn-lg active">
					<span class="svg-icon svg-icon-xxl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10 3H3V10H10V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M21 3H14V10H21V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M21 14H14V21H21V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M10 14H3V21H10V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-10" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="Setup Stable">
				<a href="{{ route('profile.index')}}" class="nav-link btn btn-icon btn-hover-text-primary btn-lg">
					<span class="svg-icon svg-icon-xxl">									
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
							<path d="M2.07163 3.74755C1.53762 3.18395 1.48084 1.68102 1.5192 1H6.44503C7.29209 1 8.53199 1.26614 9.04606 1.39922V23.5675H2.87726V20.9139C2.9233 16.6399 5.38621 15.9589 6.19184 15.6301C6.83634 15.3671 6.99747 14.7534 6.99747 14.4795V11.1213L5.38621 13.6575H1.5192V3.74755H2.07163Z" fill="white"/>
							<path d="M15.2378 23.5675H9.06903V1.39923C14.0225 3.18397 15.2455 7.77888 15.2378 9.85324V23.5675Z" stroke="white"/>
							<rect x="1.51917" y="17.908" width="15.2379" height="1.50294" fill="white"/>
							<rect x="9.06903" y="17.908" width="7.68798" height="1.50294" fill="white"/>
							<rect x="2.01917" y="21.273" width="14.2379" height="1.818" stroke="white"/>
							<rect x="9.06903" y="20.773" width="7.68798" height="2.818" fill="white"/>
							<rect y="23.591" width="18" height="1.409" fill="white"/>
							<rect x="9.06903" y="23.591" width="8.93095" height="1.409" fill="white"/>
							</svg>
							
					</span>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-10" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="History Order">
				<a href="{{route('riding_class.history.order')}}" class="nav-link btn btn-icon btn-hover-text-primary btn-lg" >
					<span class="svg-icon svg-icon-xxl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M3 6H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-10" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="Logout">
				<a href="{{route('login.logout')}}" class="nav-link btn btn-icon btn-hover-text-primary btn-lg">
					<span class="svg-icon svg-icon-xxl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M17 7L15.59 8.41L18.17 11H8V13H18.17L15.59 15.58L17 17L22 12L17 7ZM4 5H12V3H4C2.9 3 2 3.9 2 5V19C2 20.1 2.9 21 4 21H12V19H4V5Z" fill="white"/>
							</svg>
							
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
		</ul>
		<!--end::Nav-->
	</div>
	<!--end::Nav Wrapper-->
</div>
<!--end::Aside-->