<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.admin.__header')
    <title>@yield('title')</title>>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials -->
    @include('layout.admin.__NavigationBar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('layout.admin.__sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @include('layout.admin.__alert')
                @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                @include('layout.admin.__footer')
            </footer>

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

@include('layout.admin.__script')
</body>

</html>



