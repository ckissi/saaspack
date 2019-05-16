<?php

namespace ckissi\saas\src\models\traits;

use Illuminate\Support\Facades\Cache;

trait HasUserInfo
{

    public function userInfo()
    {
        return $this->hasOne('\ckissi\saas\src\models\UserInfo','user_id','id');
    }
}