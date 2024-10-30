<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str; 

class AdminLocationController extends Controller
{
    public function index(){
        $locations = Location::orderByDesc('id') -> paginate(10);
        if(!$locations) 
            return abort(404);
        return view('admin.pages.location.index', ['locations' => $locations]);
    }

    public function create(){
        $cities = Location::where('parent_id', 0) -> get();
        return view('admin.pages.location.create', ['cities' => $cities]);
    }

    public function store(Request $request){
        try{
            $data = $request -> except('_token');
            $data['slug'] = Str::slug($request -> name);
            $data['created_at'] = Carbon::now();
            $location = Location::create($data);
            return redirect() -> route('get_admin_location.index');
        } catch (\Exception $e){
            Log::error("---------------------------------", $e->getMessage());
            return redirect() -> back();
        }
        
    }

    public function edit($id){
        $location = Location::find($id);
        $cities = Location::where('parent_id', 0) -> get();
        $viewData = [
            'location' => $location,
            'cities'   => $cities
        ];
        return view('admin.pages.location.update', $viewData);
    }

    public function update($id, Request $request){
        try{
            $data = $request -> except('_token');
            $data['slug'] = Str::slug($request -> name);
            $data['updated_at'] = Carbon::now();
            Location::find($id) -> update($data);
            return redirect() -> route('get_admin_location.index');
        } catch (\Exception $e){
            Log::error("---------------------------------", $e->getMessage());
            return redirect() -> back();
        }

    }

    public function delete($id){
        try{
            Location::find($id) -> delete();
            return redirect() -> route('get_admin_location.index');
        } catch (\Exception $e){
            Log::error("---------------------------------", $e->getMessage());
            return redirect() -> back();
        }
    }
}