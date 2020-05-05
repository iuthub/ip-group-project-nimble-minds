<?php

namespace App\Constants;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User;

class Points
{
    const MON_MOR='Monday Morning';
    const MON_AFT='Monday Afternoon';
    const TUE_MON='Tuesday Morning';
    const TUE_AFT='Tuesday Afternoon';
    const WED_MON='Wednesday Morning';
    const WED_AFT='Wednesday Afternoon';
    const THU_MON='Thursday Morning';
    const THU_AFT='Thursday Afternoon';
    const FRI_MON='Friday Morning';
    const FRI_AFT='Friday Afternoon';
    const SAT_MON='Saturday Morning';
    const SAT_AFT='Saturday Afternoon';
    const SUN_MOR='Sunday Morning';
    const SUN_AFT='Sunday Afternoon';
    public static function getList()
    {
        return [
            self::SAT_MON,
            self::SAT_AFT,
            self::SUN_MOR,
            self::SUN_AFT,
            self::MON_MOR,
            self::MON_AFT,
            self::TUE_MON,
            self::TUE_AFT,
            self::WED_MON,
            self::WED_AFT,
            self::THU_MON,
            self::THU_AFT,
            self::FRI_MON,
            self::FRI_AFT,
        ];
    }


}
