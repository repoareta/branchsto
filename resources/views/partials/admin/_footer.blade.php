
<!--begin::Footer-->
	<!-- Modal -->
	<div class="modal fade" id="modalSelectTimePackage" tabindex="-1" role="dialog" aria-labelledby="modalSelectTimePackage" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header justify-content-end">										
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body justify-content-center">
					<h2 class="title-text ">
						SELECT TIME PERIOD
					</h2>
					<p class="title-desc">
						To find class or rides what you want
					</p>
					<form action="{{route('riding_class.search_class')}}" method="GET">
						@csrf
						<div class="form-group d-flex justify-content-center">
							<div id="datePicker"></div>
						</div>
						<div class="form-group">
							<label>Start Time</label>
							<div class="input-group timepicker">
								<input class="form-control" id="timePickerStart" readonly="readonly" placeholder="Select time" type="text">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="la la-clock-o"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>End Time</label>
							<div class="input-group timepicker">
								<input class="form-control" id="timePickerEnd" readonly="readonly" placeholder="Select time" type="text">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="la la-clock-o"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">											
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
						<button type="submit" class="btn btn-add-new font-weight-bold">SAVE</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer py-2 py-lg-0 my-5 d-flex flex-lg-column" id="kt_footer">

		<!--begin::Container-->
		<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">

			<!--begin::Copyright-->
			<div class="text-dark order-2 order-md-1">
				<span class="text-muted font-weight-bold mr-2">2020©</span>
				<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
			</div>

			<!--end::Copyright-->

			<!--begin::Nav-->
			<div class="nav nav-dark order-1 order-md-2">
				<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">About</a>
				<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
				<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
			</div>

			<!--end::Nav-->
		</div>

		<!--end::Container-->
	</div>

	<!--end::Footer-->