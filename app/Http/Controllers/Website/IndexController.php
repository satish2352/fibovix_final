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
    MarqueeTab

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
            $data_output_slider = $this->service->getAllSlider();
            $data_output_courses_offered = $this->service->getAllCoursesOffered();
            $data_output_upcoming_courses = $this->service->getAllUpcomingCourses();
            $data_output_testimonial = $this->service->getAllTestimonial();
            
         
            return view('website.pages.index', compact('data_output_slider','data_output_courses_offered','data_output_upcoming_courses','data_output_testimonial'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function getAllAjaxMultimedia(Request $request) {
        $return_data = $this->service->getAllGallery($request);
        return $return_data['gallery_data'];
    }
    static function getCommonFormData() {
        try {
            $retun_data = [];
            $data_output_location_address = LocationAddress::where('is_active', true)
            ->select(
                'location_address.name',
                'location_address.id',
            )
            ->get()
            ->toArray();

        $retun_data['data_output_location_address'] = $data_output_location_address;

            $data_output_all_board = EducationBoard::where('is_active', true)
                ->select(
                    'education_board.name',
                    'education_board.id',
                )
                ->get()
                ->toArray();
    
            $retun_data['data_output_all_board'] = $data_output_all_board;
    
            $data_output_all_class = EducationClass::where('is_active', true)
                ->select(
                    'education_class.name',
                    'education_class.id',
                )
                ->get()
                ->toArray();
    
            $retun_data['data_output_all_class'] = $data_output_all_class;
            
            $data_output_marquee_tab = MarqueeTab::where('is_active', true)
                ->select(
                    'marquee_tab.title',
                    'marquee_tab.id',
                )
                ->get()
                ->toArray();
    
            $retun_data['data_output_marquee_tab'] = $data_output_marquee_tab;
            
            return $retun_data;
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error($e);
    
            // Return an error response
            return ['error' => 'An error occurred while fetching data. Please try again later.'];
        }
    }
    
    // ================

    public function showParticularUpcominCourses()
    {
        try {
            $data_output = $this->service->showParticularUpcominCourses();

        } catch (\Exception $e) {
            return $e;
        }
        return view('website.pages.particularcoursedetails',compact('data_output'));
    }

    public function aboutus() {
        return view('website.pages.aboutus');
    }

    
    public function contactus() {
        return view('website.pages.contactus');
    }


    
    public function resources() {
        return view('website.pages.resources-insights');
    }

    
    public function services() {
        return view('website.pages.services');
    }
}
