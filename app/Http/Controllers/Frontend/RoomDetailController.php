<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Page\PageRoomDetailService;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RoomDetailController extends Controller
{
    public function detail($slug, $id, Request $request){
        $data = PageRoomDetailService::index($request ,$id);
        if (\Auth::user()){
            $user = User::find(\Auth::user()->id);
            if (!$user) return abort(404);
            return view('frontend.pages.room_detail.index', $data, compact('user'));
        }
        return view('frontend.pages.room_detail.index', $data);
    }
}
