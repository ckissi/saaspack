<?php

namespace ckissi\saas\src\http\controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function editProfile() {
        return view('saas::admin.profile');
    }
}
