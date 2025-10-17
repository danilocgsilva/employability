<div>
    <label for="{{ $inputId }}" class="block text-sm font-medium {{ $baseModelView->getTextSecondary() }} mb-2">
        {{ $label }}
    </label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            {{ $iconSvg }}
        </div>
        <input
            id="{{ $inputId }}" type="{{ $type ?? 'text' }}" name="{{ $name }}"
            class="{{ $inputClasses ?? '' }}"
            placeholder="{{ $placeholder }}"
            value="{{ old($name) }}"
        />
    </div>

    @if ($inputValidationErrorMessage)
            <p class="mt-1 text-sm text-red-600 flex items-center">
                <i class="fas fa-exclamation-triangle mr-1 text-xs"></i>
                {{ $inputValidationErrorMessage }}
            </p>
    @endif

</div>
