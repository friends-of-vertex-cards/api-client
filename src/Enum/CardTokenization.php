<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum CardTokenization: string
{
    case ApplePay = 'apple_pay';
    case GooglePay = 'google_pay';
    case ApplePayString = 'Apple pay';
    case GooglePayString = 'Google pay';
}
