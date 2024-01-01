<?php

namespace App\Http\Controllers\Website\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Website\AboutUsOne\AboutUsService;
use Session;
use Validator;


class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->service = new AboutUsService();
    }
    public function index()
    {
        try {
            // return view('website.pages.aboutus.updadhyeclasses');
            return view('website.pages.aboutus.updadhyeclasses');

        } catch (\Exception $e) {
            return $e;
        }
    }
    
    public function aboutusContact(Request $request) {
        $rules = [
            'full_name' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required|regex:/[0-9]{10}/',
            'zip_code' => 'required|regex:/[0-9]{6}/',
            'g-recaptcha-response' => 'required|captcha',
            // 'agree_checkbox'=> 'required|boolean',
            ];
        $messages = [   
            'full_name.required' => 'Please Enter Full Name.',
            'email.required' => 'Please Enter Email.',
            'email.email' => 'Please Enter a Valid Email Address.',
            'mobile_number.required' => 'Please Enter Mobile Number.',
            'mobile_number.regex' => 'Please Enter a Valid Mobile Number.',
            'zip_code.required' => 'Please Enter zip code.',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
            'g-recaptcha-response.required' =>'Please verify that you are not a robot.',
            // 'g-agree_checkbox.required' =>'Please tick box that you are agree.',

        ];
    
        try {
            $validation = Validator::make($request->all(),$rules,$messages);
            if($validation->fails() )
            {
                return redirect('aboutus')
                    ->withInput()
                    ->withErrors($validation);
            }
            else
            {
                $add_contact = $this->service->aboutusContact($request);
    
                if($add_contact)
                {
    
                    $msg = $add_contact['msg'];
                    $status = $add_contact['status'];
                    if($status=='success') {
                        Session::flash('success_message', 'Feedback and suggestions submitted successfully!');
                        return redirect('aboutus')->with(compact('msg','status'));
                    }
                    else {
                        return redirect('aboutus')->withInput()->with(compact('language','menu','msg','status'));
    
                    }
                }
    
            }
        } catch (Exception $e) {
            return redirect('aboutus')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }
}
