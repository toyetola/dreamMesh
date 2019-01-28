<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from big-bang-studio.com/neptune/neptune-default/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jan 2017 08:31:44 GMT -->
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Title -->
    <title>Talks</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap4/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/jscrollpane/jquery.jscrollpane.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/waves/waves.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/switchery/dist/switchery.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/morris/morris.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/DataTables/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/dropify/dist/css/dropify.min.css')}}">

    <!-- Neptune CSS -->
    <link rel="stylesheet" href="{{asset('css/core.css')}}">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .clickable:hover{
            cursor: pointer;
            color: #a2e6f5;
            box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
        }

        .clicked{
            background: #00aff0;
            color: white;
            font-size: large;
        }

        .hideThisQuestion{
            display: none;
        }

        .activeQuestion{
            display: block;
        }

        .activeTheoryQuestion{
            display: block;
        }

        .hideDisplay{
            display: none;
        }
    </style>
</head>
<body class="fixed-sidebar fixed-header skin-5 content-appear">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Sidebar -->
    <div class="site-overlay"></div>
{{--@include('students.')--}}

<!-- Sidebar second -->
    <div class="site-sidebar-second custom-scroll custom-scroll-dark">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">Menu</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab-1" role="tabpanel">
                <div class="sidebar-chat animated fadeIn">
                    <div class="sidebar-group">
                        <h6>Favorites</h6>
                        <a class="text-black" href="#">
                            <span class="ti-home"></span>
                            <span class="sc-name">Home</span>
                        </a>
                        <a class="text-black" href="#">
                            <span class="ti-ptofile"></span>
                            <span class="sc-name">Profile</span>
                        </a>
                        <a class="text-black" href="#">
                            <span class="ti-cart"></span>
                            <span class="sc-name">Cart</span>
                            <span class="tag tag-primary"></span>

                        </a>
                        <a class="text-black" href="#">
                            <span class="ti-settings"></span>
                            <span class="sc-name">Settings</span>
                        </a>
                    </div>

                </div>
                {{--<div class="sidebar-chat-window animated fadeIn">--}}
                {{--<div class="scw-header clearfix">--}}
                {{--<a class="text-grey float-xs-left" href="#"><i class="ti-angle-left"></i> Back</a>--}}
                {{--<div class="float-xs-right">--}}
                {{--<strong>Jonathan Mel</strong>--}}
                {{--<div class="avatar box-32">--}}
                {{--<img src="img/avatars/5.jpg" alt="">--}}
                {{--<span class="status bg-success top right"></span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="scw-item">--}}
                {{--<span>Hello!</span>--}}
                {{--</div>--}}
                {{--<div class="scw-item self">--}}
                {{--<span>Meeting at 16:00 in the conference room. Remember?</span>--}}
                {{--</div>--}}
                {{--<div class="scw-item">--}}
                {{--<span>No problem. Thank's for reminder!</span>--}}
                {{--</div>--}}
                {{--<div class="scw-item self">--}}
                {{--<span>Prepare to be amazed.</span>--}}
                {{--</div>--}}
                {{--<div class="scw-item">--}}
                {{--<span>Good. Can't wait!</span>--}}
                {{--</div>--}}
                {{--<div class="scw-form">--}}
                {{--<form>--}}
                {{--<input class="form-control" type="text" placeholder="Type...">--}}
                {{--<button class="btn btn-secondary" type="button"><i class="ti-angle-right"></i></button>--}}
                {{--</form>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>

    <!-- Template options -->
    <div class="template-options">
        <div class="custom-scroll custom-scroll-dark">
            <div class="to-content">
                {{--<a class="btn btn-info btn-block waves-effect waves-light mb-2" href="" target="_blank">BUY NOW $24</a>--}}
                <h6>Layouts</h6>
                <div class="row mb-2 text-xs-center">
                    <div class="col-xs-6 mb-2">
                        <div class="to-item">
                            <a href="index.html">
                                <img src="img/layouts/default.png" class="img-fluid">
                            </a>
                            <div class="text-muted">Default</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb-2">
                        <div class="to-item">
                            <label>
                                <input name="compact-sidebar" type="checkbox">
                                <div class="to-icon"><i class="ti-check"></i></div>
                                <img src="img/layouts/compact-sidebar.png" class="img-fluid">
                            </label>
                            <div class="text-muted">Compact Sidebar</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb-2">
                        <div class="to-item">
                            <label>
                                <input name="fixed-header" type="checkbox" checked>
                                <div class="to-icon"><i class="ti-check"></i></div>
                                <img src="img/layouts/fixed-header.png" class="img-fluid">
                            </label>
                            <div class="text-muted">Fixed Header</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb-2">
                        <div class="to-item">
                            <label>
                                <input name="fixed-sidebar" type="checkbox" checked>
                                <div class="to-icon"><i class="ti-check"></i></div>
                                <img src="img/layouts/sticky-sidebar.png" class="img-fluid">
                            </label>
                            <div class="text-muted">Sticky Sidebar</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb-2">
                        <div class="to-item">
                            <label>
                                <input name="boxed-wrapper" type="checkbox">
                                <div class="to-icon"><i class="ti-check"></i></div>
                                <img src="img/layouts/boxed-wrapper.png" class="img-fluid">
                            </label>
                            <div class="text-muted">Boxed Wrapper</div>
                        </div>
                    </div>
                    <div class="col-xs-6 mb-2">
                        <div class="to-item">
                            <label>
                                <input name="static" type="checkbox">
                                <div class="to-icon"><i class="ti-check"></i></div>
                                <img src="img/layouts/static.png" class="img-fluid">
                            </label>
                            <div class="text-muted">Static</div>
                        </div>
                    </div>
                </div>
                <h6>Skins</h6>
                <div class="row">
                    <div class="col-xs-3 mb-2">
                        <label class="skin-label">
                            <input name="skin" value="skin-default" type="radio">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="skin-dark-blue"></span>
                                <span class="skin-white"></span>
                                <span class="skin-dark-blue"></span>
                            </div>
                        </label>
                    </div>
                    <div class="col-xs-3 mb-2">
                        <label class="skin-label">
                            <input name="skin" value="skin-1" type="radio">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="skin-dark-blue-2"></span>
                                <span class="skin-dark-blue-2"></span>
                                <span class="bg-white"></span>
                            </div>
                        </label>
                    </div>
                    <div class="col-xs-3 mb-2">
                        <label class="skin-label">
                            <input name="skin" value="skin-2" type="radio">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="bg-danger"></span>
                                <span class="bg-white"></span>
                                <span class="bg-black"></span>
                            </div>
                        </label>
                    </div>
                    <div class="col-xs-3 mb-2">
                        <label class="skin-label">
                            <input name="skin" value="skin-3" type="radio">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="bg-white"></span>
                                <span class="bg-white"></span>
                                <span class="bg-white"></span>
                            </div>
                        </label>
                    </div>
                    <div class="col-xs-3 mb-2">
                        <label class="skin-label">
                            <input name="skin" value="skin-4" type="radio">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="bg-white"></span>
                                <span class="skin-dark-blue-2"></span>
                                <span class="bg-white"></span>
                            </div>
                        </label>
                    </div>
                    <div class="col-xs-3 mb-2">
                        <label class="skin-label">
                            <input name="skin" value="skin-5" type="radio" checked>
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="bg-primary"></span>
                                <span class="bg-primary"></span>
                                <span class="bg-white"></span>
                            </div>
                        </label>
                    </div>
                    <div class="col-xs-3 mb-2">
                        <label class="skin-label">
                            <input name="skin" value="skin-6" type="radio">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="bg-black"></span>
                                <span class="bg-info"></span>
                                <span class="bg-black"></span>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="to-material">
                    <div class="tom-checkbox"><input name="material-design" type="checkbox" class="js-switch" data-size="small" data-color="#20b9ae"></div>
                    <div class="text-truncate">Material design</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <div class="site-header">
        <nav class="navbar navbar-dark">
            <div class="navbar-left">
                <a class="navbar-brand" href="">
                    <div class="logo">
                        LOGO
                    </div>
                </a>
                <div class="toggle-button dark sidebar-toggle-first float-xs-left hidden-md-up">
                    <span class="hamburger"></span>
                </div>
                <div class="toggle-button-second dark float-xs-right hidden-md-up">
                    <i class="ti-arrow-left"></i>
                </div>
                <div class="toggle-button dark float-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1">
                    <span class="more"></span>
                </div>
            </div>
            <div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">
                {{--<div class="toggle-button dark sidebar-toggle-second float-xs-left hidden-sm-down">
                    <span class="hamburger"></span>
                </div>--}}
                <div class="toggle-button-second dark float-xs-right hidden-sm-down">
                    <i class="ti-arrow-left"></i>
                </div>
                <ul class="nav navbar-nav float-md-right">
                    {{--<li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-shopping-cart"></i>
                            <span class="hidden-md-up ml-1">Notifications</span>

                                <span class="tag tag-danger top"></span>


                        </a>
                        <div class="dropdown-messages dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
                            --}}{{--@foreach(cartNotifications() as $cartNotification)
                            <div class="m-item">
                                <div class="mi-icon bg-info"><i class="ti-comment"></i></div>
                                <div class="mi-text"><a class="text-black" href="#">{{$cartNotification->examType->exam_type}} <b>Package</b></a>  <span class="text-muted">contains</span> <a class="text-black" href="#">{{count(explode(',', $cartNotification->associated_subjects))}} subjects</a></div>
                                <div class="mi-time">{{$cartNotification->updated_at}}</div>
                            </div>
                            @endforeach--}}{{--
                            <a class="dropdown-more" href="">
                                <strong>View all cart Items</strong>
                            </a>
                        </div>
                    </li>--}}
                    <li class="nav-item dropdown hidden-sm-down">
                        <a href="#" data-toggle="dropdown" aria-expanded="false">
									<span class="avatar box-32">
										<img src="{{asset('Images/user.png')}}" alt="" width="30px" height="30px">
									</span>
                        </a>
                        {{--<div class="dropdown-menu dropdown-menu-right animated fadeInUp">
                            <a class="dropdown-item" href="#">
                                <i class="ti-user mr-0-5"></i> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="ti-settings mr-0-5"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href=""><i class="ti-power-off mr-0-5"></i> Sign out</a>
                        </div>--}}
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    {{--<li class="nav-item hidden-sm-down">
                        <a class="nav-link toggle-fullscreen" href="#">
                            <i class="ti-fullscreen"></i>
                        </a>
                    </li>--}}
                    {{--<li class="nav-item dropdown hidden-sm-down">--}}
                    {{--<a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">--}}
                    {{--<i class="ti-layout-grid3"></i>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-apps dropdown-menu animated fadeInUp">--}}
                    {{--<div class="a-grid">--}}
                    {{--<div class="row row-sm">--}}
                    {{--<div class="col-xs-4">--}}
                    {{--<div class="a-item">--}}
                    {{--<a href="#">--}}
                    {{--<div class="ai-icon"><img class="img-fluid" src="img/brands/dropbox.png" alt=""></div>--}}
                    {{--<div class="ai-title">Dropbox</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-4">--}}
                    {{--<div class="a-item">--}}
                    {{--<a href="#">--}}
                    {{--<div class="ai-icon"><img class="img-fluid" src="img/brands/github.png" alt=""></div>--}}
                    {{--<div class="ai-title">Github</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-4">--}}
                    {{--<div class="a-item">--}}
                    {{--<a href="#">--}}
                    {{--<div class="ai-icon"><img class="img-fluid" src="img/brands/wordpress.png" alt=""></div>--}}
                    {{--<div class="ai-title">Wordpress</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-4">--}}
                    {{--<div class="a-item">--}}
                    {{--<a href="#">--}}
                    {{--<div class="ai-icon"><img class="img-fluid" src="img/brands/gmail.png" alt=""></div>--}}
                    {{--<div class="ai-title">Gmail</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-4">--}}
                    {{--<div class="a-item">--}}
                    {{--<a href="#">--}}
                    {{--<div class="ai-icon"><img class="img-fluid" src="img/brands/drive.png" alt=""></div>--}}
                    {{--<div class="ai-title">Drive</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-4">--}}
                    {{--<div class="a-item">--}}
                    {{--<a href="#">--}}
                    {{--<div class="ai-icon"><img class="img-fluid" src="img/brands/dribbble.png" alt=""></div>--}}
                    {{--<div class="ai-title">Dribbble</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<a class="dropdown-more" href="#">--}}
                    {{--<strong>View all apps</strong>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</li>--}}
                </ul>
                {{--<div class="header-form float-md-left ml-md-2">
                    <form>
                        <input type="text" class="form-control b-a" placeholder="Search for...">
                        <button type="submit" class="btn bg-white b-a-0">
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>--}}
            </div>
        </nav>
    </div>
    {{--<div class="container" style="margin-top: 100px;">
        <ul class="nav nav-tabs nav-tabs-2">
            <li class="nav-item">
                <a class="nav-link" href=""><i class="ti-user text-muted mr-0-25"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/students/selectSubject"><i class="ti-package text-muted mr-0-25"></i> Subscribe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="ti-settings text-muted mr-0-25"></i> Settings</a>
            </li>
            <li class="nav-item">
                --}}{{--<a class="nav-link disabled" href="#"><i class="ti-alert text-muted mr-0-25"></i> Disabled</a>--}}{{--
            </li>
        </ul>
    </div>--}}
    <div class="container" style="margin-top: 40px;">
        <!-- Content -->
        <div class="content-area py-1">
            <div class="container-fluid">
                <div class="box box-block bg-white col-md-8 offset-md-2 col-sm-12" style="margin-top: 40px;">
                    <h4>Welcome, add a talk below</h4>
                    <form action="" method="">
                        <div class="col-md-12">
                            <div class="form-group col-md-3">
                                {{csrf_field()}}
                                <label>Add talk</label>
                                <input class="form-control" type="text" name="" id="talk">
                            </div>


                            <div class="col-md-3"><button type="button" id="add" class="btn btn-success" style="margin-top: 20px">Add</button></div>
                            <div><a href="/addatt">add attendee</a></div>

                        </div>


                    </form>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer fixed-bottom">
            <div class="container-fluid">
                <div class="row text-xs-center">
                    <div class="col-sm-4 text-sm-left mb-0-5 mb-sm-0">
                        {{date('Y')}} © Test
                    </div>
                    <div class="col-sm-8 text-sm-right">
                        <ul class="nav nav-inline l-h-2">
                            <li class="nav-item"><a class="nav-link text-black" href="#">Privacy</a></li>
                            <li class="nav-item"><a class="nav-link text-black" href="#">Terms</a></li>
                            <li class="nav-item"><a class="nav-link text-black" href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<!-- Vendor JS -->

<script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/tether/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/jscrollpane/mwheelIntent.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/waves/waves.min.js')}}"></script>

<script type="text/javascript" src="{{asset('vendor/CurvedLines/curvedLines.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/TinyColor/tinycolor.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/sparkline/jquery.sparkline.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/sweetalert2/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/dropify/dist/js/dropify.min.js')}}"></script>

<script type="text/javascript" src="{{asset('vendor/DataTables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/DataTables/JSZip/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/DataTables/pdfmake/build/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/DataTables/pdfmake/build/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.print.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Neptune JS -->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/demo.js')}}"></script>
<script type="text/javascript" src="{{asset('js/index3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/forms-upload.js')}}"></script>
<script>
    $.ajaxSetup({
        headers:
            {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

    $(document).on('click', '.ti-close', function () {
        $(this).parent().remove();
    });

    $('#add').click(function(){
        var d = $('#talk').val();
        $.post('/addtalk', {title:d}, function (data) {
            console.log(data);
            alert(data.data+' '+'added');
        })
    });
</script>
@yield('script')
</body>


</html>