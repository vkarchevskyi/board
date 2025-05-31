<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\Board\BoardRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 *
 * @property int $id
 * @property int $board_id
 * @property int $user_id
 * @property BoardRole $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Board $board
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BoardParticipant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BoardParticipant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BoardParticipant query()
 * @mixin \Eloquent
 */
final class BoardParticipant extends Model
{
    protected $fillable = [
        'board_id',
        'user_id',
        'role',
    ];

    protected $casts = [
        'board_id' => 'int',
        'user_id' => 'int',
        'role' => BoardRole::class,
    ];

    public function board(): BelongsTo
    {
        return $this->belongsTo(Board::class, 'board_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
