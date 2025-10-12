<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum TopUpStatus: string
{
    case Created = 'created';
    case InProgress = 'in_progress';
    case Failed = 'failed';
    case Refunded = 'refunded';
    case ReadyForAllocation = 'readyForAllocation';
    case Allocating = 'allocating';
    case ReadyForTransfer = 'readyForTransfer';
    case Transfering = 'transfering';
    case Completed = 'completed';

    /**
     * @psalm-api
     */
    public function isTerminated(): bool
    {
        return match ($this) {
            self::Failed, self::Refunded, self::Completed => true,
            default => false,
        };
    }
}
