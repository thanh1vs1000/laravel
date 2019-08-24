<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('admin_2/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_2/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_2/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_2/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admin_2/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('admin_2/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_2/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_2/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_2/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_2/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_2/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_2/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('admin_2/css/theme.css')}}" rel="stylesheet" media="all">


    <body class="animsition">
        <div class="page-wrapper">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3"></div>
                         <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Đăng nhập hệ thống</strong>
                                </div>
                                <div class="card-body card-block">
                                    <form action="{{route('admin.post.login')}}" method="post" class="form-horizontal">
                                       {{ csrf_field() }}
                                       <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label" id="inputEmail" name="username" >Tên đăng nhập</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="inputEmail" name="username" placeholder="Nhập username" class="form-control" required>
                                            
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-password" class=" form-control-label">Mật khẩu</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" d="inputPassword" name="password" placeholder="Nhập mật khấu" class="form-control" required>
                                            
                                        </div>
                                    </div>
                                    @if(session('error'))
                                    <div class="control-group">
                                        <div class="controls row-fluid">
                                            <div class="alert alert-danger alert-dismissible">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>Danger!</strong> {{session('error')}}
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Đăng nhập
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Làm mới   
                                        </button>
                                    </div>


                                </form>
                            </div>

                        </div>
                        <div class="col-lg-3"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('admin_2/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('admin_2/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('admin_2/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('admin_2/vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('admin_2/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('admin_2/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('admin_2/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('admin_2/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('admin_2/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('admin_2/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('admin_2/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admin_2/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('admin_2/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{asset('admin_2/js/main.js')}}"></script>


</body>
</html>

