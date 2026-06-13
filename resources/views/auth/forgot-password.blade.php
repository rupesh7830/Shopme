<x-guest-layout>
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-[90%] display-flex items-center sm:max-w-md md:max-w-lg 
                bg-white rounded-[32px] shadow-lg 
                px-5 sm:px-8 md:px-10 
                py-8 sm:py-10">

        <!-- Heading -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl 
                   font-serif font-bold text-center text-[#0f172a]">
            Forgot Password
        </h1>

        <!-- Description -->
        <p class="text-center text-gray-500 
                  mt-3 mb-6 sm:mb-8 
                  text-sm sm:text-base leading-relaxed">
            No worries! Enter your email address and we'll send you a password reset link.
        </p>


        <!-- Session Status -->
        <x-auth-session-status 
            class="mb-4 text-center text-green-600" 
            :status="session('status')" 
        />


        <!-- Form -->
        <form method="POST" action="{{ route('password.email') }}">
            @csrf


            <!-- Email -->
            <div class="mb-6">

                <label class="block mb-2 
                              text-sm sm:text-base 
                              font-medium">
                    Email Address
                </label>


                <input 
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter your email"
                    required
                    autofocus

                    class="w-full 
                           h-12 sm:h-14 
                           px-4 sm:px-5 
                           text-sm sm:text-base 
                           rounded-2xl 
                           border border-gray-300 
                           focus:outline-none 
                           focus:ring-2 
                           focus:ring-black"
                >


                <x-input-error 
                    :messages="$errors->get('email')" 
                    class="mt-2"
                />

            </div>


            <!-- Button -->
            <button 
                type="submit"

                class="w-full 
                       h-12 sm:h-14 
                       bg-black 
                       text-white 
                       rounded-2xl 
                       text-sm sm:text-lg 
                       font-semibold 
                       cursor-pointer 
                       hover:bg-gray-900 
                       transition duration-300">

                Send Reset Link

            </button>


            <!-- Back to Login -->
            <div class="mt-6 text-center text-sm sm:text-base">

                <a 
                    href="{{ route('login') }}"
                    class="text-gray-500 hover:text-black transition">

                    Back to Login

                </a>

            </div>

        </form>

    </div>
</div>

</x-guest-layout>