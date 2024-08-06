<div class="p-8 flex gap-4 bg-[#{{ $contact['color'] }}] rounded-xl">
    <div class="items-center">
        <i class="fa-solid {{ $contact['icon'] }} text-3xl"></i>
    </div>
    <div class="flex gap-4 flex-col">
        <div class="font-bold text-xl">{{ $contact['title'] }}</div>
        <div>
            <div class="text-xl text-gray-500">{{ $contact['content'] }}</div>
        </div>
    </div>
</div>
