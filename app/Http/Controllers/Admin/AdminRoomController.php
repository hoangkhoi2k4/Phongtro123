<?php

namespace App\Http\Controllers\Admin;


use App\Models\Room;
// use AWS\CRT\Log;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AdminRoomController extends Controller
{
    public function index(Request $request){
        $rooms = Room::orderByDesc('id') -> paginate(20);
        $viewData = [
            'rooms' => $rooms
        ];
        return view('admin.pages.room.index', $viewData);
    }
    public function create(){
        $viewData = [

        ];
        return view('admin.pages.category.create');
    }

    public function success($id){
        $room = Room::find($id);
        $room->status = 1;
        $room->save();

        return redirect() -> back();
    }
    public function hidden($id){
        $room = Room::find($id);
        $room->status = 0;
        $room->save();

        return redirect() -> back();
    }

    public function cancel($id){
        $room = Room::find($id);
        $viewData = [
            'room' => $room
        ];
        return view('admin.pages.room.cancel', $viewData);
    }

    public function processCancelRoom($id, Request $request){
        try{
            $room = Room::find($id);
            $room->reason = $request-> reason;
            $room->status = -1;
            $room->save();
            return redirect() -> route('get_admin_room.index');
        } catch (\Exception $e){
            Log::error("---------------------------------", $e->getMessage());
            return redirect() -> back();
        }
    }

    public function store(Request $request){
        try{
            $data = $request -> except('_token');
            $data['slug'] = Str::slug($request -> name);
            $data['created_at'] = Carbon::now();
            $category = Category::create($data);
            return redirect() -> route('get_admin_category.index');
        } catch (\Exception $e){
            Log::error("---------------------------------", $e->getMessage());
            return redirect() -> back();
        }
    }

    public function update(Request $request, $id){
        try{
            $data = $request -> except('_token');
            $data['slug'] = Str::slug($request -> name);
            $data['updated_at'] = Carbon::now();
            Category::find($id) -> update($data);
            return redirect() -> route('get_admin_category.index');
        } catch (\Exception $e){
            Log::error("---------------------------------", $e->getMessage());
            return redirect() -> back();
        }
    }

    public function delete($id){
        try{
            Category::find($id) -> delete();
            return redirect() -> route('get_admin_category.index');
        } catch (\Exception $e){
            Log::error("---------------------------------", $e->getMessage());
            return redirect() -> back();
        }
    }
}
