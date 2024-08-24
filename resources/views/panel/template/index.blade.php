<!DOCTYPE html>
<html lang="pt_BR">
@include('panel.template.head')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('panel.template.navbar')
        @include('panel.template.aside-left')
        @yield('content')
        @include("panel.template.aside-right")
        @include('panel.template.footer')
    </div>
    @include('panel.template.javascript')
</body>

</html>
