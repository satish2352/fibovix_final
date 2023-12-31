<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Home\AdditionalSolutionsServices;
use Session;
use Validator;
use Config;

class AdditionalSolutionsController extends Controller
{ 
    public function __construct(){
        $this->service = new AdditionalSolutionsServices();
        }
        public function index(){
            try {
                $getOutput = $this->service->getAll();
                return view('admin.pages.home.additional-solutions.list-additional-solutions', compact('getOutput'));
            } catch (\Exception $e) {
                return $e;
            }
        }    
        public function add(){
            return view('admin.pages.home.additional-solutions.add-additional-solutions');
        }
        public function store(Request $request){
            $rules = [
                'title' => 'required|min:7|max:150',
                'short_description' => 'required|min:7|max:150',
                'long_description' => 'required|min:7|max:150',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:501|min:5|dimensions:min_width=100,min_height=100,max_width=529,max_height=509',
            ];
            $messages = [    
                'title.required'=>'Please enter title.',
                'title.min'=>'Please enter minimum 7 character.',
                'title.max'=>'Please enter maximum character upto 150.',
                'short_description.required' => 'Please  enter description.',
                'short_description.min'=>'Please enter minimum 7 character.',
                'short_description.max'=>'Please enter maximum character upto 150.',
                'long_description.required' => 'Please  enter description.',
                'long_description.min'=>'Please enter minimum 7 character.',
                'long_description.max'=>'Please enter maximum character upto 150.',
                'image.required' => 'The image is required.',
                'image.image' => 'The image must be a valid image file.',
                'image.mimes' => 'The image must be in JPEG, PNG, JPG format.',
                'image.max' => 'The image size must not exceed 500 KB .',
                'image.min' => 'The image size must not be less than 5 KB .',
                'image.dimensions' => 'The image dimensions must be between 100X100 and 500x529 pixels.',
            ];
    
            try {
                $validation = Validator::make($request->all(), $rules, $messages);
                
                if ($validation->fails()) {
                    return redirect('add-additional-solutions')
                        ->withInput()
                        ->withErrors($validation);
                } else {
                    $add_record = $this->service->addAll($request);
    
                    if ($add_record) {
                        $msg = $add_record['msg'];
                        $status = $add_record['status'];
    
                        if ($status == 'success') {
                            return redirect('list-additional-solutions')->with(compact('msg', 'status'));
                        } else {
                            return redirect('add-additional-solutions')->withInput()->with(compact('msg', 'status'));
                        }
                    }
                }
            } catch (Exception $e) {
                return redirect('add-additional-solutions')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
            }
        }
        public function show(Request $request){
            try {
                $showData = $this->service->getById($request->show_id);
                return view('admin.pages.home.additional-solutions.show-additional-solutions', compact('showData'));
            } catch (\Exception $e) {
                return $e;
            }
        }
        public function edit(Request $request){
            $edit_data_id = base64_decode($request->edit_id);
            $editData = $this->service->getById($edit_data_id);
           
            return view('admin.pages.home.additional-solutions.edit-additional-solutions', compact('editData'));
        }
        public function update(Request $request){
            $rules = [
                'title' => 'required|min:7|max:150',
                'short_description' => 'required|min:7|max:150',
                'long_description' => 'required|min:7|max:150',                
            ];
    
            if($request->has('image')) {
                $rules['image'] = 'required|image|mimes:jpeg,png,jpg|max:501|min:5|dimensions:min_width=100,min_height=100,max_width=529,max_height=509';
            }
           
            $messages = [   
                'title.required'=>'Please enter title.',
                'title.min'=>'Please enter minimum 7 character.',
                'title.max'=>'Please enter maximum character upto 150.',
                'short_description.required' => 'Please  enter description.',
                'short_description.min'=>'Please enter minimum 7 character.',
                'short_description.max'=>'Please enter maximum character upto 150.',
                'long_description.required' => 'Please  enter description.',
                'long_description.min'=>'Please enter minimum 7 character.',
                'long_description.max'=>'Please enter maximum character upto 150.',
                'image.required' => 'The image is required.',
                'image.image' => 'The image must be a valid image file.',
                'image.mimes' => 'The image must be in JPEG, PNG, JPG format.',
                'image.max' => 'The image size must not exceed 500 KB .',
                'image.min' => 'The image size must not be less than 5 KB .',
                'image.dimensions' => 'The image dimensions must be between 100X100 and 500x529 pixels.',
            ];
    
            try {
                $validation = Validator::make($request->all(),$rules, $messages);
                if ($validation->fails()) {
                    return redirect()->back()
                        ->withInput()
                        ->withErrors($validation);
                } else {
                    $update_data = $this->service->updateAll($request);
                    if ($update_data) {
                        $msg = $update_data['msg'];
                        $status = $update_data['status'];
                        if ($status == 'success') {
                            return redirect('list-additional-solutions')->with(compact('msg', 'status'));
                        } else {
                            return redirect()->back()
                                ->withInput()
                                ->with(compact('msg', 'status'));
                        }
                    }
                }
            } catch (Exception $e) {
                return redirect()->back()
                    ->withInput()
                    ->with(['msg' => $e->getMessage(), 'status' => 'error']);
            }
        }
        public function updateOne(Request $request){
            try {
                $active_id = $request->active_id;
            $result = $this->service->updateOne($active_id);
                return redirect('list-additional-solutions')->with('flash_message', 'Updated!');  
            } catch (\Exception $e) {
                return $e;
            }
        }
        public function destroy(Request $request){
            try {
                $delete_record = $this->service->deleteById($request->delete_id);
                if ($delete_record) {
                    $msg = $delete_record['msg'];
                    $status = $delete_record['status'];
                    if ($status == 'success') {
                        return redirect('list-additional-solutions')->with(compact('msg', 'status'));
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
