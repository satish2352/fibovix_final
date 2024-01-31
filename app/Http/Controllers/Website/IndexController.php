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
    Gallery,
    InvestorModel,
    TraderModel

};
use Config;
use App\Models\ {
    AdditionalSolutions,
    Slider,
    OurSolutions,
    OurSolutionsMasters,
    WebsiteContactDetails
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

            $website_contact_details = WebsiteContactDetails::where('id',1)->get()->toArray();
            $additionalSolutions = AdditionalSolutions::where('is_deleted', false)
                ->where('is_active', true)
                ->orderBy('updated_at', 'desc')
                ->get();
            // $ourSolutions = OurSolutions::leftJoin('our_solutions_master', 'our_solutions_master.id', '=', 'our_solutions.solution_id')
            //                         ->where('our_solutions.is_active','=',true)
            //                         ->select('our_solutions.id','our_solutions.solution_id', 'our_solutions.title',
            //                         'our_solutions.short_description',
            //                         'our_solutions.long_description',
            //                         'our_solutions.image',
            //                         'our_solutions_master.solution_name',
            //                         'our_solutions_master.id as our_solutions_master_id')
            //                         ->get();
            // $ourSolutionsMaster  = OurSolutionsMasters::where('is_active','=',true)->orderBy('updated_at', 'desc')->get();

            $all_services = ServiceMasters::where(['is_active'=>true] )->orderBy('updated_at', 'desc')->get();
            $all_services_details = ServiceDetails::leftJoin('services_masters', 'services_masters.id', '=', 'service_details.service_id')
                                                            ->select('service_details.id','service_details.service_id', 'service_details.title',
                                                            'service_details.short_description',
                                                            'service_details.long_description',
                                                            'service_details.image',
                                                            'services_masters.service_name',
                                                            'services_masters.id as service_details_id')
                                                            ->get();
            $data_output_slider = Slider::where('is_active', true)->get();
        
            // return view('website.pages.index', compact('additionalSolutions','data_output_slider','ourSolutions','ourSolutionsMaster','website_contact_details'));
            return view('website.pages.index', compact('additionalSolutions','data_output_slider','all_services_details','all_services','website_contact_details'));
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
            // dd($ourSolutions);
            return $ourSolutions;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function aboutus() {
        $website_contact_details = WebsiteContactDetails::where('id',1)->get()->toArray();
        return view('website.pages.aboutus',compact('website_contact_details'));
    }

    
    public function contactus() {
        $website_contact_details = WebsiteContactDetails::where('id',1)->get()->toArray();
        return view('website.pages.contactus',compact('website_contact_details'));
    }


    
    public function resources() {
        $website_contact_details = WebsiteContactDetails::where('id',1)->get()->toArray();
    $resourceInsights = ResourcesAndInsights::where('is_deleted', false)
                        ->where('is_active', true)
                        ->orderBy('updated_at', 'desc')
                        ->get();        
    return view('website.pages.resources-insights',compact('resourceInsights','website_contact_details'));
    }

    
    public function services() {
        $website_contact_details = WebsiteContactDetails::where('id',1)->get()->toArray();
        $all_services = ServiceMasters::where(['is_active'=>true] )->orderBy('updated_at', 'desc')->get();
        $all_services_details = ServiceDetails::leftJoin('services_masters', 'services_masters.id', '=', 'service_details.service_id')
                                            ->where('services_masters.is_active', true)
                                            ->where('service_details.is_active', true)
                                            ->select(
                                                'service_details.id',
                                                'service_details.service_id',
                                                'service_details.title',
                                                'service_details.short_description',
                                                'service_details.long_description',
                                                'service_details.image',
                                                'services_masters.service_name',
                                                'services_masters.id as service_details_id',
                                                'service_details.is_active as service_details_is_active'
                                            )
                                            ->get();
        // dd($all_services_details);

        return view('website.pages.services',compact('all_services','all_services_details','website_contact_details'));
    }


    

    public function listServicesAjax(Request $request)
    {
        try {

            $all_services_details = ServiceDetails::leftJoin('services_masters', 'services_masters.id', '=', 'service_details.service_id');
            if($request['our_services_master_id'] != 'all') {
                $all_services_details =  $all_services_details->where('services_masters.id','=',$request['our_services_master_id']);
            }
            $all_services_details = ServiceDetails::leftJoin('services_masters', 'services_masters.id', '=', 'service_details.service_id')
                                            ->where('services_masters.is_active', true)
                                            ->where('service_details.is_active', true)
                                            ->select(
                                                'service_details.id',
                                                'service_details.service_id',
                                                'service_details.title',
                                                'service_details.short_description',
                                                'service_details.long_description',
                                                'service_details.image',
                                                'services_masters.service_name',
                                                'services_masters.id as service_details_id',
                                                'service_details.is_active as service_details_is_active'
                                            )
                                            ->get();

            return $all_services_details;
        } catch (\Exception $e) {
            return $e;
        }
    }

    
    public function resouceInsightsDetails(Request $request) {
        $website_contact_details = WebsiteContactDetails::where('id',1)->get()->toArray();
        $id = $request->id;
        $insights_details = ResourcesAndInsights::where('id', $id)->first();
        return view('website.pages.details',compact('website_contact_details','insights_details'));
    }

    public function media() {
        $website_contact_details = WebsiteContactDetails::where('id',1)->get()->toArray();
        $gallery_data  = Gallery::where('is_active','=',true)->orderBy('updated_at', 'desc')->get();
        return view('website.pages.media',compact('gallery_data','website_contact_details'));
    }

    public function career()
    {
        $website_contact_details = WebsiteContactDetails::where('id',1)->get()->toArray();
        return view('website.pages.career',compact('website_contact_details'));
    }

    public function investorStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:20', 
            'comment' => 'required|string',
        ]);

    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = new InvestorModel;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->contact = $request->input('contact');
        $data->state = $request->input('state');
        $data->city = $request->input('city');
        $data->comment = $request->input('comment');
        
        $data->save();

        return redirect()->back()->with('success', 'Data has been successfully stored.');
    }
public function traderStore(Request $request)
{
    try {
        $data = array();
        $trader = new TraderModel();
        $trader->name = $request['name'];
        $trader->email = $request['email'];
        $trader->contact = $request['contact'];
        $trader->state = $request['state'];
        $trader->city = $request['city'];
        $trader->comment = $request['comment'];
        $trader->resume = 'null'; // Are you sure you want to store the string 'null' here?

        $trader->save();

        $last_insert_id = $trader->id; // Fix the variable name here

        $ResumeName = $last_insert_id . '_' . rand(100000, 999999) . '_resume.' . $request->file('resume')->extension();
        
        $finalOutput = TraderModel::find($last_insert_id);
        $finalOutput->resume = $ResumeName;
        $finalOutput->save();

        $data['ResumeName'] = $ResumeName;
        // Commented out the return here so that the code below runs
        // return $data;

        $add_career = $data;
        $path = Config::get('DocumentConstant.RESUME_ADD');
        $ResumeName = $add_career['ResumeName'];
        uploadImage($request, 'resume', $path, $ResumeName);
        
        if ($add_career) {
            return redirect()->back()->with('success', 'Data has been successfully stored.');
        } else {
            return redirect()->back()->with('error', 'Data has not been successfully stored.');
        }
    } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data has not been successfully stored.');
       
    }
}

}
