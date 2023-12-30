<?php
namespace App\Http\Services\Website\AboutUs;

use App\Http\Repository\Website\AboutUs\AboutUsRepository;

// use App\Marquee;
use Carbon\Carbon;


class AboutUsServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new AboutusRepository();
    }

    
    
    public function aboutusContact($request)
    {
        try {
            $add_contact = $this->repo->aboutusContact($request);
            if ($add_contact) {
                return ['status' => 'success', 'msg' => 'Contact Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Contact get Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    } 
    
}