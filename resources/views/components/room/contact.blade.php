<div class="card card-contact border-0 shadow-sm">
    <div class="card-body bg-light">
        <div class="row d-flex align-items-center">
            <p class="text-uppercase text-muted fw-bold">Liên hệ với</p>
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <img
                    src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                    class="rounded-circle"
                    alt=""
                    style="width: 45px; height: 45px"
                    />
                </div>
                <div class="flex-grow-1 ms-3">
                    <p class="fw-bold fs-5 mb-1">{{ $author->name ?? '' }}</p>
                </div>
            </div>
        </div>
        <hr style="background-color: hsl(0, 0%, 75%)" />
        <a id="swapPhone" class="btn btn-purple btn-upload btn-block showPhone text-bold mb-4 py-2" rel="nofollow" href="tel:{{ $author->phone ?? '' }}">
            <span class="fa fa-phone me-3"></span>Gọi điện thoại
        </a>
        <div class="row mb-3">
            <div class="col">
                <a rel="nofollow" class="btn btn-black btn-block" target="_blank" href="https://zalo.me/{{ $author->phone ?? '' }}">
                    <span class="fa fa-comment-dots me-2"></span>Zalo
                </a>
            </div>
            <div class="col">
                <a rel="nofollow" class="btn btn-black btn-block" href="#">
                    <span class="fab fa-facebook-messenger me-2"></span>Messenger
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a rel="nofollow" class="btn btn-black btn-block" href="#">
                    <span class="fa fa-envelope me-2"></span>Email
                </a>
            </div>
            <div class="col">
                <a rel="nofollow" class="btn btn-black btn-block" data-bs-toggle="modal" data-bs-target="#contactMe">
                    <span class="fa fa-inbox me-2"></span>Liên hệ tôi
                </a>
            </div>
        </div>
        <hr style="background-color: hsl(0, 0%, 75%)" />
        <a rel="nofollow" class="btn btn-purple btn-block active mb-2" href="#">
            <span class="fa fa-comment-medical me-2"></span>Chat với HomeUs
        </a>
        <div  class="text-center form-check-label-normal fs-6">Tư vấn hoàn toàn miễn phí</div>
    </div>
</div>

<div class="modal fade" id="contactMe" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="padding-right: 30px;">
            <div class="row">
                <div class="col-md-6">
                    <div style="overflow: hidden; height: 400px; position: relative;">
                        <img class="rounded" src="{{ pare_url_file($room->avatar) }}"
                        alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                    </div>
                    <div class="modal-body">
                        <h1 class="text-truncate text-bold" style="font-size: 18px; color: #424874;">{{ $room->name }}</h1>
                        <div class="mb-2">
                            <span>
                                <i class="fas fa-map-marker-alt me-1 text-muted"></i>
                                <a class="form-check-label">{{ $room->full_address }}, Phường, Quận, Thành phố</a>
                            </span>
                        </div>
                        <div class="">
                            <span>
                                <i class="fas fa-dollar-sign me-1 text-muted"></i>
                                <a class="form-check-label me-3">{{ round(($room->price)/1000000, 1) }} tr/tháng</a>
                            </span>
                            <span>
                                <i class="fas fa-bed me-1 text-muted"></i>
                                <a class="form-check-label me-3">5</a>
                            </span>
                            <span>
                                <i class="fas fa-bath me-1 text-muted"></i>
                                <a class="form-check-label me-3">3</a>
                            </span>
                            <span>
                                <i class="fas fa-th me-1 text-muted"></i>
                                <a class="form-check-label me-3">{{ $room->area }} m<sup>2</sup></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="modal-header">
                        <h1 class="modal-title text-bold mt-3" style="font-size: 20px;">Liên hệ với tôi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card" style="border: none;">
                            <div class="card-body p-0">
                                <div class="b-auth">
                                    <div class="auth-content">
                                        <form class="form-container" action="" method="POST" autocomplete="off">
                                            @csrf
                                            @if (isset(Auth::user()->name))
                                                <div class="form-group mb-3">
                                                    <label for="formName" class="form-label text-bold">Họ và tên</label>
                                                    <input type="text" class="form-control" id="formName" name="name" value="{{ $user->name }}">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="formGroupExampleInput2" class="form-label text-bold">Số điện thoại</label>
                                                    <input type="text" class="form-control" id="formPhone" value="{{ $user->phone }}">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="formGroupExampleInput2" class="form-label text-bold">Email</label>
                                                    <input type="text" class="form-control" id="formEmail" name="email" value="{{ $user->email }}">
                                                </div>
                                            @else
                                                <div class="form-group mb-3">
                                                    <label for="formName" class="form-label text-bold">Họ và tên</label>
                                                    <input type="text" class="form-control" id="formName" name="name">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="formGroupExampleInput2" class="form-label text-bold">Số điện thoại</label>
                                                    <input type="text" class="form-control" id="formPhone">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="formGroupExampleInput2" class="form-label text-bold">Email</label>
                                                    <input type="text" class="form-control" id="formEmail" name="email">
                                                </div>
                                            @endif
                                            <div class="form-group mb-3">
                                                <label for="formGroupExampleInput2" class="form-label text-bold">Lời nhắn</label>
                                                <textarea class="form-control" style="height: 50px;" id="" cols="30" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block mb-4" style="background: #424874">Gửi thông tin</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h1 class="modal-title text-bold mt-3" style="font-size: 20px;">Liên hệ với tôi</h1>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#swapPhone').on('click', function() {
            var $el = $(this),
            textNode = this.lastChild;
            textNode.nodeValue = ($el.hasClass('showPhone') ? '{{ $author->phone ?? '' }}' : '{{ $author->phone ?? '' }}')
            $el.toggleClass('showPhone');
        });
    });
</script>
