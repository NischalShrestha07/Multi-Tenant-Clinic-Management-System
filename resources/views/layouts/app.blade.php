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
                            {{-- <x-sidebar-link :href="route('central.dashboard')"
                                :active="request()->routeIs('central.dashboard')">
                                <i class="fas fa-tachometer-alt mr-3"></i>
                                {{ __('Dashboard') }}
                            </x-sidebar-link>

                            <!-- Clinic Management -->
                            <x-sidebar-link :href="route('central.tenants.index')"
                                :active="request()->routeIs('central.tenants.*')">
                                <i class="fas fa-clinic-medical mr-3"></i>
                                {{ __('Clinics') }}
                            </x-sidebar-link>

                            <!-- User Management -->
                            <x-sidebar-link :href="route('central.users.index')"
                                :active="request()->routeIs('central.users.*')">
                                <i class="fas fa-users mr-3"></i>
                                {{ __('Users') }}
                            </x-sidebar-link>

                            <!-- Patient Management -->
                            <x-sidebar-link :href="route('central.patients.index')"
                                :active="request()->routeIs('central.patients.*')">
                                <i class="fas fa-user-injured mr-3"></i>
                                {{ __('Patients') }}
                            </x-sidebar-link>

                            <!-- Appointments -->
                            <x-sidebar-link :href="route('central.appointments.index')"
                                :active="request()->routeIs('central.appointments.*')">
                                <i class="fas fa-calendar-check mr-3"></i>
                                {{ __('Appointments') }}
                            </x-sidebar-link>

                            <!-- Billing -->
                            <x-sidebar-link :href="route('central.billing.index')"
                                :active="request()->routeIs('central.billing.*')">
                                <i class="fas fa-credit-card mr-3"></i>
                                {{ __('Billing') }}
                            </x-sidebar-link>

                            <!-- Inventory -->
                            <x-sidebar-link :href="route('central.inventory.index')"
                                :active="request()->routeIs('central.inventory.*')">
                                <i class="fas fa-pills mr-3"></i>
                                {{ __('Inventory') }}
                            </x-sidebar-link>

                            <!-- Reports -->
                            <x-sidebar-link :href="route('central.reports')"
                                :active="request()->routeIs('central.reports')">
                                <i class="fas fa-chart-bar mr-3"></i>
                                {{ __('Reports') }}
                            </x-sidebar-link>

                            <!-- Settings -->
                            <x-sidebar-link :href="route('central.settings')"
                                :active="request()->routeIs('central.settings')">
                                <i class="fas fa-cog mr-3"></i>
                                {{ __('Settings') }}
                            </x-sidebar-link> --}}
                            <x-sidebar-link :href="Route::has('central.dashboard') ? route('central.dashboard') : '#'"
                                :active="request()->routeIs('central.dashboard')"
                                :disabled="!Route::has('central.dashboard')">
                                <i class="fas fa-tachometer-alt mr-3"></i>
                                {{ __('Dashboard') }}
                            </x-sidebar-link>

                            <!-- Clinic Management -->
                            <x-sidebar-link
                                :href="Route::has('central.tenants.index') ? route('central.tenants.index') : '#'"
                                :active="request()->routeIs('central.tenants.*')"
                                :disabled="!Route::has('central.tenants.index')">
                                <i class="fas fa-clinic-medical mr-3"></i>
                                {{ __('Clinics') }}
                            </x-sidebar-link>

                            <!-- User Management -->
                            <x-sidebar-link
                                :href="Route::has('central.users.index') ? route('central.users.index') : '#'"
                                :active="request()->routeIs('central.users.*')"
                                :disabled="!Route::has('central.users.index')">
                                <i class="fas fa-users mr-3"></i>
                                {{ __('Users') }}
                            </x-sidebar-link>

                            <!-- Patient Management -->
                            <x-sidebar-link
                                :href="Route::has('central.patients.index') ? route('central.patients.index') : '#'"
                                :active="request()->routeIs('central.patients.*')"
                                :disabled="!Route::has('central.patients.index')">
                                <i class="fas fa-user-injured mr-3"></i>
                                {{ __('Patients') }}
                            </x-sidebar-link>

                            <!-- Appointments -->
                            <x-sidebar-link
                                :href="Route::has('central.appointments.index') ? route('central.appointments.index') : '#'"
                                :active="request()->routeIs('central.appointments.*')"
                                :disabled="!Route::has('central.appointments.index')">
                                <i class="fas fa-calendar-check mr-3"></i>
                                {{ __('Appointments') }}
                            </x-sidebar-link>

                            <!-- Billing -->
                            <x-sidebar-link
                                :href="Route::has('central.billing.index') ? route('central.billing.index') : '#'"
                                :active="request()->routeIs('central.billing.*')"
                                :disabled="!Route::has('central.billing.index')">
                                <i class="fas fa-credit-card mr-3"></i>
                                {{ __('Billing') }}
                            </x-sidebar-link>

                            <!-- Inventory -->
                            <x-sidebar-link
                                :href="Route::has('central.inventory.index') ? route('central.inventory.index') : '#'"
                                :active="request()->routeIs('central.inventory.*')"
                                :disabled="!Route::has('central.inventory.index')">
                                <i class="fas fa-pills mr-3"></i>
                                {{ __('Inventory') }}
                            </x-sidebar-link>

                            <!-- Reports -->
                            <x-sidebar-link :href="Route::has('central.reports') ? route('central.reports') : '#'"
                                :active="request()->routeIs('central.reports')"
                                :disabled="!Route::has('central.reports')">
                                <i class="fas fa-chart-bar mr-3"></i>
                                {{ __('Reports') }}
                            </x-sidebar-link>

                            <!-- Settings -->
                            <x-sidebar-link :href="Route::has('central.settings') ? route('central.settings') : '#'"
                                :active="request()->routeIs('central.settings')"
                                :disabled="!Route::has('central.settings')">
                                <i class="fas fa-cog mr-3"></i>
                                {{ __('Settings') }}
                            </x-sidebar-link>
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
                                <a href="{{ route('central.profile.edit') }}"
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