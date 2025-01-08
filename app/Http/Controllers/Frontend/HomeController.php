<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $totalRooms = Room::where('status', 1)
                    -> count();
        $posts = Room::where('status', 1) 
                ->orderByDesc('id')
                ->paginate(6);
        
        foreach ($posts as $post) {
            $post->images = explode('*', $post->images);
            $post->images = array_filter($post->images, function($image) {
                return $image !== '';
            });
        }
        foreach ($posts as $post) {
            $user = User::select("name", "phone")->find($post->auth_id);
            $post->user = $user;
        }
        $viewData = [
            'posts' => $posts,
            'totalRooms' => $totalRooms,
            'image_default' => "https://phongtro123.com/img/thumb_default.jpg",
        ];
        return view('user.home', $viewData);
    }
}
