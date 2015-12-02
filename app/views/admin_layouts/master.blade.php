<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    {{HTML::style("asset/backend/css/jquery.dataTables.css")}}
    {{HTML::style("asset/backend/css/css_admin.css")}}

</head>

<body>
@section('sidebar')
<!-- Header -->
<div id="header">
    <div id="top">

    </div>
    <!-- Main Nav -->
        @include("admin_layouts.partails.menu")
    <!-- End Main Nav -->
</div>
</div>
<!-- End Header -->
<!-- Container -->
@show
<div id="container">
    @yield('content')
</div>
<!-- End Container -->
</body>

{{HTML::script("asset/backend/js/jquery-1.11.3.js")}}
{{HTML::script("asset/backend/js/jquery.dataTables.min.js")}}

@yield("script")

</html>
