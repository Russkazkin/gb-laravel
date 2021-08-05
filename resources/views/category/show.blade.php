@extends('layouts.app')

@section('content')

    <section class="text-blueGray-700 ">
        <div class="container flex flex-col items-center px-5 py-8 mx-auto">
            <div class="flex flex-col w-full mb-8 text-left ">
                <div class="w-full mx-auto lg:w-1/2 ">
                    <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font">{{ $category['name'] }}</h1>
                    <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">{{ $category['description'] }}</p>
                </div>
            </div>
        </div>
        <div class="container items-center px-5 mx-auto lg:px-28">
            <div class="flex flex-wrap justify-center">
                @forelse ($news as $item)
                    <div class="w-full lg:w-1/3">

                        <div class="p-8">
                            <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font"> {{ $item['title'] }} </h1>
                            <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">{{ Str::limit($item['content'], 100) }}</p>
                            <a href="{{ route('news.show', ['news' => $item['id']]) }}" class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-black " title="read more"> Читать » </a>
                        </div>
                    </div>
                @empty
                    <p>Категория пуста</p>
                @endforelse
            </div>
        </div>
    </section>

@endsection
