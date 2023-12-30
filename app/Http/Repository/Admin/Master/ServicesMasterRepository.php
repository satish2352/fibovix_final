<?php
namespace App\Http\Repository\Admin\Master;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
	ServiceMasters
};

class ServicesMasterRepository{
    public function getAll(){
        try {
            $data_output = ServiceMasters::orderBy('updated_at', 'desc')->get();
            return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }


	public function addAll($request){
        try {
            $incidenttype_data = new ServiceMasters();
            $incidenttype_data->service_name  = $request['service_name'];
          
            $incidenttype_data->save();       
                
            return $incidenttype_data;

        } catch (\Exception $e) {
            return [
                'msg' => $e,
                'status' => 'error'
            ];
        }
    }
    public function getById($id){
        try {
            $incidenttype = ServiceMasters::find($id);
            if ($incidenttype) {
                return $incidenttype;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to get by Id Solution Type.',
                'status' => 'error'
            ];
        }
    }
    public function updateAll($request){
        try {
            $incidenttype_data = ServiceMasters::find($request->id);
            
            if (!$incidenttype_data) {
                return [
                    'msg' => 'Solution data not found.',
                    'status' => 'error'
                ];
            }
        // Store the previous image names
            $incidenttype_data->service_name = $request['service_name'];
            // $incidenttype_data->url = $request['url'];
            $incidenttype_data->save();        
        
            return [
                'msg' => 'Solution Type data updated successfully.',
                'status' => 'success'
            ];
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to update Solution Type data.',
                'status' => 'error'
            ];
        }
    }

    public function deleteById($id) {
        try {
            $incidenttype = ServiceMasters::find($id);
            if ($incidenttype) {
                // Delete the images from the storage folder
                Storage::delete([
                    'public/images/citizen-action/incidenttype-suggestion/'.$incidenttype->english_image,
                    'public/images/citizen-action/incidenttype-suggestion/'.$incidenttype->marathi_image
                ]);

                // Delete the record from the database
                
                $incidenttype->delete();
                
                return $incidenttype;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function updateOne($request){
        try {
            $slide = ServiceMasters::find($request); // Assuming $request directly contains the ID

            // Assuming 'is_active' is a field in the Slider model
            if ($slide) {
                $is_active = $slide->is_active === 1 ? 0 : 1;
                $slide->is_active = $is_active;
                $slide->save();

                return [
                    'msg' => 'Slide updated successfully.',
                    'status' => 'success'
                ];
            }

            return [
                'msg' => 'Slide not found.',
                'status' => 'error'
            ];
        } catch (\Exception $e) {
            return [
                'msg' => 'Failed to update slide.',
                'status' => 'error'
            ];
        }
    }
    
       
}