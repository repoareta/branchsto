<!--begin::Fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<!--end::Fonts-->


<!--begin::Page Vendors Styles(used by this page)-->
<link rel="stylesheet" href="{{url('assets/plugins/custom/datatables/datatables.bundle.css')}}" type="text/css">
<link href="{{url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

<!--end::Page Vendors Styles-->

<!--begin::Global Theme Styles(used by all pages)-->
<link href="{{url('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('assets/css/branchsto/custom.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('assets/css/branchsto/responsive.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href='{{ asset('assets/jquery-bar-rating-master/dist/themes/fontawesome-stars.css') }}' rel='stylesheet' type='text/css'>

<!--end::Global Theme Styles-->

<!--begin::Layout Themes(used by all pages)-->
<link rel="shortcut icon" href="{{ url('assets/media/logos/favicon-1.ico') }}" />

<style>
    .pointer-link {
        cursor: pointer;
    }

    .star-rating {
        /* line-height:32px; */
        font-size:1em;
    }

    .star-rating .fa-star{
        color: orange;
    }

    .br-theme-fontawesome-stars .br-widget a.br-active:after {
        color: orange;
    }
    .br-theme-fontawesome-stars .br-widget a.br-selected:after {
        color: orange;
    }
</style>