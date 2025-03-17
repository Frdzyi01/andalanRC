@extends('admin.layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">

        <div class="mt-4">
            @if (session('status'))
                <div class="p-3 mb-4 text-sm text-green-700 bg-green-100 border border-green-400 rounded-md">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
