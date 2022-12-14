
<style type="text/css">
    .item{
        transition: .5s ease-in-out;
    }
    .item:hover{
        filter: brightness(80%);
    }
</style>

<div class="container-fluid mb-4">
    <div class="row">
        @for ($i = 0; $i < count($videoList); $i++)
            @if ($i < 8)
            <div class="item col-md-4 g-1">
                <a href="/images/{{ $videoList[$i]->image }}" class="fancybox" data-fancybox="gallery1">
                    <div style="overflow: hidden; height: 246px; position: relative;">
                        <img src="{{ pare_url_file($room->avatar) }}"
                        alt="" style="display: block; height: 100%; width: 100%; object-fit: cover; filter: brightness(70%);">
                        <div class="centered">
                            <p class="text-purple4 mb-3 text-bold" style="font-size: 85px;"><i class="fa-regular fa-circle-play"></i></p>
                        </div>
                    </div>
                </a>
            </div>
            @elseif ($i === 8)
            <div class="item col-md-4 p-1 pe-0">
                <a href="/images/{{ $videoList[$i]->image }}" class="fancybox" data-fancybox="gallery1">
                    <div style="overflow: hidden; height: 248px; position: relative;">
                        <img src="{{ pare_url_file($room->avatar) }}"
                        alt="" style="display: block; height: 100%; width: 100%; object-fit: cover; filter: brightness(50%);">
                        <div class="text-white text-bold" style="position: absolute;
                        top: 45%;
                        width: 100%;
                        text-align: center;
                        font-size: 18px;">Xem tất cả</div>
                    </div>
                </a>
            </div>
            @else
            <a href="/images/{{ $videoList[$i]->image }}" class="fancybox" data-fancybox="gallery1"></a>
            @endif
        @endfor
        @for ($i = 0; $i < count($imageList); $i++)
            @if (count($videoList)+$i < 8)
            <div class="item col-md-4 g-1">
                <a href="/images/{{ $imageList[$i]->image }}" class="fancybox" data-fancybox="gallery1">
                    <div style="overflow: hidden; height: 246px; position: relative;">
                        <img src="/images/{{ $imageList[$i]->image }}"
                        alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                    </div>
                </a>
            </div>
            @elseif (count($videoList)+$i === 8)
            <div class="item col-md-4 p-1 pe-0">
                <a href="/images/{{ $imageList[$i]->image }}" class="fancybox" data-fancybox="gallery1">
                    <div style="overflow: hidden; height: 248px; position: relative;">
                        <img src="/images/{{ $imageList[$i]->image }}"
                        alt="" style="display: block; height: 100%; width: 100%; object-fit: cover; filter: brightness(50%);">
                        <div class="text-white text-bold" style="position: absolute;
                        top: 45%;
                        width: 100%;
                        text-align: center;
                        font-size: 18px;">Xem tất cả</div>
                    </div>
                </a>
            </div>
            @else
            <a href="/images/{{ $imageList[$i]->image }}" class="fancybox" data-fancybox="gallery1"></a>
            @endif
        @endfor
    </div>
</div>

{{-- <div class="container-fluid mb-4">
    <div class="row">
        @foreach ($imageList as $image)
            <div class="item col-md-8 p-1 ps-0">
                <a href="/images/{{ $image->image }}" class="fancybox" data-fancybox="gallery1">
                    <div style="overflow: hidden; height: 500px; position: relative;">
                        <img src="/images/{{ $image->image }}"
                        alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                    </div>
                </a>
            </div>
        @endforeach
        <div class="item col-md-8 p-1 ps-0">
            <a href="{{ pare_url_file($room->avatar) }}" class="fancybox" data-fancybox="gallery1">
                <div style="overflow: hidden; height: 500px; position: relative;">
                    <img src="{{ pare_url_file($room->avatar) }}"
                    alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                </div>
            </a>
        </div>
        <div class="col-md-4 p-1 pe-0">
            <div class="item row pb-1">
            <a href="{{ pare_url_file($room->avatar) }}" class="fancybox" data-fancybox="gallery1">
                <div style="overflow: hidden; height: 246px; position: relative;">
                    <img src="{{ pare_url_file($room->avatar) }}"
                    alt="" style="display: block; height: 100%; width: 100%; object-fit: cover; filter: brightness(70%);">
                    <div class="centered">
                        <p class="text-purple4 mb-3 text-bold" style="font-size: 85px;"><i class="fa-regular fa-circle-play"></i></p>
                    </div>
                </div>
            </a>
            </div>
            <div class="item row pt-1">
            <a href="{{ pare_url_file($room->avatar) }}" class="fancybox" data-fancybox="gallery1">
                <div style="overflow: hidden; height: 246px; position: relative;">
                    <img src="{{ pare_url_file($room->avatar) }}"
                    alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                </div>
            </a>
            </div>
        </div>
        <div class="item col-md-4 p-1 ps-0">
            <a href="{{ pare_url_file($room->avatar) }}" class="fancybox" data-fancybox="gallery1">
                <div style="overflow: hidden; height: 248px; position: relative;">
                    <img src="{{ pare_url_file($room->avatar) }}"
                    alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                </div>
            </a>
        </div>
        <div class="item col-md-4 p-1">
            <a href="{{ pare_url_file($room->avatar) }}" class="fancybox" data-fancybox="gallery1">
                <div style="overflow: hidden; height: 248px; position: relative;">
                    <img src="{{ pare_url_file($room->avatar) }}"
                    alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                </div>
            </a>
        </div>
        <div class="item col-md-4 p-1 pe-0">
            <a href="{{ pare_url_file($room->avatar) }}" class="fancybox" data-fancybox="gallery1">
                <div style="overflow: hidden; height: 248px; position: relative;">
                    <img src="{{ pare_url_file($room->avatar) }}"
                    alt="" style="display: block; height: 100%; width: 100%; object-fit: cover; filter: brightness(50%);">
                    <div class="text-white text-bold" style="position: absolute;
                    top: 45%;
                    width: 100%;
                    text-align: center;
                    font-size: 18px;">Xem tất cả</div>
                </div>
            </a>
        </div>
        <a href="{{ pare_url_file($room->avatar) }}" class="fancybox" data-fancybox="gallery1"></a>
        <a href="{{ pare_url_file($room->avatar) }}" class="fancybox" data-fancybox="gallery1"></a>
        <a href="{{ pare_url_file($room->avatar) }}" class="fancybox" data-fancybox="gallery1"></a>
    </div>
</div> --}}