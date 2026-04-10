<div class="app-wrapper">

    {{-- SIDEBAR --}}
    <div id="appSidebar" class="sidebar-fixed">
        @include('components.partials.sidebar')
    </div>

    {{-- OVERLAY --}}
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

    {{-- MAIN --}}
    <div class="class="main-content">

        @include('components.partials.header')

        <div class="main-scroll">

            @if(session('success'))
                <div class="alert alert-success mb-4 rounded-xl shadow-sm">
                    <i class="fas fa-check-circle"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-error mb-4 rounded-xl shadow-sm">
                    <i class="fas fa-circle-xmark"></i>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            {{ $slot }}

        </div>

        @include('components.partials.footer')

    </div>

</div>