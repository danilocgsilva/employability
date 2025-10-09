@extends('_base')

@section('content')

    <!-- Page Content -->
    <div id="page-content">
        <!-- Login Form -->
        <div class="flex items-center justify-center min-h-[calc(100vh-4rem)] px-4 py-12">
            <div class="w-full max-w-md">
                <div>
                    <div class="mb-8 text-center">
                        <div class="flex items-center justify-center mb-4">
                            <div class="bg-gray-700 rounded-full p-3">
                                <!-- Lock icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="text-white" aria-hidden="true">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                            </div>
                        </div>
                        <h2 class="text-3xl font-bold text-white">Sign In</h2>
                        <p class="text-gray-400 text-sm mt-2">Access your account</p>
                    </div>

                    <div>
                        <div class="space-y-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                                    Email Address
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <!-- Mail icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="text-gray-500" aria-hidden="true">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg>
                                    </div>
                                    <input id="email" type="email"
                                        class="w-full pl-10 pr-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent transition-all"
                                        placeholder="you@company.com" />
                                </div>
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-300 mb-2">
                                    Password
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <!-- Lock icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="text-gray-500" aria-hidden="true">
                                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>
                                    <input id="password" type="password"
                                        class="w-full pl-10 pr-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent transition-all"
                                        placeholder="••••••••" />
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember" type="checkbox"
                                        class="h-4 w-4 text-gray-600 bg-gray-800 border-gray-600 rounded focus:ring-gray-500" />
                                    <label for="remember" class="ml-2 block text-sm text-gray-300">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="text-sm text-gray-300 hover:text-white transition-colors">
                                    Forgot password?
                                </a>
                            </div>

                            <button id="login-button"
                                class="w-full bg-gray-700 text-white py-3 px-4 rounded-lg font-medium hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-gray-900 transition-all transform hover:scale-[1.02] active:scale-[0.98]">
                                Sign In
                            </button>
                        </div>

                        <div class="mt-8 relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-700"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-gray-900 text-gray-400">Don't have an account?</span>
                            </div>
                        </div>

                        <div class="mt-6 text-center">
                            <a href="#" class="text-gray-300 hover:text-white font-medium transition-colors">
                                Create a new account
                            </a>
                        </div>
                    </div>
                </div>

                <p class="text-center text-gray-400 text-sm mt-8">
                    © 2025 EnterpriseHub. All rights reserved.
                </p>
            </div>
        </div>
    </div>

@endsection

