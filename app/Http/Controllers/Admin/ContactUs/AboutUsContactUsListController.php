<?php

namespace App\Http\Controllers\Admin\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\ContactUs\AboutUsContactUsListServices;
use Session;
use Validator;

class AboutUsContactUsListController extends Controller
{
    public function __construct(){
        $this->service = new AboutUsContactUsListServices();
        }
        public function index(){
            try {
                $get_contactus= $this->service->getAll();
                return view('admin.pages.about-us-contactus.list-contactus-form', compact('get_contactus'));
            } catch (\Exception $e) {
                return $e;
            }
        }
        public function show(Request $request) {
            try {
                $contactus = $this->service->getById($request->show_id);
                return view('admin.pages.about-us-contactus.show-contactus-form', compact('contactus'));
            } catch (\Exception $e) {
                return $e;
            }
        }
        public function destroy(Request $request){
            try {
                $delete_contactus = $this->service->deleteById($request->delete_id);
                if ($delete_contactus) {
                    $msg = $delete_contactus['msg'];
                    $status = $delete_contactus['status'];
                    if ($status == 'success') {
                        return redirect('list-contactus-form')->with(compact('msg', 'status'));
                    } else {
                        return redirect()->back()
                            ->withInput()
                            ->with(compact('msg', 'status'));
                    }
                }
            } catch (\Exception $e) {
                return $e;
            }
        } 
}
