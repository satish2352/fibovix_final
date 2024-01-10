<?php
namespace App\Http\Repository\Website\Career;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\{
    CareerModel
};

class CareerListRepository
{

    public function addAll($request)
    {
        try {
            $data =array();
            $career = new CareerModel();
            $career->name = $request['name'];
            $career->email = $request['email'];
            $career->mobile_number = $request['mobile_number'];
            $career->position = $request['position'];
            $career->resume = 'null';
            $career->message = $request['message'];

            $career->save();

            // $resumeFile = $request->file('resume');
            // $resumeOriginalName = $resumeFile->getClientOriginalName();
            // $resumePath = $resumeFile->storeAs('resumes', $resumeOriginalName, 'public');

            $last_insert_id = $career->id;

            $ResumeName = $last_insert_id .'_' . rand(100000, 999999) . '_resume.' . $request->resume->extension();
            $finalOutput = CareerModel::find($last_insert_id); // Assuming $request directly contains the ID
            $finalOutput->resume = $ResumeName; // Save the image filename to the database
            $finalOutput->save();

            $data['ResumeName'] =$ResumeName;
            return $data;
            // Save the relative resume path to the database
            // $career->resume = 'resumes/' . $resumeOriginalName;
            

            // return $career;


        } catch (\Exception $e) {
            return [
                'msg' => $e,
                'status' => 'error'
            ];
        }
    }
}