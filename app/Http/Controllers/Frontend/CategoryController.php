<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(Request $request, $slug, $id) {
        $category = Category::find($id);
        if(!$category) return abort(404);

        // Đếm tổng số bản ghi
        $totalRooms = Room::where('category_id', $id)->count();
       

        $rooms = Room::where('category_id', $id)->orderByDesc('id')->paginate(5);
        foreach ($rooms as $room) {
            $room->images = explode('*', $room->images);
            $room->images = array_filter($room->images, function($image) {
                return $image !== '';
            });
        }
        foreach ($rooms as $room) {
            $user = User::select("name", "phone")->find($room->auth_id);
            $room->user = $user;
        }
        $viewData = [
            'rooms' => $rooms,
            'totalRooms' => $totalRooms,
            'category' => $category,
            'query' => $request->query(),
            'image_default' => "https://phongtro123.com/img/thumb_default.jpg",
        ];

        return view('user.category.index', $viewData);
    }

    public function page($page){
        $room = Room::where('id', $page) -> first();
        if($room->images != null){
            $room->images = explode('*', $room->images);
            $room->images = array_filter($room->images, function($image) {
                return $image !== '';
            });
        }
        $category = Category::select('name')->find($room -> category_id);
        $user = User::select("name", "phone")->find($room->auth_id);
        $room->user = $user;
        $viewData = [
            'room' => $room,
            'category' => $category
        ];
        return view('user.category.page', $viewData);
    }
}
