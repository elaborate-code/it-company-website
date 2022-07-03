<!DOCTYPE html>
<html lang="{{ $page->current_path_lang() }}">

@include('_layouts.head')

<body class="font-raleway scroll-smooth">

    @yield('header')

    @yield('body')

    @include('_layouts.footer')
</body>

</html>
