<!--begin::Aside-->
<div class="aside aside-left d-flex flex-column" id="kt_aside">
	<!--begin::Brand-->
	<div class="aside-brand d-flex flex-column align-items-center flex-column-auto pt-5 pt-lg-20 pb-10">
		<!--begin::Logo-->
		<div class="btn p-0 symbol-light-primary" href="?page=index"
			id="kt_quick_user_toggle">
			<h1 class="text-center text-white">App <br> Owner</h1>
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
				data-boundary="window" title="Dashboard">
				<a href="{{route('owner.dashboard')}}" class="nav-link btn btn-icon btn-hover-text-primary btn-lg active">
					<span class="svg-icon svg-icon-xxl">
						<!--begin::Svg Icon | path:../assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM9 17H7V10H9V17ZM13 17H11V7H13V17ZM17 17H15V13H17V17Z" fill="white"/>
							</svg>
					</span>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="dropdown nav-item mb-10" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Stables">
				<a href="#" class="nav-link btn btn-icon btn-hover-text-primary btn-lg active" data-toggle="dropdown" data-offset="0px,0px">
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
				<!--begin::Dropdown-->
				<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-left">
					<!--begin::Nav-->
					<ul class="navi navi-hover py-4">
						<!--begin::Item-->
						<li class="navi-item">
							<a href="{{route('package_approval.index')}}" class="navi-link">											
								<span class="navi-text">Riding Package Approval</span>
							</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="navi-item active">
							<a href="{{route('stable_approval.index')}}" class="navi-link">											
								<span class="navi-text">List Stable Approval</span>
							</a>
						</li>
						<!--end::Item-->
					</ul>
					<!--end::Nav-->
				</div>
				<!--end::Dropdown-->
			</div>
			<!--end::Item-->						
			<!--begin::Item-->
			<div class="dropdown nav-item mb-10" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Payments">
				<a href="#" class="nav-link btn btn-icon btn-hover-text-primary btn-lg active" data-toggle="dropdown" data-offset="0px,0px">
					<span class="svg-icon svg-icon-xxl">									
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM13.41 18.09V20H10.74V18.07C9.03 17.71 7.58 16.61 7.47 14.67H9.43C9.53 15.72 10.25 16.54 12.08 16.54C14.04 16.54 14.48 15.56 14.48 14.95C14.48 14.12 14.04 13.34 11.81 12.81C9.33 12.21 7.63 11.19 7.63 9.14C7.63 7.42 9.02 6.3 10.74 5.93V4H13.41V5.95C15.27 6.4 16.2 7.81 16.26 9.34H14.3C14.25 8.23 13.66 7.47 12.08 7.47C10.58 7.47 9.68 8.15 9.68 9.11C9.68 9.95 10.33 10.5 12.35 11.02C14.37 11.54 16.53 12.41 16.53 14.93C16.52 16.76 15.15 17.76 13.41 18.09Z" fill="white"/>
							</svg>
					</span>
				</a>
				<!--begin::Dropdown-->
				<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-left">
					<!--begin::Nav-->
					<ul class="navi navi-hover py-4">
						<!--begin::Item-->
						<li class="navi-item">
							<a href="{{route('owner.payment-approval')}}" class="navi-link">											
								<span class="navi-text">Riding Package</span>
							</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
					</ul>
					<!--end::Nav-->
				</div>
				<!--end::Dropdown-->
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="dropdown nav-item mb-10" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Settings">
				<a href="#" class="nav-link btn btn-icon btn-hover-text-primary btn-lg active" data-toggle="dropdown" data-offset="0px,0px">
					<span class="svg-icon svg-icon-xxl">									
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M19.4 15C19.2669 15.3016 19.2272 15.6362 19.286 15.9606C19.3448 16.285 19.4995 16.5843 19.73 16.82L19.79 16.88C19.976 17.0657 20.1235 17.2863 20.2241 17.5291C20.3248 17.7719 20.3766 18.0322 20.3766 18.295C20.3766 18.5578 20.3248 18.8181 20.2241 19.0609C20.1235 19.3037 19.976 19.5243 19.79 19.71C19.6043 19.896 19.3837 20.0435 19.1409 20.1441C18.8981 20.2448 18.6378 20.2966 18.375 20.2966C18.1122 20.2966 17.8519 20.2448 17.6091 20.1441C17.3663 20.0435 17.1457 19.896 16.96 19.71L16.9 19.65C16.6643 19.4195 16.365 19.2648 16.0406 19.206C15.7162 19.1472 15.3816 19.1869 15.08 19.32C14.7842 19.4468 14.532 19.6572 14.3543 19.9255C14.1766 20.1938 14.0813 20.5082 14.08 20.83V21C14.08 21.5304 13.8693 22.0391 13.4942 22.4142C13.1191 22.7893 12.6104 23 12.08 23C11.5496 23 11.0409 22.7893 10.6658 22.4142C10.2907 22.0391 10.08 21.5304 10.08 21V20.91C10.0723 20.579 9.96512 20.258 9.77251 19.9887C9.5799 19.7194 9.31074 19.5143 9 19.4C8.69838 19.2669 8.36381 19.2272 8.03941 19.286C7.71502 19.3448 7.41568 19.4995 7.18 19.73L7.12 19.79C6.93425 19.976 6.71368 20.1235 6.47088 20.2241C6.22808 20.3248 5.96783 20.3766 5.705 20.3766C5.44217 20.3766 5.18192 20.3248 4.93912 20.2241C4.69632 20.1235 4.47575 19.976 4.29 19.79C4.10405 19.6043 3.95653 19.3837 3.85588 19.1409C3.75523 18.8981 3.70343 18.6378 3.70343 18.375C3.70343 18.1122 3.75523 17.8519 3.85588 17.6091C3.95653 17.3663 4.10405 17.1457 4.29 16.96L4.35 16.9C4.58054 16.6643 4.73519 16.365 4.794 16.0406C4.85282 15.7162 4.81312 15.3816 4.68 15.08C4.55324 14.7842 4.34276 14.532 4.07447 14.3543C3.80618 14.1766 3.49179 14.0813 3.17 14.08H3C2.46957 14.08 1.96086 13.8693 1.58579 13.4942C1.21071 13.1191 1 12.6104 1 12.08C1 11.5496 1.21071 11.0409 1.58579 10.6658C1.96086 10.2907 2.46957 10.08 3 10.08H3.09C3.42099 10.0723 3.742 9.96512 4.0113 9.77251C4.28059 9.5799 4.48572 9.31074 4.6 9C4.73312 8.69838 4.77282 8.36381 4.714 8.03941C4.65519 7.71502 4.50054 7.41568 4.27 7.18L4.21 7.12C4.02405 6.93425 3.87653 6.71368 3.77588 6.47088C3.67523 6.22808 3.62343 5.96783 3.62343 5.705C3.62343 5.44217 3.67523 5.18192 3.77588 4.93912C3.87653 4.69632 4.02405 4.47575 4.21 4.29C4.39575 4.10405 4.61632 3.95653 4.85912 3.85588C5.10192 3.75523 5.36217 3.70343 5.625 3.70343C5.88783 3.70343 6.14808 3.75523 6.39088 3.85588C6.63368 3.95653 6.85425 4.10405 7.04 4.29L7.1 4.35C7.33568 4.58054 7.63502 4.73519 7.95941 4.794C8.28381 4.85282 8.61838 4.81312 8.92 4.68H9C9.29577 4.55324 9.54802 4.34276 9.72569 4.07447C9.90337 3.80618 9.99872 3.49179 10 3.17V3C10 2.46957 10.2107 1.96086 10.5858 1.58579C10.9609 1.21071 11.4696 1 12 1C12.5304 1 13.0391 1.21071 13.4142 1.58579C13.7893 1.96086 14 2.46957 14 3V3.09C14.0013 3.41179 14.0966 3.72618 14.2743 3.99447C14.452 4.26276 14.7042 4.47324 15 4.6C15.3016 4.73312 15.6362 4.77282 15.9606 4.714C16.285 4.65519 16.5843 4.50054 16.82 4.27L16.88 4.21C17.0657 4.02405 17.2863 3.87653 17.5291 3.77588C17.7719 3.67523 18.0322 3.62343 18.295 3.62343C18.5578 3.62343 18.8181 3.67523 19.0609 3.77588C19.3037 3.87653 19.5243 4.02405 19.71 4.21C19.896 4.39575 20.0435 4.61632 20.1441 4.85912C20.2448 5.10192 20.2966 5.36217 20.2966 5.625C20.2966 5.88783 20.2448 6.14808 20.1441 6.39088C20.0435 6.63368 19.896 6.85425 19.71 7.04L19.65 7.1C19.4195 7.33568 19.2648 7.63502 19.206 7.95941C19.1472 8.28381 19.1869 8.61838 19.32 8.92V9C19.4468 9.29577 19.6572 9.54802 19.9255 9.72569C20.1938 9.90337 20.5082 9.99872 20.83 10H21C21.5304 10 22.0391 10.2107 22.4142 10.5858C22.7893 10.9609 23 11.4696 23 12C23 12.5304 22.7893 13.0391 22.4142 13.4142C22.0391 13.7893 21.5304 14 21 14H20.91C20.5882 14.0013 20.2738 14.0966 20.0055 14.2743C19.7372 14.452 19.5268 14.7042 19.4 15V15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
					</span>
				</a>
				<!--begin::Dropdown-->
				<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-left">
					<!--begin::Nav-->
					<ul class="navi navi-hover py-4">
						<!--begin::Item-->
						<li class="navi-item">
							<a href="{{route('owner.horse-sex')}}" class="navi-link">											
								<span class="navi-text">Horse Sex</span>											
							</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="navi-item">
							<a href="{{route('owner.bank-account')}}" class="navi-link">											
								<span class="navi-text">Bank Account Number</span>
							</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
					</ul>
					<!--end::Nav-->
				</div>
				<!--end::Dropdown-->
			</div>
			<!--end::Item-->
		</ul>
		<!--end::Nav-->
	</div>
	<!--end::Nav Wrapper-->
</div>
<!--end::Aside-->