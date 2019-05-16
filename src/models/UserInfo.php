<?php

namespace ckissi\saas\src\models;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    protected $guarded = [
        //'user_id'
    ];

    protected $primaryKey = 'user_id';
}
