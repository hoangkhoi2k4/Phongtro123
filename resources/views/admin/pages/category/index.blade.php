@extends('admin.layouts.app_master_admin')
@section('content')
    <h2 class="mt-3" style="margin-top: 6rem !important; display: flex; justify-content:space-between"><span>Danh sách danh mục </span><a href="{{ route('get_admin_category.create')}}" style="font-size: 16px;">Thêm mới</a></h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Trạng thái</th>
                <th>Mô tả</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($categories ?? [] as $category)
                <tr>
                    <td scope="row">{{$category -> id}}</td>
                    <td scope="row">{{$category -> name}}</td>
                    <td scope="row">
                        @if ($category -> status == 1)
                            <span class="text-danger">Hiển thị</span>
                        @else
                        <span class="text-gray">Ẩn</span>
                        @endif
                    </td>
                    <td scope="row">{{$category -> description}}</td>
                    <td scope="row">{{$category -> created_at}}</td>
                    <td scope="row">
                        <div style="display: flex; justify-content:space-evenly">
                            <div>
                                <a href="{{ route('get_admin_category.update', $category -> id)}}" style="border: none;padding: 2px; text-decoration: none; font-weight: 600;cursor: pointer; color: white; background-color: rgb(26, 56, 227)">Edit</a>
                            </div> 
                            |
                            <div>
                                <form action="/admin/category/delete/{{$category->id}}" method="POST" onsubmit="return confirmDelete()">
                                    @csrf
                                    <button type="submit" style="border: none;padding: 2px; font-weight: 600;cursor: pointer; color: white; background-color: rgb(227, 26, 26)" href="">Xóa</button>
                                </form>
                            </div>
                        </div>
                        
                        
                    </td>
                </tr>
            @endforeach
            
        </tbody>    
    </table>    
@endsection
