<?php

namespace App\Http\Controllers\Admin\Career;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Career\CareerListServices;
use Session;
use Validator;
use App\Models\CareerModel;
class CareerListController extends Controller
{
    public function __construct(){
        $this->service = new CareerListServices();
        }
        public function index(){
            try {
                $get_careerList= $this->service->getAll();
                // dd($get_careerList);
                
                return view('admin.pages.career.list-career', compact('get_careerList'));
            } catch (\Exception $e) {
                return $e;
            }
        }
        // public function show(Request $request) {
        //     try {
        //         $contactus = $this->service->getById($request->show_id);
        //         return view('admin.pages.career.show-contactus-form', compact('contactus'));
        //     } catch (\Exception $e) {
        //         return $e;
        //     }
        // }
        // public function destroy(Request $request){
        //     try {
        //         $delete_contactus = $this->service->deleteById($request->delete_id);
        //         if ($delete_contactus) {
        //             $msg = $delete_contactus['msg'];
        //             $status = $delete_contactus['status'];
        //             if ($status == 'success') {
        //                 return redirect('list-contactus-form')->with(compact('msg', 'status'));
        //             } else {
        //                 return redirect()->back()
        //                     ->withInput()
        //                     ->with(compact('msg', 'status'));
        //             }
        //         }
        //     } catch (\Exception $e) {
        //         return $e;
        //     }
        // } 
}
