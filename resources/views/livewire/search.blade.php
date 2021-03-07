<div>
    <div>
        {{-- <label for="email" class="block font-medium text-gray-100">Search Repos</label> --}}
        <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <x-heroicon-s-search class="h-5 w-5 text-gray-400"/>
            </div>
            <input wire:model="search" type="text" name="search" id="search" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md" placeholder="Search for a repo...">
        </div>
    </div>
    @if(empty($search))
    @elseif($repos->isEmpty())
        <div class="divide-y divide-gray-200 text-sm text-gray-100">
            No matching result was found.
        </div>
    @else
        <ul class="divide-y divide-gray-200">
            @foreach($repos as $repo)
                <li class="relative bg-white py-5 px-4 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                    <div class="flex justify-between space-x-3">
                        <div class="min-w-0 flex-1">
                            <a href="{{ $repo->url }}" class="block focus:outline-none" target="_blank">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900 truncate">{{ $repo->name }}</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-1">
                        <p class="line-clamp-2 text-sm text-gray-600">
                            {{ $repo->description }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</div>
