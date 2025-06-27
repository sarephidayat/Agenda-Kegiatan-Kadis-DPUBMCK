<div class="sidebar bg-white text-gray-800 w-64 min-h-screen shadow-lg flex flex-col">
    <!-- Sidebar Header -->
    <div class="p-4 border-b border-gray-200 flex items-center justify-between">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white">
                <i class="fas fa-cog text-xl"></i>
            </div>
            <span class="text-xl font-semibold">Admin Panel</span>
        </div>
        <button id="toggleSidebar" class="text-gray-500 hover:text-gray-700 focus:outline-none">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Sidebar Content -->
    <div class="sidebar-scroll flex-1 overflow-y-auto py-4">
        <!-- Dashboard Section -->
        <div class="px-4 mb-6">
            <h3 class="text-xs uppercase font-semibold text-gray-500 mb-3 tracking-wider">Main</h3>
            <ul>
                <li>
                    <a href="/"
                        class="sidebar-item active-item flex items-center py-2 px-3 rounded-lg text-blue-600 bg-blue-50">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Management Section -->
        <div class="px-4 mb-6">
            <h3 class="text-xs uppercase font-semibold text-gray-500 mb-3 tracking-wider">Management</h3>
            <ul>
                <li>
                    <a href="/orders" class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                        <i class="fas fa-shopping-cart mr-3"></i>
                        <span>Orders</span>
                        <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">5</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>