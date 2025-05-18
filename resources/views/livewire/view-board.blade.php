@props([
    'lists'
])

<div
    class="flex gap-4 overflow-y-scroll"
    x-trap="showCreateInput"
    x-data="{ listName: '', showCreateInput: false }"
>
    @foreach($this->board->lists as $list)
        <div
            wire:key="board-list-wrapper-{{ $list->id }}"
            class="border rounded-2xl border-white h-[90dvh] mb-4 col-span-1 min-w-32 w-32 shrink-0"
        >
            <livewire:view-board-list
                :list="$list"
                :key="'board-list' . $list->id"
            />
        </div>
    @endforeach

    <form
        x-on:submit.prevent="$wire.call('createList', listName); listName = ''; showCreateInput = false;"
        x-show="showCreateInput"
        x-cloak
        x-ref="newListForm"
    >
        <flux:input type="text" x-model="listName" class="mt-2"/>
    </form>
    <div class="mt-2" x-show="! showCreateInput"
         x-on:click="showCreateInput = true; $focus.within($refs.newListForm).first()">
        + Add new
    </div>
</div>
