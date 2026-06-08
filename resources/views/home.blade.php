@extends('layouts.app')

@section('title', 'Welcome to ShopMe')

@section('content')

<section class="min-h-[calc(100vh-90px)] flex items-center">

    <div class="max-w-[1280px] mx-auto w-full px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-10 xl:gap-14 items-center">

            <!-- Left Content -->
            <div>

                <!-- Badge -->
                <span
                    class="inline-flex items-center px-4 py-2 rounded-full border border-[#B88A44]/30 text-[#B88A44] text-xs tracking-[0.2em] uppercase">
                    New Season 2026
                </span>

                <!-- Heading -->
                <h1
                    class="mt-8 text-5xl md:text-6xl xl:text-6xl font-bold leading-[0.95] tracking-tight">

                    Dress for the

                    <span class="text-[#B88A44] italic font-medium">
                        life
                    </span>

                    <br>

                    you want.

                </h1>

                <!-- Description -->
                <p
                    class="mt-8 max-w-xl text-gray-500 text-lg leading-8 text-[14px]">

                    Curated collections from the world's most loved brands.
                    Fashion, electronics, footwear and more —
                    all in one premium destination.

                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4 mt-10">

                    <a href="#"
                        class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-black text-white font-medium hover:scale-105 transition duration-300">

                        Shop Now

                        <span>→</span>

                    </a>

                    <a href="#"
                        class="inline-flex items-center px-8 py-4 rounded-full border border-gray-300 font-medium hover:bg-gray-50 transition">

                        View Lookbook

                    </a>

                </div>

                <!-- Stats -->
                <div
                    class="grid grid-cols-3 gap-6 mt-14 pt-8 border-t border-gray-200">

                    <div>

                        <div class="text-[#C49A5A] text-lg">
                            ★★★★★
                        </div>

                        <p class="text-sm text-gray-500 mt-1">
                            4.9 from 12,000+ reviews
                        </p>

                    </div>

                    <div>

                        <h3 class="text-3xl font-semibold">
                            250K+
                        </h3>

                        <p class="text-sm text-gray-500">
                            Happy customers
                        </p>

                    </div>

                    <div>

                        <h3 class="text-3xl font-semibold">
                            5,000+
                        </h3>

                        <p class="text-sm text-gray-500">
                            Premium products
                        </p>

                    </div>

                </div>

            </div>

            <!-- Right Side -->
            <div class="relative max-w-[560px] ml-auto">

                <!-- Floating Product Card -->
                <div
                    class="absolute top-10 -left-10 z-20 bg-white rounded-3xl shadow-xl px-5 py-4 flex items-center gap-4">

                    <img
                        src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=200"
                        alt="Sneaker"
                        class="w-12 h-12 rounded-full object-cover">

                    <div>

                        <p class="text-xs text-gray-400">
                            Trending Now
                        </p>

                        <h4 class="font-medium">
                            Air Runners
                        </h4>

                        <p class="text-[#B88A44] font-semibold">
                            $149.00
                        </p>

                    </div>

                </div>

                <!-- Hero Image -->
                <img
                    src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?w=1200"
                    alt="Fashion Model"
                    class="w-full h-[500px] xl:h-[520px] object-cover rounded-[32px] shadow-xl">

            </div>

        </div>

    </div>

</section>

