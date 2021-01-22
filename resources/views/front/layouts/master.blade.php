<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title',config('app.name'))</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    @include('front.layouts.inc.head')

</head>
<body>
@include('front.layouts.inc.header')
<!-- Header End====================================================================== -->

@include('front.layouts.inc.slider')

<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <!-- Sidebar end=============================================== -->
            @yield('content')

        </div>
    </div>
</div>


<!-- Footer ================================================================== -->
@include('front.layouts.inc.features')
@include('front.layouts.inc.footer')

@include('front.layouts.inc.footer-script')


</body>
</html>
