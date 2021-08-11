@extends('layouts.admin')
@section('content')
<div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i>Создать новость
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" method="POST" action="{{ route('admin.news.store') }}">
                @csrf
                @method('POST')
                <div class="">
                    <label class="block text-sm text-gray-600" for="title">Заголовок</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required="" placeholder="Введите заголовок" aria-label="Title">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="content">Контент</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="content" name="content" rows="6" required="" placeholder="Контент новости" aria-label="Content"></textarea>
                </div>
                <div class="mt-4">
                    <label class=" block text-sm text-gray-600" for="category_id">Категория</label>
                    <select name="category_id" id="category_id" class="w-full px-4 py-2 mt-2 text-base text-blueGray-500 bg-gray-200 transition duration-500 ease-in-out transform border border-transparent rounded-lg appearance-none bg-blueGray-100 focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                        @forelse($categories as $category)
                        <option class="block mb-4 text-xs font-bold tracking-wide text-blueGray-500 uppercase " value="{{$category['id']}}">
                            {{ $category['name'] }}
                        </option>
                        @empty
                        <option class="block mb-4 text-xs font-bold tracking-wide text-blueGray-500 uppercase " value="{{ null }}">Пусто</option>
                        @endforelse
                    </select>
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
