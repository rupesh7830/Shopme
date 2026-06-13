
<div class="bg-[#F8F8F8] pb-10 sticky top-0">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

            <!-- Sidebar -->
            <div class="bg-white rounded-3xl p-6 shadow-sm h-fit">

                <h3 class="font-bold text-lg mb-6">
                    My Account
                </h3>

                <nav class="space-y-3">

                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-2xl bg-black text-white">
                        Dashboard
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-gray-100">
                        My Orders
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-gray-100">
                        Wishlist
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-gray-100">
                        Addresses
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-gray-100">
                        Profile Settings
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button class="w-full text-left px-4 py-3 rounded-2xl text-red-500 hover:bg-red-50">
                            Logout
                        </button>
                    </form>

                </nav>

            </div>


            <!-- Dynamic Content -->
            <div class="lg:col-span-3">

                @yield('user-content')

            </div>

        </div>

    </div>

</div>
