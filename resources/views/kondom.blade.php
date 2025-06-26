<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeLove - Premium Protection</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .product-card:hover .product-overlay {
            opacity: 1;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1518895949257-7621c3c786d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1188&q=80');
            background-size: cover;
            background-position: center;
        }
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #ef4444;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }
        .animate-bounce {
            animation: bounce 1s infinite;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-heart text-pink-500 text-2xl"></i>
                <a href="#" class="text-xl font-bold text-gray-800">Safe<span class="text-pink-500">Love</span></a>
            </div>
            
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-700 hover:text-pink-500 font-medium">Home</a>
                <div class="dropdown relative">
                    <button class="text-gray-700 hover:text-pink-500 font-medium flex items-center">
                        Products <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="dropdown-menu absolute hidden bg-white shadow-lg rounded-md mt-2 py-2 w-48">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-pink-500">All Products</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-pink-500">Premium Condoms</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-pink-500">Lubricants</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 hover:text-pink-500">Sexual Wellness</a>
                    </div>
                </div>
                <a href="#" class="text-gray-700 hover:text-pink-500 font-medium">About</a>
                <a href="#" class="text-gray-700 hover:text-pink-500 font-medium">Contact</a>
            </nav>
            
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button id="cart-btn" class="text-gray-700 hover:text-pink-500">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span id="cart-count" class="cart-count hidden">0</span>
                    </button>
                </div>
                <button class="md:hidden text-gray-700" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="container mx-auto px-4 py-2 flex flex-col space-y-2">
                <a href="#" class="py-2 text-gray-700 hover:text-pink-500">Home</a>
                <a href="#" class="py-2 text-gray-700 hover:text-pink-500">Products</a>
                <a href="#" class="py-2 text-gray-700 hover:text-pink-500">About</a>
                <a href="#" class="py-2 text-gray-700 hover:text-pink-500">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Premium Protection</h1>
            <p class="text-xl md:text-2xl mb-8">Discreet delivery. Exceptional quality. Your safety is our priority.</p>
            <button class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105">
                Shop Now
            </button>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-lg bg-gray-50 hover:shadow-md transition duration-300">
                    <div class="text-pink-500 text-4xl mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">100% Safe</h3>
                    <p class="text-gray-600">Clinically tested and approved for maximum protection.</p>
                </div>
                <div class="text-center p-6 rounded-lg bg-gray-50 hover:shadow-md transition duration-300">
                    <div class="text-pink-500 text-4xl mb-4">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Discreet Shipping</h3>
                    <p class="text-gray-600">Plain packaging with no indication of contents.</p>
                </div>
                <div class="text-center p-6 rounded-lg bg-gray-50 hover:shadow-md transition duration-300">
                    <div class="text-pink-500 text-4xl mb-4">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Secure Payment</h3>
                    <p class="text-gray-600">All transactions are encrypted for your privacy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Our Products</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">High-quality protection for your most intimate moments.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300 relative">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Ultra Thin Condoms" class="w-full h-64 object-cover">
                        <div class="product-overlay absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 transition duration-300">
                            <button class="add-to-cart bg-pink-500 hover:bg-pink-600 text-white py-2 px-6 rounded-full font-medium transition duration-300" data-id="1" data-name="Ultra Thin" data-price="12.99">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Ultra Thin</h3>
                        <p class="text-gray-600 text-sm mb-3">For maximum sensitivity and natural feel</p>
                        <div class="flex justify-between items-center">
                            <span class="text-pink-500 font-bold">$12.99</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.8</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300 relative">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" alt="Ribbed Condoms" class="w-full h-64 object-cover">
                        <div class="product-overlay absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 transition duration-300">
                            <button class="add-to-cart bg-pink-500 hover:bg-pink-600 text-white py-2 px-6 rounded-full font-medium transition duration-300" data-id="2" data-name="Ribbed Pleasure" data-price="14.99">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Ribbed Pleasure</h3>
                        <p class="text-gray-600 text-sm mb-3">Enhanced stimulation for both partners</p>
                        <div class="flex justify-between items-center">
                            <span class="text-pink-500 font-bold">$14.99</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.6</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300 relative">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1572635148818-ef6fd45eb394?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Flavored Condoms" class="w-full h-64 object-cover">
                        <div class="product-overlay absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 transition duration-300">
                            <button class="add-to-cart bg-pink-500 hover:bg-pink-600 text-white py-2 px-6 rounded-full font-medium transition duration-300" data-id="3" data-name="Flavored Variety" data-price="16.99">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Flavored Variety</h3>
                        <p class="text-gray-600 text-sm mb-3">Delicious flavors for oral pleasure</p>
                        <div class="flex justify-between items-center">
                            <span class="text-pink-500 font-bold">$16.99</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.9</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300 relative">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1583947581924-860bda6f26df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Extra Safe Condoms" class="w-full h-64 object-cover">
                        <div class="product-overlay absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 transition duration-300">
                            <button class="add-to-cart bg-pink-500 hover:bg-pink-600 text-white py-2 px-6 rounded-full font-medium transition duration-300" data-id="4" data-name="Extra Safe" data-price="13.99">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Extra Safe</h3>
                        <p class="text-gray-600 text-sm mb-3">Maximum protection with reinforced material</p>
                        <div class="flex justify-between items-center">
                            <span class="text-pink-500 font-bold">$13.99</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="border-2 border-pink-500 text-pink-500 hover:bg-pink-500 hover:text-white font-bold py-2 px-8 rounded-full transition duration-300">
                    View All Products
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">What Our Customers Say</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Trusted by thousands of satisfied customers</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">"The discreet packaging was a game-changer for me. The products are high quality and arrived quickly."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-300 mr-3"></div>
                        <div>
                            <h4 class="font-bold text-gray-800">Alex M.</h4>
                            <p class="text-gray-500 text-sm">Verified Customer</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">"I appreciate how easy the website is to use. The product descriptions are detailed and helped me make the right choice."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-300 mr-3"></div>
                        <div>
                            <h4 class="font-bold text-gray-800">Jamie K.</h4>
                            <p class="text-gray-500 text-sm">Verified Customer</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">"The flavored variety pack is amazing! Great quality and the shipping was super fast. Will definitely order again."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-300 mr-3"></div>
                        <div>
                            <h4 class="font-bold text-gray-800">Taylor S.</h4>
                            <p class="text-gray-500 text-sm">Verified Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Frequently Asked Questions</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Everything you need to know about our products and services</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="mb-4 border-b border-gray-200 pb-4">
                    <button class="faq-toggle flex justify-between items-center w-full text-left font-medium text-gray-800 hover:text-pink-500 focus:outline-none">
                        <span>Is the packaging really discreet?</span>
                        <i class="fas fa-plus text-pink-500"></i>
                    </button>
                    <div class="faq-content hidden mt-2 text-gray-600">
                        Yes, all our packages are shipped in plain, unmarked boxes or envelopes with no indication of the contents inside. The sender name on the package will simply be "SL Store" with no reference to our product line.
                    </div>
                </div>
                
                <div class="mb-4 border-b border-gray-200 pb-4">
                    <button class="faq-toggle flex justify-between items-center w-full text-left font-medium text-gray-800 hover:text-pink-500 focus:outline-none">
                        <span>How long does shipping take?</span>
                        <i class="fas fa-plus text-pink-500"></i>
                    </button>
                    <div class="faq-content hidden mt-2 text-gray-600">
                        We offer standard shipping (3-5 business days) and express shipping (1-2 business days). All orders are processed within 24 hours of being placed (excluding weekends and holidays).
                    </div>
                </div>
                
                <div class="mb-4 border-b border-gray-200 pb-4">
                    <button class="faq-toggle flex justify-between items-center w-full text-left font-medium text-gray-800 hover:text-pink-500 focus:outline-none">
                        <span>Are your products latex-free?</span>
                        <i class="fas fa-plus text-pink-500"></i>
                    </button>
                    <div class="faq-content hidden mt-2 text-gray-600">
                        We offer both latex and latex-free options. Our latex-free condoms are made from polyisoprene, which is a synthetic material that provides the same protection as latex but is suitable for those with latex allergies. You can filter products by material on our product pages.
                    </div>
                </div>
                
                <div class="mb-4 border-b border-gray-200 pb-4">
                    <button class="faq-toggle flex justify-between items-center w-full text-left font-medium text-gray-800 hover:text-pink-500 focus:outline-none">
                        <span>What payment methods do you accept?</span>
                        <i class="fas fa-plus text-pink-500"></i>
                    </button>
                    <div class="faq-content hidden mt-2 text-gray-600">
                        We accept all major credit cards (Visa, Mastercard, American Express), PayPal, Apple Pay, and Google Pay. All transactions are securely processed with 256-bit SSL encryption.
                    </div>
                </div>
                
                <div class="mb-4">
                    <button class="faq-toggle flex justify-between items-center w-full text-left font-medium text-gray-800 hover:text-pink-500 focus:outline-none">
                        <span>Can I return or exchange products?</span>
                        <i class="fas fa-plus text-pink-500"></i>
                    </button>
                    <div class="faq-content hidden mt-2 text-gray-600">
                        Due to the nature of our products, we cannot accept returns or exchanges unless the product is defective or damaged upon arrival. If you receive a damaged or defective product, please contact our customer service within 7 days of delivery for assistance.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-pink-500 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Stay Updated</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Subscribe to our newsletter for exclusive offers, new products, and sexual wellness tips.</p>
            
            <form class="max-w-md mx-auto flex">
                <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-l-full focus:outline-none text-gray-800">
                <button type="submit" class="bg-pink-700 hover:bg-pink-800 px-6 py-3 rounded-r-full font-medium transition duration-300">
                    Subscribe
                </button>
            </form>
            
            <p class="mt-4 text-sm opacity-80">We respect your privacy. Unsubscribe at any time.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-heart text-pink-500 text-2xl"></i>
                        <a href="#" class="text-xl font-bold">Safe<span class="text-pink-500">Love</span></a>
                    </div>
                    <p class="text-gray-400 mb-4">Your trusted source for premium protection and sexual wellness products.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Shop</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">All Products</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Condoms</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Lubricants</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Sexual Wellness</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Special Offers</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Help</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Shipping Info</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Returns & Exchanges</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt mr-2"></i> 123 Wellness St, Suite 100
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-phone mr-2"></i> (555) 123-4567
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope mr-2"></i> support@safelove.com
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>© 2023 SafeLove. All rights reserved.</p>
                <p class="mt-2 text-sm">This website is for educational purposes only.</p>
            </div>
        </div>
    </footer>

    <!-- Shopping Cart Sidebar -->
    <div id="cart-sidebar" class="fixed top-0 right-0 h-full w-full md:w-96 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-50 overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold">Your Cart</h2>
                <button id="close-cart" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div id="cart-items" class="space-y-4">
                <!-- Cart items will be added here dynamically -->
                <div class="text-center py-8 text-gray-500" id="empty-cart-message">
                    <i class="fas fa-shopping-cart text-4xl mb-4"></i>
                    <p>Your cart is empty</p>
                </div>
            </div>
            
            <div class="border-t border-gray-200 mt-6 pt-6 hidden" id="cart-summary">
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Subtotal</span>
                    <span id="cart-subtotal" class="font-bold">$0.00</span>
                </div>
                <div class="flex justify-between mb-4">
                    <span class="text-gray-600">Shipping</span>
                    <span class="font-bold">Free</span>
                </div>
                <div class="flex justify-between text-lg font-bold">
                    <span>Total</span>
                    <span id="cart-total">$0.00</span>
                </div>
                
                <button class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-full font-medium mt-6 transition duration-300">
                    Checkout
                </button>
            </div>
        </div>
    </div>
    <div id="cart-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

    <!-- Added to Cart Notification -->
    <div id="add-to-cart-notification" class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-full shadow-lg hidden items-center">
        <i class="fas fa-check-circle mr-2"></i>
        <span>Added to cart!</span>
    </div>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // FAQ toggle
        const faqToggles = document.querySelectorAll('.faq-toggle');
        
        faqToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const content = toggle.nextElementSibling;
                const icon = toggle.querySelector('i');
                
                content.classList.toggle('hidden');
                
                if (content.classList.contains('hidden')) {
                    icon.classList.remove('fa-minus');
                    icon.classList.add('fa-plus');
                } else {
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                }
            });
        });
        
        // Cart functionality
        const cartBtn = document.getElementById('cart-btn');
        const closeCartBtn = document.getElementById('close-cart');
        const cartSidebar = document.getElementById('cart-sidebar');
        const cartOverlay = document.getElementById('cart-overlay');
        const cartCount = document.getElementById('cart-count');
        const cartItems = document.getElementById('cart-items');
        const emptyCartMessage = document.getElementById('empty-cart-message');
        const cartSummary = document.getElementById('cart-summary');
        const cartSubtotal = document.getElementById('cart-subtotal');
        const cartTotal = document.getElementById('cart-total');
        const addToCartBtns = document.querySelectorAll('.add-to-cart');
        const addToCartNotification = document.getElementById('add-to-cart-notification');
        
        let cart = [];
        
        // Load cart from localStorage
        if (localStorage.getItem('cart')) {
            cart = JSON.parse(localStorage.getItem('cart'));
            updateCart();
        }
        
        // Toggle cart sidebar
        cartBtn.addEventListener('click', () => {
            cartSidebar.classList.remove('translate-x-full');
            cartOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
        
        closeCartBtn.addEventListener('click', () => {
            cartSidebar.classList.add('translate-x-full');
            cartOverlay.classList.add('hidden');
            document.body.style.overflow = '';
        });
        
        cartOverlay.addEventListener('click', () => {
            cartSidebar.classList.add('translate-x-full');
            cartOverlay.classList.add('hidden');
            document.body.style.overflow = '';
        });
        
        // Add to cart
        addToCartBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                const id = e.target.dataset.id;
                const name = e.target.dataset.name;
                const price = parseFloat(e.target.dataset.price);
                
                // Check if item already in cart
                const existingItem = cart.find(item => item.id === id);
                
                if (existingItem) {
                    existingItem.quantity += 1;
                } else {
                    cart.push({
                        id,
                        name,
                        price,
                        quantity: 1
                    });
                }
                
                // Save to localStorage
                localStorage.setItem('cart', JSON.stringify(cart));
                
                // Update cart UI
                updateCart();
                
                // Show notification
                addToCartNotification.classList.remove('hidden');
                setTimeout(() => {
                    addToCartNotification.classList.add('hidden');
                }, 3000);
                
                // Animate cart button
                cartCount.classList.add('animate-bounce');
                setTimeout(() => {
                    cartCount.classList.remove('animate-bounce');
                }, 1000);
            });
        });
        
        // Update cart UI
        function updateCart() {
            // Update cart count
            const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
            
            if (totalItems > 0) {
                cartCount.textContent = totalItems;
                cartCount.classList.remove('hidden');
            } else {
                cartCount.classList.add('hidden');
            }
            
            // Update cart items
            cartItems.innerHTML = '';
            
            if (cart.length === 0) {
                emptyCartMessage.classList.remove('hidden');
                cartSummary.classList.add('hidden');
            } else {
                emptyCartMessage.classList.add('hidden');
                cartSummary.classList.remove('hidden');
                
                let subtotal = 0;
                
                cart.forEach(item => {
                    const itemTotal = item.price * item.quantity;
                    subtotal += itemTotal;
                    
                    const cartItem = document.createElement('div');
                    cartItem.className = 'flex justify-between items-center border-b border-gray-200 pb-4';
                    cartItem.innerHTML = `
                        <div>
                            <h4 class="font-medium">${item.name}</h4>
                            <p class="text-gray-600 text-sm">$${item.price.toFixed(2)}</p>
                        </div>
                        <div class="flex items-center">
                            <button class="decrease-quantity w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center" data-id="${item.id}">
                                <i class="fas fa-minus text-xs"></i>
                            </button>
                            <span class="mx-3">${item.quantity}</span>
                            <button class="increase-quantity w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center" data-id="${item.id}">
                                <i class="fas fa-plus text-xs"></i>
                            </button>
                            <button class="remove-item ml-4 text-gray-500 hover:text-red-500" data-id="${item.id}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    `;
                    
                    cartItems.appendChild(cartItem);
                });
                
                // Update totals
                cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;
                cartTotal.textContent = `$${subtotal.toFixed(2)}`;
                
                // Add event listeners to quantity buttons
                document.querySelectorAll('.increase-quantity').forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        const id = e.target.closest('button').dataset.id;
                        const item = cart.find(item => item.id === id);
                        item.quantity += 1;
                        localStorage.setItem('cart', JSON.stringify(cart));
                        updateCart();
                    });
                });
                
                document.querySelectorAll('.decrease-quantity').forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        const id = e.target.closest('button').dataset.id;
                        const item = cart.find(item => item.id === id);
                        
                        if (item.quantity > 1) {
                            item.quantity -= 1;
                        } else {
                            cart = cart.filter(item => item.id !== id);
                        }
                        
                        localStorage.setItem('cart', JSON.stringify(cart));
                        updateCart();
                    });
                });
                
                document.querySelectorAll('.remove-item').forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        const id = e.target.closest('button').dataset.id;
                        cart = cart.filter(item => item.id !== id);
                        localStorage.setItem('cart', JSON.stringify(cart));
                        updateCart();
                    });
                });
            }
        }
    </script>
</body>
</html>