@extends('admin.layouts.app_master_admin')
@section('content')
    <h2 class="mt-3" style="margin-top: 6rem !important; display: flex; justify-content:space-between">
        <span>Hủy bỏ tin</span>
    </h2>
    <form class="form" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Lý do hủy tin</label>
            <textarea name="reason" id="" cols="4" rows="2" class="form-control">{{old('reason', $room -> reason ?? "")}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Lưu dữ liệu</button>
    </form>
@endsection
