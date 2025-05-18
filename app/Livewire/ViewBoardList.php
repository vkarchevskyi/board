<?php

namespace App\Livewire;

use App\Models\BoardList;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ViewBoardList extends Component
{
    public BoardList $list;

    public function render(): View
    {
        return view('livewire.view-board-list');
    }
}
