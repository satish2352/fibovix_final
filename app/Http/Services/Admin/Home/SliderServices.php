<?php
namespace App\Http\Services\Admin\Home;
use App\Http\Repository\Admin\Home\SliderRepository;
use Carbon\Carbon;
use App\Models\ {
    Slider
    };
// use App\Helpers\helpercustom; // Import the namespace of your helper file

use Config;
class SliderServices
{
	protected $repo;
    public function __construct(){
        $this->repo = new SliderRepository();
    }
    public function getAll(){
        try {
            return $this->repo->getAll();
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function addAll($request){
        try {
            $last_id = $this->repo->addAll($request);

            $path = Config::get('DocumentConstant.SLIDER_ADD');
            $ImageName = $last_id['ImageName'];
            $mobile_view_image = $last_id['mobile_view_image'];
            uploadImage($request, 'image', $path, $ImageName);
            uploadImage($request, 'mobile_view_image', $path, $mobile_view_image);
           
            if ($last_id) {
                return ['status' => 'success', 'msg' => 'Slide Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => ' Slide get Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }
    public function getById($id){
        try {
            return $this->repo->getById($id);
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function updateAll($request){
        try {
            $return_data = $this->repo->updateAll($request);
            
            $path = Config::get('DocumentConstant.SLIDER_ADD');
            if ($request->hasFile('image')) {
                if ($return_data['image']) {
                    if (file_exists_view(Config::get('DocumentConstant.SLIDER_DELETE') . $return_data['image'])) {
                        removeImage(Config::get('DocumentConstant.SLIDER_DELETE') . $return_data['image']);
                    }

                }
                if ($request->hasFile('image')) {
                    $englishImageName = $return_data['last_insert_id'] . '_' . rand(100000, 999999) . '_image.' . $request->file('image')->extension();
                } 
                
                // $englishImageName = $return_data['last_insert_id'] . '_' . rand(100000, 999999) . '_image.' . $request->image->extension();
                uploadImage($request, 'image', $path, $englishImageName);
                $slide_data = Slider::find($return_data['last_insert_id']);
                $slide_data->image = $englishImageName;
                $slide_data->save();
            }


            if ($request->hasFile('mobile_view_image')) {
                if ($return_data['mobile_view_image']) {
                    if (file_exists_view(Config::get('DocumentConstant.SLIDER_DELETE') . $return_data['mobile_view_image'])) {
                        removeImage(Config::get('DocumentConstant.SLIDER_DELETE') . $return_data['mobile_view_image']);
                    }

                }
                if ($request->hasFile('mobile_view_image')) {
                    $englishImageName = $return_data['last_insert_id'] . '_' . rand(100000, 999999) . '_mobile_view_image.' . $request->file('mobile_view_image')->extension();
                } 
                
                uploadImage($request, 'mobile_view_image', $path, $englishImageName);
                $slide_data = Slider::find($return_data['last_insert_id']);
                $slide_data->mobile_view_image = $englishImageName;
                $slide_data->save();
            }
                
            // print_r($return_data);
            // die();
            if ($return_data) {
                return ['status' => 'success', 'msg' => 'Slide Updated Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Slide  Not Updated.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }
    public function updateOne($id){
        return $this->repo->updateOne($id);
    }   
    public function deleteById($id)
    {
        try {
            $delete = $this->repo->deleteById($id);
            if ($delete) {
                return ['status' => 'success', 'msg' => 'Deleted Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => ' Not Deleted.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        } 
    }
}