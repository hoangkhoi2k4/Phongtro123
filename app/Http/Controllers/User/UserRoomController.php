<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRoomRequest;
use App\Models\Category;
use App\Models\Location;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
// use Cloudinary\Cloudinary;
use Illuminate\Support\Facades\Log;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class UserRoomController extends Controller
{
    public function index(Request $request){
        $rooms = Room::where('auth_id', Auth::user()->id);

        $rooms = $rooms->orderByDesc('id')
                        ->paginate(20);
                        
        foreach ($rooms as $room) {
            $room->images = explode('*', $room->images);
            $room->images = array_filter($room->images, function($image) {
                return $image !== '';
            });
        }
        $viewData = [
            'rooms' => $rooms
        ];

        return view('user.room.index', $viewData);
        
    }
    public function create(Request $request){
        $cities = Location::select('id', 'name')->where('type', 1)->get();
        $districts = Location::select('id', 'name')->where('type', 2)->get();
        $wards = Location::select('id', 'name')->where('type', 3)->get();
        $categories = Category::select('id', 'name')->get();

        $viewData = [
            'cities' => $cities,
            'districts' => $districts,
            'wards' => $wards,  
            'categories' => $categories,
        ];
        return view('user.room.create', $viewData);
    }
    public function store(UserRoomRequest $request){
       
        $data = $request->except(['_token']);
        if($request->images != null){
            $images = implode("*",$request->images);
        } else {
            $images = null;
        }

        if($request->images_public_id != null){
            $images_public_id = implode("*",$request->images_public_id);
        } else {
            $images_public_id = null;
        }

        $data['images'] = $images;     
        $data['images_public_id'] = $images_public_id;
        $data['created_at'] = Carbon::now();
        $data['auth_id'] = Auth::user()->id;
        $room = Room::create($data);
        
        if($room){
            return redirect()->route('room.index');
        } 
        return redirect()->back();
    }
    public function edit($id, Request $request){
        $room = Room::where([
            'id' => $id,
            'auth_id' => Auth::user()->id
        ])->first();

        if(!$room){
            return abort(404);
        }

        $cities = Location::select('id', 'name')->where('type', 1)->get();
        $districts = Location::select('id', 'name')->where('type', 2)->get();
        $wards = Location::select('id', 'name')->where('type', 3)->get();
        $categories = Category::select('id', 'name')->get();

        $viewData = [
            'cities' => $cities,
            'districts' => $districts,
            'wards' => $wards,  
            'categories' => $categories,
            'room' => $room
        ];
        return view('user.room.update', $viewData);
    }


    public function update($id, UserRoomRequest $request){
        $data = $request->except('_token');

        if($request->images != null){
            $images = implode("*",$request->images);
        } else {
            $images = null;
        }

        if($request->images_public_id != null){
            $images_public_id = implode("*",$request->images_public_id);
        } else {
            $images_public_id = null;
        }

        $data['images'] = $images;     
        $data['images_public_id'] = $images_public_id;
        $data['updated_at'] = Carbon::now();

        $room = Room::where([
            'id' => $id,
            'auth_id' => Auth::user()->id
        ]) -> first();
        if($room){
         
            $images_public_id = $room->images_public_id;
            $room->update($data);

            // nếu tìm thấy room thì update và xóa ảnh cũ
            if($images_public_id != null){
                $images_public_id = explode("*", $images_public_id);
                foreach ($images_public_id as $public_id) {
                    Cloudinary::destroy($public_id);
                }
            }   
            
            return redirect()->route('room.index');
        }
        return redirect()->back();
    }

    public function delete($id){

        $room = Room::where('id', $id)->first();
        $images_public_id = $room->images_public_id;

        if($images_public_id != null){
            $images_public_id = explode("*", $images_public_id);
            foreach ($images_public_id as $public_id) {
                Cloudinary::destroy($public_id);
            }
        }

        $room->delete();

        return redirect()->route('room.index');

    } 

    public function hidden($id){
        $room = Room::where([
            'id' => $id,
            'auth_id' => Auth::user()->id
        ])->first();

        if(!$room){
            return abort(404);
        }

        $room->status = 0;
        $room->save();

        return redirect()->route('room.index');
    }

    public function repost($id){
        $room = Room::where([
            'id' => $id,
            'auth_id' => Auth::user()->id
        ])->first();

        if(!$room){
            return abort(404);
        }

        $room->status = 1;
        $room->save();

        return redirect()->route('room.index');
    }


      // Upload Images
    public function uploadImages(Request $request)
    {
        $files = $request->file('files');
        $urls = [];
        $images_public_id = [];

        foreach ($files as $file) {
            $result = Cloudinary::upload($file->getRealPath(), [
                'folder' => 'images',
            ]);
            $urls[] = $result->getSecurePath();
            $images_public_id[] = $result->getPublicId();
            
        }
        return response()->json([
            'success' => true,
            'paths' => $urls,
            'images_public_id' => $images_public_id,
        ]);
    }

    // Upload Video
    public function uploadVideo(Request $request)
    {
        $file = $request->file('file');
        $result = Cloudinary::uploadVideo($file->getRealPath(), [
            'folder' => 'videos',
        ]);
        $url = $result->getSecurePath();

        return response()->json([
            'success' => true,
            'path' => $url,
        ]);
    }
}
