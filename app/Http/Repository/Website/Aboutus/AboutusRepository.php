<?php
namespace App\Http\Repository\Website\AboutUs;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    Gallery,
    AboutUsContactUs

};

class AboutUsRepository  {
    // public function getAllGallery()
    // {
    //     try {
    //         $data_output = Gallery::where('is_active','=',true);
    //         $data_output =  $data_output->select('image');
    //         $data_output =  $data_output->get()
    //                         ->toArray();
    //         return  $data_output;
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

    public function aboutusContact($request)
    {
        try {
            $contact = new AboutUsContactUs();
            $contact->full_name = $request['full_name'];
            $contact->email = $request['email'];
            $contact->mobile_number = $request['mobile_number'];
            $contact->zip_code = $request['zip_code'];
            $contact->save();

            return $contact;


        } catch (\Exception $e) {
            return [
                'msg' => $e,
                'status' => 'error'
            ];
        }
    }

}