<?php session_start();

if(isset($_SESSION['username'])) 
{


echo '

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>後台首頁</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="../../../assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="../../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../../../assets/css/animate.min.css" rel="stylesheet" />
	<link href="../../../assets/css/style.min.css" rel="stylesheet" />
	<link href="../../../assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="../../../assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="../../../assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
    <link href="../../../assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
    <link href="../../../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="../../../assets/plugins/morris/morris.css" rel="stylesheet" />
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../../../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<?php if($p === "index") ?>
<body>	
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-without-sidebar page-header-fixed page-with-top-menu">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<!--<a href="index.html" class="navbar-brand"><span class="navbar-logo"><img src="http://johost.9skin.com/images/9skin_worm.png" height="25" width="28"></img></span>JODSS</a>-->
					<a href="index.html" class="navbar-brand"><img class="navbar-logo" src="http://johost.9skin.com/images/9skin_worm.png" height="25" width="27">JODSS</img></a>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<!--<li>
						<form class="navbar-form full-width">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter keyword" />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
							<i class="fa fa-bell-o"></i>
							<span class="label">5</span>
						</a>
						<ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">通知 (5)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="../../../assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="../../../assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
						</ul>
					</li>-->
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="../../../assets/img/user-12.jpg" alt="" />							
							<span class="hidden-xs">'.$_SESSION['username'].'<span><b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft" action = "login.php" method = "get" >
							<!--<li class="arrow"></li>
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li>
							<li><a href="javascript:;">Setting</a></li>-->
							<!--<li class="divider"></li>-->
							<li><a href="//124.219.73.151/CI/index.php/login/logout">登出</a></a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #top-menu -->
		<div id="top-menu" class="top-menu">
            <!-- begin top-menu nav -->
            <ul class="nav">
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-laptop"></i>
                        <span>會員管理</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="allmember.html">會員總表</a></li>
                        <li><a href="myself.html">個人資料管理</a></li>
                        <!--<li><a href="allmember results.html">會員業績總表</a></li>
                        <li><a href="results.html">個人業績表</a></li>-->
                        <li><a href="member_stratum.html">位階管理</a></li>
                        <li><a href="rank_picture_management.html">位階圖(管理者)</a></li>
                        <li><a href="rank_picture.html">位階圖</a></li>
                        <!--<li><a href="allmember bonus.html">會員獎金明細總表</a></li>
                        <li><a href="memberranking.html">整體會員排名</a></li>                        
                        <!--<li><a href="index_v2.html"></a></li>-->
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <span class="caret pull-right"></span>
                        <i class="fa fa-inbox"></i> 
                        <span>獎金管理</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="allmember_bonus.html">獎金發放紀錄表</a></li>
                        <li><a href="personal_bonus.html">個人獎金發放紀錄表</a></li>
                        <li><a href="month_bonus_management.html">月報表(管理者)</a></li>
                        <li><a href="month_bonus.html">月報表</a></li>                        
                        <!--<li><a href="ID.html">獎金轉帳帳號</a></li>
                        <li><a href="transaction record form.html">個人交易紀錄表</a></li>-->
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="message board.html">
                        <b class="badge pull-right"></b>
                        <i class="fa fa-file-o"></i>
                        <span>前台頁面管理</span> 
                    </a>
                    <ul class="sub-menu">
                        <li><a href="front1.html">雙贏富創意行銷</a></li>
                        <li><a href="front2.html">關於我們</a></li>
                        <li><a href="front3.html">產品資訊</a></li>
                    </ul>
                </li>
                <!--<li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-suitcase"></i>
                        <span>統計分析系統</span> 
                    </a>
                    <ul class="sub-menu">
                        <li><a href="newmember.html">年度每月新進會員統計表</a></li>
                        <li><a href="no purchase.html">久未申購者名單</a></li>
                        <li><a href="ui_media_object.html">每月各職級晉升人員名單</a></li>
                        <li><a href="ui_unlimited_tabs.html">年度每月達成責任額人數統計</a></li>
                        <li><a href="commodity.html">商品銷售分析表</a></li>
                        <li><a href="annual sales.html">年度銷售成績統計表</a></li>
                        <li><a href="form_wizards_validation.html">進銷存報表</a></li>
                        <li><a href="ui_simple_line_icons.html">每日收款統計資料</a></li>
                        <li><a href="form_wizards.html">現金、信用卡等繳款金額統計</a></li>
                        <li><a href="ui_modal_notification.html">年度每月代扣稅額統計表</a></li>
                        <li><a href="ui_widget_boxes.html">扣繳資料查詢及列印扣繳憑單</a></li>
                    </ul>
                </li>                
                <!--<li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-th"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="table_basic.html">Basic Tables</a></li>
                        <li class="has-sub">
                            <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
                            <ul class="sub-menu">
                                <li><a href="table_manage.html">Default</a></li>
                                <li><a href="table_manage_autofill.html">Autofill</a></li>
                                <li><a href="table_manage_buttons.html">Buttons</a></li>
                                <li><a href="table_manage_colreorder.html">ColReorder</a></li>
                                <li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
                                <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
                                <li><a href="table_manage_keytable.html">KeyTable</a></li>
                                <li><a href="table_manage_responsive.html">Responsive</a></li>
                                <li><a href="table_manage_rowreorder.html">RowReorder</a></li>
                                <li><a href="table_manage_scroller.html">Scroller</a></li>
                                <li><a href="table_manage_select.html">Select</a></li>
                                <li><a href="table_manage_combine.html">Extension Combination</a></li>
                            </ul>
                        </li>
                    </ul>
                <!--</li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-star"></i> 
                        <span>Front End <span class="label label-theme m-l-5">NEW</span></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="../../../../../../frontend/one-page-parallax/template_content_html/index.html" target="_blank">One Page Parallax</a></li>
                        <li><a href="../../../../../../frontend/blog/template_content_html/index.html" target="_blank">Blog</a></li>
                        <li><a href="../../../../../../frontend/forum/template_content_html/index.html" target="_blank">Forum</a></li>
                        <li><a href="../../../../../../frontend/e-commerce/template_content_html/index.html" target="_blank">E-Commerce<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-envelope"></i>
                        <span>Email Template</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="email_system.html">System Template</a></li>
                        <li><a href="email_newsletter.html">Newsletter Template</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-area-chart"></i>
                        <span>Chart</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="chart-flot.html">Flot Chart</a></li>
                        <li><a href="chart-morris.html">Morris Chart</a></li>
                        <li><a href="chart-js.html">Chart JS</a></li>
                        <li><a href="chart-d3.html">d3 Chart</a></li>
                    </ul>
                </li>-->
                <!--<li><a href="calendar.html"><i class="fa fa-calendar"></i> <span>日歷</span></a></li>
                <!--<li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-map-marker"></i>
                        <span>Map</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="map_vector.html">Vector Map</a></li>
                        <li><a href="map_google.html">Google Map</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-camera"></i>
                        <span>Gallery</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="gallery.html">Gallery v1</a></li>
                        <li><a href="gallery_v2.html">Gallery v2</a></li>
                    </ul>
                </li>
                <li class="has-sub active">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-cogs"></i>
                        <span>Page Options</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="page_blank.html">Blank Page</a></li>
                        <li><a href="page_with_footer.html">Page with Footer</a></li>
                        <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
                        <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
                        <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
                        <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
                        <li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
                        <li><a href="page_with_ionicons.html">Page with Ionicons</a></li>
                        <li><a href="page_full_height.html">Full Height Content</a></li>
                        <li><a href="page_with_wide_sidebar.html">Page with Wide Sidebar</a></li>
                        <li><a href="page_with_light_sidebar.html">Page with Light Sidebar</a></li>
                        <li><a href="page_with_mega_menu.html">Page with Mega Menu</a></li>
                        <li class="active"><a href="page_with_top_menu.html">Page with Top Menu</a></li>
                        <li><a href="page_with_boxed_layout.html">Page with Boxed Layout</a></li>
                        <li><a href="page_with_mixed_menu.html">Page with Mixed Menu</a></li>
                        <li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                        <li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-gift"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="extra_timeline.html">Timeline</a></li>
                        <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
                        <li><a href="extra_search_results.html">Search Results</a></li>
                        <li><a href="extra_invoice.html">Invoice</a></li>
                        <li><a href="extra_404_error.html">404 Error Page</a></li>
                        <li><a href="extra_profile.html">Profile Page</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-key"></i>
                        <span>Login & Register</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="login_v2.html">Login v2</a></li>
                        <li><a href="login_v3.html">Login v3</a></li>
                        <li><a href="register_v3.html">Register v3</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-cubes"></i>
                        <span>Version <span class="label label-theme m-l-5">NEW</span></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="javascript:;">HTML</a></li>
                        <li><a href="../../../template_content_ajax/index.html">AJAX</a></li>
                        <li><a href="../../../template_content_angularjs/index.html">ANGULAR JS</a></li>
                        <li><a href="../../../template_content_material/index.html">MATERIAL DESIGN<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-medkit"></i>
                        <span>Helper</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="helper_css.html">Predefined CSS Classes</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-align-left"></i> 
                        <span>Menu Level</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                Menu 1.1
                            </a>
                            <ul class="sub-menu">
                                <li class="has-sub">
                                    <a href="javascript:;">
                                        <b class="caret pull-right"></b>
                                        Menu 2.1
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:;">Menu 3.1</a></li>
                                        <li><a href="javascript:;">Menu 3.2</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;">Menu 2.2</a></li>
                                <li><a href="javascript:;">Menu 2.3</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;">Menu 1.2</a></li>
                        <li><a href="javascript:;">Menu 1.3</a></li>
                    </ul>
                </li>
                <li class="menu-control menu-control-left">
                    <a href="#" data-click="prev-menu"><i class="fa fa-angle-left"></i></a>
                </li>
                <li class="menu-control menu-control-right">
                    <a href="#" data-click="next-menu"><i class="fa fa-angle-right"></i></a>
                </li>
            </ul>-->
            <!-- end top-menu nav -->
		</div>
		<!-- end #top-menu -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<!--<ol class="breadcrumb pull-right">
				<li><a href="page_with_top_menu_2016530(3).html">首頁</a></li>
				<!--<li><a href="javascript:;">設定</a></li>
			<!--	<li class="active">Page with Top Menu</li>-->
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header 
			<h1 class="page-header">親愛的richard78126您好</small></h1>
			<!-- end page-header 
			
			<div class="row">
			    <div class="col-md-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">系統說明</h4>
                        </div>
                        <div class="panel-body">
                            系統版本9.0 XXXXXXXXXXXXXX
                        </div>
                    </div>
			    </div>
		    </div>-->
		    <!-- begin col-6 -->
		    <div class="row">
			    <!-- begin col-3 -->
			    <div class="col-md-3 col-sm-6">
			        <div class="widget widget-stats bg-green">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
			            <div class="stats-title">雙贏富總帳戶</div>
			            <div class="stats-number">$7,842,900</div>
			            <div class="stats-progress progress">
                            <div class="progress-bar" style="width: 70.1%;"></div>
                        </div>
                        <div class="stats-desc">比上月多 (70.1%)</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-md-3 col-sm-6">
			        <div class="widget widget-stats bg-blue">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-tags fa-fw"></i></div>
			            <div class="stats-title">未發放獎金帳戶</div>
			            <div class="stats-number">$180,200</div>
			            <div class="stats-progress progress">
                            <div class="progress-bar" style="width: 40.5%;"></div>
                        </div>
                        <div class="stats-desc">比上月多 (40.5%)</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-md-3 col-sm-6">
			        <div class="widget widget-stats bg-purple">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-shopping-cart fa-fw"></i></div>
			            <div class="stats-title">系統安定發展基金帳戶</div>
			            <div class="stats-number">$38,900</div>
			            <div class="stats-progress progress">
                            <div class="progress-bar" style="width: 76.3%;"></div>
                        </div>
                        <div class="stats-desc">比上月多 (76.3%)</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-md-3 col-sm-6">
			        <div class="widget widget-stats bg-black">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-comments fa-fw"></i></div>
			            <div class="stats-title">系統帳號數-虛擬帳號數=實際人數</div>
			            <div class="stats-number">100-19=81</div>
			            <div class="stats-progress progress">
                            <div class="progress-bar" style="width: 54.9%;"></div>
                        </div>
                        <div class="stats-desc">比上月多 (54.9%)</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			</div>
		    <div class="row">   
		        <!--<div class="col-md-6">
			        <div class="panel panel-inverse" data-sortable-id="ui-modal-notification-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">重要訊息</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>訊息標題</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>基金會「愛心手拿包」已全數致贈完畢，感謝支持</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>mega均衡健康特惠贈品「天絲棉涼感被」贈送完畢</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>2016年6月15日推薦講座【台南場】分享嘉賓介紹</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>端午節服務據點營業訊息公告</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>Add notification (with callbacks)</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>Add a sticky notification (with callbacks)</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>Add notification with max of 3</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>Remove all notifications</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>Remove all notifications (with callbacks)</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                </tbody>
                        </table>
				    </div>
                </div>
		    </div>
		<!-- end col-6 -->
		<!-- begin col-6(2) -->
		    <!--<div class="row">   
		        <div class="col-md-6">
			        <div class="panel panel-inverse" data-sortable-id="ui-modal-notification-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">最新商品</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>商品名稱</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>超強效洗手液</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>mega均衡健康特惠贈品「天絲棉涼感被」贈送完畢</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>2016年6月15日推薦講座【台南場】分享嘉賓介紹</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>端午節服務據點營業訊息公告</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>Add notification (with callbacks)</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>Add a sticky notification (with callbacks)</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>Add notification with max of 3</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>Remove all notifications</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                    <tr>
                                        <td>Remove all notifications (with callbacks)</td>
                                        <td><a href="javascript:;" id="add-gritter-light" class="btn btn-sm btn-success">更多</a></td>
                                        <td><a href="javascript:;" id="add-sticky-with-callbacks" class="btn btn-sm btn-danger">編輯</a></td>
                                    </tr>
                                </tbody>
                            </table>
				        </div>
                    </div>
		        </div>
		    </div>		    
		<!-- end #content -->
        <!-- begin theme-panel -->
        <!--<div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control input-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../../../assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="../../../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="../../../assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="../../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../../../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../../../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../../../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../../../assets/js/apps.min.js"></script>
	<script src="../../../assets/plugins/morris/raphael.min.js"></script>
    <script src="../../../assets/plugins/morris/morris.js"></script>
    <script src="../../../assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../../../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
    <script src="../../../assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
	<script src="../../../assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="../../../assets/js/dashboard-v2.min.js"></script>
	<script src="../../../assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			DashboardV2.init();
		});
	</script>
</body>
</html>';
}
else{
echo "<script>alert('請登入帳號密碼')</script>";
echo '<meta http-equiv=REFRESH CONTENT=0.1;url=/CI/index.php/login/index>';
}
?>