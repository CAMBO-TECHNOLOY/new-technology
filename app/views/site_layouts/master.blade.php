<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title','home')</title>
    @include("site_layouts.partails.style")
</head>

<body>
<div id="wraper">

    @include("site_layouts.partails.banner")

    @include("site_layouts.partails.menu")

    <div id="main-content">
        @yield('content')
    </div>

   @include("site_layouts.partails.footer")

</div><!--end wraper -->

</body>
</html>
