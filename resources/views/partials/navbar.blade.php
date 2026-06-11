<header id="navbar" class="sticky top-0 z-50 backdrop-blur-2xl bg-white/50 supports-[backdrop-filter]:bg-white/45 border-b border-white/20 shadow-lg transition-all duration-300">
    <div class="max-w-7xl mx-auto px-5 lg:px-8">
        
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="/" class="text-3xl font-bold">
            <img src="{{ asset('logo/logo.png') }}" alt="ShopMe Logo" class="h-40 w-auto">
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex items-center gap-8">

            <a href="/"
                class="relative text-[15px] font-medium text-gray-800 hover:text-[#B88A44] transition-all duration-300 after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-[#B88A44] after:transition-all after:duration-300 hover:after:w-full">
                Home
            </a>

            <a href="/shop" class="relative text-[15px] font-medium text-gray-800 hover:text-[#B88A44] transition-all duration-300 after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-[#B88A44] after:transition-all after:duration-300 hover:after:w-full">
                Shop
            </a>

                <!-- Categories -->
                <div class="relative group">

                    <button class="flex items-center gap-1 text-[15px] font-medium text-gray-800 hover:text-[#B88A44] transition-all duration-300">
                        Categories
                        <x-heroicon-o-chevron-down class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" />
                    </button>

                    <!-- Mega Menu -->
                    <div
                        class="absolute left-1/2 -translate-x-1/2 top-full mt-5
                        w-[1000px]
                        rounded-[28px]
                        bg-white
                        backdrop-blur-2xl
                        border border-white/30
                        shadow-[0_20px_60px_rgba(0,0,0,0.12)]
                        p-8
                        opacity-0 invisible translate-y-4
                        group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                        transition-all duration-300">

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

             <a href="/deals" class="relative text-[15px] font-medium text-gray-800 hover:text-[#B88A44] transition-all duration-300 after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-[#B88A44] after:transition-all after:duration-300 hover:after:w-full">
                    Deals
                </a>

                <a href="/about" class="relative text-[15px] font-medium text-gray-800 hover:text-[#B88A44] transition-all duration-300 after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-[#B88A44] after:transition-all after:duration-300 hover:after:w-full">
                    About
                </a>

            </nav>

            <!-- Right Side -->
            <div class="hidden lg:flex items-center gap-4">

            <button
                class="w-9 h-9 rounded-full bg-white/30 backdrop-blur-md border border-white/20
                flex items-center justify-center
                hover:bg-[#B88A44] hover:text-white hover:border-[#B88A44]
                transition-all duration-300 hover:-translate-y-0.5">

                <x-heroicon-o-magnifying-glass class="w-5 h-5" />

            </button>
            <button
                class="w-9 h-9 rounded-full bg-white/30 backdrop-blur-md border border-white/20
                flex items-center justify-center
                hover:bg-[#B88A44] hover:text-white hover:border-[#B88A44]
                transition-all duration-300 hover:-translate-y-0.5">

                <x-heroicon-o-heart class="w-5 h-5" />

            </button>

            <button
                class="w-9 h-9 rounded-full bg-white/30 backdrop-blur-md border border-white/20
                flex items-center justify-center
                hover:bg-[#B88A44] hover:text-white hover:border-[#B88A44]
                transition-all duration-300 hover:-translate-y-0.5">

                <x-heroicon-o-shopping-bag class="w-5 h-5" />

            </button>

                @guest

                <a href="{{ route('login') }}"
                class="w-9 h-9 rounded-full bg-white/30 backdrop-blur-md border border-white/20
                flex items-center justify-center
                hover:bg-[#B88A44] hover:text-white hover:border-[#B88A44]
                transition-all duration-300 hover:-translate-y-0.5">

                    <x-heroicon-o-user class="w-5 h-5" />

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
            <!-- Mobile Menu Toggle -->
                <button
                    id="mobile-menu-btn"
                    class="lg:hidden w-11 h-11 rounded-full bg-white/40 backdrop-blur-md border border-white/20 flex items-center justify-center">

                    <x-heroicon-o-bars-3 class="w-7 h-7"/>

                </button>
            </div>

        </div>

    </div>

</header>
<!-- Mobile Menu Overlay -->
<div
    id="mobile-menu-overlay"
    class="fixed inset-0 z-[90] bg-black/40 backdrop-blur-sm opacity-0 invisible transition-all duration-300">
</div>

<!-- Mobile Menu -->
<div
    id="mobile-menu"
    class="fixed top-0 right-0 z-[100] h-full w-[90%] max-w-[380px]
    bg-white/90 backdrop-blur-2xl
    border-l border-white/20
    shadow-2xl
    translate-x-full
    transition-all duration-300
    overflow-y-auto">

    <!-- Header -->
    <div class="flex items-center justify-between p-6 border-b border-gray-200/60">

        <div>
            @auth
                <h3 class="font-semibold text-lg">
                    {{ Auth::user()->name }}
                </h3>
                <p class="text-sm text-gray-500">
                    Welcome back 👋
                </p>
            @else
                <h3 class="font-semibold text-lg">
                    Welcome
                </h3>
                <p class="text-sm text-gray-500">
                    Sign in to continue
                </p>
            @endauth
        </div>

        <button id="close-mobile-menu"
            class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center">
            <x-heroicon-o-x-mark class="w-6 h-6"/>
        </button>

    </div>

    <!-- Search -->
    <div class="p-5">

        <div class="flex items-center gap-3 bg-gray-100 rounded-2xl px-4 py-3">
            <x-heroicon-o-magnifying-glass class="w-5 h-5 text-gray-400"/>
            <input
                type="text"
                placeholder="Search products..."
                class="bg-transparent outline-none w-full text-sm">
        </div>

    </div>

    <!-- Navigation -->
    <nav class="px-5 space-y-2">

        <a href="/"
            class="flex items-center gap-4 px-4 py-4 rounded-2xl hover:bg-[#B88A44]/10 transition">
            <x-heroicon-o-home class="w-6 h-6"/>
            <span class="font-medium">Home</span>
        </a>

        <a href="/shop"
            class="flex items-center gap-4 px-4 py-4 rounded-2xl hover:bg-[#B88A44]/10 transition">
            <x-heroicon-o-shopping-bag class="w-6 h-6"/>
            <span class="font-medium">Shop</span>
        </a>
        <button
            id="mobile-category-btn"
            type="button"
            class="w-full flex items-center justify-between px-4 py-4 rounded-2xl hover:bg-[#B88A44]/10 transition">

            <div class="flex items-center gap-4">
                <x-heroicon-o-squares-2x2 class="w-6 h-6"/>
                <span class="font-medium">Categories</span>
            </div>

            <x-heroicon-o-chevron-right
                id="category-arrow"
                class="w-5 h-5 transition-transform duration-300"/>

        </button>
        <!-- Category Dropdown -->
            <div
                id="mobile-category-menu"
                class="hidden pl-14 pr-4 pb-2">

                <div class="space-y-3 border-l border-gray-200 pl-4">

                    <a href="#" class="block text-gray-600 hover:text-[#B88A44]">
                        Men's Fashion
                    </a>

                    <a href="#" class="block text-gray-600 hover:text-[#B88A44]">
                        Women's Fashion
                    </a>

                    <a href="#" class="block text-gray-600 hover:text-[#B88A44]">
                        Electronics
                    </a>

                    <a href="#" class="block text-gray-600 hover:text-[#B88A44]">
                        Footwear
                    </a>

                    <a href="#" class="block text-gray-600 hover:text-[#B88A44]">
                        Watches
                    </a>

                </div>

            </div>

        <a href="/deals"
            class="flex items-center gap-4 px-4 py-4 rounded-2xl hover:bg-[#B88A44]/10 transition">
            <x-heroicon-o-fire class="w-6 h-6"/>
            <span class="font-medium">Deals</span>
        </a>

        <a href="/about"
            class="flex items-center gap-4 px-4 py-4 rounded-2xl hover:bg-[#B88A44]/10 transition">
            <x-heroicon-o-information-circle class="w-6 h-6"/>
            <span class="font-medium">About</span>
        </a>

    </nav>

    <!-- Divider -->
    <div class="my-5 border-t border-gray-200"></div>

    <!-- Quick Actions -->
    <div class="px-5 space-y-2">

        <a href="#"
            class="flex items-center gap-4 px-4 py-4 rounded-2xl hover:bg-gray-100 transition">
            <x-heroicon-o-heart class="w-6 h-6"/>
            Wishlist
        </a>

        <a href="#"
            class="flex items-center gap-4 px-4 py-4 rounded-2xl hover:bg-gray-100 transition">
            <x-heroicon-o-cube class="w-6 h-6"/>
            My Orders
        </a>

    </div>

    <!-- Bottom Button -->
    <div class="p-5 mt-6">

        @guest
            <a href="{{ route('login') }}"
                class="w-full flex items-center justify-center rounded-2xl bg-black text-white py-4 font-medium">
                Login
            </a>
        @endguest

        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    class="w-full rounded-2xl bg-red-500 text-white py-4 font-medium">
                    Logout
                </button>

            </form>
        @endauth

    </div>

</div>

<script>
    const menuBtn = document.getElementById("mobile-menu-btn");
    const closeBtn = document.getElementById("close-mobile-menu");
    const menu = document.getElementById("mobile-menu");
    const overlay = document.getElementById("mobile-menu-overlay");

    function openMenu() {
        menu.classList.remove("translate-x-full");
        overlay.classList.remove("opacity-0", "invisible");
        document.body.classList.add("overflow-hidden");
    }

    function closeMenu() {
        menu.classList.add("translate-x-full");
        overlay.classList.add("opacity-0", "invisible");
        document.body.classList.remove("overflow-hidden");
    }

    menuBtn.addEventListener("click", openMenu);
    closeBtn.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);

    const categoryBtn = document.getElementById("mobile-category-btn");
    const categoryMenu = document.getElementById("mobile-category-menu");
    const categoryArrow = document.getElementById("category-arrow");

    categoryBtn.addEventListener("click", function () {
        categoryMenu.classList.toggle("hidden");
        categoryArrow.classList.toggle("rotate-180");
    });
</script>

<script>
    window.addEventListener("scroll", function () {
        const navbar = document.getElementById("navbar");

        if (window.scrollY > 20) {
            navbar.classList.add(
                "bg-white/70",
                "backdrop-blur-2xl",
                "shadow-xl"
            );
        } else {
            navbar.classList.remove(
                "bg-white/70",
                "backdrop-blur-2xl",
                "shadow-xl"
            );
        }
    });
</script>
