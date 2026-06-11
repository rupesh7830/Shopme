@props([
'a',
'image',
'title',
'itemCount'
])
            <a
                href="{{ $a }}"
                class="group relative overflow-hidden rounded-3xl h-[280px]">

                <img
                    src="{{ $image }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent">
                </div>

                <div
                    class="absolute bottom-5 left-5 text-white">

                    <h3 class="font-semibold text-lg">
                        {{ $title }}
                    </h3>

                    <p class="text-xs opacity-80">
                        {{ $itemCount }}
                    </p>

                </div>

            </a>