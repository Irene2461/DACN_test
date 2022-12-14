<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Location;
use App\Models\RechargeHistory;
use App\Models\User;
use App\Models\Room;
class AdminDashboardController extends Controller
{
    public function index(){
        $categories = Category::orderByDesc('id');
        $locations = Location::orderByDesc('id')->get();
        $rechargeHistory = RechargeHistory::with('user:id,name')->orderByDesc('id');
        $rooms = Room::with('category:id,name')->orderByDesc('id');
        $users = User::orderByDesc('id');
        $dataPoints = array();
        foreach(Location::where('parent_id', 0)->get() ?? [] as $item){
            array_push($dataPoints, array("y" => Room::where('city_id', $item->id)->count(),"label" => "$item->name" ));
        }
        
        $viewData = [
            'categories' => $categories,
            'locations' => $locations,
            'rechargeHistory' => $rechargeHistory,
            'rooms' => $rooms,
            'users' => $users,
            'dataPoints' => $dataPoints
        ];
        return view('admin.pages.dashboard.index', $viewData);
    }
}
