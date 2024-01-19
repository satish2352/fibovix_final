<?php
namespace App\Http\Repository\Admin\Home;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
Slider
};
use Config;

class SliderRepository  {

    public function getAll(){
        try {
            $data_output = Slider::orderBy('updated_at', 'desc')->get();
            return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
     public function addAll($request){
        try {
            $data =array();
            $dataOutput = new Slider();
            $dataOutput->rank_no = $request['rank_no'];
            $dataOutput->image = 'null';
            $dataOutput->mobile_view_image = 'null';
        
            $dataOutput->save(); 
            $last_insert_id = $dataOutput->id;

            $ImageName = $last_insert_id .'_' . rand(100000, 999999) . '_image.' . $request->image->extension();
            $ImageNameMobile = $last_insert_id .'_' . rand(100000, 999999) . '_mobile_view_image.' . $request->mobile_view_image->extension();
            
            $finalOutput = Slider::find($last_insert_id); // Assuming $request directly contains the ID
            $finalOutput->image = $ImageName; // Save the image filename to the database
            $finalOutput->mobile_view_image = $ImageNameMobile; // Save the image filename to the database
            $finalOutput->save();
            
            $data['ImageName'] =$ImageName;
            $data['mobile_view_image'] =$ImageNameMobile;
            return $data;

        } catch (\Exception $e) {
            return [
                'msg' => $e,
                'status' => 'error'
            ];
        }
    }
    public function getById($id){
        try {
            $dataOutputByid = Slider::find($id);
            if ($dataOutputByid) {
                return $dataOutputByid;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to get by id Data.',
                'status' => 'error'
            ];
        }
    }
    public function updateAll($request){
        try {
            $return_data = array();
            $dataOutput = Slider::find($request->id);

            if (!$dataOutput) {
                return [
                    'msg' => 'Update Data not found.',
                    'status' => 'error'
                ];
            }
            // Store the previous image names
            $previousEnglishImage = $dataOutput->image;
            $previousEnglishImage_mobile_view_image = $dataOutput->mobile_view_image;

            // Update the fields from the request
            $dataOutput->rank_no = $request['rank_no'];
            
            $dataOutput->save();
            $last_insert_id = $dataOutput->id;

            $return_data['last_insert_id'] = $last_insert_id;
            $return_data['image'] = $previousEnglishImage;
            $return_data['mobile_view_image'] = $previousEnglishImage_mobile_view_image;
            return  $return_data;
        
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to Update Data.',
                'status' => 'error',
                'error' => $e->getMessage() // Return the error message for debugging purposes
            ];
        }
    }
    public function updateOne($id){
        try {
            $updateOutput = Slider::find($id); // Assuming $id directly contains the ID

            if ($updateOutput) {
                $active =  $updateOutput->is_active;
                // dd($active);
                if($active == '1') {
                    Slider::where('id',$id)
                    ->update([
                        'is_active' => '0' 
                    ]); 
                } else {
                    Slider::where('id',$id)
                    ->update([
                        'is_active' => '1'
                    ]); 
                }
               

                return [
                    'msg' => 'Slide updated successfully.',
                    'status' => 'success'
                ];
            }

            return [
                'msg' => 'Data not Found.',
                'status' => 'error'
            ];
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to Update Data.',
                'status' => 'error'
            ];
        }
    }
    public function deleteById($id){
            try {
                $deleteDataById = Slider::find($id);
                if ($deleteDataById) {
                    if (file_exists_view(Config::get('DocumentConstant.SLIDER_DELETE') . $deleteDataById->image)){
                        removeImage(Config::get('DocumentConstant.SLIDER_DELETE') . $deleteDataById->image);
                    }
                    $deleteDataById->delete();
                    
                    return $deleteDataById;
                } else {
                    return null;
                }
            } catch (\Exception $e) {
                return $e;
            }
    }

}