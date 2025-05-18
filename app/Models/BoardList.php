<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BoardList extends Model
{
    protected $fillable = [
        'name',
        'board_id',
    ];

    public function tasks(): HasMany
    {
        return $this->hasMany(BoardTask::class);
    }
}
