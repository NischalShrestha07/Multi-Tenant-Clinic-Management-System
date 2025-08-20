<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\Central\Appointment;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Clinic statistics
        $activeClinicsCount = Tenant::active()->count();
        $recentClinics = Tenant::latest()->take(5)->get();

        // Patient statistics (assuming you have a way to aggregate across tenants)
        $totalPatients = 1250; // This should come from your actual data
        $patientGrowth = 12.5;

        // Appointment statistics
        // $todaysAppointments = Appointment::whereDate('date', today())->count();
        // $todaysAppointmentsList = Appointment::with(['patient', 'doctor'])
        //     ->whereDate('date', today())
        //     ->orderBy('time')
        //     ->take(5)
        //     ->get();

        // Financial statistics
        $monthlyRevenue = 42850;
        $revenueGrowth = 8.2;

        // Recent activities
        $recentActivities = [
            [
                'icon' => 'fas fa-clinic-medical',
                'bg_color' => 'bg-blue-100 text-blue-600',
                'title' => 'New clinic registered',
                'description' => 'Sunshine Dental was added to the system',
                'time' => '2 hours ago'
            ],
            // Add more activities...
        ];

        // Subscription alerts
        $subscriptionAlerts = [
            [
                'clinic' => 'Sunshine Dental',
                'plan' => 'Premium',
                'renewal' => 'Tomorrow',
                'status' => 'Expiring',
                'status_class' => 'bg-red-100 text-red-800'
            ],
            // Add more alerts...
        ];

        return view('dashboard', compact(
            'activeClinicsCount',
            'recentClinics',
            'totalPatients',
            'patientGrowth',
            // 'todaysAppointments',
            // 'todaysAppointmentsList',
            'monthlyRevenue',
            'revenueGrowth',
            'recentActivities',
            'subscriptionAlerts'
        ));
    }
}
