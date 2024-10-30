@extends('admin.layouts.app_master_admin')
@section('content')
    <h2 class="mt-3" style="margin-top: 6rem !important; display: flex; justify-content:space-between"><span>Danh sách tin đăng </span><a href="{{ route('get_admin_room.create')}}" style="font-size: 16px;">Thêm mới</a></h2>
    <div class="table-responsive">
        <table class="table table_post_listing table-bordered _table-hover">
            <thead>
                <tr>
                    <th>Mã tin</th>
                    <th style="text-align: center; white-space: nowrap;">Ảnh đại diện</th>
                    <th>Tiêu đề</th>
                    <th>Giá</th>
                    <th style="white-space: nowrap;">Ngày bắt đầu</th>
                    <th style="white-space: nowrap;">Trạng thái</th>
                    <th style="white-space: nowrap;">Xóa tin</th>
                </tr>
            </thead>
            <tbody>
                @if($rooms)
                    @foreach($rooms as $item)
                        <tr class="t-center">
                            <td>{{$item -> id}}</td>
                            <td>
                                <img height="100px" src="{{asset('user/asset/image/thumb_default.jpg')}}" alt="">
                            </td>
                            <td>
                                <a style="font-size:18px;text-decoration: none;"href="" >
                                    {{ mb_strtoupper(mb_substr(mb_strtolower($item->name, 'UTF-8'), 0, 1), 'UTF-8') . mb_substr(mb_strtolower($item->name, 'UTF-8'), 1) }}
                                </a>
                                <p style="margin-bottom: 2px">
                                    @if($item -> status == 0)
                                        <a class="text-success" style="font-size:16px; margin-right: 3px; text-decoration:none; font-weight: 500; " href="{{ route('get_admin_room.success', $item -> id)}}"><i class="fa-solid fa-arrows-rotate"></i>Duyệt tin</a>
                                        
                                    @endif
                                    <a class="text-danger" style="font-size:16px; margin-right: 3px; text-decoration:none; font-weight: 500; " href="{{ route('get_admin_room.cancel', $item -> id)}}"><i class="fa-solid fa-xmark"></i>hủy</a>
                                    @if($item -> status != 1)
                                        <a style="font-size:16px; margin-right: 3px; text-decoration:none" href="{{route('get_admin_room.hidden', $item -> id)}}"><i class="fa-solid fa-eye-slash"></i>Ẩn tin</a>
                                    @endif
                                    @if($item -> status == -1)
                                        <p style="margin-bottom: 2px; font-size: 12px"><i class="text-danger">{{$item -> reason}}</i></p>
                                    @endif
                                </p>
                            </td>
                            <td>{{number_format($item -> price)}}<sup>đ</sup>/tháng</td>
                            <td>{{$item -> created_at}}</td>
                            @if($item -> status == 1)
                                <td style="font-weight: 600; color: rgb(23, 203, 44)">Tin đăng đăng</td>
                            @else
                            <td style="font-weight: 600; color: rgb(216, 27, 49)">Tin đã ẩn</td>
                            @endif

                            <td >
                                <form action="/user/delete/{{$item->id}}" method="POST" onsubmit="return confirmDelete()">
                                    @csrf
                                    <button type="submit" style="border: none;padding: 2px; font-weight: 600;cursor: pointer; color: white; background-color: rgb(227, 26, 26)" href="">Xóa</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach          
                @else
                    <tr>
                        <td colspan="7">Chưa có tin nào được đăng, vui lòng đăng thêm tin!</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
