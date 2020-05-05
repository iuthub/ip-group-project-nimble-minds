<?php

namespace App\Constants;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User;

class Times
{
    const HALF=0.5;
    const ONE=1;
    const ONE_HALF=1.5;
    const TWO=2;
    const TWO_HALF=2.5;
    const THREE=3;
    const THREE_HALF=3.5;
    const FOUR=4;
    const FOUR_HALF=4.5;
    const FIVE=5;
    const FIVE_HALF=5.5;
    const SIX=6;
    const SIX_HALF=6.5;
    const SEVEN=7;
    public static function getList()
    {
        return [
            self::HALF,
            self::ONE,
            self::ONE_HALF,
            self::TWO,
            self::TWO_HALF,
            self::THREE,
            self::THREE_HALF,
            self::FOUR,
            self::FOUR_HALF,
            self::FIVE,
            self::FIVE_HALF,
            self::SIX,
            self::SIX_HALF,
            self::SEVEN,
        ];
    }


}
