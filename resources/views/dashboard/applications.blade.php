<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title></title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">

    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('admin/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('admin/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->


</head>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="index.html" id="site-logo-inner">
                            <img class="" alt="" src="" data-light="" data-dark="">
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>
                    </div>
                    <div class="section-menu-left-wrap">
                        <div class="center">
                            <div class="center-item">
                                <div class="center-heading">الرئيسية </div>
                                <ul class="menu-list">
                                    <li class="menu-item has-children active">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-grid"></i></div>
                                            <div class="text">لوحة التحكم </div>
                                        </a>
                                        <ul class="sub-menu" style="display: block;">
                                            <li class="sub-menu-item">
                                                <a href="index.html" class="active">
                                                    <div class="text">الرئيسية</div>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="center-item">
                                <div class="center-heading">التحكمات</div>
                                <ul class="menu-list">
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-shopping-cart"></i></div>
                                            <div class="text">التقديمات</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="{{ route('uniapplication.index') }}" class="">
                                                    <div class="text"> التقديمات</div>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">

                                <div class="button-show-hide">
                                    <i class="icon-menu-left"></i>
                                </div>
                                <form class="form-search flex-grow">


                                </form>
                            </div>
                            <div class="header-grid">
                                <div class="header-item button-dark-light">
                                    <i class="icon-moon"></i>
                                </div>
                                <div class="popup-wrap noti type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-bell"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="header-item button-zoom-maximize">
                                    <div class="">
                                        <i class="icon-maximize"></i>
                                    </div>
                                </div>
                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="image">
                                                    <img src="images/avatar/user-1.png" alt="">
                                                </span>
                                                <span class="flex flex-column">
                                                    <span
                                                        class="body-title mb-2">{{ auth()->user()->university }}</span>
                                                    <span class="text-tiny">{{ auth()->user()->name }}</span>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content"
                                            aria-labelledby="dropdownMenuButton3">
                                            <li>
                                                <form action="{{ route('admin.logout') }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="user-item">
                                                        <div class="icon">
                                                            <i class="icon-log-out"></i>
                                                        </div>
                                                        <div class="body-title-2">Log out</div>
                                                    </button>
                                                </form>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">

                                <!-- order-list -->
                                <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <form class="form-search">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Search here..." class="" name="name"
                                                        tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                     
                                    </div>
                                    <div class="wg-table table-all-category">
                                        <ul class="table-title flex gap20 mb-14">
                                            <li>
                                                <div class="body-title"> الإسم</div>
                                            </li>
                                            <li>
                                                <div class="body-title"> البريد الإلكتروني</div>
                                            </li>
                                            <li>
                                                <div class="body-title"> رقم الهاتف</div>
                                            </li>
                                            <li>
                                                <div class="body-title">تاريخ الميلاد</div>
                                            </li>
                                            <li>
                                                <div class="body-title">الرقم القومي</div>
                                            </li>
                                            <li>
                                                <div class="body-title"> المدرسة الثانوية</div>
                                            </li>
                                            <li>
                                                <div class="body-title">تاريخ التخرج </div>
                                            </li>
                                            <li>
                                                <div class="body-title">الاضافات</div>
                                            </li>
                                        </ul>
                                        <ul class="flex flex-column">
                                            <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="images/products/51.png" alt="">
                                                </div>
                                                @foreach ($applications as $application)


                                                    <div class="flex items-center justify-between gap20 flex-grow">
                                                        <div class="name">
                                                            <a href="{{ route('uniapplication.show', $application->id) }}"
                                                                class="body-title-2">
                                                                {{ $application->name }}
                                                            </a>
                                                        </div>
                                                        <div class="body-text"> {{ $application->email }}</div>
                                                        <div class="body-text"> {{ $application->phone }}</div>
                                                        <div class="body-text"> {{ $application->dob }}</div>
                                                        <div class="body-text"> {{ $application->national_number }}</div>
                                                        <div>
                                                            <div class="block-available"> {{ $application->high_school }}
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="block-tracking">
                                                                {{ $application->year_of_graduation }}</div>
                                                        </div>
                                                        <div class="list-icon-function">
                                                            <div class="item eye">
                                                                <a
                                                                    href="{{ route('uniapplication.show', $application->id) }}">
                                                                    <i class="icon-eye"></i>
                                                                </a>
                                                            </div>
                                                            <form
                                                                action="{{ route('uniapplication.destroy', $application->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="item ">
                                                                    <i class="icon-trash-2"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="divider"></div>

                                </div>
                                <!-- /main-content-wrap -->
                            </div>
                            <!-- /main-content-wrap -->

                        </div>
                        <!-- /main-content -->
                    </div>
                    <!-- /section-content-right -->
                </div>
                <!-- /layout-wrap -->
            </div>
            <!-- /#page -->
        </div>
        <!-- /#wrapper -->

        <!-- Javascript -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('admin/js/zoom.js') }}"></script>
        <script src="{{ asset('admin/js/apexcharts/apexcharts.js') }}"></script>
        <script src="{{ asset('admin/js/apexcharts/line-chart-1.js') }}"></script>
        <script src="{{ asset('admin/js/apexcharts/line-chart-3.js') }}"></script>
        <script src="{{ asset('admin/js/apexcharts/line-chart-4.js') }}"></script>
        <script src="{{ asset('admin/js/apexcharts/line-chart-5.js') }}"></script>
        <script src="{{ asset('admin/js/apexcharts/line-chart-6.js') }}"></script>
        <!-- <script src="{{ asset('assets/admin/js/switcher.js') }}"></script> -->
        <script src="{{ asset('admin/js/theme-settings.js') }}"></script>
        <script src="{{ asset('admin/js/main.js') }}"></script>

</body>

</html>