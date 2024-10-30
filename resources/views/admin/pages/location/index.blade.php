@extends('admin.layouts.app_master_admin')
@section('content')
    <h2 class="mt-3" style="margin-top: 6rem !important; display: flex; justify-content:space-between"><span>Danh sách địa điểm </span><a href="{{ route('get_admin_location.create')}}" style="font-size: 16px;">Thêm mới</a></h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Phân loại</th>
                <th>Trạng thái</th>
                <th>Nổi bật</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($locations ?? [] as $location)
                <tr>
                    <td scope="row">{{$location -> id}}</td>
                    <td scope="row">{{$location -> name}}</td>
                    <td scope="row">{{$location -> getType($location -> type)}}</td>
                    <td scope="row"><span class="text-success">Active</span></td>
                    <td scope="row">
                        @if ($location -> hot == 1)
                            <span class="text-danger">Hot</span>
                        @else
                        <span class="text-gray">Mặc định</span>
                        @endif
                    </td>
                    <td scope="row">{{$location -> created_at}}</td>
                    <td scope="row">
                        <div style="display: flex; justify-content:space-evenly">
                            <div>
                                <a href="{{ route('get_admin_location.update', $location -> id)}}" style="border: none;padding: 2px; text-decoration: none; font-weight: 600;cursor: pointer; color: white; background-color: rgb(26, 56, 227)">Edit</a>
                            </div> 
                            |
                            <div>
                                <form action="/admin/location/delete/{{$location->id}}" method="POST" onsubmit="return confirmDelete()">
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
