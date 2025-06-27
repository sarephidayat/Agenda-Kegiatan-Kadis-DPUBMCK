@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-bold mb-6">Dashboard Overview</h1>
    <p class="text-gray-600">Welcome back! Here's what's happening with your admin panel today.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="bg-blue-50 p-6 rounded-lg">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                    <i class="fas fa-users text-xl"></i>
                </div>
                <div>
                    <div class="text-gray-500">Total Users</div>
                    <div class="text-2xl font-bold">1,248</div>
                </div>
            </div>
        </div>

        <div class="bg-green-50 p-6 rounded-lg">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                    <i class="fas fa-shopping-cart text-xl"></i>
                </div>
                <div>
                    <div class="text-gray-500">Today's Orders</div>
                    <div class="text-2xl font-bold">56</div>
                </div>
            </div>
        </div>

        <div class="bg-purple-50 p-6 rounded-lg">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                    <i class="fas fa-chart-line text-xl"></i>
                </div>
                <div>
                    <div class="text-gray-500">Revenue</div>
                    <div class="text-2xl font-bold">$12,345</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection