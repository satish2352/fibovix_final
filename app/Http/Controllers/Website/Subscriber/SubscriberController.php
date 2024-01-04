<?php

namespace App\Http\Controllers\Website\Subscriber;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Website\Subscriber\SubscriberServices;
use Session;
use Validator;


class SubscriberController extends Controller
{
    public function __construct()
    {
        $this->service = new SubscriberServices();
    }
    
    public function addSubscriber(Request $request) {
        $rules = [
            'email' => 'required|email',
            ];
        $messages = [   
            'email.required' => 'Please Enter Email.',
            'email.email' => 'Please Enter a Valid Email Address.',
        ];
    
        try {
            $validation = Validator::make($request->all(),$rules,$messages);
            if($validation->fails() )
            {
                return redirect('/')
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
                        Session::flash('success_message', 'Data submitted successfully!');
                        return redirect('/')->with(compact('msg','status'));
                    }
                    else {
                        return redirect('/')->withInput()->with(compact('msg','status'));
    
                    }
                }
    
            }
        } catch (Exception $e) {
            return redirect('/')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'errors']);
        }
    }
}
