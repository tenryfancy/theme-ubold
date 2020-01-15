<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        @include('layouts.head')

    </head>

    @yield('body')

        <!-- Navigation Bar-->
        <header id="topnav">
      @include('layouts.topbar')
      @include('layouts.nav-horizontal')
            </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
            <div class="wrapper">
                <div class="container-fluid">
      @yield('content')
      @include('layouts.right-sidebar')
    @include('layouts.footer')    
                </div> <!-- content -->
            </div>
            <!-- END wrapper -->
    @include('layouts.footer-script')    
    </body>
</html>