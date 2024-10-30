@extends('admin.layouts.app_master_admin')
@section('content')
    <h2 class="mt-3" style="margin-top: 6rem !important; display: flex; justify-content:space-between"><span>Danh sách thành viên </span></h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>avatar</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($users ?? [] as $user)
                <tr>
                    <td scope="row">
                        <img src="{{asset('user/asset/image/default-user.png    ')}}" width="60px" alt="">
                    </td>
                    <td scope="row">{{$user -> id}}</td>
                    <td scope="row">{{$user -> name}}</td>
                    <td scope="row">{{$user -> email}}</td>
                    <td scope="row">{{$user -> phone}}</td>
                    <td scope="row">
                        @if ($user -> status == 1)
                            <span class="text-danger">Hiển thị</span>
                        @else
                        <span class="text-gray">Ẩn</span>
                        @endif
                    </td>
                    <td scope="row">{{$user -> created_at}}</td>
                </tr>
            @endforeach
            
        </tbody>    
    </table>    
@endsection
