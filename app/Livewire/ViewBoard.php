<?php

namespace App\Livewire;

use App\Models\Board;
use App\Models\BoardList;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

/**
 * @property-read Board $board
 */
final class ViewBoard extends Component
{
    #[Locked]
    public int $boardId;

    #[Computed]
    public function board(): Board
    {
        return Board::query()
            ->with('lists', 'lists.tasks')
            ->findOrFail($this->boardId);
    }

    public function mount(int $id): void
    {
        $this->boardId = $id;
    }

    public function render(): View
    {
        return view('livewire.view-board')
            ->title($this->board->name);
    }

    public function createList(string $name): void
    {
//        $this->authorize('create-list');

        BoardList::query()->create([
            'name' => $name,
            'board_id' => $this->boardId,
        ]);
    }

    public function removeList(int $id): void
    {
        $list = BoardList::query()
            ->where('board_id', $this->boardId)
            ->findOrFail($id);

        // dd($list);

//        $this->authorize('delete', $list);

        $list->delete();
    }
}
