<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Home\OurSolutionsServices;
use Session;
use Validator;
use Config;
use App\Models\SolutionsMaster;

class OurSolutionsController extends Controller
{ 
    public function __construct(){
        $this->service = new OurSolutionsServices();
        }
        public function index(){
            try {
                $getOutput = $this->service->getAll();
                $combinedData = SolutionsMaster::join('our_solutions', 'our_solutions.solution_id', '=', 'our_solutions_master.id')
                                ->select('our_solutions.*', 'our_solutions_master.solution_name')
                                ->get();;
                // dd($combinedData);
                return view('admin.pages.home.our-solutions.list-our-solutions', compact('combinedData'));
            } catch (\Exception $e) {
                return $e;
            }
        }    
       public function add(){
            $data = SolutionsMaster::where('is_active', true)->get();
            // dd($data);
            return view('admin.pages.home.our-solutions.add-our-solutions', ['data' => $data]);
        }

        public function store(Request $request){
// dd($request);
            $rules = [
                'title' => 'required',
                'short_description' => 'required',
                'long_description' => 'required',
                'solution_id' => 'required',
                // 'image' => 'required|image|mimes:jpeg,png,jpg|max:'.Config::get("AllFileValidation.COURSES_OFFERED_IMAGE_MAX_SIZE").'|dimensions:min_width=100,min_height=100,max_width=800,max_height=800|min:'.Config::get("AllFileValidation.COURSES_OFFERED_IMAGE_MIN_SIZE").'',
               
            ];
            $messages = [    
                'title.required'=>'Please enter title.',
                'short_description.required' => 'Please  enter description.',
                'long_description.required' => 'Please  enter description.',
                'image.required' => 'The image is required.',
                'solution_id.required' => 'Select the atleats one option',
                'image.image' => 'The image must be a valid image file.',
                'image.mimes' => 'The image must be in JPEG, PNG, JPG format.',
                // 'image.max' => 'The image size must not exceed '.Config::get("AllFileValidation.COURSES_OFFERED_IMAGE_MAX_SIZE").'KB .',
                'image.min' => 'The image size must not be less than '.Config::get("AllFileValidation.COURSES_OFFERED_IMAGE_MIN_SIZE").'KB .',
                'image.dimensions' => 'The image dimensions must be between 100X100 and 800x800 pixels.',
            ];

    
            try {
                $validation = Validator::make($request->all(), $rules, $messages);
                        
                if ($validation->fails()) {
                    return redirect('add-our-solutions')
                        ->withInput()
                        ->withErrors($validation);
                } else {

                    $add_record = $this->service->addAll($request);
        
                    if ($add_record) {
                        $msg = $add_record['msg'];
                        $status = $add_record['status'];
    
                        if ($status == 'success') {
                            return redirect('list-our-solutions')->with(compact('msg', 'status'));
                        } else {
                            return redirect('add-our-solutions')->withInput()->with(compact('msg', 'status'));
                        }
                    }
                }
            } catch (Exception $e) {
                // dd($e);
                return redirect('add-our-solutions')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
            }
        }
        public function show(Request $request){
            try {
                $showData = $this->service->getById($request->show_id);
                return view('admin.pages.home.our-solutions.show-our-solutions', compact('showData'));
            } catch (\Exception $e) {
                return $e;
            }
        }
        public function edit(Request $request){
            $edit_data_id = base64_decode($request->edit_id);
            $editData = $this->service->getById($edit_data_id);
           
            return view('admin.pages.home.our-solutions.edit-our-solutions', compact('editData'));
        }
        public function update(Request $request){
            $rules = [
                'title' => 'required',
                
            ];
    
            if($request->has('image')) {
                $rules['image'] = 'required|image|mimes:jpeg,png,jpg|max:'.Config::get("AllFileValidation.COURSES_OFFERED_IMAGE_MAX_SIZE").'|dimensions:min_width=100,min_height=100,max_width=800,max_height=800|min:'.Config::get("AllFileValidation.COURSES_OFFERED_IMAGE_MIN_SIZE");
            }
           
            $messages = [   
                'title.required'=>'Please enter Title.',
                'image.required' => 'The image is required.',
                'image.image' => 'The image must be a valid image file.',
                'image.mimes' => 'The image must be in JPEG, PNG, JPG format.',
                'image.max' => 'The image size must not exceed '.Config::get("AllFileValidation.COURSES_OFFERED_IMAGE_MAX_SIZE").'KB .',
                'image.min' => 'The image size must not be less than '.Config::get("AllFileValidation.COURSES_OFFERED_IMAGE_MIN_SIZE").'KB .',
                'image.dimensions' => 'The image dimensions must be between 100X100 and 800x800 pixels.',
               
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
                            return redirect('list-our-solutions')->with(compact('msg', 'status'));
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
                return redirect('list-our-solutions')->with('flash_message', 'Updated!');  
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
                        return redirect('list-our-solutions')->with(compact('msg', 'status'));
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
