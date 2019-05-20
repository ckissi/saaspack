<?php

namespace ckissi\saas\src\http\controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ckissi\saas\src\models\UserInfo;
use ckissi\saas\src\models\DimCountry;
use Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $countries = [];
        $user = Auth::user()->with('info')->first();
        $_countries = DimCountry::all();
        foreach ($_countries as $country) {
            $countries[$country->country_code] = $country->country_name;
        }
        return view('saas::admin.profile', [
            'countries' => $countries,
        ]);
    }

    public function edit()
    {

    }

    public function update(Request $request)
    {

        Auth::user()->info->company = $request->get('company');
        Auth::user()->info->save();
        return redirect()->route('profile.index')->with('msg', '👏 Successfully updated account!');

    }
}
