<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Page\PageHomeService;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index(Request $request)
    {   
        $data = PageHomeService::index($request);
        return view('frontend.pages.home.index', $data);
    }

    public function getServicePrice(){
        return view('frontend.pages.service.index');
    }

    public function getGuidelineDoRent(){
        if (\Auth::user()){
            $user = User::find(\Auth::user()->id);
            if (!$user) return abort(404);
            return view('frontend.pages.guideline.do_rent.index', compact('user'));
        }
        return view('frontend.pages.guideline.do_rent.index');
    }

    public function getGuidelineGoRent(){
        if (\Auth::user()){
            $user = User::find(\Auth::user()->id);
            if (!$user) return abort(404);
            return view('frontend.pages.guideline.go_rent.index', compact('user'));
        }
        return view('frontend.pages.guideline.go_rent.index');
    }

    public function loadDistrict(Request $request){
        if ($request->ajax()){
            $city = $request->city_id;
            $locations = Location::where('parent_id',$city)->select('id','name','slug')->get();
            return response()->json($locations);
        }
    }

    public function loadWards(Request $request){
        if ($request->ajax()){
            $district = $request->district_id;
            $locations = Location::where('parent_id',$district)->select('id','name','slug')->get();
            return response()->json($locations);
        }
    }
}
