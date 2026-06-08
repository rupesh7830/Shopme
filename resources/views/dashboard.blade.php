@extends('layouts.app')
@section('title', 'Dashboard')
@section('meta_description', 'Dashboard')
@section('content')
    <div class="bg-[#F8F8F8] min-h-screen py-10">

        <div class="max-w-7xl mx-auto px-6">

            <!-- Welcome Banner -->

            <div
                class="bg-gradient-to-r from-black to-[#1A1A1A]
                rounded-3xl p-8 text-white mb-8">

                <h1 class="text-3xl font-bold">
                    Welcome Back, {{ Auth::user()->name }} 👋
                </h1>

                <p class="mt-2 text-gray-300">
                    Manage your orders, wishlist and account settings.
                </p>

            </div>

            <div class="grid lg:grid-cols-4 gap-6">

                <!-- Sidebar -->

                <div
                    class="bg-white rounded-3xl p-6 shadow-sm h-fit">

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

                        <form method="POST"
                              action="{{ route('logout') }}">

                            @csrf

                            <button
                                class="w-full text-left px-4 py-3 rounded-2xl text-red-500 hover:bg-red-50">

                                Logout

                            </button>

                        </form>

                    </nav>

                </div>

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

        </div>

    </div>


@endsection