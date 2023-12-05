<div class="flex items-center flex-grow">
    <div class="relative w-full">
        <div class="p-2 text-white bg-blue-200 rounded-l absolute z-10">
            <x-heroicon-o-search class="w-6 h-6" />
        </div>
        <input wire:model.debounce.300ms="searchQuery" type="search" name="" id="" class="w-full pl-10 border-none rounded-r shadow-inner bg-blue-50 focus:ring-blue-200" placeholder="Search Thread">
        
        @if (!empty($results))
        <ul class="bg-white rounded-b shadow-md absolute w-full mt-1 z-10">
            @foreach ($results as $result)
                <li class="py-2 px-4">
                    <a href="{{ route('threads.show', [$result->category->slug(), $result->slug()]) }}" class="space-y-2">
                        {{ $result->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        @endif
    </div>
</div>
