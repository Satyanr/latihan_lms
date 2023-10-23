<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-name" content="mono" />

    <title>Mono - Responsive Admin & Dashboard Template</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="/adminasset/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="/adminasset/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="/adminasset/plugins/nprogress/nprogress.css" rel="stylesheet" />




    <link href="/adminasset/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />



    <link href="/adminasset/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />



    <link href="/adminasset/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />



    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">



    <link href="/adminasset/plugins/toaster/toastr.min.css" rel="stylesheet" />


    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="/adminasset/css/style.css" />




    <!-- FAVICON -->
    <link href="images/favicon.png" rel="shortcut icon" />

    <script src="/adminasset/plugins/nprogress/nprogress.js"></script>
</head>


<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

<div id="toaster"></div>


<!-- ====================================
    ——— WRAPPER
    ===================================== -->
<div class="wrapper">

    <x-admin.sidebar />

    <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
    <div class="page-wrapper">

        <!-- Header -->
        <x-admin.header />

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Footer -->
        <x-admin.footer />

    </div>
</div>

<!-- Card Offcanvas -->
<x-admin.cardoffcanvas />

    <script src="/adminasset/plugins/jquery/jquery.min.js"></script>
    <script src="/adminasset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminasset/plugins/simplebar/simplebar.min.js"></script>
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>



    <script src="/adminasset/plugins/apexcharts/apexcharts.js"></script>



    <script src="/adminasset/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>



    <script src="/adminasset/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="/adminasset/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="/adminasset/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>



    <script src="/adminasset/plugins/daterangepicker/moment.min.js"></script>
    <script src="/adminasset/plugins/daterangepicker/daterangepicker.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('input[name="dateRange"]').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
                jQuery(this).val('');
            });
        });
    </script>



    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



    <script src="/adminasset/plugins/toaster/toastr.min.js"></script>



    <script src="/adminasset/js/mono.js"></script>
    <script src="/adminasset/js/chart.js"></script>
    <script src="/adminasset/js/map.js"></script>
    <script src="/adminasset/js/custom.js"></script>




    <!--  -->


</body>

</html>
