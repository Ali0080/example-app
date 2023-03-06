<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>پنل مدیریت | فرم ساده</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="../../dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="../../dist/css/custom-style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">خانه</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">تماس</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 ml-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  حسام موسوی
                  <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">با من تماس بگیر لطفا...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  پیمان احمدی
                  <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">من پیامتو دریافت کردم</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  سارا وکیلی
                  <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <span class="dropdown-item dropdown-header">15 نوتیفیکیشن</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope ml-2"></i> 4 پیام جدید
            <span class="float-left text-muted text-sm">3 دقیقه</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users ml-2"></i> 8 درخواست دوستی
            <span class="float-left text-muted text-sm">12 ساعت</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file ml-2"></i> 3 گزارش جدید
            <span class="float-left text-muted text-sm">2 روز</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">حسام موسوی</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  داشبوردها
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../index.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>داشبورد اول</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../index2.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>داشبورد دوم</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../index3.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>داشبورد سوم</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="../widgets.html" class="nav-link">
                <i class="nav-icon fa fa-th"></i>
                <p>
                  ویجت‌ها
                  <span class="right badge badge-danger">جدید</span>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pie-chart"></i>
                <p>
                  چارت‌ها
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../charts/chartjs.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار ChartJS</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../charts/flot.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار Flot</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../charts/inline.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار Inline</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-tree"></i>
                <p>
                  اشیای گرافیکی
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../UI/general.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>عمومی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../UI/icons.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>آیکون‌ها</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../UI/buttons.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>دکمه‌ها</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../UI/sliders.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اسلایدر‌ها</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  فرم‌ها
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../forms/general.html" class="nav-link active">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اجزا عمومی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../forms/advanced.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>پیشرفته</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ویشرایشگر</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-table"></i>
                <p>
                  جداول
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../tables/simple.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>جداول ساده</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tables/data.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>جداول داده</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">مثال‌ها</li>
            <li class="nav-item">
              <a href="../calendar.html" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  تقویم
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-envelope-o"></i>
                <p>
                  ایمیل‌ باکس
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../mailbox/mailbox.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اینباکس</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../mailbox/compose.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ایجاد</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../mailbox/read-mail.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>خواندن</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  صفحات
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../examples/invoice.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>سفارشات</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/profile.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>پروفایل</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/login.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه ورود</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/register.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه عضویت</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/lockscreen.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>قفل صفحه</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-plus-square-o"></i>
                <p>
                  بیشتر
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../examples/404.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ارور 404</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/500.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ارور 500</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../examples/blank.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه خالی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../starter.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه شروع</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">متفاوت</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-file"></i>
                <p>مستندات</p>
              </a>
            </li>
            <li class="nav-header">برچسب‌ها</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-danger"></i>
                <p class="text">مهم</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-warning"></i>
                <p>هشدار</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-info"></i>
                <p>اطلاعات</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>فرم‌های عمومی</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">خانه</a></li>
              <li class="breadcrumb-item active">فرم‌های عمومی</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">مثال ساده</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">آدرس ایمیل</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل را وارد کنید">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="پسورد را وارد کنید">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">ارسال فایل</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">مرا بخاطر بسپار</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">ارسال</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body">
                <input class="form-control form-control-lg" type="text" placeholder=".input-lg">
                <br>
                <input class="form-control" type="text" placeholder="Default input">
                <br>
                <input class="form-control form-control-sm" type="text" placeholder=".input-sm">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">عرض مختلف</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder=".col-3">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder=".col-4">
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder=".col-5">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">ورودی‌‌ها</h3>
              </div>
              <div class="card-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="نام کاربری">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <h5 class="my-3">به همراه‌ آیکون</h5>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="ایمیل">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-check"></i></span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-dollar"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text"><i class="fa fa-ambulance"></i></div>
                  </div>
                </div>

                <h5 class="my-4 mb-2">به همراه چک باکس و رادیو</h5>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox">
                        </span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><input type="radio"></span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->

                <h5 class="mt-4 mb-2">به ‌همراه دکمه</h5>

                <p>بزرگ: <code>.input-group.input-group-lg</code></p>

                <div class="input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      ارسال
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-item"><a href="#">لینک 1</a></li>
                      <li class="dropdown-item"><a href="#">لینک 2</a></li>
                      <li class="dropdown-item"><a href="#">لینک 3</a></li>
                      <li class="dropdown-divider"></li>
                      <li class="dropdown-item"><a href="#">لینک 4</a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>معمولی</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-danger">ارسال</button>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>کوچیک <code>.input-group.input-group-sm</code></p>
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">برو</button>
                  </span>
                </div>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">فرم های عمودی</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="ایمیل را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">پسورد</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="پسورد را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">مرا به خاطر بسپار</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">ورود</button>
                  <button type="submit" class="btn btn-default float-left">لغو</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">اجزای کلی</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>نوشته</label>
                    <input type="text" class="form-control" placeholder="وارد کردن اطلاعات ...">
                  </div>
                  <div class="form-group">
                    <label>نوشته غیرفعال</label>
                    <input type="text" class="form-control" placeholder="وارد کردن اطلاعات ..." disabled>
                  </div>

                  <!-- textarea -->
                  <div class="form-group">
                    <label>متن</label>
                    <textarea class="form-control" rows="3" placeholder="وارد کردن اطلاعات ..."></textarea>
                  </div>
                  <div class="form-group">
                    <label>متن غیرفعال</label>
                    <textarea class="form-control" rows="3" placeholder="وارد کردن اطلاعات ..." disabled></textarea>
                  </div>

                  <!-- input states -->
                  <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> مقدار درست</label>
                    <input type="text" class="form-control" id="inputSuccess" placeholder="وارد کردن اطلاعات ...">
                  </div>
                  <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> با اخطار</label>
                    <input type="text" class="form-control" id="inputWarning" placeholder="وارد کردن اطلاعات ...">
                  </div>
                  <div class="form-group has-error">
                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> با ارور</label>
                    <input type="text" class="form-control" id="inputError" placeholder="وارد کردن اطلاعات ...">
                  </div>

                  <!-- checkbox -->
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="option1">
                      <label class="form-check-label">چک باکس</label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="option1" disabled>
                      <label class="form-check-label">چک باکس غیرفعال</label>
                    </div>
                  </div>

                  <!-- radio -->
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="option1">
                      <label class="form-check-label">رادیو</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="option1" disabled>
                      <label class="form-check-label">رادیو غیرفعال</label>
                    </div>
                  </div>

                  <!-- select -->
                  <div class="form-group">
                    <label>انتخاب کنید</label>
                    <select class="form-control">
                      <option>گزینه 1</option>
                      <option>گزینه 2</option>
                      <option>گزینه 3</option>
                      <option>گزینه 4</option>
                      <option>گزینه 5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>انتخاب کننده غیرفعال</label>
                    <select class="form-control" disabled>
                      <option>گزینه 1</option>
                      <option>گزینه 2</option>
                      <option>گزینه 3</option>
                      <option>گزینه 4</option>
                      <option>گزینه 5</option>
                    </select>
                  </div>

                  <!-- Select multiple-->
                  <div class="form-group">
                    <label>چند انتخابی</label>
                    <select multiple class="form-control">
                      <option>گزینه 1</option>
                      <option>گزینه 2</option>
                      <option>گزینه 3</option>
                      <option>گزینه 4</option>
                      <option>گزینه 5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>چند انتخابی غیرفعال</label>
                    <select multiple class="form-control" disabled>
                      <option>گزینه 1</option>
                      <option>گزینه 2</option>
                      <option>گزینه 3</option>
                      <option>گزینه 4</option>
                      <option>گزینه 5</option>
                    </select>
                  </div>

                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>CopyLeft &copy; 2018 <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>
  </footer>


  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
