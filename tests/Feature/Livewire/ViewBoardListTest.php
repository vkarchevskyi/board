<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ViewBoardList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ViewBoardListTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(ViewBoardList::class)
            ->assertStatus(200);
    }
}
