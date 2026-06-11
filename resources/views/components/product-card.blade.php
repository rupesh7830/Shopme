@props([
    'category',
    'image',
    'title',
    'subtitle',
    'price',
    'rating',
    'badge',
])
        <div class="product-card show group bg-white rounded-3xl overflow-hidden hover:shadow-xl transition duration-300"
            data-category="{{ $category }}">

            <div class="relative overflow-hidden">

            <span
                class="absolute top-4 left-4 z-10 px-3 py-1 text-xs rounded-full bg-white">
                {{ $badge }}
            </span>

            <img
                src="{{ $image }}"
                class="w-full h-[320px] object-cover group-hover:scale-105 transition duration-500">

            <!-- Quick Add Button -->
            <div
                class="absolute bottom-4 left-4 right-4 translate-y-20 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">

                <x-button />

            </div>

            </div>

                <div class="p-5">

                    <p class="text-xs text-gray-400">
                        {{ $subtitle }}
                    </p>

                    <h3 class="mt-1 font-semibold text-lg">
                        {{ $title }}
                    </h3>

                    <div class="mt-2 flex items-center justify-between">

                        <span class="font-bold">
                            {{ $price }}
                        </span>

                        <span class="text-sm text-[#B88A44]">
                            ★ {{ $rating }}
                        </span>

                    </div>

                </div>

            </div>