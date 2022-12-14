@extends('admin.layouts.app_master_admin')
@section('content')
    <h1 class="text-bold mb-4" style="font-size: 25px;">Dashboard</h1>
    <div class="row mb-5 d-flex align-items-center justify-content-center">
        <div class="col-md-3">
            <a href="{{ route('get_admin.location.index') }}">
                <div class="card card-hover border-0 shadow" style="border-radius: 20px;">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-5 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-location-dot text-purple4" style="font-size: 50px;"></i>
                            </div>
                            <div class="col-md-7">
                                <p class="form-check-label fs-6">Địa điểm</p>
                                <p class="form-check-label fs-5">{{ $locations->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('get_admin.category.index') }}">
                <div class="card card-hover border-0 shadow" style="border-radius: 20px;">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-5 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-shapes text-purple4" style="font-size: 50px;"></i>
                            </div>
                            <div class="col-md-7">
                                <p class="form-check-label fs-6">Danh mục</p>
                                <p class="form-check-label fs-5">{{ $categories->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('get_admin.user.index') }}">
                <div class="card card-hover border-0 shadow" style="border-radius: 20px;">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-5 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-users text-purple4" style="font-size: 50px;"></i>
                            </div>
                            <div class="col-md-7">
                                <p class="form-check-label fs-6">Thành viên</p>
                                <p class="form-check-label fs-5">{{ $users->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('get_admin.room.index') }}">
                <div class="card card-hover border-0 shadow" style="border-radius: 20px;">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-5 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-house text-purple4" style="font-size: 50px;"></i>
                            </div>
                            <div class="col-md-7">
                                <p class="form-check-label fs-6">Nhà thuê</p>
                                <p class="form-check-label fs-5">{{ $rooms->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="card border-0 shadow" style="border-radius: 20px;">
        {{-- <div class="card-body"> --}}
            <div id="chartContainer" style="height: 500px; width: 100%;"></div>

        {{-- </div> --}}
    </div>
@stop

<script>
    window.onload = function() { 
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title:{
                text: "House Number in Location"
            },
            axisY: {
                title: "House Number",
                includeZero: true,
                prefix: "",
                suffix: ""
            },
            data: [{
                type: "bar",
                // yValueFormatString: "$#,##0K",
                indexLabel: "{y}",
                indexLabelPlacement: "inside",
                indexLabelFontWeight: "bolder",
                indexLabelFontColor: "white",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>

            }]
        });
        chart.render();    
    }
</script>