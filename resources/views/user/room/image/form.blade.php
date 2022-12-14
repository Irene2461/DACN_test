
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
        @foreach ($videoList as $img)
            <div class="item col-md-4 mb-4">
                <div style="overflow: hidden; height: 246px; position: relative;">
                    <a href="/images/{{ $img->image }}" class="fancybox" data-fancybox="gallery2">                
                        <img src="{{ pare_url_file($roomAvatar) }}"
                        alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                        <div class="centered">
                            <p class="text-purple4 mb-3 text-bold" style="font-size: 85px;"><i class="fa-regular fa-circle-play"></i></p>
                        </div>
                    </a>
                    <div style="position: absolute;
                        top: 10px;
                        right: 10px;
                        z-index: 1;">
                        <a data-bs-toggle="modal" data-bs-target="#deleteVideo" data-bs-imageid="{{ $img->id }}">
                            <button class="btn-image">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </a>
                    </div>
                    
                </div>
            </div>            
        @endforeach
        @foreach ($imageList as $img)
            <div class="item col-md-4 mb-4">
                <div style="overflow: hidden; height: 246px; position: relative;">
                    <a href="/images/{{ $img->image }}" class="fancybox" data-fancybox="gallery2">                
                        <img src="/images/{{ $img->image }}"
                        alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                    </a>
                    <div style="position: absolute;
                        top: 10px;
                        right: 10px;
                        z-index: 1;">
                        <a data-bs-toggle="modal" data-bs-target="#deleteImage" data-bs-imagelink="{{ $img->image }}" data-bs-imageid="{{ $img->id }}">
                            <button class="btn-image">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </a>
                    </div>                        
                </div>
            </div>            
        @endforeach
    </div>
    <div class="float-end">
        
    </div>

    <div class="modal fade" id="deleteImage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="padding-left: 30px; padding-right: 30px;">
                <div class="modal-header">
                    <h1 class="modal-title text-bold mt-3" style="font-size: 20px;">Xóa ảnh</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card" style="border: none;">
                        <div class="card-body p-0">
                            <div style="overflow: hidden; position: relative;">
                                <img src=""
                                alt="" style="display: block; height: 100%; width: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <p class="form-check-label">Hành động này không thể nào quay lại được.</p>
                        <p class="form-check-label">Bạn chắc chắn muốn xóa ảnh này?</p>
                    </div>
                    <div class="float-end">
                        <form action="" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary btn-submit" style="background: #424874">Xóa ảnh</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteVideo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="padding-left: 30px; padding-right: 30px;">
                <div class="modal-header">
                    <h1 class="modal-title text-bold mt-3" style="font-size: 20px;">Xóa video</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <p class="form-check-label">Hành động này không thể nào quay lại được.</p>
                        <p class="form-check-label">Bạn chắc chắn muốn xóa video này?</p>
                    </div>
                    <div class="float-end">
                        <form action="" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary btn-submit" style="background: #424874">Xóa video</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const deleteImage = document.getElementById('deleteImage')
    deleteImage.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const imagelink = button.getAttribute('data-bs-imagelink')
        const imageid = button.getAttribute('data-bs-imageid')
        const origin = window.location.origin;
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        // Update the modal's content.
        deleteImage.querySelector('.modal-body img').setAttribute('src', `/images/${imagelink}`)
        deleteImage.querySelector('.modal-body form').setAttribute('action', `${origin}/user/room/deleteimage/${imageid}` )
    })

    const deleteVideo = document.getElementById('deleteVideo')
    deleteVideo.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const imageid = button.getAttribute('data-bs-imageid')
        const origin = window.location.origin;
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        // Update the modal's content.
        deleteVideo.querySelector('.modal-body form').setAttribute('action', `${origin}/user/room/deleteimage/${imageid}` )
    })
</script>