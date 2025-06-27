<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom styles for smooth transitions */
        .sidebar {
            transition: all 0.3s ease;
        }

        .sidebar-item {
            transition: all 0.2s ease;
        }

        .sidebar-item:hover {
            transform: translateX(5px);
        }

        .dropdown-content {
            transition: max-height 0.3s ease, opacity 0.2s ease;
            overflow: hidden;
        }

        .dropdown-content.collapsed {
            max-height: 0;
            opacity: 0;
        }

        .dropdown-content.expanded {
            max-height: 500px;
            opacity: 1;
        }

        /* Custom scrollbar for sidebar */
        .sidebar-scroll::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar-scroll::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 5px;
        }

        .sidebar-scroll::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Active state indicator */
        .active-item {
            position: relative;
        }

        .active-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background-color: #3b82f6;
            border-radius: 0 4px 4px 0;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Sidebar -->
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
                        <a href="#"
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
                    <li class="mb-1">
                        <div class="dropdown">
                            <button
                                class="sidebar-item dropdown-toggle flex items-center justify-between w-full py-2 px-3 rounded-lg hover:bg-gray-100">
                                <div class="flex items-center">
                                    <i class="fas fa-users mr-3"></i>
                                    <span>Users</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
                            </button>
                            <div class="dropdown-content expanded ml-9 pl-3 border-l-2 border-gray-200 mt-1">
                                <ul>
                                    <li class="mb-1">
                                        <a href="#"
                                            class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                                            <span>All Users</span>
                                        </a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#"
                                            class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                                            <span>Add New</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                                            <span>Roles & Permissions</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="mb-1">
                        <div class="dropdown">
                            <button
                                class="sidebar-item dropdown-toggle flex items-center justify-between w-full py-2 px-3 rounded-lg hover:bg-gray-100">
                                <div class="flex items-center">
                                    <i class="fas fa-box mr-3"></i>
                                    <span>Products</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
                            </button>
                            <div class="dropdown-content collapsed ml-9 pl-3 border-l-2 border-gray-200 mt-1">
                                <ul>
                                    <li class="mb-1">
                                        <a href="#"
                                            class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                                            <span>All Products</span>
                                        </a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#"
                                            class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                                            <span>Add New</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                                            <span>Categories</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="#" class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-shopping-cart mr-3"></i>
                            <span>Orders</span>
                            <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">5</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Content Section -->
            <div class="px-4 mb-6">
                <h3 class="text-xs uppercase font-semibold text-gray-500 mb-3 tracking-wider">Content</h3>
                <ul>
                    <li class="mb-1">
                        <a href="#" class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-newspaper mr-3"></i>
                            <span>Posts</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="#" class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-tags mr-3"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-comment mr-3"></i>
                            <span>Comments</span>
                            <span class="ml-auto bg-blue-500 text-white text-xs px-2 py-1 rounded-full">12</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Settings Section -->
            <div class="px-4">
                <h3 class="text-xs uppercase font-semibold text-gray-500 mb-3 tracking-wider">Settings</h3>
                <ul>
                    <li class="mb-1">
                        <a href="#" class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-cog mr-3"></i>
                            <span>General</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-item flex items-center py-2 px-3 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-bell mr-3"></i>
                            <span>Notifications</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Sidebar Footer -->
        <div class="p-4 border-t border-gray-200">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gray-300 rounded-full overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User"
                        class="w-full h-full object-cover">
                </div>
                <div>
                    <div class="font-medium">Sarah Johnson</div>
                    <div class="text-xs text-gray-500">Admin</div>
                </div>
            </div>
            <a href="#" class="mt-3 flex items-center text-red-500 hover:text-red-700">
                <i class="fas fa-sign-out-alt mr-2"></i>
                <span>Logout</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8">
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
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle sidebar
            const toggleSidebar = document.getElementById('toggleSidebar');
            const sidebar = document.querySelector('.sidebar');

            toggleSidebar.addEventListener('click', function() {
                sidebar.classList.toggle('w-64');
                sidebar.classList.toggle('w-20');

                // Hide text when sidebar is collapsed
                const sidebarTexts = document.querySelectorAll('.sidebar span');
                const sidebarHeaders = document.querySelectorAll('.sidebar h3');
                const dropdownArrows = document.querySelectorAll('.dropdown-toggle i.fa-chevron-down');

                sidebarTexts.forEach(text => {
                    text.classList.toggle('hidden');
                });

                sidebarHeaders.forEach(header => {
                    header.classList.toggle('hidden');
                });

                dropdownArrows.forEach(arrow => {
                    arrow.classList.toggle('hidden');
                });

                // Adjust icons position
                const sidebarIcons = document.querySelectorAll('.sidebar-item i');
                sidebarIcons.forEach(icon => {
                    if (sidebar.classList.contains('w-20')) {
                        icon.classList.remove('mr-3');
                        icon.classList.add('mx-auto');
                    } else {
                        icon.classList.add('mr-3');
                        icon.classList.remove('mx-auto');
                    }
                });
            });

            // Dropdown functionality
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const dropdown = this.parentElement;
                    const content = dropdown.querySelector('.dropdown-content');
                    const arrow = this.querySelector('i.fa-chevron-down');

                    content.classList.toggle('collapsed');
                    content.classList.toggle('expanded');
                    arrow.classList.toggle('rotate-180');
                });
            });

            // Active state for sidebar items
            const sidebarItems = document.querySelectorAll('.sidebar-item');

            sidebarItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    if (!this.classList.contains('dropdown-toggle')) {
                        // Remove active class from all items
                        sidebarItems.forEach(i => {
                            i.classList.remove('active-item', 'text-blue-600',
                            'bg-blue-50');
                        });

                        // Add active class to clicked item
                        this.classList.add('active-item', 'text-blue-600', 'bg-blue-50');
                    }
                });
            });

            // Responsive behavior
            function handleResize() {
                if (window.innerWidth < 768) {
                    sidebar.classList.add('w-20');
                    sidebar.classList.remove('w-64');

                    // Hide text when sidebar is collapsed
                    const sidebarTexts = document.querySelectorAll('.sidebar span');
                    const sidebarHeaders = document.querySelectorAll('.sidebar h3');
                    const dropdownArrows = document.querySelectorAll('.dropdown-toggle i.fa-chevron-down');

                    sidebarTexts.forEach(text => {
                        text.classList.add('hidden');
                    });

                    sidebarHeaders.forEach(header => {
                        header.classList.add('hidden');
                    });

                    dropdownArrows.forEach(arrow => {
                        arrow.classList.add('hidden');
                    });

                    // Adjust icons position
                    const sidebarIcons = document.querySelectorAll('.sidebar-item i');
                    sidebarIcons.forEach(icon => {
                        icon.classList.remove('mr-3');
                        icon.classList.add('mx-auto');
                    });
                } else {
                    sidebar.classList.add('w-64');
                    sidebar.classList.remove('w-20');

                    // Show text when sidebar is expanded
                    const sidebarTexts = document.querySelectorAll('.sidebar span');
                    const sidebarHeaders = document.querySelectorAll('.sidebar h3');
                    const dropdownArrows = document.querySelectorAll('.dropdown-toggle i.fa-chevron-down');

                    sidebarTexts.forEach(text => {
                        text.classList.remove('hidden');
                    });

                    sidebarHeaders.forEach(header => {
                        header.classList.remove('hidden');
                    });

                    dropdownArrows.forEach(arrow => {
                        arrow.classList.remove('hidden');
                    });

                    // Adjust icons position
                    const sidebarIcons = document.querySelectorAll('.sidebar-item i');
                    sidebarIcons.forEach(icon => {
                        icon.classList.add('mr-3');
                        icon.classList.remove('mx-auto');
                    });
                }
            }

            // Initial check
            handleResize();

            // Add event listener
            window.addEventListener('resize', handleResize);
        });
    </script>
</body>

</html>
