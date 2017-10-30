@include('template.meta')

    <title>@yield('title')</title>

@include('template.css')

<body id="page-top">
<!-- Header -->
<header class="masthead">
    <div class="container" id="mainContainer">
        @yield('content')
    </div>
</header>

@include('template.js-footer')