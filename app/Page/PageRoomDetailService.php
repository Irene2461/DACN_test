<?php

namespace App\Page;

use App\Models\Image;
use App\Models\Room;
use App\Models\User;
use App\Service\RoomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class PageRoomDetailService{
    public static function index(Request $request ,$id){
        $today = Date::today()->format('Y-m-d');

        $imageList = DB::table('images')->where('room_id',$id)->where('type',1)->get();
        $videoList = DB::table('images')->where('room_id',$id)->where('type',2)->get();
        // dd($imageList);

        $checkTimeRoom = Room::with('category:id,name,slug','city:id,name,slug')
            ->whereDate('time_start','<=', $today)
            ->whereDate('time_stop','>=', $today)
            ->find($id);

        if (!$checkTimeRoom) {
            // Update status của room
            DB::table('rooms')->where('id', $id)
                ->update([
                    'status' => Room::STATUS_EXPIRED,
                    'service_hot' => 0
                ]);
        }

        $room = Room::with('category:id,name,slug','city:id,name,slug')->find($id);

        $author = User::find($room->auth_id);
        
        // Nhà tương tự và gần đây
        $roomsSuggests = RoomService::getListsRoom($request, $params = [
            'category_id' => $room->category_id
        ]);
        $roomsCloseBy = RoomService::getListsRoom($request, $params = [
            'district_id' => $room->district_id
        ]);

        $viewData = [
            //List các file (image và video)
            'videoList' => $videoList,
            'imageList' => $imageList,

            'room' => $room,
            'author' => $author,

            //Nhà tương tự và gần đây
            'roomsSuggests' => $roomsSuggests,
            'roomsCloseBy' => $roomsCloseBy
        ];
        return $viewData;
    }
}