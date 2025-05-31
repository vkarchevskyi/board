<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 *
 * @property int $id
 * @property int $board_id
 * @property int $creator_id
 * @property int|null $assignee_id
 * @property int $board_list_id
 * @property string $name
 * @property string $description
 * @property int $list_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property mixed $0
 * @property mixed $1
 * @property mixed $2
 * @property mixed $3
 * @property mixed $4
 * @property mixed $5
 * @property mixed $6
 * @property-read User|null $assignee
 * @property-read Board $board
 * @property-read User $creator
 * @property-read BoardList $list
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BoardTask newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BoardTask newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BoardTask query()
 * @mixin \Eloquent
 */
final class BoardTask extends Model
{
    protected $fillable = [
        'board_id',
        'creator_id',
        'assignee_id',
        'board_list_id',
        'name',
        'description',
        'list_order',
    ];

    protected $casts = [
        'board_id',
        'creator_id',
        'assignee_id',
        'board_list_id',
        'name',
        'description',
        'list_order',
    ];

    public function board(): BelongsTo
    {
        return $this->belongsTo(Board::class, 'board_id', 'id');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }

    public function assignee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assignee_id', 'id');
    }

    public function list(): BelongsTo
    {
        return $this->belongsTo(BoardList::class, 'board_list_id', 'id');
    }
}
