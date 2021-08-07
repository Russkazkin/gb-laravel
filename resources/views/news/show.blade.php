@extends('layouts.app')

@section('content')

<section class="text-blueGray-700 ">
        <div class="container flex flex-col items-center px-5 py-8 mx-auto">
            <div class="flex flex-col w-full mb-12 text-left lg:text-center">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">a great header right here</h2>
                <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter text-black lg:w-1/2 sm:text-6xl title-font">{{ $news['title'] }} </h1>
                <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 lg:w-1/2">{{ $news['content'] }}</p>
            </div>
        </div>
    </section>

@endsection
