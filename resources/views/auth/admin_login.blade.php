<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="theme-color" content="#712cf9">
    <link href="/css/admin.css" rel="stylesheet">
    @stack('css')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body style="background: linear-gradient(to right,#a64a63,#424874)">
    <section class="text-center mx-auto d-flex justify-content-center">

        <div class="card w-50" style="
                background: hsla(0, 0%, 100%, 0.8);
                backdrop-filter: blur(30px);
                position: absolute;
                top: 15%;
                ">
            <div class="card-body py-5 px-md-5 w-70 mx-auto">

            <div class="row d-flex justify-content-center">
                <img src="{{ url('images/homeus-logo.png') }}" style="width: 150px; margin-bottom: 20px" alt="logo">
                <div class="b-auth">
                    <!-- <div class="auth-header">
                        <h1 class="title">Đăng nhập</h1>
                    </div> -->
                    <div class="auth-content">
                        <form action="" method="POST" autocomplete="off">
                            @csrf
                            <div class="text-center mb-2">
                                <p class="form-check-label fs-6" style="color:#424874 !important;">HomeUs Admin</p>
                            </div>
                            <div class="text-center mb-4">
                                <p class="form-check-label">Đăng nhập để truy cập</p>
                            </div>
                            <div class="mb-4">
                                <!-- <label for="formGroupExampleInput" class="form-label">Example label</label> -->
                                <input type="email" class="form-control" id="formEmail" placeholder="Email" name="email">
                            </div>
                            <div class="mb-4">
                                <!-- <label for="formGroupExampleInput2" class="form-label">Another label</label> -->
                                <input type="password" class="form-control" id="formPassword" placeholder="Mật khẩu" name="password">
                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" style="padding: 0.5px;" checked />
                                        <label class="form-check-label-normal" for="loginCheck"> Nhớ mật khẩu </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Simple link -->
                                    <a href="#!" style="color: #424874;">Quên mật khẩu?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" style="background: #424874">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

</body>
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        font-family: "Lato", sans-serif;
    }



    .main-head{
        height: 150px;
        background: #FFF;

    }

    .sidenav {
        height: 100%;
        background-color: #000;
        overflow-x: hidden;
        padding-top: 20px;
    }


    .main {
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
    }

    @media screen and (max-width: 450px) {
        .login-form{
            margin-top: 10%;
        }

        .register-form{
            margin-top: 10%;
        }
    }

    @media screen and (min-width: 768px){
        .main{
            margin-left: 40%;
        }

        .sidenav{
            width: 40%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
        }

        .login-form{
            margin-top: 80%;
        }

        .register-form{
            margin-top: 20%;
        }
    }


    .login-main-text{
        margin-top: 20%;
        padding: 60px;
        color: #fff;
    }

    .login-main-text h2{
        font-weight: 300;
    }

    .btn-black{
        background-color: #000 !important;
        color: #fff;
    }
</style>
<div class="sidenav">
    <div class="login-main-text">
        <h2>Application<br> Login Page</h2>
        <p>Login or register from here to access.</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form method="POST">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required class="form-control" placeholder="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-black">Login</button>
            </form>
        </div>
    </div>
</div> --}}
