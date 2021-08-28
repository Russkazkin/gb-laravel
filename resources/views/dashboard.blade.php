@extends('layouts.admin')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                You're logged in!
            </div>
            <div>
                <a href="{{ route('admin.dashboard.edit', ['user' => auth()->id()]) }}" class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-user-edit mr-3"></i> Редактировать профиль
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
