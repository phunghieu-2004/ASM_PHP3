<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:13 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>

    @include('admin.layouts.partials.css')
</head>

<body class="crm_body_bg">


    @include('admin.layouts.partials.nav')

    <section class="main_content dashboard_part large_header_bg">

        @include('admin.layouts.partials.topbar')

        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">

                @yield('content')

            </div>
        </div>

        @include('admin.layouts.partials.footer')
    </section>


    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    @include('admin.layouts.partials.js')
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:13 GMT -->

</html>
