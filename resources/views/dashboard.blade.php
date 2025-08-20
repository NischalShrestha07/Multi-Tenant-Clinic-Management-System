<x-tenant-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header with Breadcrumbs -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
                <div class="mb-4 sm:mb-0">
                    <h1 class="text-2xl font-bold text-gray-900">ClinicHQ Dashboard</h1>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="{{ route('central.dashboard') }}"
                                    class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                                    <i class="fas fa-home mr-2"></i>
                                    Home
                                </a>
                            </li>
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Dashboard</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 w-full sm:w-auto">
                    <x-btn-link href="{{ route('central.tenants.create') }}" color="primary" class="w-full sm:w-auto">
                        <i class="fas fa-plus mr-2"></i> New Clinic
                    </x-btn-link>
                    <x-btn-link href="#" color="secondary" class="w-full sm:w-auto">
                        <i class="fas fa-download mr-2"></i> Generate Report
                    </x-btn-link>
                </div>
            </div>

            <!-- System Alerts -->
            <div class="mb-6">
                <div
                    class="bg-gradient-to-r from-blue-50 to-blue-100 border-l-4 border-blue-500 p-4 rounded-lg shadow-sm">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i class="fas fa-info-circle text-blue-500 text-xl mt-1"></i>
                        </div>
                        <div class="ml-3 flex-1">
                            <p class="text-sm font-medium text-blue-800">
                                Welcome back, {{ Auth::user()->name }}! You're managing
                                <span class="font-bold">14 active clinics</span> with
                                <span class="font-bold">83 total patients</span>.
                            </p>
                            <p class="mt-1 text-sm text-blue-700">
                                System status: <span class="font-semibold text-green-600">All systems operational</span>
                                <span class="mx-2">•</span>
                                Last backup: <span class="font-semibold">2 hours ago</span>
                            </p>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                            <button class="text-blue-500 hover:text-blue-700 focus:outline-none">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <!-- Active Clinics Card -->
                <div
                    class="bg-white overflow-hidden shadow rounded-lg transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-indigo-100 p-3 rounded-full">
                                <i class="fas fa-clinic-medical text-indigo-600 text-xl"></i>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Active Clinics</dt>
                                    <dd>
                                        <div class="text-2xl font-semibold text-gray-900">14</div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="mt-4 flex items-baseline">
                            <div class="text-green-600 text-sm font-semibold">
                                <span>+2 from last month</span>
                            </div>
                            <div class="ml-2 text-xs text-gray-500">+16.7%</div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm">
                            <a href="{{ route('central.tenants.index') }}"
                                class="font-medium text-indigo-600 hover:text-indigo-500">
                                View all clinics<i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Total Patients Card -->
                <div
                    class="bg-white overflow-hidden shadow rounded-lg transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-green-100 p-3 rounded-full">
                                <i class="fas fa-user-injured text-green-600 text-xl"></i>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Total Patients</dt>
                                    <dd>
                                        <div class="text-2xl font-semibold text-gray-900">83</div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="mt-4 flex items-baseline">
                            <div class="text-green-600 text-sm font-semibold">
                                <span>+5 from last week</span>
                            </div>
                            <div class="ml-2 text-xs text-gray-500">+6.4%</div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-green-600 hover:text-green-500">
                                View patient records<i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Today's Appointments Card -->
                <div
                    class="bg-white overflow-hidden shadow rounded-lg transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-blue-100 p-3 rounded-full">
                                <i class="fas fa-calendar-check text-blue-600 text-xl"></i>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Today's Appointments</dt>
                                    <dd>
                                        <div class="text-2xl font-semibold text-gray-900">12</div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-baseline">
                                <div class="text-green-600 text-sm font-semibold">
                                    <span>3 new since yesterday</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                                View schedule<i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Monthly Revenue Card -->
                <div
                    class="bg-white overflow-hidden shadow rounded-lg transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-purple-100 p-3 rounded-full">
                                <i class="fas fa-wallet text-purple-600 text-xl"></i>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Monthly Revenue</dt>
                                    <dd>
                                        <div class="text-2xl font-semibold text-gray-900">$23,000</div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="mt-4 flex items-baseline">
                            <div class="text-green-600 text-sm font-semibold">
                                <span>+10% from last month</span>
                            </div>
                            <div class="ml-2 text-xs text-gray-500">+$2,100</div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm">
                            <a href="#" class="font-medium text-purple-600 hover:text-purple-500">
                                View financial reports<i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Recent Clinics and Activity -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Recent Clinics -->
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">
                                    <i class="fas fa-clinic-medical text-indigo-500 mr-2"></i>
                                    Recently Added Clinics
                                </h3>
                                <div class="flex space-x-2">
                                    <x-btn-link href="{{ route('central.tenants.index') }}" size="sm" color="secondary">
                                        View All
                                    </x-btn-link>
                                    <x-btn-link href="{{ route('central.tenants.create') }}" size="sm" color="primary">
                                        <i class="fas fa-plus mr-1"></i> Add New
                                    </x-btn-link>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Clinic</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Location</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Plan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://ui-avatars.com/api/?name=Sunrise+Clinic&background=random"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Sunrise Clinic</div>
                                                    <div class="text-sm text-gray-500">ID: CL-001</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Kathmandu, Nepal</div>
                                            <div class="text-xs text-gray-500">Registered: 2 days ago</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Basic</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3"><i
                                                    class="fas fa-eye mr-1"></i>View</a>
                                            <a href="#" class="text-yellow-600 hover:text-yellow-900"><i
                                                    class="fas fa-edit mr-1"></i>Edit</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://ui-avatars.com/api/?name=Everest+Health&background=random"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Everest Health</div>
                                                    <div class="text-sm text-gray-500">ID: CL-002</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Pokhara, Nepal</div>
                                            <div class="text-xs text-gray-500">Registered: 1 week ago</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">Premium</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3"><i
                                                    class="fas fa-eye mr-1"></i>View</a>
                                            <a href="#" class="text-yellow-600 hover:text-yellow-900"><i
                                                    class="fas fa-edit mr-1"></i>Edit</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://ui-avatars.com/api/?name=Himalaya+Care&background=random"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Himalaya Care</div>
                                                    <div class="text-sm text-gray-500">ID: CL-003</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Chitwan, Nepal</div>
                                            <div class="text-xs text-gray-500">Registered: 2 weeks ago</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Pro</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Suspended</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3"><i
                                                    class="fas fa-eye mr-1"></i>View</a>
                                            <a href="#" class="text-yellow-600 hover:text-yellow-900"><i
                                                    class="fas fa-edit mr-1"></i>Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-gray-50 px-4 py-4 sm:px-6 border-t border-gray-200">
                            <div class="flex-1 flex justify-between items-center">
                                <span class="text-sm text-gray-500">Showing <span class="font-medium">1</span> to <span
                                        class="font-medium">3</span> of <span class="font-medium">14</span>
                                    clinics</span>
                                <div class="flex space-x-2">
                                    <button
                                        class="relative inline-flex items-center px-2 py-1 rounded-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        Previous
                                    </button>
                                    <button
                                        class="relative inline-flex items-center px-2 py-1 rounded-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Today's Appointments -->
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">
                                    <i class="fas fa-calendar-day text-blue-500 mr-2"></i>
                                    Today's Appointments
                                </h3>
                                <div class="flex space-x-2">
                                    <x-btn-link href="#" size="sm" color="secondary">
                                        View Calendar
                                    </x-btn-link>
                                    <x-btn-link href="#" size="sm" color="primary">
                                        <i class="fas fa-plus mr-1"></i> New Appointment
                                    </x-btn-link>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Patient</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Doctor</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Time</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://randomuser.me/api/portraits/women/12.jpg" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                                    <div class="text-sm text-gray-500">ID: PT-1001</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Dr. Michael Chen</div>
                                            <div class="text-xs text-gray-500">Cardiology</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">10:30 AM</div>
                                            <div class="text-xs text-gray-500">Today</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmed</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3"><i
                                                    class="fas fa-eye mr-1"></i>View</a>
                                            <a href="#" class="text-yellow-600 hover:text-yellow-900"><i
                                                    class="fas fa-edit mr-1"></i>Reschedule</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Robert Wilson</div>
                                                    <div class="text-sm text-gray-500">ID: PT-1045</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Dr. Emily Rodriguez</div>
                                            <div class="text-xs text-gray-500">Pediatrics</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">2:15 PM</div>
                                            <div class="text-xs text-gray-500">Today</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3"><i
                                                    class="fas fa-eye mr-1"></i>View</a>
                                            <a href="#" class="text-yellow-600 hover:text-yellow-900"><i
                                                    class="fas fa-edit mr-1"></i>Confirm</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://randomuser.me/api/portraits/women/45.jpg" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Lisa Thompson</div>
                                                    <div class="text-sm text-gray-500">ID: PT-0987</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Dr. James Wilson</div>
                                            <div class="text-xs text-gray-500">Dermatology</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">9:00 AM</div>
                                            <div class="text-xs text-gray-500">Tomorrow</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmed</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3"><i
                                                    class="fas fa-eye mr-1"></i>View</a>
                                            <a href="#" class="text-yellow-600 hover:text-yellow-900"><i
                                                    class="fas fa-edit mr-1"></i>Reschedule</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-gray-50 px-4 py-4 sm:px-6 border-t border-gray-200">
                            <div class="text-sm text-center">
                                <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                                    View all appointments for today <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar Content -->
                <div class="space-y-6">
                    <!-- Quick Actions -->
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                <i class="fas fa-bolt text-purple-500 mr-2"></i>
                                Quick Actions
                            </h3>
                        </div>
                        <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-2 gap-4">
                                <x-btn-link href="#" class="bg-blue-50 text-blue-700 hover:bg-blue-100">
                                    <i class="fas fa-user-plus mr-2"></i> Add User
                                </x-btn-link>
                                <x-btn-link href="#" class="bg-green-50 text-green-700 hover:bg-green-100">
                                    <i class="fas fa-file-prescription mr-2"></i> New Prescription
                                </x-btn-link>
                                <x-btn-link href="#" class="bg-yellow-50 text-yellow-700 hover:bg-yellow-100">
                                    <i class="fas fa-pills mr-2"></i> Manage Inventory
                                </x-btn-link>
                                <x-btn-link href="#" class="bg-red-50 text-red-700 hover:bg-red-100">
                                    <i class="fas fa-file-invoice-dollar mr-2"></i> Generate Bill
                                </x-btn-link>
                                <x-btn-link href="#" class="bg-indigo-50 text-indigo-700 hover:bg-indigo-100">
                                    <i class="fas fa-chart-line mr-2"></i> View Analytics
                                </x-btn-link>
                                <x-btn-link href="#" class="bg-purple-50 text-purple-700 hover:bg-purple-100">
                                    <i class="fas fa-cog mr-2"></i> System Settings
                                </x-btn-link>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                <i class="fas fa-history text-orange-500 mr-2"></i>
                                Recent Activity
                            </h3>
                        </div>
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flow-root">
                                <ul class="-mb-8">
                                    <li>
                                        <div class="relative pb-8">
                                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                                aria-hidden="true"></span>
                                            <div class="relative flex space-x-3">
                                                <div>
                                                    <span
                                                        class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                                        <i class="fas fa-user-plus text-white text-sm"></i>
                                                    </span>
                                                </div>
                                                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                    <div>
                                                        <p class="text-sm text-gray-800">
                                                            <span class="font-semibold">John Doe</span> registered with
                                                            the <span class="font-semibold">Premium Plan</span>
                                                        </p>
                                                    </div>
                                                    <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                        <time datetime="2025-08-14">2 minutes ago</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="relative pb-8">
                                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                                aria-hidden="true"></span>
                                            <div class="relative flex space-x-3">
                                                <div>
                                                    <span
                                                        class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                        <i class="fas fa-check-circle text-white text-sm"></i>
                                                    </span>
                                                </div>
                                                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                    <div>
                                                        <p class="text-sm text-gray-800">
                                                            <span class="font-semibold">Clinic HealthCare Plus</span>
                                                            subscription activated
                                                        </p>
                                                    </div>
                                                    <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                        <time datetime="2025-08-14">10 minutes ago</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="relative pb-8">
                                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                                aria-hidden="true"></span>
                                            <div class="relative flex space-x-3">
                                                <div>
                                                    <span
                                                        class="h-8 w-8 rounded-full bg-yellow-500 flex items-center justify-center ring-8 ring-white">
                                                        <i class="fas fa-edit text-white text-sm"></i>
                                                    </span>
                                                </div>
                                                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                    <div>
                                                        <p class="text-sm text-gray-800">
                                                            <span class="font-semibold">Jane Smith</span> updated her
                                                            profile information
                                                        </p>
                                                    </div>
                                                    <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                        <time datetime="2025-08-14">30 minutes ago</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="relative pb-8">
                                            <div class="relative flex space-x-3">
                                                <div>
                                                    <span
                                                        class="h-8 w-8 rounded-full bg-red-500 flex items-center justify-center ring-8 ring-white">
                                                        <i class="fas fa-exclamation-triangle text-white text-sm"></i>
                                                    </span>
                                                </div>
                                                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                    <div>
                                                        <p class="text-sm text-gray-800">
                                                            Payment for <span class="font-semibold">Clinic Care
                                                                Basic</span> plan was declined
                                                        </p>
                                                    </div>
                                                    <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                        <time datetime="2025-08-14">1 hour ago</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-6">
                                <a href="#"
                                    class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                    View all activity
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-tenant-app-layout>
