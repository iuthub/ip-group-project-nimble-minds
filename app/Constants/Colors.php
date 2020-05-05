<?php

namespace App\Constants;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User;

class Colors
{
    const GREEN_COLOR='#fff475';
    const YELLOW_COLOR='#f28b82';
    const BLUE_COLOR='#fbbc04';
    const BLACK_COLOR='#ccff90';
    const RED_COLOR='#a7ffeb';
    const PINK_COLOR='#cbf0f8';
    const GRAY_COLOR='#aecbfa';
    const INDIGO_COLOR='#d7aefb';
    const DOG_COLOR='#fdcfe8';
    const GOLD_COLOR='#e6c9a8';
    const SKYBLUE_COLOR='#d29034';
    const NEW_COLOR='#89609e';
    const GREEN_NEW_COLOR='#519839';
    const SOME_COLOR='#838c91';
    const COLOR_LIME='#00aecc';
public static function getList()
{
    return [
        self::GREEN_COLOR,
        self::YELLOW_COLOR,
        self::BLUE_COLOR,
        self::BLACK_COLOR,
        self::RED_COLOR,
        self::PINK_COLOR,
        self::GRAY_COLOR,
        self::INDIGO_COLOR,
        self::DOG_COLOR,
        self::GOLD_COLOR,
        self::SKYBLUE_COLOR,
        self::NEW_COLOR,
        self::GREEN_NEW_COLOR,
        self::SOME_COLOR,
        self::COLOR_LIME,
    ];
}


}
