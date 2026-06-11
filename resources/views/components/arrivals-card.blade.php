@props([
    'category',
    'image',
    'title',
    'subtitle',
    'price',
    'rating',
    'a',
    'badge',

])
            <a href="{{ $a }}"
                class="group relative overflow-hidden rounded-3xl">

                <span
                        class="absolute top-4 left-4 z-20 px-3 py-1 text-xs rounded-full bg-[#B88A44] text-white">
                        {{ $badge }}
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
                    src="{{ $image }}"
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
                            {{ $subtitle }}
                        </p>

                        <h3 class="text-black font-semibold text-lg">
                            {{ $title }}
                        </h3>

                        <p class="text-[#D4A45A] font-semibold mt-1">
                            {{ $price }}
                        </p>

                    </div>

            </a>
