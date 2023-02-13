@include('layouts.header')
<!-- @include('layouts.sidebar') -->
<div class="container-fluid">
        <div class="row justify-content-center">
        @if (Auth::check())
                @yield('sidebar')
        @endif
                <main class="py-4 col overflow-auto h-100">
                        @yield('content')
                </main>
        </div>
</div>

@include('layouts.footer')