<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ViewBoard;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ViewBoardTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(ViewBoard::class)
            ->assertStatus(200);
    }
}
