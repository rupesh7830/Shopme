
<x-guest-layout>

    @include('partials.navbar')

    <section
    class="bg-[#F8F8F8] py-8 flex items-center"
    style="min-height: calc(100vh - 180px);">

        <div class="max-w-7xl mx-auto px-6">

            <div class="max-w-md mx-auto">
                <!-- Card -->

                <div
                class="bg-white rounded-[32px] shadow-xl border border-gray-100 p-6 lg:p-8">

                    <div class="text-center mb-5">

                        <h1
                            class="text-4xl font-bold text-gray-900">

                            Welcome Back

                        </h1>

                        <p
                            class="mt-3 text-gray-500 text-sm">

                            Sign in to continue your shopping experience.

                        </p>

                    </div>

                    <x-auth-session-status
                        class="mb-4"
                        :status="session('status')" />

                    <form
                        method="POST"
                        action="{{ route('login') }}"
                        class="space-y-6">

                        @csrf

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
                                autofocus
                                placeholder="Enter your email"
                                class="w-full rounded-2xl border border-gray-200 px-5 py-3 focus:border-[#B88A44] focus:ring-[#B88A44]">

                            @error('email')

                            <p
                                class="text-red-500 text-sm mt-2">

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
                                placeholder="Enter your password"
                                class="w-full rounded-2xl border border-gray-200 px-5 py-3 focus:border-[#B88A44] focus:ring-[#B88A44]">

                            @error('password')

                            <p
                                class="text-red-500 text-sm mt-2">

                                {{ $message }}

                            </p>

                            @enderror

                        </div>

                        <!-- Remember -->

                        <div
                            class="flex items-center justify-between">

                            <label
                                class="flex items-center gap-2">

                                <input
                                    type="checkbox"
                                    name="remember"
                                    class="rounded border-gray-300">

                                <span
                                    class="text-sm text-gray-600">

                                    Remember Me

                                </span>

                            </label>

                            @if(Route::has('password.request'))

                            <a
                                href="{{ route('password.request') }}"
                                class="text-sm font-medium text-[#B88A44] hover:underline">

                                Forgot Password?

                            </a>

                            @endif

                        </div>

                        <!-- Login Button -->

                        <button
                            type="submit"
                            class="w-full py-3 rounded-2xl bg-black text-white font-semibold hover:bg-[#B88A44] transition duration-300">

                            Sign In

                        </button>

                    </form>

                    <!-- Register -->

                    <p
                        class="mt-8 text-center text-sm text-gray-500">

                        New to ShopMe?

                        <a
                            href="{{ route('register') }}"
                            class="font-semibold text-[#B88A44] hover:underline">

                            Create Account

                        </a>

                    </p>

                </div>

            </div>

        </div>

    </section>

    @include('partials.footer')

</x-guest-layout>
