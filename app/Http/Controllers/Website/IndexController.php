<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Website\IndexServices;
use Session;
use Validator;
use App\Models\ {

    ResourcesAndInsights,
    ServiceMasters,
    ServiceDetails,
    Gallery

};

use App\Models\ {
    AdditionalSolutions,
    Slider,
    OurSolutions,
    OurSolutionsMasters
};

class IndexController extends Controller
{
    public function __construct()
    {
        $this->service = new IndexServices();  
    }
    public function index(Request $request)
    {
        try {

            $additionalSolutions = AdditionalSolutions::where('is_deleted','=',false)->orderBy('updated_at', 'desc')->get();
            $ourSolutions = OurSolutions::leftJoin('our_solutions_master', 'our_solutions_master.id', '=', 'our_solutions.solution_id')
                                    ->where('our_solutions.is_active','=',true)
                                    ->select('our_solutions.id','our_solutions.solution_id', 'our_solutions.title',
                                    'our_solutions.short_description',
                                    'our_solutions.long_description',
                                    'our_solutions.image',
                                    'our_solutions_master.solution_name',
                                    'our_solutions_master.id as our_solutions_master_id')
                                    ->get();
// dd($ourSolutions);
            $ourSolutionsMaster  = OurSolutionsMasters::where('is_active','=',true)->orderBy('updated_at', 'desc')->get();
            $data_output_slider = Slider::where('is_active', true)->get();
            // $data_output_courses_offered = $this->service->getAllCoursesOffered();
            // $data_output_upcoming_courses = $this->service->getAllUpcomingCourses();
            // $data_output_testimonial = $this->service->getAllTestimonial();
            
         
            // return view('website.pages.index', compact('data_output_slider','data_output_courses_offered','data_output_upcoming_courses','data_output_testimonial'));
            return view('website.pages.index', compact('additionalSolutions','data_output_slider','ourSolutions','ourSolutionsMaster'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    // 

    public function listOurSolutionsAjax(Request $request)
    {
        try {

            $ourSolutions = OurSolutions::leftJoin('our_solutions_master', 'our_solutions_master.id', '=', 'our_solutions.solution_id');
                                    if($request['our_solutions_master_id'] != 'all') {
                                        $ourSolutions =  $ourSolutions->where('our_solutions_master.id','=',$request['our_solutions_master_id']);
                                    }
            $ourSolutions =  $ourSolutions->select('our_solutions.id','our_solutions.solution_id', 'our_solutions.title',
                                    'our_solutions.short_description',
                                    'our_solutions.long_description',
                                    'our_solutions.image',
                                    'our_solutions_master.solution_name',
                                    'our_solutions_master.id as our_solutions_master_id')
                                    ->get();

            return $ourSolutions;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function aboutus() {
        return view('website.pages.aboutus');
    }

    
    public function contactus() {
        return view('website.pages.contactus');
    }


    
    public function resources() {

        $resourceInsights = ResourcesAndInsights::where('is_deleted','=',false)->orderBy('updated_at', 'desc')->get();
        return view('website.pages.resources-insights',compact('resourceInsights'));
    }

    
    public function services() {

        $all_services = ServiceMasters::where(['is_active'=>true] )->orderBy('updated_at', 'desc')->get();
        $all_services_details = ServiceDetails::leftJoin('services_masters', 'services_masters.id', '=', 'service_details.service_id')
                                                        ->select('service_details.id','service_details.service_id', 'service_details.title',
                                                        'service_details.short_description',
                                                        'service_details.long_description',
                                                        'service_details.image',
                                                        'services_masters.service_name',
                                                        'services_masters.id as service_details_id')
                                                        ->get();
        return view('website.pages.services',compact('all_services','all_services_details'));
    }


    

    public function listServicesAjax(Request $request)
    {
        try {

            $all_services_details = ServiceDetails::leftJoin('services_masters', 'services_masters.id', '=', 'service_details.service_id');
            if($request['our_services_master_id'] != 'all') {
                $all_services_details =  $all_services_details->where('services_masters.id','=',$request['our_services_master_id']);
            }
            $all_services_details =  $all_services_details->select('service_details.id','service_details.service_id', 'service_details.title',
                                    'service_details.short_description',
                                    'service_details.long_description',
                                    'service_details.image',
                                    'services_masters.service_name',
                                    'services_masters.id as service_details_id')
                                    ->get();

            return $all_services_details;
        } catch (\Exception $e) {
            return $e;
        }
    }

    
    public function resouceInsightsDetails() {
        return view('website.pages.details');
    }

    public function media() {
        $gallery_data  = Gallery::where('is_active','=',true)->orderBy('updated_at', 'desc')->get();
        return view('website.pages.media',compact('gallery_data'));
    }


}
