@extends('_base')

@section('content')
    <div id="page-content">
        <div class="flex items-center justify-center {{ $baseModelView->getMarginContent(session()) }} px-4">
            <div class="w-full max-w-md">
                <div>
                    <div class="mb-8 text-center">
                        <div class="flex items-center justify-center mb-4">
                            <div class="{{ $baseModelView->getBackgroundIcon() }} rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="{{ $baseModelView->getTextMain() }}" aria-hidden="true">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                            </div>
                        </div>
                        <h2 class="text-3xl font-bold {{ $baseModelView->getTextMain() }}">Sign In</h2>
                        <p class="{{ $baseModelView->getTextTertiary() }} text-sm mt-2">Access the platform</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="space-y-6">
                            <div class="space-y-6">
                                <x-input
                                    name="email" 
                                    type="text" 
                                    label="Email Address"
                                    placeholder="youremail@company.com"
                                    input-id="email"
                                    input-classes="{{ $baseModelView->getInputClasses($errors->has('email') || $errors->has('password')) }}"
                                >
                                    <x-slot:iconSvg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="@if ($errors->has('email') || $errors->has('password')) text-red-500 @else {{ $baseModelView->getTextQuaternary() }} @endif"
                                            aria-hidden="true">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg>
                                    </x-slot>
                                </x-input>

                                <x-input 
                                    name="password" 
                                    type="password" 
                                    label="Password"
                                    placeholder="••••••••" 
                                    input-id="password" 
                                    input-classes="{{ $baseModelView->getInputClasses($errors->has('email') || $errors->has('password')) }}"
                                    input-validation-error-message="Check if the e-mail or password are correct."
                                    show-error-message="{{ session('errors')?->first('email') || session('errors')?->first('password') }}"
                                >
                                    <x-slot:iconSvg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="@if ($errors->has('email') || $errors->has('password')) text-red-500 @else {{ $baseModelView->getTextQuaternary() }} @endif"
                                            aria-hidden="true">
                                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </x-slot>
                                </x-input>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class=" flex items-center">
                                    <input id="remember" type="checkbox"
                                        class="h-4 w-4 text-gray-600 {{ $baseModelView->getBackground2() }} {{ $baseModelView->getDivider() }} rounded focus:ring-gray-500" />
                                    <label for="remember"
                                        class="ml-2 block text-sm {{ $baseModelView->getTextSecondary() }}">
                                        Remember me
                                    </label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="text-sm {{ $baseModelView->getTextSecondary() }} hover:{{ $baseModelView->getTextMain() }} transition-colors"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <button type="submit" id="login-button"
                                class="w-full {{ $baseModelView->getButton() }} {{ $baseModelView->getButtonTextColor() }} py-3 px-4 rounded-lg font-medium {{ $baseModelView->getButtonHover() }} focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-gray-900 transition-all transform hover:scale-[1.02] active:scale-[0.98]">
                                Sign In
                            </button>

                        </div>

                        <div class="mt-8 relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t {{ $baseModelView->getBorder() }}"></div>
                            </div>
                            <div class=" relative flex justify-center text-sm">
                                <span
                                    class="px-2 {{ $baseModelView->getBackgroundMain() }} {{ $baseModelView->getTextTertiary() }}">Don't
                                    have an account?</span>
                            </div>
                        </div>

                        <div class="mt-6 text-center">
                            <a href="{{ route('register') }}"
                                class="{{ $baseModelView->getTextSecondary() }} hover:{{ $baseModelView->getTextMain() }} font-medium transition-colors">
                                Create a new account
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
