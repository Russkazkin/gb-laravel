@extends('layouts.app')

@section('content')

<section class="text-blueGray-700 ">
        <div class="container items-center px-5 py-8 mx-auto lg:px-10">
            <div class="flex flex-wrap mb-12 text-left">
                @forelse ($categories as $category)
                    <div class="w-full mx-auto lg:w-1/4">
                        <div class="p-6">
                            <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 text-black bg-blueGray-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 icon icon-tabler icon-tabler-aperture" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <line x1="3.6" y1="15" x2="14.15" y2="15"></line>
                                    <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(72 12 12)"></line>
                                    <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(144 12 12)"></line>
                                    <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(216 12 12)"></line>
                                    <line x1="3.6" y1="15" x2="14.15" y2="15" transform="rotate(288 12 12)"></line>
                                </svg>
                            </div>
                            <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font"> {{ $category['name'] }} </h1>
                            <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">{{ $category['description'] }}</p>
                            <a href="{{ route('category.show', ['category' => $category['id']]) }}" class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-black " title="read more"> Перейти » </a>
                        </div>
                    </div>
                @empty
                    <p>Категории не добавлены</p>
                @endforelse
            </div>
        </div>
    </section>

@endsection
