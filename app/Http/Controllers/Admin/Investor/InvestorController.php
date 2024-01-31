<?php

namespace App\Http\Controllers\Admin\Investor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Career\CareerListServices;
use Session;
use Validator;
use App\Models\InvestorModel;
class InvestorController extends Controller
{
    public function __construct(){
        $this->service = new CareerListServices();
    }
        public function index(){
            try {
                $get_careerList = InvestorModel::orderBy('updated_at', 'desc')->get();
                return view('admin.pages.investor.list-investor', compact('get_careerList'));
            } catch (\Exception $e) {
                return $e;
            }
        }

}
