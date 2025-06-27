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
    @include('layouts.sidebar')
    
    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Global Header -->
        <header class="bg-white shadow-sm"> <!-- Warna kuning utama -->
            <div class="max-w-full mx-auto px-6 py-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-800">@yield('page-title')</h1>
                        <nav class="flex mt-1" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                <li class="inline-flex items-center">
                                    <a href="/" class="inline-flex items-center text-large font-large text-gray-500 hover:text-blue-600">
                                        <i class="fas fa-home mr-1"></i>
                                        Dashboard
                                    </a>
                                </li>
                                @yield('breadcrumbs')
                            </ol>
                        </nav>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        
                        
                        <button class="p-2 rounded-full bg-gray-100 hover:bg-gray-200">
                            <i class="fas fa-bell text-gray-600"></i>
                            <span class="sr-only">Notifications</span>
                        </button>
                        
                        <div class="relative">
                            <button class="flex items-center space-x-2">
                                <div class="w-8 h-8 rounded-full bg-gray-300 overflow-hidden">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-full h-full object-cover">
                                </div>
                                <span class="hidden md:inline-block font-medium">Sarah Johnson</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto p-6">
            @yield('content')
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle sidebar
            const toggleSidebar = document.getElementById('toggleSidebar');
            const sidebar = document.querySelector('.sidebar');

            if (toggleSidebar && sidebar) {
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
            }

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
                            i.classList.remove('active-item', 'text-blue-600', 'bg-blue-50');
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
            if (sidebar) {
                handleResize();
            }

            // Add event listener
            window.addEventListener('resize', handleResize);
        });
    </script>
    @stack('scripts')
</body>
</html>