<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, BoardList> $lists
 * @property-read int|null $lists_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, BoardParticipant> $participants
 * @property-read int|null $participants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, BoardTask> $tasks
 * @property-read int|null $tasks_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Board newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Board newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Board query()
 * @mixin \Eloquent
 */
final class Board extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
    ];

    public function participants(): HasMany
    {
        return $this->hasMany(BoardParticipant::class, 'board_id', 'id');
    }

    public function lists(): HasMany
    {
        return $this->hasMany(BoardList::class, 'board_id', 'id');
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(BoardTask::class, 'board_id', 'id');
    }
}
