<?php

namespace App\Http\Controllers\Website\Career;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Website\Career\CareerServices;
use Session;
use Validator;
use App\Models\WebsiteContactDetails;

class CareerController extends Controller
{
    public function __construct()
    {
        $this->service = new CareerServices();
    }
    public function getCareer()
    {

        try {
            $website_contact_details = WebsiteContactDetails::where('id',1)->get()->toArray();
            return view('website.pages.career',compact('website_contact_details'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    
    public function addCareer(Request $request) {
        // dd($request);
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required|regex:/[0-9]{10}/',
            'position' => 'required',
            'message' => 'required',
            ];
        $messages = [   
            'name.required' => 'Please Enter Full Name.',
            'email.required' => 'Please Enter Email.',
            'email.email' => 'Please Enter a Valid Email Address.',
            'mobile_number.required' => 'Please Enter Mobile Number.',
            'mobile_number.regex' => 'Please Enter a Valid Mobile Number.',
            'message.required' => 'Please Enter Message.',
        ];
    
        try {
            $validation = Validator::make($request->all(),$rules,$messages);
            if($validation->fails() )
            {
                return redirect('career')
                    ->withInput()
                    ->withErrors($validation);
            }
            else
            {
                $add_contact = $this->service->addAll($request);
        
                if($add_contact)
                {
    
                    $msg = $add_contact['msg'];
                    $status = $add_contact['status'];
                    if($status=='success') {
                        Session::flash('success_message', 'Form submitted successfully!');
                        return redirect('career')->with(compact('msg','status'));
                    }
                    else {
                        return redirect('career')->withInput()->with(compact('msg','status'));
    
                    }
                }
    
            }
        } catch (Exception $e) {
            return redirect('career')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }
    
}
