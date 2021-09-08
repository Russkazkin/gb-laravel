@extends('layouts.admin')
@section('content')
    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i>Источники
        </p>
        <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Url</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Описание</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Дата добавления</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Дата обновления</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                @forelse($sources as $item)
                    @php /** @var \App\Models\Source $item */ @endphp
                    <tr>
                        <td class="text-left py-3 px-4">{{ $item->id }}</td>
                        <td class="text-left py-3 px-4">{{ $item->url }}</td>
                        <td class="text-left py-3 px-4">{{ \Illuminate\Support\Str::limit($item->description, 40) }}</td>
                        <td class="text-left py-3 px-4">{{ $item->created_at->translatedFormat('d M Y H:i') }}</td>
                        <td class="text-left py-3 px-4">{{ $item->updated_at->translatedFormat('d M Y H:i') }}</td>
                        <td class="text-left py-3 px-4">
                            <div class="flex">
                                <a href="{{ route('admin.category.edit', ['category' => $item->id]) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                    </svg>
                                </a>
                                <form method="POST" action="{{ route('admin.category.destroy', ['category' => $item->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <p>Нет данных</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

