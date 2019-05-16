<?php

namespace ckissi\saas\src\http\controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ckissi\saas\src\models\UserInfo;
use Auth;

class ProfileController extends Controller
{
    public function editProfile() {
        $user = Auth::user()->with('userInfo')->first();
        dd($user->userInfo);
        return view('saas::admin.profile');
    }
}
