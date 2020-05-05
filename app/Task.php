<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Task extends Model
{
    const STATUS_INCOMLETE='Not Completed';
    const STATUS_COMPLETE='Completed';

    public static function getList()
    {
        return [
            self::STATUS_INCOMLETE,
            self::STATUS_COMPLETE,

        ];
    }
    protected $fillable = [
        'title', 'user_id', 'time_id', 'color_id', 'start_time_id','status'
    ];

    /**
     *
     * /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */


}
