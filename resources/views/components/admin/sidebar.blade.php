<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ route('home') }}" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <a href="{{ route('admin.news.create') }}" class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> Новость
        </a>
        <a href="{{ route('admin.category.create') }}" class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> Категория
        </a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('admin.dashboard.index') }}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        @if(Auth::user()->isAdmin())
        <a href="{{ route('admin.news.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Новости
        </a>
        <a href="{{ route('admin.category.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Категории
        </a>
        @endif
        @if(Auth::user()->isSuper())
        <a href="{{ route('admin.user.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-user mr-3"></i>
            Пользователи
        </a>
        @endif
        <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
        <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a>
    </nav>
    <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
        <i class="fas fa-arrow-circle-up mr-3"></i>
        Upgrade to Pro!
    </a>
</aside>
