<!DOCTYPE html>
<html lang="en">
<?php
use Illuminate\Support\Facades\Auth;
use App\admin;
$a = Auth::guard('admin')->user()->id;
$b = admin::find($a);
$adminAvatar = $b['avatar'];
?>
<head>
    <!-- Required meta tags-->
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


</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->


    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="{{asset('admin_2/images/icon/logo.png')}}" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="js-arrow">
                            <i class="fas fa-align-left"></i>Danh mục</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('admin.category.get.create')}}">Thêm mới</a>
                            </li>
                            <li>
                                <a href="{{route('admin.category.get.list')}}">Danh sách</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="js-arrow">
                            <i class="fab fa-apple"></i>Sản phẩm</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('admin.new.get.create')}}">Thêm mới</a>
                            </li>
                            <li>
                                <a href="{{route('admin.new.get.list')}}">Danh sách</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="js-arrow">
                            <i class="fas fa-user-circle"></i>Khách Hàng</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('admin.user.get.create')}}">Thêm mới</a>
                            </li>
                            <li>
                                <a href="{{route('admin.user.get.list')}}">Danh sách</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="js-arrow">
                            <i class="far fa-comments"></i>Comment</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">

                            <li>
                                <a href="{{route('admin.cmt.get.list')}}">Danh sách</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="{{route('admin.info.get.listadmin')}}" class="js-arrow">
                            <i class="far fa-comments"></i>list admin</a>
                    
                        
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu">


                                    <div class="mess-dropdown js-dropdown">

                                        <div class="mess__item">
                                            <div class="image img-cir img-40">
                                                <img @if(!$adminAvatar)
                                                     src="{{asset('admin_layout/images/default.png')}}"
                                                     @endif
                                                     @if($adminAvatar)
                                                     src="{{asset($adminAvatar)}}"
                                                     @endif alt="Michelle Moreno" />
                                            </div>
                                            <div class="content">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class="time">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="mess__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                            </div>
                                            <div class="content">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class="time">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="mess__footer">
                                            <a href="#">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="noti__item js-item-menu">

                                    <div class="email-dropdown js-dropdown">
                                        <div class="email__title">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class="email__footer">
                                            <a href="#">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="noti__item js-item-menu">


                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">Nguyenthanh</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img @if(!$adminAvatar)
                                                         src="{{asset('admin_layout/images/default.png')}}"
                                                         @endif
                                                         @if($adminAvatar)
                                                         src="{{asset($adminAvatar)}}"
                                                         @endif />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">NguyenThanh</a>
                                                </h5>
                                                <span class="email">.</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="{{route('admin.info.get.profile')}}">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="{{route('admin.info.get.edit')}}">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                            
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="{{route('admin.info.get.logout')}}">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                @yield('content')
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
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
<!-- end document-->
