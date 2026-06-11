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

            <!-- Category Card Component -->
             <x-category-card
                a="#"
                image="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=800"
                title="Fashion"
                itemCount="2,400+ Items"
            />

            <!-- Electronics -->
            <x-category-card
                a="#"
                image="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800"
                title="Electronics"
                itemCount="1,800+ Items"
            />

            <!-- Footwear -->
            <x-category-card
                a="#"
                image="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800"
                title="Footwear"
                itemCount="3,100+ Items"
            />

            <!-- Watches -->
            <x-category-card
                a="#"
                image="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?w=800"
                title="Watches"
                itemCount="900+ Items"
            />

            <!-- Bags -->
            <x-category-card
                a="#"
                image="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=800"
                title="Bags"
                itemCount="1,200+ Items"
            />


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
        <x-filter-button data-category="all">
            All
        </x-filter-button>

        <x-filter-button data-category="watches">
            Watches
        </x-filter-button>

        <x-filter-button data-category="footwear">
            Footwear
        </x-filter-button>

        <x-filter-button data-category="bags">
            Bags
        </x-filter-button>

        <x-filter-button data-category="electronics">
            Electronics
        </x-filter-button>

        <x-filter-button data-category="fashion">
            Fashion
        </x-filter-button>

        </div>


        <!-- Products Grid -->
        <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Product 1 -->

             <x-product-card
                category="watches"
                image="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?w=800"
                title="Obsidian Watch"
                subtitle="Timecraft"
                price="$349"
                rating="4.8"
                badge="New" />

            <!-- Product 2 -->
            <x-product-card
                category="footwear"
                image="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800"
                title="Air Runner Pro"
                subtitle="AeroStep"
                price="$179"
                rating="4.9"
                badge="Trending" />

            <!-- Product 3 -->
            <x-product-card
                category="bags"
                image="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=800"
                title="Imperial Bags"
                subtitle="Elite Bags"
                price="$349"
                rating="4.7"
                badge="Best Seller" />

            <!-- Product 4 -->


            <x-product-card
                category="electronics"
                image="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=800"
                title="ProMax Smartphone"
                subtitle="TechLux"
                price="$899"
                rating="4.8"
                badge="Sale" />

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
                <x-arrivals-card
                    a="#"
                    image="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=1000"
                    subtitle="Aura Fashion"
                    title="Luxury Tshirt"
                    price="$349"
                    badge="New"
                />

            <!-- Card 2 -->

            <x-arrivals-card
                a="#"
                image="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=1000"
                subtitle="Aura Fashion"
                title="Luxury Tshirt"
                price="$349"
                badge="New"
            />

            <!-- Card 3 -->

                <x-arrivals-card
                    a="#"
                    image="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=1000"
                    subtitle="Elite Bags"
                    title="Imperial Bags"
                    price="$349"
                    badge="New"
                />

            <!-- Card 4 -->

            <x-arrivals-card
                a="#"
                image="https://images.unsplash.com/photo-1547996160-81dfa63595aa?w=1000"
                subtitle="Timecraft"
                title="Obsidian Watch"
                price="$349"
                badge="New"
            />
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