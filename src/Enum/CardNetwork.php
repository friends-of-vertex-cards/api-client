<?php

declare(strict_types=1);

namespace FriendsOfVertexCards\ApiClient\Enum;

enum CardNetwork: string
{
    case Visa = 'visa';
    case Mastercard = 'mastercard';
    case JCB = 'jcb';
    case AmericanExpress = 'amex';
    case DinersClubInternational = 'dci';
    case UnionPay = 'unionpay';
    case UnionPayInternational = 'upi';
    case Mir = 'mir';
    case Discover = 'discover';
    case Redcompra = 'redcompra';
    case Elo = 'elo';
    case Hipercard = 'hipercard';
}
