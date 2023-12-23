<?php

namespace App\Http\Controllers\Website\Courses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function getCrashcoursebatch()
    {
        try {
            return view('website.pages.courses.crashcoursebatch');

        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getRepeatersbatch()
    {
        try {
            return view('website.pages.courses.repeatersbatch');

        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getRevisionbatch()
    {
        try {
            return view('website.pages.courses.revisionbatch');

        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getPrefoundationbatch()
    {
        try {
            return view('website.pages.courses.prefoundationbatch');

        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getJEEMain()
    {
        try {
            return view('website.pages.subpages.jeemain');

        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getNeet()
    {
        try {
            return view('website.pages.subpages.neet');

        } catch (\Exception $e) {
            return $e;
        }
    }
}
