@extends('layouts.user')
@include ('partials.navbar')
@section('user-content')
            <div class="bg-[#F8F8F8] ">

                <!-- Main Content -->

                <div class="lg:col-span-3 space-y-6">

                    <!-- Stats -->

                    <div class="grid md:grid-cols-3 gap-6">

                        <div
                            class="bg-white rounded-3xl p-6 shadow-sm">

                            <p class="text-gray-500 text-sm">
                                Total Orders
                            </p>

                            <h3 class="text-3xl font-bold mt-2">
                                0
                            </h3>

                        </div>

                        <div
                            class="bg-white rounded-3xl p-6 shadow-sm">

                            <p class="text-gray-500 text-sm">
                                Wishlist Items
                            </p>

                            <h3 class="text-3xl font-bold mt-2">
                                0
                            </h3>

                        </div>

                        <div
                            class="bg-white rounded-3xl p-6 shadow-sm">

                            <p class="text-gray-500 text-sm">
                                Saved Addresses
                            </p>

                            <h3 class="text-3xl font-bold mt-2">
                                0
                            </h3>

                        </div>

                    </div>

                    <!-- Profile Card -->

                    <div
                        class="bg-white rounded-3xl p-8 shadow-sm">

                        <h3 class="text-xl font-bold mb-6">
                            Account Information
                        </h3>

                        <div class="grid md:grid-cols-2 gap-6">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Full Name
                                </p>

                                <p class="font-semibold mt-1">
                                    {{ Auth::user()->name }}
                                </p>

                            </div>

                            <div>

                                <p class="text-sm text-gray-500">
                                    Email Address
                                </p>

                                <p class="font-semibold mt-1">
                                    {{ Auth::user()->email }}
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- Recent Orders -->

                    <div
                        class="bg-white rounded-3xl p-8 shadow-sm">

                        <h3 class="text-xl font-bold mb-4">
                            Recent Orders
                        </h3>

                        <p class="text-gray-500">
                            No orders found yet.
                        </p>

                    </div>

                </div>

            </div>


@endsection