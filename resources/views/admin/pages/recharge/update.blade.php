@extends('admin.layouts.app_master_admin')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card shadow border-0" style="border-radius: 20px; margin-bottom: 20px; width: 550px;">
            <div class="card-body" style="margin-left: 20px; margin-right: 20px;">
                <h1 class="text-bold mb-4 me-3" style="font-size: 25px;">Cập nhật giao dịch</h1>
                @include('admin.pages.recharge.form')
            </div>
        </div>
    </div>
@stop