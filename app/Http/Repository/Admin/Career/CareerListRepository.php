<?php
namespace App\Http\Repository\Admin\Career;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
	CareerModel
};
use Config;

class CareerListRepository  {

    public function getAll(){
        try {
           return CareerModel::orderBy('id', 'desc')->get();

        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getById($id)
    {
        try {
            $career_data = CareerModel::find($id);
            if ($career_data) {
                return $career_data;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to get by id Scolarship List.',
                'status' => 'error'
            ];
        }
    }
    public function deleteById($id)
    {
        try {
            $career_data = CareerModel::find($id);

            if ($career_data) {
                $career_data->delete();
            }

            return $career_data;
        } catch (\Exception $e) {
            return $e;
        }
    }
}