<header id="navbar" class="sticky top-0 z-50 bg-white border-b border-transparent transition-all duration-300">
    
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="/" class="text-3xl font-bold">
            <img src="{{ asset('logo/logo.png') }}" alt="ShopMe Logo" class="h-40 w-auto">
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex items-center gap-8">

                <a href="/">Home</a>

                <a href="/shop">Shop</a>

                <!-- Categories -->
                <div class="relative group">

                    <button class="flex items-center gap-1 font-medium hover:text-[#B88A44] transition">
                        Categories
                        <x-heroicon-o-chevron-down class="w-4 h-4" />
                    </button>

                    <!-- Mega Menu -->
                    <div
                        class="absolute left-1/2 -translate-x-1/2 top-full mt-5
                        w-[1000px] bg-white rounded-3xl shadow-2xl border border-gray-100
                        p-8 opacity-0 invisible group-hover:opacity-100
                        group-hover:visible transition-all duration-300">

                        <div class="grid grid-cols-5 gap-8">

                            <!-- Fashion -->
                            <div>
                                <h3 class="font-semibold text-[#B88A44] mb-4">
                                    Fashion
                                </h3>

                                <ul class="space-y-2 text-sm">
                                    <li><a href="#" class="hover:text-[#B88A44]">Men Clothing</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Women Clothing</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Kids Wear</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Accessories</a></li>
                                </ul>
                            </div>

                            <!-- Electronics -->
                            <div>
                                <h3 class="font-semibold text-[#B88A44] mb-4">
                                    Electronics
                                </h3>

                                <ul class="space-y-2 text-sm">
                                    <li><a href="#" class="hover:text-[#B88A44]">Mobiles</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Laptops</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Tablets</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Headphones</a></li>
                                </ul>
                            </div>

                            <!-- Footwear -->
                            <div>
                                <h3 class="font-semibold text-[#B88A44] mb-4">
                                    Footwear
                                </h3>

                                <ul class="space-y-2 text-sm">
                                    <li><a href="#" class="hover:text-[#B88A44]">Sneakers</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Sports Shoes</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Formal Shoes</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Sandals</a></li>
                                </ul>
                            </div>

                            <!-- Watches -->
                            <div>
                                <h3 class="font-semibold text-[#B88A44] mb-4">
                                    Watches
                                </h3>

                                <ul class="space-y-2 text-sm">
                                    <li><a href="#" class="hover:text-[#B88A44]">Analog</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Digital</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Smart Watches</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Luxury</a></li>
                                </ul>
                            </div>

                            <!-- Bags -->
                            <div>
                                <h3 class="font-semibold text-[#B88A44] mb-4">
                                    Bags
                                </h3>

                                <ul class="space-y-2 text-sm">
                                    <li><a href="#" class="hover:text-[#B88A44]">Hand Bags</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Backpacks</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Travel Bags</a></li>
                                    <li><a href="#" class="hover:text-[#B88A44]">Laptop Bags</a></li>
                                </ul>
                            </div>

                        </div>

                        <!-- Bottom Banner -->
                        <div
                            class="mt-8 rounded-2xl bg-[#B88A44]/10 p-5 flex items-center justify-between">

                            <div>
                                <h4 class="font-semibold">
                                    Summer Collection 2026
                                </h4>

                                <p class="text-sm text-gray-500">
                                    Explore new arrivals and premium styles.
                                </p>
                            </div>

                            <a href="#"
                                class="px-5 py-3 rounded-full bg-[#B88A44] text-white text-sm font-medium">
                                Shop Now
                            </a>

                        </div>

                    </div>

                </div>

             <a href="/deals">Deals</a>

                <a href="/about">About</a>

            </nav>

            <!-- Right Side -->
            <div class="hidden lg:flex items-center gap-5">

                <button>
                    <x-heroicon-o-magnifying-glass class="w-6 h-6" />
                </button>

                <button>
                    <x-heroicon-o-heart class="w-6 h-6" />
                </button>

                <button>
                    <x-heroicon-o-shopping-bag class="w-6 h-6" />
                </button>

                @guest

                <a href="{{ route('login') }}"
                class="hover:text-[#B88A44] transition">

                    <x-heroicon-o-user class="w-6 h-6" />

                </a>

                @endguest


                @auth

                <div class="relative group">

                    <button class="flex items-center gap-2 hover:text-[#B88A44]">

                        <x-heroicon-o-user class="w-6 h-6" />

                        <span class="text-sm">
                            {{ Auth::user()->name }}
                        </span>

                    </button>

                    <div
                        class="absolute right-0 top-full mt-4
                        w-56 bg-white rounded-2xl shadow-xl border border-gray-100
                        opacity-0 invisible
                        group-hover:opacity-100 group-hover:visible
                        transition-all duration-300">

                        <a href="/dashboard"
                        class="block px-5 py-3 hover:bg-gray-50 rounded-t-2xl">

                            Dashboard

                        </a>

                        <a href="#"
                        class="block px-5 py-3 hover:bg-gray-50">

                            My Orders

                        </a>

                        <a href="#"
                        class="block px-5 py-3 hover:bg-gray-50">

                            Wishlist

                        </a>

                        <hr>

                        <form method="POST"
                            action="{{ route('logout') }}">

                            @csrf

                            <button
                                type="submit"
                                class="w-full text-left px-5 py-3 text-red-500 hover:bg-red-50 rounded-b-2xl">

                                Logout

                            </button>

                        </form>

                    </div>

                </div>

                @endauth

            </div>

        </div>

    </div>

</header>