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
                                <x-input name="name" type="text" label="Name" placeholder="Your Name" input-id="email"
                                    input-classes="{{ $baseModelView->getInputClasses($errors->has('email') || $errors->has('password')) }}">
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

                                <x-input name="email" type="email" label="Email Address" placeholder="youremail@company.com"
                                    input-id="password"
                                    input-classes="{{ $baseModelView->getInputClasses($errors->has('email') || $errors->has('password')) }}"
                                    input-validation-error-message="Check if the e-mail or password are correct."
                                    show-error-message="{{ session('errors')?->first('email') || session('errors')?->first('password') }}">
                                    <x-slot:iconSvg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="text-gray-500">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg>
                                        </x-slot>
                                </x-input>

                                <x-input name="password" type="password" label="Password" placeholder="••••••••"
                                    input-id="password"
                                    input-classes="{{ $baseModelView->getInputClasses($errors->has('email') || $errors->has('password')) }}"
                                    input-validation-error-message="Check if the e-mail or password are correct."
                                    show-error-message="{{ session('errors')?->first('email') || session('errors')?->first('password') }}">
                                    <x-slot:iconSvg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="text-gray-500">
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
                            <a href="#"
                                class="{{ $baseModelView->getTextSecondary() }} hover:{{ $baseModelView->getTextMain() }} font-medium transition-colors">
                                Create a new account
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>




                            

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection