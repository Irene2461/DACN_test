<?php

namespace App\Service;

use App\Models\Room;
use Illuminate\Support\Arr;

class RoomService{
    protected $column = ['id','avatar','name','description','price','full_address','area','updated_at','slug','category_id','service_hot','status'];
    public static function getRoomsHot($limit = 8){
        $self = new self();
        return Room::where('hot', 1)
        ->limit($limit)
        ->select($self->column)
        ->get();
    }
    public static function getRoomsNew($limit = 10){
        $self = new self();
        // return Room::where('status', 1)
        return Room::where('hot', 0)
        ->limit($limit)
        ->select($self->column)
        ->orderByDesc('id')->get();
    }

    public static function getListsRoomVip($limit = 10, $params = [])
    {
        $self = new self();
        $room =  Room::whereRaw(1);

        if ($service_hot =  Arr::get($params, 'service_hot'))
            $room->where('service_hot', $service_hot);
        
        $room->where('status', 3);

        return $room
            ->limit($limit)
            ->select($self->column)
            ->orderByDesc('id')
            ->get();
    }

    public static function getRoomsNewVip($limit = 10, $params = [])
    {
        $self = new self();
        $room =  Room::whereRaw(1);
        $room->whereBetween('service_hot', [2,4]);
        $room->where('status', 3);
        
        return $room
            ->select($self->column)
            ->orderByDesc('service_hot')
            ->paginate($limit);
    }

    public static function getListsRoom($request, $params = []){
        $self = new self();
        $rooms = Room::whereRaw(1);

        if ($categoryId = Arr::get($params,'category_id')){
            $rooms->where('category_id', $categoryId);
        }

        if ($cityId = Arr::get($params,'location_city_id')){
            $rooms->where('city_id', $cityId);
        }

        if ($districtId = Arr::get($params,'location_district_id')){
            $rooms->where('district_id', $districtId);
        }

        if ($wardsId = Arr::get($params,'location_wards_id')){
            $rooms->where('wards_id', $wardsId);
        }

        if ($range_price = Arr::get($params,'price')){
            $rooms->where('range_price', $range_price);
        }

        if ($range_area = Arr::get($params,'area')){
            $rooms->where('range_area', $range_area);
        }


        $rooms = $rooms->select($self->column)->orderByDesc('service_hot')->paginate(3);

        return $rooms;
    }

}