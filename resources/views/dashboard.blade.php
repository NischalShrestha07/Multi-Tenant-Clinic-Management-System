{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome!") }}
                    <x-btn-link href="{{route('central.tenants.index')}}">Tenants</x-btn-link>
                </div>

            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Clinic Management Dashboard') }}
            </h2>
            <div class="flex space-x-2">
                <x-btn-link href="{{route('central.tenants.index')}}">
                    <i class="fas fa-users mr-2"></i> Manage Users
                </x-btn-link>
                <x-btn-link href="">
                    <i class="fas fa-pills mr-2"></i> Manage Inventory
                </x-btn-link>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Quick Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <!-- Patients Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-blue-50 border-b border-blue-100">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                                <i class="fas fa-user-injured text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Total Patients</p>
                                <p class="text-2xl font-semibold text-gray-800">1,248</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-600 text-sm font-semibold">↑ 12.5%</span>
                            <span class="text-gray-500 text-sm ml-2">from last month</span>
                        </div>
                    </div>
                </div>

                <!-- Appointments Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-green-50 border-b border-green-100">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-600">
                                <i class="fas fa-calendar-check text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Today's Appointments</p>
                                <p class="text-2xl font-semibold text-gray-800">24</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-600 text-sm font-semibold">3 new</span>
                            <span class="text-gray-500 text-sm ml-2">since yesterday</span>
                        </div>
                    </div>
                </div>

                <!-- Revenue Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-purple-50 border-b border-purple-100">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                                <i class="fas fa-wallet text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Monthly Revenue</p>
                                <p class="text-2xl font-semibold text-gray-800">$24,780</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-600 text-sm font-semibold">↑ 8.2%</span>
                            <span class="text-gray-500 text-sm ml-2">from last month</span>
                        </div>
                    </div>
                </div>

                <!-- Inventory Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-yellow-50 border-b border-yellow-100">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                                <i class="fas fa-pills text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Low Stock Items</p>
                                <p class="text-2xl font-semibold text-gray-800">7</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-red-600 text-sm font-semibold">Attention needed</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Upcoming Appointments -->
                <div class="lg:col-span-2">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <i class="fas fa-calendar-alt mr-2 text-blue-500"></i>
                                    Upcoming Appointments
                                </h3>
                                <x-btn-link href="#" size="sm">
                                    View All
                                </x-btn-link>
                            </div>

                            <div class="overflow-x-auto">
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
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                            src="https://randomuser.me/api/portraits/women/12.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Sarah Johnson
                                                        </div>
                                                        <div class="text-sm text-gray-500">ID: PT-1001</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Dr. Michael Chen</div>
                                                <div class="text-sm text-gray-500">Cardiology</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Today, 10:30 AM</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmed</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">View</a>
                                                <a href="#" class="text-yellow-600 hover:text-yellow-900">Reschedule</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                            src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Robert Wilson
                                                        </div>
                                                        <div class="text-sm text-gray-500">ID: PT-1045</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Dr. Emily Rodriguez</div>
                                                <div class="text-sm text-gray-500">Pediatrics</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Today, 2:15 PM</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">View</a>
                                                <a href="#" class="text-yellow-600 hover:text-yellow-900">Confirm</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                            src="https://randomuser.me/api/portraits/women/45.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">Lisa Thompson
                                                        </div>
                                                        <div class="text-sm text-gray-500">ID: PT-0987</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Dr. James Wilson</div>
                                                <div class="text-sm text-gray-500">Dermatology</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Tomorrow, 9:00 AM</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmed</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">View</a>
                                                <a href="#" class="text-yellow-600 hover:text-yellow-900">Reschedule</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions & Recent Activity -->
                <div class="space-y-6">
                    <!-- Quick Actions -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">
                                <i class="fas fa-bolt mr-2 text-purple-500"></i>
                                Quick Actions
                            </h3>
                            <div class="grid grid-cols-2 gap-4">
                                <x-btn-link href="#" class="bg-blue-100 text-blue-800 hover:bg-blue-200">
                                    <i class="fas fa-plus mr-2"></i> New Appointment
                                </x-btn-link>
                                <x-btn-link href="#" class="bg-green-100 text-green-800 hover:bg-green-200">
                                    <i class="fas fa-user-plus mr-2"></i> Add Patient
                                </x-btn-link>
                                <x-btn-link href="#" class="bg-yellow-100 text-yellow-800 hover:bg-yellow-200">
                                    <i class="fas fa-file-prescription mr-2"></i> Create Prescription
                                </x-btn-link>
                                <x-btn-link href="#" class="bg-red-100 text-red-800 hover:bg-red-200">
                                    <i class="fas fa-file-invoice-dollar mr-2"></i> Generate Bill
                                </x-btn-link>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">
                                <i class="fas fa-history mr-2 text-orange-500"></i>
                                Recent Activity
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 pt-1">
                                        <div
                                            class="h-8 w-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                                            <i class="fas fa-user-plus text-sm"></i>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">New patient registered</p>
                                        <p class="text-sm text-gray-500">David Miller was added to the system</p>
                                        <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 pt-1">
                                        <div
                                            class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                                            <i class="fas fa-calendar-check text-sm"></i>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Appointment completed</p>
                                        <p class="text-sm text-gray-500">Sarah Johnson's checkup with Dr. Chen</p>
                                        <p class="text-xs text-gray-400 mt-1">4 hours ago</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 pt-1">
                                        <div
                                            class="h-8 w-8 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center">
                                            <i class="fas fa-pills text-sm"></i>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Inventory updated</p>
                                        <p class="text-sm text-gray-500">Amoxicillin stock was replenished (50 units)
                                        </p>
                                        <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 pt-1">
                                        <div
                                            class="h-8 w-8 rounded-full bg-yellow-100 text-yellow-600 flex items-center justify-center">
                                            <i class="fas fa-file-invoice-dollar text-sm"></i>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Payment received</p>
                                        <p class="text-sm text-gray-500">Invoice #INV-2023-045 was paid ($120.00)</p>
                                        <p class="text-xs text-gray-400 mt-1">2 days ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Sections -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
                <!-- Doctors Availability -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">
                                <i class="fas fa-user-md mr-2 text-green-500"></i>
                                Doctors Availability
                            </h3>
                            <x-btn-link href="#" size="sm">
                                Manage Doctors
                            </x-btn-link>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://randomuser.me/api/portraits/men/42.jpg" alt="">
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Dr. Michael Chen</p>
                                        <p class="text-sm text-gray-500">Cardiology</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-900">Available Today</p>
                                    <p class="text-sm text-gray-500">9:00 AM - 5:00 PM</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://randomuser.me/api/portraits/women/33.jpg" alt="">
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Dr. Emily Rodriguez</p>
                                        <p class="text-sm text-gray-500">Pediatrics</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-900">Available Today</p>
                                    <p class="text-sm text-gray-500">10:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://randomuser.me/api/portraits/men/64.jpg" alt="">
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Dr. James Wilson</p>
                                        <p class="text-sm text-gray-500">Dermatology</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-900">On Leave</p>
                                    <p class="text-sm text-gray-500">Returns Tomorrow</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Low Stock Alert -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">
                                <i class="fas fa-exclamation-triangle mr-2 text-red-500"></i>
                                Low Stock Alerts
                            </h3>
                            <x-btn-link href="{{ route('central.products.index') }}" size="sm">
                                View Inventory
                            </x-btn-link>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Item</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Category</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Current Stock</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Reorder Level</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">Paracetamol 500mg</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Medication</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">12</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">50</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">Bandages (Medium)</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Medical Supplies</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">8</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">25</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">Alcohol Swabs</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Medical Supplies</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">22</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">30</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>