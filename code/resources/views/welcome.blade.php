@extends('_base')
@section('content')

    <div id="page-content">
        <div class="flex items-center justify-center {{ $baseModelView->getMarginContent(session()) }} px-4">
            <div class="w-full max-w-md">
                <h1 class="{{ $baseModelView->getTextMain() }}">Oi gente!</h1>
            </div>
        </div>
    </div>

@endsection