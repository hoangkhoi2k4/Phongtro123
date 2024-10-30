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

class UserRoomController extends Controller
{
    public function index(Request $request){
        $rooms = Room::where('auth_id', Auth::user()->id);
        $rooms = $rooms->orderByDesc('id')->paginate(20);
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
        // $tmp = $request->images;
        // $tmp = array_map(function($image) {
        //     return time() . '-' . $image;
        // }, $tmp);
        if($request->images != null){
            $images = implode("*",$request->images);
        } else
        {
            $images = null;
        }
        $data['images'] = $images;     
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
        $data['updated_at'] = Carbon::now();
        $room = Room::where([
            'id' => $id,
            'auth_id' => Auth::user()->id
        ])->update($data);
        if($room){
            return redirect()->route('room.index');
        }
        return redirect()->back();
    }
    public function delete($id){
        $room = Room::where([
            'id' => $id
        ])->delete();
        return redirect()->route('room.index');

    }

     // upload Images
    public function uploadImages(Request $request){
        $files = $request -> file('files');
        for ($i=0; $i < count($files) ; $i++) { 
            $fileName =time().'-'.$files[$i]->getClientOriginalName();
            $files[$i] -> storeAs('/public/images',$fileName);
            $url[] = '/storage/images/'.$fileName;
            
        }
        return response() -> json([
            'success' => true,
            'paths' => $url
 
        ]);
    }

    public function uploadVideo(Request $request){
        $file = $request -> file('file');
        $fileName =time().'-'.$file->getClientOriginalName();
        $file -> storeAs('/public/videos',$fileName);
        $url = '/storage/videos/'.$fileName;
        return response() -> json([
            'success' => true,
            'path' => $url  
        ]);
    }
}
