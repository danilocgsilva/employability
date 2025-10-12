<div>
    <label for="{{ $inputId }}" class="block text-sm font-medium {{ $baseModelView->getTextSecondary() }} mb-2">
        {{ $label }}
    </label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="@if ($errors->has('email') || $errors->has('password')) text-red-500 @else {{ $baseModelView->getTextQuaternary() }} @endif"
                aria-hidden="true">
                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
        </div>
        <input
            id="{{ $inputId }}" type="{{ $type ?? 'text' }}" name="{{ $name }}"
            class="{{ $inputClasses ?? "" }}"
            placeholder="{{ $placeholder }}" />
    </div>

    @if ($showErrorMessage)
        {{ $inputValidationErrorMessage ?? "" }}
    @endif

    @if (session('errors') && $showErrorMessage)
        @if (session('errors')->first('email') || session('errors')->first('password'))
            <p class="mt-1 text-sm text-red-600 flex items-center">
                <i class="fas fa-exclamation-triangle mr-1 text-xs"></i>
                {{ $inputValidationErrorMessage ?? "" }}
            </p>
        @endif
    @endif
</div>