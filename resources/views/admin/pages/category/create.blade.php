@extends('admin.layouts.app_master_admin')
@section('content')
    <h2 class="mt-3" style="margin-top: 6rem !important; display: flex; justify-content:space-between">
        <span>Thêm mới</span>
    </h2>
    @include('admin.pages.category.form')
@endsection
