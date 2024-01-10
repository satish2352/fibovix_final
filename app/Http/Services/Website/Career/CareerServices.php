<?php
namespace App\Http\Services\Website\Career;

use App\Http\Repository\Website\Career\CareerListRepository;
use Config;

// use App\Marquee;
use Carbon\Carbon;


class CareerServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new CareerListRepository();
    }
    public function addAll($request)
    {
        try {
            $add_career = $this->repo->addAll($request);

            $path = Config::get('DocumentConstant.RESUME_ADD');
            $ResumeName = $add_career['ResumeName'];
            uploadImage($request, 'resume', $path, $ResumeName);
            if ($add_career) {
                return ['status' => 'succesed', 'msg' => 'Form Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Form get Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    } 
}