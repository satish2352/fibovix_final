<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Website\IndexServices;
use Session;
use Validator;
use App\Models\ {
    LocationAddress,
    EducationBoard,
    EducationClass,
    MarqueeTab,
    ResourcesAndInsights

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

    // public function getAllAjaxMultimedia(Request $request) {
    //     $return_data = $this->service->getAllGallery($request);
    //     return $return_data['gallery_data'];
    // }
    // static function getCommonFormData() {
    //     try {
    //         $retun_data = [];
    //         $data_output_location_address = LocationAddress::where('is_active', true)
    //         ->select(
    //             'location_address.name',
    //             'location_address.id',
    //         )
    //         ->get()
    //         ->toArray();

    //     $retun_data['data_output_location_address'] = $data_output_location_address;

    //         $data_output_all_board = EducationBoard::where('is_active', true)
    //             ->select(
    //                 'education_board.name',
    //                 'education_board.id',
    //             )
    //             ->get()
    //             ->toArray();
    
    //         $retun_data['data_output_all_board'] = $data_output_all_board;
    
    //         $data_output_all_class = EducationClass::where('is_active', true)
    //             ->select(
    //                 'education_class.name',
    //                 'education_class.id',
    //             )
    //             ->get()
    //             ->toArray();
    
    //         $retun_data['data_output_all_class'] = $data_output_all_class;
            
    //         $data_output_marquee_tab = MarqueeTab::where('is_active', true)
    //             ->select(
    //                 'marquee_tab.title',
    //                 'marquee_tab.id',
    //             )
    //             ->get()
    //             ->toArray();
    
    //         $retun_data['data_output_marquee_tab'] = $data_output_marquee_tab;
            
    //         return $retun_data;
    //     } catch (\Exception $e) {
    //         // Log the error for debugging
    //         \Log::error($e);
    
    //         // Return an error response
    //         return ['error' => 'An error occurred while fetching data. Please try again later.'];
    //     }
    // }
    
    // ================

    // public function showParticularUpcominCourses()
    // {
    //     try {
    //         $data_output = $this->service->showParticularUpcominCourses();

    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    //     return view('website.pages.particularcoursedetails',compact('data_output'));
    // }

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
        return view('website.pages.services');
    }

    
    public function resouceInsightsDetails() {
        return view('website.pages.details');
    }

    public function media() {
        return view('website.pages.media');
    }
}
