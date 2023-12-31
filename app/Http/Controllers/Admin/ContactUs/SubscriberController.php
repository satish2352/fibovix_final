<?php

namespace App\Http\Controllers\Admin\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use App\Models\ {
    Subcribers
};

class SubscriberController extends Controller
{
  
    public function index(){
        try {
            $get_contactus= Subcribers::get();
            return view('admin.pages.list-subscriber', compact('get_contactus'));
        } catch (\Exception $e) {
            return $e;
        }
    }
      
}