<section class="py-20">

    <div class="max-w-[1280px] mx-auto px-6 lg:px-8">

        <!-- Heading -->
        <div class="flex items-center justify-between mb-10">

            <div>

                <span
                    class="text-xs uppercase tracking-[0.25em] text-[#B88A44]">
                    Browse
                </span>

                <h2
                    class="mt-3 text-4xl lg:text-5xl font-bold">
                    Shop by Category
                </h2>

            </div>

            <a
                href="#"
                class="hidden md:flex items-center gap-2 text-sm text-gray-500 hover:text-black transition">

                All Categories →

            </a>

        </div>

        <!-- Categories -->
        <div
            class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">

            <!-- Fashion -->
            <a
                href="#"
                class="group relative overflow-hidden rounded-3xl h-[280px]">

                <img
                    src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=800"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent">
                </div>

                <div
                    class="absolute bottom-5 left-5 text-white">

                    <h3 class="font-semibold text-lg">
                        Fashion
                    </h3>

                    <p class="text-xs opacity-80">
                        2,400+ Items
                    </p>

                </div>

            </a>

            <!-- Electronics -->
            <a
                href="#"
                class="group relative overflow-hidden rounded-3xl h-[280px]">

                <img
                    src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent">
                </div>

                <div
                    class="absolute bottom-5 left-5 text-white">

                    <h3 class="font-semibold text-lg">
                        Electronics
                    </h3>

                    <p class="text-xs opacity-80">
                        1,800+ Items
                    </p>

                </div>

            </a>

            <!-- Footwear -->
            <a
                href="#"
                class="group relative overflow-hidden rounded-3xl h-[280px]">

                <img
                    src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent">
                </div>

                <div
                    class="absolute bottom-5 left-5 text-white">

                    <h3 class="font-semibold text-lg">
                        Footwear
                    </h3>

                    <p class="text-xs opacity-80">
                        3,100+ Items
                    </p>

                </div>

            </a>

            <!-- Watches -->
            <a
                href="#"
                class="group relative overflow-hidden rounded-3xl h-[280px]">

                <img
                    src="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?w=800"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent">
                </div>

                <div
                    class="absolute bottom-5 left-5 text-white">

                    <h3 class="font-semibold text-lg">
                        Watches
                    </h3>

                    <p class="text-xs opacity-80">
                        900+ Items
                    </p>

                </div>

            </a>

            <!-- Bags -->
            <a
                href="#"
                class="group relative overflow-hidden rounded-3xl h-[280px]">

                <img
                    src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=800"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent">
                </div>

                <div
                    class="absolute bottom-5 left-5 text-white">

                    <h3 class="font-semibold text-lg">
                        Bags
                    </h3>

                    <p class="text-xs opacity-80">
                        1,500+ Items
                    </p>

                </div>

            </a>

        </div>

    </div>

</section>

