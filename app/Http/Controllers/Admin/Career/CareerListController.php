<?php

namespace App\Http\Controllers\Admin\Career;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Career\CareerListServices;
use Session;
use Validator;
use App\Models\CareerModel;
class CareerListController extends Controller
{
    public function __construct(){
        $this->service = new CareerListServices();
        }
        public function index(){
            try {
                $get_careerList= $this->service->getAll();
                // dd($get_careerList);
                
                return view('admin.pages.career.list-career', compact('get_careerList'));
            } catch (\Exception $e) {
                return $e;
            }
        }

}
