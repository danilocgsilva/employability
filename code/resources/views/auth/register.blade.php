@extends('_base')

@section('content')

    <div id="page-content">
        <div class="flex items-center justify-center {{ $baseModelView->getMarginContent(session()) }} px-4">
            <div class="w-full max-w-md">
                <div>

                    <div class="mb-8 text-center">
                        <div class="flex items-center justify-center mb-4">
                            <div class="bg-gray-700 rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="text-white" aria-hidden="true">
                                    <path d="M20 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M4 21v-2a4 4 0 0 1 3-3.87"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                        </div>
                        <h2 class="text-3xl font-bold text-white">Create Account</h2>
                        <p class="text-gray-400 text-sm mt-2">Join EnterpriseHub today</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="space-y-6">
                            <div class="space-y-6">
                                <x-input 
                                    name="name" 
                                    type="text" 
                                    label="Name" 
                                    placeholder="Your Name" 
                                    input-id="email"
                                    input-classes="{{ $baseModelView->getInputClasses($errors->has('name')) }}"
                                    input-validation-error-message="{{ session('errors')?->first('name') }}"
                                >
                                    <x-slot:iconSvg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="text-gray-500">
                                            <path d="M20 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M4 21v-2a4 4 0 0 1 3-3.87"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </x-slot>
                                </x-input>


                                <x-input 
                                    name="email" 
                                    type="email" 
                                    label="Email Address" 
                                    placeholder="youremail@company.com"
                                    input-id="password"
                                    input-classes="{{ $baseModelView->getInputClasses($errors->has('email')) }}"
                                    input-validation-error-message="{{ session('errors')?->first('email') }}"
                                >
                                    <x-slot:iconSvg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="text-gray-500">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg>
                                    </x-slot>
                                </x-input>


                                <x-input name="password"
                                    type="password" 
                                    label="Password" 
                                    placeholder="••••••••"
                                    input-id="password"
                                    input-classes="{{ $baseModelView->getInputClasses($errors->has('password')) }}"
                                    input-validation-error-message="{{ session('errors')?->first('password') }}"
                                >
                                    <x-slot:iconSvg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="text-gray-500">
                                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </x-slot>
                                </x-input>


                                <x-input
                                    name="password_confirmation"
                                    type="password" 
                                    label="Confirm Password"
                                    placeholder="••••••••"
                                    input-id="password-confirm"
                                    input-classes="{{ $baseModelView->getInputClasses($errors->has('password_confirmation')) }}"
                                    input-validation-error-message="{{ session('errors')?->first('password_confirmation') }}"
                                >
                                    <x-slot:iconSvg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-500">
                                            <path d="M12 15v2"></path>
                                            <path d="M12 19h.01"></path>
                                            <path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                                        </svg>
                                    </x-slot>
                                </x-input>


                            </div>


                            <button type="submit" id="login-button"
                                class="w-full {{ $baseModelView->getButton() }} {{ $baseModelView->getButtonTextColor() }} py-3 px-4 rounded-lg font-medium {{ $baseModelView->getButtonHover() }} focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-gray-900 transition-all transform hover:scale-[1.02] active:scale-[0.98]">
                                Sign In
                            </button>

                        </div>

                    <div class="mt-8 relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-700"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-gray-900 text-gray-400">Already have an account?</span>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <a href="{{ route('login') }}"
                            class="text-gray-300 hover:text-white font-medium transition-colors">
                            Sign in instead
                        </a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   
@endsection