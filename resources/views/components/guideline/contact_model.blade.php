<div class="modal fade" id="contactHomeUs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="padding-left: 30px; padding-right: 30px;">
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
</div>