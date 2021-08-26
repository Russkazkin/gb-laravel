@extends('layouts.admin')
@section('content')
    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Пользователи
        </p>
        <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Имя</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Дата</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                @forelse($users as $user)
                    @php /** @var \App\Models\User $user */ @endphp
                    <tr>
                        <td class="text-left py-3 px-4">{{ $user->id }}</td>
                        <td class="text-left py-3 px-4">{{ $user->name }}</td>
                        <td class="text-left py-3 px-4">{{ $user->email }}</td>
                        <td class="text-left py-3 px-4">{{ $user->created_at->translatedFormat('d M Y') }}</td>
                        <td class="text-left py-3 px-4">
                            <div class="flex">
                                @if(Auth::user()->isSuper())
                                <form method="POST" action="{{ route('admin.user.destroy', ['user' => $user->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                                @endif
                                @if(!$user->isAdmin() && Auth::user()->isSuper())
                                <form method="POST" action="{{ route('admin.user.admin', ['user' => $user->id]) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                        </svg>
                                    </button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <p>Нет данных</p>
                @endforelse
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
    </div>
@endsection

