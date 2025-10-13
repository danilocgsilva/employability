@if (session()->hasAny('errors'))
    @if ($errors->has('email') || $errors->has('email'))
        <div class="flex items-center justify-center pt-8">
            <div id="error-message" class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-r-lg">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <i class="fas fa-exclamation-circle text-red-500 text-lg"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">{{ $primaryData }}</h3>
                        <div class="mt-1 text-sm text-red-700">
                            <p>The email or password you entered is incorrect. Please try again.</p>
                        </div>
                        <div class="mt-2 text-xs text-red-600">
                            <p>Having trouble? <a href="{{ route('password.request') }}" class="font-medium underline">Reset your password</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endif