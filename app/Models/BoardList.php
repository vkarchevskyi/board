<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 *
 * @property int $id
 * @property string $name
 * @property int $board_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Board $board
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BoardList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BoardList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BoardList query()
 * @mixin \Eloquent
 */
final class BoardList extends Model
{
    protected $fillable = [
        'name',
        'board_id',
    ];

    protected $casts = [
        'name' => 'string',
        'board_id' => 'int',
    ];

    public function board(): BelongsTo
    {
        return $this->belongsTo(Board::class, 'board_id', 'id');
    }
}
