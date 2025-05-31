<?php

declare(strict_types=1);

namespace App\Enum\Board;

enum BoardRole: int
{
    case Admin = 0;
    case User = 1;
}
