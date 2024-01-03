<?php
namespace App\Http\Repository\Admin\Gallery;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
Gallery
};
use Config;

class GalleryRepository  {

    public function getAll(){
        try {
            $data_output = Gallery::orderBy('updated_at', 'desc')->get();
            return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
     public function addAll($request){
        try {
            $data =array();
            $dataOutput = new Gallery();
            $dataOutput->image = 'null'; 
            $dataOutput->save(); 
            $last_insert_id = $dataOutput->id;

            $ImageName = $last_insert_id .'_' . rand(100000, 999999) . '_image.' . $request->image->extension();
            
            $finalOutput = Gallery::find($last_insert_id); // Assuming $request directly contains the ID
            $finalOutput->image = $ImageName; // Save the image filename to the database
            $finalOutput->save();
            
            $data['ImageName'] =$ImageName;
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
            $dataOutputByid = Gallery::find($id);
            if ($dataOutputByid) {
                return $dataOutputByid;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to get by id Data.',
                'status' => 'error'
            ];
        }
    }
    public function updateAll($request){
        try {
            $return_data = array();
            $dataOutput = Gallery::find($request->id);

            if (!$dataOutput) {
                return [
                    'msg' => 'Update Data not found.',
                    'status' => 'error'
                ];
            }
            // Store the previous image names
            $previousEnglishImage = $dataOutput->image;

            // Update the fields from the request            
            $dataOutput->save();
            $last_insert_id = $dataOutput->id;

            $return_data['last_insert_id'] = $last_insert_id;
            $return_data['image'] = $previousEnglishImage;
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
            $updateOutput = Gallery::find($id); // Assuming $request directly contains the ID
          
            if ($updateOutput) {
                $active =  $updateOutput->is_active;
                if($active == '1') {
                    Gallery::where('id',$id)
                    ->update([
                        'is_active' => '0' 
                    ]); 
                } else {
                    Gallery::where('id',$id)
                    ->update([
                        'is_active' => '1'
                    ]); 
                }

                return [
                    'msg' => 'Data updated successfully.',
                    'status' => 'success'
                ];
                   
            } else {
                return [
                    'msg' => 'Data not found.',
                    'status' => 'error'
                ];
            }

        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to Update Data.',
                'status' => 'error'
            ];
        }
    }
    public function deleteById($id){
            try {
                $deleteDataById = Gallery::find($id);
                if ($deleteDataById) {
                    if (file_exists_view(Config::get('DocumentConstant.GALLERY_DELETE') . $deleteDataById->image)){
                        removeImage(Config::get('DocumentConstant.GALLERY_DELETE') . $deleteDataById->image);
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