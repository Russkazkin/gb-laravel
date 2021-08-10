@extends('layouts.admin')
@section('content')
    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Категории
        </p>
        <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Название</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Описание</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Дата</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Действия</th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                @forelse($categories as $item)
                    <tr>
                        <td class="text-left py-3 px-4">{{ $item['id'] }}</td>
                        <td class="text-left py-3 px-4">{{ $item['name'] }}</td>
                        <td class="text-left py-3 px-4">{{ \Illuminate\Support\Str::limit($item['description'], 40) }}</td>
                        <td class="text-left py-3 px-4">{{ now()->translatedFormat('d M Y H:i') }}</td>
                        <td class="text-left py-3 px-4">кнопки</td>
                    </tr>
                @empty
                    <p>Нет данных</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
