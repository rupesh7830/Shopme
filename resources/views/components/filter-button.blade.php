<button {{ $attributes->merge(['class' => 'filter-btn px-5 py-2 rounded-full border border-gray-200 text-sm hover:bg-white hover:text-black transition']) }}>
    {{ $slot }}
</button>