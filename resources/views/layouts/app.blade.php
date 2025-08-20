<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ClinicHQ') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts')
</head>

<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <!-- Navigation content same as your working version -->
        </nav>

        <!-- Sidebar and Main Content -->
        <div class="flex">
            <!-- Sidebar -->
            <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
                <div class="flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white">
                    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <h1 class="text-xl font-bold text-gray-900">ClinicHQ</h1>
                        </div>
                        <nav class="mt-5 flex-1 px-2 space-y-1">
                            <!-- Dashboard -->
                            <x-sidebar-link :href="Route::has('dashboard') ? route('dashboard') : '#'"
                                :active="request()->routeIs('dashboard')" :disabled="!Route::has('dashboard')">
                                <i class="fas fa-tachometer-alt mr-3"></i>
                                {{ __('Dashboard') }}
                            </x-sidebar-link>

                            <!-- Clinic Management -->
                            <x-sidebar-link :href="Route::has('tenants.index') ? route('tenants.index') : '#'"
                                :active="request()->routeIs('tenants.*')" :disabled="!Route::has('tenants.index')">
                                <i class="fas fa-clinic-medical mr-3"></i>
                                {{ __('Clinics') }}
                            </x-sidebar-link>

                            <!-- User Management -->
                            <x-sidebar-link :href="Route::has('users.index') ? route('users.index') : '#'"
                                :active="request()->routeIs('users.*')" :disabled="!Route::has('users.index')">
                                <i class="fas fa-users mr-3"></i>
                                {{ __('Users') }}
                            </x-sidebar-link>

                            <!-- Patient Management -->
                            <x-sidebar-link :href="Route::has('patients.index') ? route('patients.index') : '#'"
                                :active="request()->routeIs('patients.*')" :disabled="!Route::has('patients.index')">
                                <i class="fas fa-user-injured mr-3"></i>
                                {{ __('Patients') }}
                            </x-sidebar-link>

                            <!-- Appointments -->
                            <x-sidebar-link :href="Route::has('appointments.index') ? route('appointments.index') : '#'"
                                :active="request()->routeIs('appointments.*')"
                                :disabled="!Route::has('appointments.index')">
                                <i class="fas fa-calendar-check mr-3"></i>
                                {{ __('Appointments') }}
                            </x-sidebar-link>

                            <!-- Billing -->
                            <x-sidebar-link :href="Route::has('billing.index') ? route('billing.index') : '#'"
                                :active="request()->routeIs('billing.*')" :disabled="!Route::has('billing.index')">
                                <i class="fas fa-credit-card mr-3"></i>
                                {{ __('Billing') }}
                            </x-sidebar-link>

                            <!-- Inventory -->
                            <x-sidebar-link :href="Route::has('inventory.index') ? route('inventory.index') : '#'"
                                :active="request()->routeIs('inventory.*')" :disabled="!Route::has('inventory.index')">
                                <i class="fas fa-pills mr-3"></i>
                                {{ __('Inventory') }}
                            </x-sidebar-link>

                            <!-- Reports -->
                            <x-sidebar-link :href="Route::has('reports') ? route('reports') : '#'"
                                :active="request()->routeIs('reports')" :disabled="!Route::has('reports')">
                                <i class="fas fa-chart-bar mr-3"></i>
                                {{ __('Reports') }}
                            </x-sidebar-link>

                            <!-- Settings -->
                            <x-sidebar-link :href="Route::has('settings') ? route('settings') : '#'"
                                :active="request()->routeIs('settings')" :disabled="!Route::has('settings')">
                                <i class="fas fa-cog mr-3"></i>
                                {{ __('Settings') }}
                            </x-sidebar-link>

                            <!-- Logout -->
                            <x-sidebar-link href="#" :active="false"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-3"></i>
                                {{ __('Log Out') }}
                            </x-sidebar-link>

                            <form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden">
                                @csrf
                            </form>
                        </nav>
                    </div>
                    <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
                        <div class="flex items-center w-full">
                            <div>
                                <img class="inline-block h-9 w-9 rounded-full"
                                    src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random"
                                    alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</p>
                                <a href="{{ route('profile.edit') }}"
                                    class="text-xs font-medium text-blue-600 hover:text-blue-500">
                                    View profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="md:pl-64 flex flex-col flex-1">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
</script>

</html>