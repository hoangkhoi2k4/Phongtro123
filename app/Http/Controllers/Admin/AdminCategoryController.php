<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    //
    public function index(Request $request){
        $categories = Category::orderByDesc('id') -> paginate(20);
        $viewData = [
            'categories' => $categories
        ];
        return view('admin.pages.category.index', $viewData);
    }
    public function create(){
        $viewData = [

        ];
        return view('admin.pages.category.create');
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

    public function edit($id){
        $category = Category::find($id);
        $viewData = [
            'category' => $category
        ];
        return view('admin.pages.category.update', $viewData);
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
