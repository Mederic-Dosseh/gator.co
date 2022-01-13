@include('backend.head.header')
@auth
@include('backend.head.topbar')
@include('backend.head.left_sidebar')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">

@endauth

                                    @yield('content')

                            
@auth
</div>
</div>
<!-- end page title -->

</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@include('backend.footer.copyright')
@endauth

            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

@include('backend.footer.footer')

