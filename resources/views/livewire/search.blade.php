<div>
    <input wire:model="search" type="text"/>
     @if($repos->isEmpty())
        <div class="text-gray-500 text-sm">
            No matching result was found.
        </div>
    @else
        @foreach($repos as $repo)
            <p>{{ $repo->name }}</p>
        @endforeach
    @endif
</div>
