@extends('layouts.admin')
@section('content')
    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Новости
        </p>
        <div class="bg-white overflow-auto mb-2">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Заголовок</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Текст</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Дата</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Категория</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Автор</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Действия</th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                @forelse($news as $item)
                    @php /** @var \App\Models\News $item */ @endphp
                    <tr>
                        <td class="text-left py-3 px-4">{{ $item->id }}</td>
                        <td class="text-left py-3 px-4">{{ $item->title }}</td>
                        <td class="text-left py-3 px-4">{{ \Illuminate\Support\Str::limit($item->content, 40) }}</td>
                        <td class="text-left py-3 px-4">{{ $item->created_at->translatedFormat('d M Y') }}</td>
                        <td class="text-left py-3 px-4">{{ $item->categories->pluck('name')->join(' | ') }}</td>
                        <td class="text-left py-3 px-4">{{ $item->user->name }}</td>
                        <td class="text-left py-3 px-4">кнопки</td>
                    </tr>
                @empty
                    <p>Нет данных</p>
                @endforelse
                </tbody>
            </table>
        </div>
        {{ $news->links() }}
    </div>
@endsection
