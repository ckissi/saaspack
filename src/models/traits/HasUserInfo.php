<?php

namespace ckissi\saas\src\models\traits;

use App\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Support\Facades\Cache;

trait HasUserInfo
{

    public function info()
    {
        return $this->hasOne('\ckissi\saas\src\models\Userinfo','user_id','id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
        \Session::flash('msg', 'Password reset email has been sent.');
    }


    public function routeNotificationForSlack($notification)
    {
        return 'https://hooks.slack.com/services/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';
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new \App\Notifications\VerifyEmailQueued);
    }

}