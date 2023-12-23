<?php

namespace App\Http\Controllers\Website\OurResult;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurResultController extends Controller
{
    public function getOurresult()
    {
        try {
            return view('website.pages.ourresult.ourresult');

        } catch (\Exception $e) {
            return $e;
        }
    }
}
