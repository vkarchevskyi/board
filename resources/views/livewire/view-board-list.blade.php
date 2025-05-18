<div class="">
    <div class="flex gap-x-4">
        <h3>{{ $list->name }}</h3>
        <button aria-label="Remove list" x-on:click="$wire.$parent.removeList({{ $list->id }})">
            <flux:icon.trash/>
        </button>
    </div>

    @foreach($list->tasks as $task)
        <div wire:key="board-task-wrapper-{{ $task->id }}">
            <livewire:task-card
                :task="$task"
                :key="'board-task-' . $task->id"
            />
        </div>
    @endforeach
</div>
