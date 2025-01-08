<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    //
    public function getRooms(){
        $rooms = Room::orderByDesc('id')->paginate(10);

        if($rooms->isEmpty()){
            return response()->json([
                'data' => [],
                'status' => 404,
                'message' => 'No data found'
            ], 404);
        }

        return response()->json([
            'data' => $rooms,
            'status' => 200,
            'message' => 'success'
        ], 200);
    }

    public function getRoom($id){
        $room = Room::where('id', $id) -> first();
        if($room == null){
            return response() -> json([
                'data' => null,
                'status' => 404,
                'message' => 'No data found'
            ], 404);
        }

        return response() -> json([
            'data' => $room,
            'status' => 200,
            'message' => 'success'
        ]);
    }

    public function addRoom(Request $request){
        $data = [
            'name' => $request -> name,
            'description' => $request -> description,
            'city_id' => $request -> city_id,
            'district_id' => $request -> district_id,
            'wards_id' => $request -> wards_id,
            'price' => $request -> price,
            'area' => $request -> area,
            'apartment_number' => $request -> apartment_number,
            'category_id' => $request -> category_id,
            'auth_id' => $request -> auth_id,
            'images' => $request -> images,
        ];

        $room = Room::create($data);

        return response() -> json([
            'data' => $room,
            'status' => 200,
            'message' => 'success'
        ], 200);

    }

    public function updateRoom(Request $request, $id){
        $room = Room::where('id', $id) -> first();
        if($room == null){
            return response() -> json([
                'status' => 404,
                'message' => 'No data found'
            ], 404);
        }

        $data = [
            'name' => $request -> name,
            'description' => $request -> description,
            'city_id' => $request -> city_id,
            'district_id' => $request -> district_id,
            'wards_id' => $request -> wards_id,
            'price' => $request -> price,
            'area' => $request -> area,
            'apartment_number' => $request -> apartment_number,
            'category_id' => $request -> category_id,
            'auth_id' => $request -> auth_id,
            'images' => $request -> images,
        ];

        $room -> update($data);
        return response() -> json([
            'data' => $room,
            'status' => 200,
            'message' => 'success'
        ], 200);
    }


    public function deleteRoom($id){
        $room = Room::where('id', $id) -> first();
        if($room == null){
            return response() -> json([
                'status' => 404,
                'message' => 'No data found'
            ], 404);
        }

        $room -> delete();

        return response() -> json([
            'status' => 200,
            'message' => 'success'
        ], 200);
    }   
}
