<script type="text/javascript">
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#8950FC",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1E9FF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };
</script>

<!--end::Global Config-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{url('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{url('assets/js/scripts.bundle.js')}}"></script>

<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{url('assets/js/pages/widgets.js')}}"></script>

<!--begin::Page Vendors(used by this page)-->
<script src="{{url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="{{url('vendor/jsvalidation/js/jsvalidation.js')}}" type="text/javascript"></script>
<script src="{{url('assets/js/pages/features/miscellaneous/sweetalert2.js') }}" type="text/javascript"></script>
<script src="{{url('assets/js/pages/custom/login/login-general.js') }}" type="text/javascript"></script>
<script src="{{url('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!-- treeview JS -->
<script type="text/javascript" src="{{ asset('tree/jquery.treeview.js')}}"></script>
<!-- end treeview JS -->

<script>
    $(document).ready(function() {
    		$("#kt_sidebar_mobile_toggle").click(function(){
				$("#kt_sidebar").addClass('active');
				$("#kt_sidebar").after('<div class="sidebar-menu-wrapper-overlay" id="overlaySidebar"></div>');
			});
            $('#kt_body').on('click', '#overlaySidebar', function() {
                $("#kt_sidebar").removeClass('active');
                $(this).remove();      //add the class to the clicked element
            });
            $(document).click(function(){
                $("#notifUserOpen").removeClass('show');
            });
            $("#notifUser").click(function(){
                $("#notifUserOpen").addClass('show');
            });
    });
</script>
<!--end::Page Vendors-->


@yield("scripts")
