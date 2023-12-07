@include('layouts.header')

<body class="layout-fluid">
    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900"> --}}
    <div class="page">
        @include('layouts.sidebar')
        <!-- Page Content -->
        <main class="page-wrapper">
            @include('layouts.navigation')

            @yield('content')
        </main>
    </div>

    @include('layouts.footer')
</body>

</html>
