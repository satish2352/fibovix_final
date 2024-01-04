<?php
namespace App\Http\Services\Website\Subscriber;

use App\Http\Repository\Website\Subscriber\SubscriberRepository;

// use App\Marquee;
use Carbon\Carbon;


class SubscriberServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new SubscriberRepository();
    }

    
    
    public function aboutusContact($request)
    {
        try {
            $add_contact = $this->repo->aboutusContact($request);
            if ($add_contact) {
                return ['status' => 'success', 'msg' => 'Data Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'Data get Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    } 
    
}