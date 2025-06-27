@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Order Overview</h1>
        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center">
            <i class="fas fa-plus mr-2"></i> New Order
        </button>
    </div>
    
    <p class="text-gray-600 mb-6">Order management and tracking system.</p>

    <!-- Order Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-blue-50 p-6 rounded-lg">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                    <i class="fas fa-shopping-bag text-xl"></i>
                </div>
                <div>
                    <div class="text-gray-500">Total Orders</div>
                    <div class="text-2xl font-bold">1,248</div>
                </div>
            </div>
        </div>

        <div class="bg-green-50 p-6 rounded-lg">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                    <i class="fas fa-check-circle text-xl"></i>
                </div>
                <div>
                    <div class="text-gray-500">Completed</div>
                    <div class="text-2xl font-bold">856</div>
                </div>
            </div>
        </div>

        <div class="bg-yellow-50 p-6 rounded-lg">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mr-4">
                    <i class="fas fa-clock text-xl"></i>
                </div>
                <div>
                    <div class="text-gray-500">Pending</div>
                    <div class="text-2xl font-bold">312</div>
                </div>
            </div>
        </div>

        <div class="bg-red-50 p-6 rounded-lg">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-red-100 text-red-600 mr-4">
                    <i class="fas fa-times-circle text-xl"></i>
                </div>
                <div>
                    <div class="text-gray-500">Cancelled</div>
                    <div class="text-2xl font-bold">80</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Table -->
    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-3 px-6 text-left">Order ID</th>
                    <th class="py-3 px-6 text-left">Customer</th>
                    <th class="py-3 px-6 text-left">Date</th>
                    <th class="py-3 px-6 text-left">Status</th>
                    <th class="py-3 px-6 text-left">Amount</th>
                    <th class="py-3 px-6 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <!-- Sample Order Data -->
                <tr class="hover:bg-gray-50">
                    <td class="py-4 px-6">#ORD-2023-001</td>
                    <td class="py-4 px-6">John Doe</td>
                    <td class="py-4 px-6">May 15, 2023</td>
                    <td class="py-4 px-6">
                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Completed</span>
                    </td>
                    <td class="py-4 px-6">$125.00</td>
                    <td class="py-4 px-6">
                        <div class="flex space-x-2">
                            <button class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-yellow-500 hover:text-yellow-700">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-between items-center">
        <div class="text-sm text-gray-600">
            Showing 1 to 10 of 50 entries
        </div>
        <div class="flex space-x-2">
            <button class="px-3 py-1 border rounded-md bg-white text-gray-700 hover:bg-gray-50">
                Previous
            </button>
            <button class="px-3 py-1 border rounded-md bg-blue-500 text-white hover:bg-blue-600">
                1
            </button>
            <button class="px-3 py-1 border rounded-md bg-white text-gray-700 hover:bg-gray-50">
                2
            </button>
            <button class="px-3 py-1 border rounded-md bg-white text-gray-700 hover:bg-gray-50">
                Next
            </button>
        </div>
    </div>
</div>
@endsection