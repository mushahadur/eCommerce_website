<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->

    @include('front.includes.meta')
    <title>@yield('title')</title>
    @include('front.includes.css')
</head>

<body>
<!--::header part start::-->
    @include('front.includes.header')
<!-- Header part end-->


<!--::footer_part start::-->

<!--::footer_part end::-->

@yield('body')


@include('front.includes.footer')

<!-- jquery plugins here-->

@include('front.includes.script')

</body>

</html>
