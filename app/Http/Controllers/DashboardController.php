<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // Contoh data - ganti dengan query database sesuai kebutuhan
        $data = [
            'userCount' => \App\Models\User::count(),
            // 'todayOrders' => \App\Models\Order::whereDate('created_at', today())->count(),
            // 'revenue' => \App\Models\Order::whereDate('created_at', today())->sum('total'),
        ];

        return view('dashboard', $data);
    }
}