<section class="py-24 bg-[#F8F8F8]">

    <div class="max-w-[1280px] mx-auto px-6 lg:px-8">

        <!-- Heading -->
        <div class="flex items-center justify-between mb-10">

            <div>

                <span
                    class="text-xs uppercase tracking-[0.25em] text-[#B88A44]">
                    Hand-picked For You
                </span>

                <h2
                    class="mt-3 text-4xl lg:text-5xl font-bold">
                    Featured Products
                </h2>

            </div>

            <a
                href="#"
                class="hidden md:flex items-center gap-2 text-sm text-gray-500 hover:text-black transition">

                View All →

            </a>

        </div>

        <!-- Filter Tabs -->
        <div class="flex flex-wrap gap-3 mb-10">
        <button class="filter-btn px-5 py-2 rounded-full bg-black text-white text-sm" data-category="all">
            All
        </button>

        <button class="filter-btn px-5 py-2 rounded-full border border-gray-200 text-sm hover:bg-white" data-category="watches">
            Watches
        </button>

        <button class="filter-btn px-5 py-2 rounded-full border border-gray-200 text-sm hover:bg-white" data-category="footwear">
            Footwear
        </button>

        <button class="filter-btn px-5 py-2 rounded-full border border-gray-200 text-sm hover:bg-white" data-category="bags">
            Bags
        </button>

        <button class="filter-btn px-5 py-2 rounded-full border border-gray-200 text-sm hover:bg-white" data-category="electronics">
            Electronics
        </button>

        <button class="filter-btn px-5 py-2 rounded-full border border-gray-200 text-sm hover:bg-white" data-category="fashion">
            Fashion
        </button>

        </div>

        <!-- Products Grid -->
        <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Product 1 -->
            <div class="product-card show group bg-white rounded-3xl overflow-hidden hover:shadow-xl transition duration-300"
            data-category="watches">

            <div class="relative overflow-hidden">

            <span
                class="absolute top-4 left-4 z-10 px-3 py-1 text-xs rounded-full bg-white">
                Best Seller
            </span>

            <img
                src="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?w=800"
                class="w-full h-[320px] object-cover group-hover:scale-105 transition duration-500">

            <!-- Quick Add Button -->
            <div
                class="absolute bottom-4 left-4 right-4 translate-y-20 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">

                <button
                class="w-full bg-black text-white py-3 rounded-2xl font-medium flex items-center justify-center gap-2 hover:bg-[#B88A44] transition">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 6h13M9 21a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z"/>

                </svg>

                Quick Add

                </button>

            </div>

            </div>

                <div class="p-5">

                    <p class="text-xs text-gray-400">
                        TimeCraft
                    </p>

                    <h3 class="mt-1 font-semibold text-lg">
                        Classic Chronograph
                    </h3>

                    <div class="mt-2 flex items-center justify-between">

                        <span class="font-bold">
                            $249
                        </span>

                        <span class="text-sm text-[#B88A44]">
                            ★ 4.8
                        </span>

                    </div>

                </div>

            </div>

            <!-- Product 2 -->
            <div class="product-card show group bg-white rounded-3xl overflow-hidden hover:shadow-xl transition duration-300"
            data-category="footwear">

                <div class="relative overflow-hidden">

                    <span
                        class="absolute top-4 left-4 z-10 px-3 py-1 text-xs rounded-full bg-[#B88A44] text-white">
                        Trending
                    </span>

                    <img
                        src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800"
                        class="w-full h-[320px] object-cover group-hover:scale-105 transition duration-500">

                        <!-- Quick Add Button -->
            <div
                class="absolute bottom-4 left-4 right-4 translate-y-20 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">

                <button
                class="w-full bg-black text-white py-3 rounded-2xl font-medium flex items-center justify-center gap-2 hover:bg-[#B88A44] transition">

                    <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                        <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 6h13M9 21a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z"/>

                    </svg>

                        Quick Add

                </button>

                </div>

                </div>

                <div class="p-5">

                    <p class="text-xs text-gray-400">
                        AeroStep
                    </p>

                    <h3 class="mt-1 font-semibold text-lg">
                        Air Runner Pro
                    </h3>

                    <div class="mt-2 flex items-center justify-between">

                        <span class="font-bold">
                            $179
                        </span>

                        <span class="text-sm text-[#B88A44]">
                            ★ 4.9
                        </span>

                    </div>

                </div>

            </div>

            <!-- Product 3 -->
            <div class="product-card show group bg-white rounded-3xl overflow-hidden hover:shadow-xl transition duration-300"
                data-category="bags">

                <div class="relative overflow-hidden">

                    <span
                        class="absolute top-4 left-4 z-10 px-3 py-1 text-xs rounded-full bg-white">
                        New
                    </span>

                    <img
                        src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=800"
                        class="w-full h-[320px] object-cover group-hover:scale-105 transition duration-500">
                        <!-- Quick Add Button -->
                        <div
                            class="absolute bottom-4 left-4 right-4 translate-y-20 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">

                            <button
                            class="w-full bg-black text-white py-3 rounded-2xl font-medium flex items-center justify-center gap-2 hover:bg-[#B88A44] transition">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 6h13M9 21a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z"/>

                            </svg>

                            Quick Add

                            </button>

                        </div>

                </div>

                <div class="p-5">

                    <p class="text-xs text-gray-400">
                        Maison Grey
                    </p>

                    <h3 class="mt-1 font-semibold text-lg">
                        Structured Tote
                    </h3>

                    <div class="mt-2 flex items-center justify-between">

                        <span class="font-bold">
                            $139
                        </span>

                        <span class="text-sm text-[#B88A44]">
                            ★ 4.7
                        </span>

                    </div>

                </div>

            </div>

            <!-- Product 4 -->
            <div class="product-card show group bg-white rounded-3xl overflow-hidden hover:shadow-xl transition duration-300"
            data-category="electronics">

                <div class="relative overflow-hidden">

                    <span
                        class="absolute top-4 left-4 z-10 px-3 py-1 text-xs rounded-full bg-[#B88A44] text-white">
                        Sale
                    </span>

                    <img
                        src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800"
                        class="w-full h-[320px] object-cover group-hover:scale-105 transition duration-500">
                        <!-- Quick Add Button -->
                            <div
                                class="absolute bottom-4 left-4 right-4 translate-y-20 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">

                                <button
                                class="w-full bg-black text-white py-3 rounded-2xl font-medium flex items-center justify-center gap-2 hover:bg-[#B88A44] transition">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">

                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 6h13M9 21a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z"/>

                                </svg>

                                Quick Add

                                </button>

                            </div>

                </div>

                <div class="p-5">

                    <p class="text-xs text-gray-400">
                        TechLux
                    </p>

                    <h3 class="mt-1 font-semibold text-lg">
                        ProMax Smartphone
                    </h3>

                    <div class="mt-2 flex items-center justify-between">

                        <span class="font-bold">
                            $899
                        </span>

                        <span class="text-sm text-[#B88A44]">
                            ★ 4.8
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-24 bg-[#F8F8F8]">

    <div class="max-w-[1280px] mx-auto px-6 lg:px-8">

        <!-- Header -->
        <div class="flex items-center justify-between mb-10">

            <div>

                <span
                    class="text-xs uppercase tracking-[0.25em] text-[#B88A44]">
                    Just Landed
                </span>

                <h2
                    class="mt-3 text-4xl lg:text-5xl font-bold">
                    New Arrivals
                </h2>

            </div>

            <a
                href="#"
                class="hidden md:flex items-center gap-2 text-sm text-gray-500 hover:text-black transition">

                See All New →

            </a>

        </div>

        <!-- Arrival Cards -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Card 1 -->
            <a href="#"
                class="group relative overflow-hidden rounded-3xl">

                <span
                        class="absolute top-4 left-4 z-20 px-3 py-1 text-xs rounded-full bg-[#B88A44] text-white">
                        New
                    </span>

                    <!-- Wishlist -->
                    <button
                        class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-white flex items-center justify-center
                        opacity-0 translate-y-3
                        group-hover:opacity-100 group-hover:translate-y-0
                        transition duration-300">

                        <x-heroicon-o-heart class="w-5 h-5"/>

                    </button>
                <img
                    src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=1000"
                    alt=""
                    class="w-full h-[280px] md:h-[350px] lg:h-[420px] object-cover group-hover:scale-110 transition duration-700">
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t
                        from-black/60 via-black/10 to-transparent
                        opacity-0 group-hover:opacity-100
                        transition duration-500">

                    </div>

                    <!-- Product Info -->
                    <div
                        class="absolute left-0 right-0 bottom-0 p-6
                        translate-y-10 opacity-0
                        group-hover:translate-y-0
                        group-hover:opacity-100
                        transition duration-500 bg-white/50">

                        <p class="text-black/60 text-sm">
                        Aura Fashion
                        </p>

                        <h3 class="text-black font-semibold text-lg">
                            Luxury Tshirt
                        </h3>

                        <p class="text-[#D4A45A] font-semibold mt-1">
                            $349
                        </p>

                    </div>

            </a>

            <!-- Card 2 -->
            <a href="#"
                class="group relative overflow-hidden rounded-3xl">

                    <!-- Badge -->
                    <span
                        class="absolute top-4 left-4 z-20 px-3 py-1 text-xs rounded-full bg-[#B88A44] text-white">
                        New
                    </span>

                    <!-- Wishlist -->
                    <button
                        class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-white flex items-center justify-center
                        opacity-0 translate-y-3
                        group-hover:opacity-100 group-hover:translate-y-0
                        transition duration-300">

                        <x-heroicon-o-heart class="w-5 h-5"/>

                    </button>

                    <!-- Image -->
                    <img
                        src="https://images.unsplash.com/photo-1547996160-81dfa63595aa?w=1000"
                        alt=""
                        class="w-full h-[280px] md:h-[350px] lg:h-[420px]
                        object-cover
                        group-hover:scale-110
                        transition duration-700">

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t
                        from-black/60 via-black/10 to-transparent
                        opacity-0 group-hover:opacity-100
                        transition duration-500">

                    </div>

                    <!-- Product Info -->
                    <div
                        class="absolute left-0 right-0 bottom-0 p-6
                        translate-y-10 opacity-0
                        group-hover:translate-y-0
                        group-hover:opacity-100
                        transition duration-500 bg-white/50">

                        <p class="text-black/60 text-sm">
                            Timecraft
                        </p>

                        <h3 class="text-black font-semibold text-lg">
                            Obsidian Watch
                        </h3>

                        <p class="text-[#D4A45A] font-semibold mt-1">
                            $349
                        </p>

                    </div>

                </a>

            <!-- Card 3 -->
            <a href="#"
                class="group relative overflow-hidden rounded-3xl">
                <!-- Badge -->
                    <span
                        class="absolute top-4 left-4 z-20 px-3 py-1 text-xs rounded-full bg-[#B88A44] text-white">
                        New
                    </span>

                    <!-- Wishlist -->
                    <button
                        class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-white flex items-center justify-center
                        opacity-0 translate-y-3
                        group-hover:opacity-100 group-hover:translate-y-0
                        transition duration-300">

                        <x-heroicon-o-heart class="w-5 h-5"/>

                    </button>

                <img
                    src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=1000"
                    alt=""
                    class="w-full h-[280px] md:h-[350px] lg:h-[420px]
                        object-cover
                        group-hover:scale-110
                        transition duration-700">
                        <!-- Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t
                        from-black/60 via-black/10 to-transparent
                        opacity-0 group-hover:opacity-100
                        transition duration-500">

                    </div>

                    <!-- Product Info -->
                    <div
                        class="absolute left-0 right-0 bottom-0 p-6
                        translate-y-10 opacity-0
                        group-hover:translate-y-0
                        group-hover:opacity-100
                        transition duration-500 bg-white/50">

                        <p class="text-black/60 text-sm">
                        StrideX
                        </p>

                        <h3 class="text-black font-semibold text-lg">
                            Traditional Shoe
                        </h3>

                        <p class="text-[#D4A45A] font-semibold mt-1">
                            $249
                        </p>

                    </div>
        

            </a>

            <!-- Card 4 -->
            <a href="#"
                class="group relative overflow-hidden rounded-3xl">

                <!-- Badge -->
                    <span
                        class="absolute top-4 left-4 z-20 px-3 py-1 text-xs rounded-full bg-[#B88A44] text-white">
                        New
                    </span>

                    <!-- Wishlist -->
                    <button
                        class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-white flex items-center justify-center
                        opacity-0 translate-y-3
                        group-hover:opacity-100 group-hover:translate-y-0
                        transition duration-300">

                        <x-heroicon-o-heart class="w-5 h-5"/>

                    </button>

                <img
                    src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=1000"
                    alt=""
                    class="w-full h-[280px] md:h-[350px] lg:h-[420px]
                        object-cover
                        group-hover:scale-110
                        transition duration-700">

                        <!-- Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t
                        from-black/60 via-black/10 to-transparent
                        opacity-0 group-hover:opacity-100
                        transition duration-500">

                    </div>

                    <!-- Product Info -->
                    <div
                        class="absolute left-0 right-0 bottom-0 p-6
                        translate-y-10 opacity-0
                        group-hover:translate-y-0
                        group-hover:opacity-100
                        transition duration-500 bg-white/50">

                        <p class="text-black/60 text-sm">
                        Elite Bags
                        </p>

                        <h3 class="text-black font-semibold text-lg">
                            Imperial Bags
                        </h3>

                        <p class="text-[#D4A45A] font-semibold mt-1">
                            $349
                        </p>

                    </div>

            </a>

        </div>

    </div>

</section>

<section class="bg-[#0A0A0A] py-24 w-full">

<div class="max-w-[1280px] mx-auto px-6 lg:px-8">

        <!-- Heading -->
        <div class="text-center max-w-2xl mx-auto">

            <span
                class="text-xs uppercase tracking-[0.25em] text-[#B88A44]">
                Our Promise
            </span>

            <h2
                class="mt-4 text-4xl lg:text-5xl text-white font-bold">
                Why Choose ShopMe?
            </h2>

            <p
                class="mt-4 text-gray-400 leading-7">
                We've built ShopMe around one idea:
                you deserve the best products,
                the best experience, and the best support.
            </p>

        </div>

        <!-- Feature Cards -->
        <div
            class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16">

            <!-- Card 1 -->
            <div
                class="bg-[#131313] rounded-3xl p-7 border border-white/5 hover:border-[#B88A44]/30 transition">

                <div
                    class="w-12 h-12 rounded-full bg-[#B88A44]/10 flex items-center justify-center">

                    <x-heroicon-o-shield-check
                        class="w-6 h-6 text-[#B88A44]" />

                </div>

                <h3
                    class="mt-5 text-white font-semibold">
                    Secure Shopping
                </h3>

                <p
                    class="mt-3 text-sm text-gray-400 leading-6">
                    Every transaction is protected with
                    bank-grade encryption and secure checkout.
                </p>

            </div>

            <!-- Card 2 -->
            <div
                class="bg-[#131313] rounded-3xl p-7 border border-white/5 hover:border-[#B88A44]/30 transition">

                <div
                    class="w-12 h-12 rounded-full bg-[#B88A44]/10 flex items-center justify-center">

                    <x-heroicon-o-truck
                        class="w-6 h-6 text-[#B88A44]" />

                </div>

                <h3
                    class="mt-5 text-white font-semibold">
                    Free Delivery
                </h3>

                <p
                    class="mt-3 text-sm text-gray-400 leading-6">
                    Complimentary shipping on all
                    qualifying orders with fast delivery.
                </p>

            </div>

            <!-- Card 3 -->
            <div
                class="bg-[#131313] rounded-3xl p-7 border border-white/5 hover:border-[#B88A44]/30 transition">

                <div
                    class="w-12 h-12 rounded-full bg-[#B88A44]/10 flex items-center justify-center">

                    <x-heroicon-o-arrow-uturn-left
                        class="w-6 h-6 text-[#B88A44]" />

                </div>

                <h3
                    class="mt-5 text-white font-semibold">
                    Easy Returns
                </h3>

                <p
                    class="mt-3 text-sm text-gray-400 leading-6">
                    Hassle-free returns and quick
                    refunds for complete peace of mind.
                </p>

            </div>

            <!-- Card 4 -->
            <div
                class="bg-[#131313] rounded-3xl p-7 border border-white/5 hover:border-[#B88A44]/30 transition">

                <div
                    class="w-12 h-12 rounded-full bg-[#B88A44]/10 flex items-center justify-center">

                    <x-heroicon-o-credit-card
                        class="w-6 h-6 text-[#B88A44]" />

                </div>

                <h3
                    class="mt-5 text-white font-semibold">
                    Flexible Payment
                </h3>

                <p
                    class="mt-3 text-sm text-gray-400 leading-6">
                    Pay with cards, wallets,
                    UPI and installment options.
                </p>

            </div>

            <!-- Card 5 -->
            <div
                class="bg-[#131313] rounded-3xl p-7 border border-white/5 hover:border-[#B88A44]/30 transition">

                <div
                    class="w-12 h-12 rounded-full bg-[#B88A44]/10 flex items-center justify-center">

                    <x-heroicon-o-chat-bubble-left-right
                    class="w-6 h-6 text-[#B88A44]" />

                </div>

                <h3
                    class="mt-5 text-white font-semibold">
                    24/7 Support
                </h3>

                <p
                    class="mt-3 text-sm text-gray-400 leading-6">
                    Our dedicated support team
                    is always available to help.
                </p>

            </div>

            <!-- Card 6 -->
            <div
                class="bg-[#131313] rounded-3xl p-7 border border-white/5 hover:border-[#B88A44]/30 transition">

                <div
                    class="w-12 h-12 rounded-full bg-[#B88A44]/10 flex items-center justify-center">

                    <x-heroicon-o-check-badge
                        class="w-6 h-6 text-[#B88A44]" />

                </div>

                <h3
                    class="mt-5 text-white font-semibold">
                    Authentic Brands
                </h3>

                <p
                    class="mt-3 text-sm text-gray-400 leading-6">
                    Every product comes directly
                    from verified brand partners.
                </p>

            </div>

        </div>

        <!-- Stats -->
        <div
            class="grid grid-cols-2 lg:grid-cols-4 gap-8 mt-16 pt-10 border-t border-white/10 text-center">

            <div>
            <h3
                class="counter text-4xl font-bold text-[#B88A44]"
                data-target="250">
                0
            </h3>

            <p class="mt-2 text-sm text-gray-400">
                Happy Customers
            </p>
            </div>

            <div>
                <h3 class="counter text-4xl font-bold text-[#B88A44]"
                    data-target="5000">
                    0
                </h3>
                <p class="mt-2 text-sm text-gray-400">
                    Products Listed
                </p>
            </div>

            <div>
                <h3 class="counter text-4xl font-bold text-[#B88A44]"
                    data-target="98">
                    0
                </h3>
                <p class="mt-2 text-sm text-gray-400">
                    Satisfaction Rate
                </p>
            </div>

            <div>
                <h3 class="counter text-4xl font-bold text-[#B88A44]"
                    data-target="150">
                    0
                </h3>
                <p class="mt-2 text-sm text-gray-400">
                    Premium Brands
                </p>
            </div>

        </div>

    </div>

</section>

<section class="py-24 bg-[var(--section-bg)]">

    <div class="max-w-[1280px] mx-auto px-6 lg:px-8">

        <!-- Heading -->
        <div class="flex items-end justify-between mb-14">

            <div>

                <span
                    class="text-xs uppercase tracking-[0.25em] text-[#B88A44]">
                    Testimonials
                </span>

                <h2
                    class="mt-3 text-4xl lg:text-5xl font-bold">
                    What Our Customers Say
                </h2>

            </div>

            <div class="hidden md:flex gap-3">

                <button
                    class="testimonial-prev w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center">

                    <x-heroicon-o-chevron-left class="w-5 h-5"/>

                </button>

                <button
                    class="testimonial-next w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center">

                    <x-heroicon-o-chevron-right class="w-5 h-5"/>

                </button>

            </div>

        </div>

        <!-- Swiper -->
        <div class="swiper testimonialSwiper">

            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">

                    <div class="bg-white rounded-3xl p-8 shadow-sm">

                        <div class="text-[#B88A44] text-3xl">❝</div>

                        <div class="text-[#B88A44] mt-3">
                            ★★★★★
                        </div>

                        <p class="mt-5 text-gray-600 leading-8">
                            ShopMe completely changed how I shop online.
                            Product quality exceeded expectations.
                        </p>

                        <div class="mt-8 pt-6 border-t">

                            <div class="flex items-center gap-4">

                                <img
                                    src="https://i.pravatar.cc/100?img=1"
                                    class="w-12 h-12 rounded-full">

                                <div>

                                    <h4 class="font-semibold">
                                        Sophia Laurent
                                    </h4>

                                    <p class="text-sm text-gray-500">
                                        Paris, France
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">

                    <div class="bg-white rounded-3xl p-8 shadow-sm">

                        <div class="text-[#B88A44] text-3xl">❝</div>

                        <div class="text-[#B88A44] mt-3">
                            ★★★★★
                        </div>

                        <p class="mt-5 text-gray-600 leading-8">
                            Premium products and fast shipping.
                            Highly recommended.
                        </p>

                        <div class="mt-8 pt-6 border-t">

                            <div class="flex items-center gap-4">

                                <img
                                    src="https://i.pravatar.cc/100?img=12"
                                    class="w-12 h-12 rounded-full">

                                <div>

                                    <h4 class="font-semibold">
                                        Marcus Reid
                                    </h4>

                                    <p class="text-sm text-gray-500">
                                        London, UK
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">

                    <div class="bg-white rounded-3xl p-8 shadow-sm">

                        <div class="text-[#B88A44] text-3xl">❝</div>

                        <div class="text-[#B88A44] mt-3">
                            ★★★★★
                        </div>

                        <p class="mt-5 text-gray-600 leading-8">
                            Customer support was amazing and returns
                            were effortless.
                        </p>

                        <div class="mt-8 pt-6 border-t">

                            <div class="flex items-center gap-4">

                                <img
                                    src="https://i.pravatar.cc/100?img=5"
                                    class="w-12 h-12 rounded-full">

                                <div>

                                    <h4 class="font-semibold">
                                        Aisha Tan
                                    </h4>

                                    <p class="text-sm text-gray-500">
                                        Singapore
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- Slide 1 -->
                <div class="swiper-slide">

                    <div class="bg-white rounded-3xl p-8 shadow-sm">

                        <div class="text-[#B88A44] text-3xl">❝</div>

                        <div class="text-[#B88A44] mt-3">
                            ★★★★★
                        </div>

                        <p class="mt-5 text-gray-600 leading-8">
                            ShopMe completely changed how I shop online.
                            Product quality exceeded expectations.
                        </p>

                        <div class="mt-8 pt-6 border-t">

                            <div class="flex items-center gap-4">

                                <img
                                    src="https://i.pravatar.cc/100?img=1"
                                    class="w-12 h-12 rounded-full">

                                <div>

                                    <h4 class="font-semibold">
                                        Sophia Laurent
                                    </h4>

                                    <p class="text-sm text-gray-500">
                                        Paris, France
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">

                    <div class="bg-white rounded-3xl p-8 shadow-sm">

                        <div class="text-[#B88A44] text-3xl">❝</div>

                        <div class="text-[#B88A44] mt-3">
                            ★★★★★
                        </div>

                        <p class="mt-5 text-gray-600 leading-8">
                            Premium products and fast shipping.
                            Highly recommended.
                        </p>

                        <div class="mt-8 pt-6 border-t">

                            <div class="flex items-center gap-4">

                                <img
                                    src="https://i.pravatar.cc/100?img=12"
                                    class="w-12 h-12 rounded-full">

                                <div>

                                    <h4 class="font-semibold">
                                        Marcus Reid
                                    </h4>

                                    <p class="text-sm text-gray-500">
                                        London, UK
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">

                    <div class="bg-white rounded-3xl p-8 shadow-sm">

                        <div class="text-[#B88A44] text-3xl">❝</div>

                        <div class="text-[#B88A44] mt-3">
                            ★★★★★
                        </div>

                        <p class="mt-5 text-gray-600 leading-8">
                            Customer support was amazing and returns
                            were effortless.
                        </p>

                        <div class="mt-8 pt-6 border-t">

                            <div class="flex items-center gap-4">

                                <img
                                    src="https://i.pravatar.cc/100?img=5"
                                    class="w-12 h-12 rounded-full">

                                <div>

                                    <h4 class="font-semibold">
                                        Aisha Tan
                                    </h4>

                                    <p class="text-sm text-gray-500">
                                        Singapore
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Dots -->
            <div class="swiper-pagination mt-10"></div>

        </div>

    </div>

</section>
<section class="py-24 bg-[var(--section-bg)]">

    <div class="max-w-[1280px] mx-auto px-6 lg:px-8">

        <div
            class="rounded-[36px]
            bg-gradient-to-r
            from-[#F5F2EC]
            via-[#F6F3EE]
            to-[#EDE6D8]
            p-8 md:p-12 lg:p-16">

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <!-- Left Content -->
                <div>

                    <span
                        class="text-xs uppercase tracking-[0.25em] text-[#B88A44]">
                        Stay In The Loop
                    </span>

                    <h2
                        class="mt-5 text-4xl md:text-5xl lg:text-6xl leading-tight font-bold">

                        Get exclusive deals &
                        <span class="italic text-[#B88A44]">
                            early access
                        </span>
                        to drops.

                    </h2>

                    <p
                        class="mt-6 max-w-xl text-gray-600 leading-8">

                        Join 85,000+ subscribers and be first
                        to know about new arrivals, flash sales,
                        exclusive collections and members-only offers.

                    </p>

                    <!-- Benefits -->
                    <div
                        class="flex flex-wrap gap-6 mt-8 text-sm text-gray-600">

                        <div class="flex items-center gap-2">

                            <span class="text-[#B88A44]">✓</span>

                            <span>No Spam</span>

                        </div>

                        <div class="flex items-center gap-2">

                            <span class="text-[#B88A44]">✓</span>

                            <span>Unsubscribe Anytime</span>

                        </div>

                        <div class="flex items-center gap-2">

                            <span class="text-[#B88A44]">✓</span>

                            <span>Members-only Deals</span>

                        </div>

                    </div>

                </div>

                <!-- Right Card -->
                <div
                    class="bg-white rounded-[28px]
                    shadow-lg p-8 max-w-md lg:ml-auto">

                    <h3
                        class="font-semibold text-lg">

                        Subscribe to our newsletter

                    </h3>

                    <form class="mt-6 space-y-4">

                        <input
                            type="email"
                            placeholder="Your email address"
                            class="w-full h-14 rounded-2xl border border-gray-200 px-5 focus:outline-none focus:ring-2 focus:ring-[#B88A44]/40">

                        <button
                            type="submit"
                            class="w-full h-14 rounded-2xl bg-black text-white font-medium hover:bg-[#111827] transition">

                            Subscribe Now →

                        </button>

                    </form>

                    <p
                        class="mt-5 text-xs text-center text-gray-500 leading-6">

                        By subscribing you agree to our
                        <a href="#"
                            class="text-[#B88A44] hover:underline">
                            Privacy Policy
                        </a>

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection