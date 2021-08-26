@php /** @var \App\Models\Category $category */ @endphp

@extends('layouts.admin')
@section('content')
    <x-admin.errors></x-admin.errors>
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i> Редактировать категорию
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" action="{{ route('admin.category.update', ['category' => $category->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="">
                    <label class="block text-sm text-gray-600" for="name">Название</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" value="{{ $errors->any() ? old('name') : $category->name  }}" required="" placeholder="Введите название" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="description">Описание</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="description" name="description" rows="6" required="" placeholder="Введите описание" aria-label="Описание">{{ $errors->any() ? old('description') : $category->description }}</textarea>
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
