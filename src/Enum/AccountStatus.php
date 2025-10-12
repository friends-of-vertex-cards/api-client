<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum AccountStatus: string
{
    case Creating = 'creating';
    case CreatingFailed = 'creating_failed';
    case Active = 'active';
    case ActiveChanging = 'active_changing';
    case ActiveChangingFailed = 'active_changing_failed';
    case Inactive = 'inactive';
    case Activating = 'activating';
    case ActivatingFailed = 'activating_failed';
}
