<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardTask extends Model
{
    protected $fillable = [
        'name',
        'board_list_id',
    ];
}
