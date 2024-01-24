<?php

namespace App\Http\Controllers\Admin\Trader;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\Career\CareerListServices;
use Session;
use Validator;
use App\Models\TraderModel;
class TraderController extends Controller
{
    public function __construct(){
        $this->service = new CareerListServices();
        }
        public function index(){
            try {
                $get_careerList= TraderModel::get();
                // dd($get_careerList);
                
                return view('admin.pages.trader.list-trader', compact('get_careerList'));
            } catch (\Exception $e) {
                return $e;
            }
        }

}
