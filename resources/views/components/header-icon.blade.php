<li class="{{ $array['active'] ? 'bg-gradient-to-r from-orange-300 to-pink-500 text-white' : '' }} header-icon">
    <a href="/{{ $array['route'] }}" class=" flex justify-between px-4 py-2 items-center">
        <i class="fa-solid {{ $array['icon'] }} text-lg"></i>
        <div class="ml-2">{{ $array['text'] }}</div>
    </a>
</li>
