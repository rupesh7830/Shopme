
<x-guest-layout>

    @include('partials.navbar')

    <section
        class="bg-[#F8F8F8] py-6 flex items-center"
        style="min-height: calc(100vh - 180px);">

        <div class="max-w-7xl mx-auto px-6 w-full">

            <div class="max-w-md mx-auto">

                <div
                    class="bg-white rounded-[32px] shadow-xl border border-gray-100 p-6 lg:p-8">

                    <div class="text-center mb-5">

                        <h1
                            class="text-4xl font-bold text-gray-900">

                            Create Account

                        </h1>

                        <p
                            class="mt-2 text-gray-500">

                            Join ShopMe and start shopping today.

                        </p>

                    </div>

                    <form
                        method="POST"
                        action="{{ route('register') }}"
                        class="space-y-4">

                        @csrf

                        <!-- Name -->

                        <div>

                            <label
                                class="block mb-2 text-sm font-medium text-gray-700">

                                Full Name

                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                placeholder="Enter your full name"
                                class="w-full rounded-2xl border border-gray-200 px-5 py-3 focus:border-[#B88A44] focus:ring-[#B88A44]">

                            @error('name')
                            <p class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </p>
                            @enderror

                        </div>

                        <!-- Email -->

                        <div>

                            <label
                                class="block mb-2 text-sm font-medium text-gray-700">

                                Email Address

                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                placeholder="Enter your email"
                                class="w-full rounded-2xl border border-gray-200 px-5 py-3 focus:border-[#B88A44] focus:ring-[#B88A44]">

                            @error('email')
                            <p class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </p>
                            @enderror

                        </div>

                        <!-- Password -->

                        <div>

                            <label
                                class="block mb-2 text-sm font-medium text-gray-700">

                                Password

                            </label>

                            <input
                                type="password"
                                name="password"
                                required
                                placeholder="Create password"
                                class="w-full rounded-2xl border border-gray-200 px-5 py-3 focus:border-[#B88A44] focus:ring-[#B88A44]">

                            @error('password')
                            <p class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </p>
                            @enderror

                        </div>

                        <!-- Confirm Password -->

                        <div>

                            <label
                                class="block mb-2 text-sm font-medium text-gray-700">

                                Confirm Password

                            </label>

                            <input
                                type="password"
                                name="password_confirmation"
                                required
                                placeholder="Confirm password"
                                class="w-full rounded-2xl border border-gray-200 px-5 py-3 focus:border-[#B88A44] focus:ring-[#B88A44]">

                        </div>

                        <!-- Register Button -->

                        <button
                            type="submit"
                            class="w-full py-3 rounded-2xl bg-black text-white font-semibold hover:bg-[#B88A44] transition duration-300">

                            Create Account

                        </button>

                    </form>

                    <div class="flex items-center gap-4 my-5">

                        <div class="flex-1 h-px bg-gray-200"></div>

                        <span class="text-sm text-gray-400">
                            OR
                        </span>

                        <div class="flex-1 h-px bg-gray-200"></div>

                    </div>

                    <button
                        class="w-full py-3 rounded-2xl border border-gray-200 font-medium hover:bg-gray-50 transition">

                        Continue with Google

                    </button>

                    <p
                        class="mt-6 text-center text-sm text-gray-500">

                        Already have an account?

                        <a
                            href="{{ route('login') }}"
                            class="font-semibold text-[#B88A44] hover:underline">

                            Sign In

                        </a>

                    </p>

                </div>

            </div>

        </div>

    </section>

    @include('partials.footer')

</x-guest-layout>
