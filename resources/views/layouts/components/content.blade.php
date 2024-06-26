<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        Widget settings form goes here
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Save changes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN STYLE CUSTOMIZER -->
        <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler">
                <i class="fa fa-gear"></i>
            </div>
            <div class="theme-options">
                <div class="theme-option theme-colors clearfix">
                    <span>
                        Theme Color </span>
                    <ul>
                        <li class="color-black current color-default tooltips" data-style="default"
                            data-original-title="Default">
                        </li>
                        <li class="color-grey tooltips" data-style="grey" data-original-title="Grey">
                        </li>
                        <li class="color-blue tooltips" data-style="blue" data-original-title="Blue">
                        </li>
                        <li class="color-red tooltips" data-style="red" data-original-title="Red">
                        </li>
                        <li class="color-light tooltips" data-style="light" data-original-title="Light">
                        </li>
                    </ul>
                </div>
                <div class="theme-option">
                    <span>
                        Layout </span>
                    <select class="layout-option form-control input-small">
                        <option value="fluid" selected="selected">Fluid</option>
                        <option value="boxed">Boxed</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span>
                        Header </span>
                    <select class="header-option form-control input-small">
                        <option value="fixed" selected="selected">Fixed</option>
                        <option value="default">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span>
                        Sidebar </span>
                    <select class="sidebar-option form-control input-small">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span>
                        Sidebar Position </span>
                    <select class="sidebar-pos-option form-control input-small">
                        <option value="left" selected="selected">Left</option>
                        <option value="right">Right</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span>
                        Footer </span>
                    <select class="footer-option form-control input-small">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- END BEGIN STYLE CUSTOMIZER -->
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Dashboard <small>statistics and more</small>
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary"
                    data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp; <span
                        class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN OVERVIEW STATISTIC BARS-->
        <div class="row stats-overview-cont">
            <div class="col-md-2 col-sm-4">
                <div class="stats-overview stat-block">
                    <div class="display stat ok huge">
                        <span class="line-chart">
                            5, 6, 7, 11, 14, 10, 15, 19, 15, 2 </span>
                        <div class="percent">
                            +66%
                        </div>
                    </div>
                    <div class="details">
                        <div class="title">
                            Users
                        </div>
                        <div class="numbers">
                            1360
                        </div>
                    </div>
                    <div class="progress">
                        <span style="width: 40%;" class="progress-bar progress-bar-info" aria-valuenow="66"
                            aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">
                                66% Complete </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="stats-overview stat-block">
                    <div class="display stat good huge">
                        <span class="line-chart">
                            2,6,8,12, 11, 15, 16, 11, 16, 11, 10, 3, 7, 8, 12, 19 </span>
                        <div class="percent">
                            +16%
                        </div>
                    </div>
                    <div class="details">
                        <div class="title">
                            Site Visits
                        </div>
                        <div class="numbers">
                            1800
                        </div>
                        <div class="progress">
                            <span style="width: 16%;" class="progress-bar progress-bar-warning" aria-valuenow="16"
                                aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">
                                    16% Complete </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="stats-overview stat-block">
                    <div class="display stat bad huge">
                        <span class="line-chart">
                            2,6,8,11, 14, 11, 12, 13, 15, 12, 9, 5, 11, 12, 15, 9,3 </span>
                        <div class="percent">
                            +6%
                        </div>
                    </div>
                    <div class="details">
                        <div class="title">
                            Orders
                        </div>
                        <div class="numbers">
                            509
                        </div>
                        <div class="progress">
                            <span style="width: 16%;" class="progress-bar progress-bar-success" aria-valuenow="16"
                                aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">
                                    16% Complete </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="stats-overview stat-block">
                    <div class="display stat good huge">
                        <span class="bar-chart">
                            1,4,9,12, 10, 11, 12, 15, 12, 11, 9, 12, 15, 19, 14, 13, 15 </span>
                        <div class="percent">
                            +86%
                        </div>
                    </div>
                    <div class="details">
                        <div class="title">
                            Revenue
                        </div>
                        <div class="numbers">
                            1550
                        </div>
                        <div class="progress">
                            <span style="width: 56%;" class="progress-bar progress-bar-warning" aria-valuenow="56"
                                aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">
                                    56% Complete </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="stats-overview stat-block">
                    <div class="display stat ok huge">
                        <span class="line-chart">
                            2,6,8,12, 11, 15, 16, 17, 14, 12, 10, 8, 10, 2, 4, 12, 19 </span>
                        <div class="percent">
                            +72%
                        </div>
                    </div>
                    <div class="details">
                        <div class="title">
                            Sales
                        </div>
                        <div class="numbers">
                            9600
                        </div>
                        <div class="progress">
                            <span style="width: 72%;" class="progress-bar progress-bar-danger" aria-valuenow="72"
                                aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">
                                    72% Complete </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="stats-overview stat-block">
                    <div class="display stat bad huge">
                        <span class="line-chart">
                            1,7,9,11, 14, 12, 6, 7, 4, 2, 9, 8, 11, 12, 14, 12, 10 </span>
                        <div class="percent">
                            +15%
                        </div>
                    </div>
                    <div class="details">
                        <div class="title">
                            Stock
                        </div>
                        <div class="numbers">
                            2090
                        </div>
                        <div class="progress">
                            <span style="width: 15%;" class="progress-bar progress-bar-success" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">
                                    15% Complete </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OVERVIEW STATISTIC BARS-->
        <div class="clearfix">
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bar-chart"></i>Site Visits
                        </div>
                        <div class="actions">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default btn-sm active">
                                    <input type="radio" name="options" class="toggle">New </label>
                                <label class="btn btn-default btn-sm">
                                    <input type="radio" name="options" class="toggle">Returning </label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="site_statistics_loading">
                            <img src="assets/img/loading.gif" alt="loading" />
                        </div>
                        <div id="site_statistics_content" class="display-none">
                            <div id="site_statistics" class="chart">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bell"></i>Notifications
                        </div>
                        <div class="tools">
                            <a href="" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="" class="reload"></a>
                            <a href="" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!--BEGIN TABS-->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab">System</a>
                            </li>
                            <li>
                                <a href="#tab_1_2" data-toggle="tab">Activities</a>
                            </li>
                            <li>
                                <a href="#tab_1_3" data-toggle="tab">Recent Users</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1_1">
                                <div class="scroller" style="height: 250px;" data-always-visible="1"
                                    data-rail-visible="0">
                                    <ul class="feeds">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bell"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            You have 4 pending tasks. <span
                                                                class="label label-sm label-danger ">
                                                                Take action <i class="fa fa-share-alt"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    Just now
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New version v1.4 just lunched!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        20 mins
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Database server #12 overloaded. Please fix the
                                                            issue.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    30 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    40 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-warning">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New user registered.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    1.5 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-cogs"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Web server hardware needs to be upgraded. <span
                                                                class="label label-sm label-default ">
                                                                Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    2 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    3 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-warning">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    5 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    18 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    21 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    22 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    21 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    22 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    21 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    22 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    21 hours
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            New order received. Please take care of it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    22 hours
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_2">
                                <div class="scroller" style="height: 250px;" data-always-visible="1"
                                    data-rail-visible1="1">
                                    <ul class="feeds">
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New order received
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        10 mins
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            Order #24DOP4 has been rejected. <span
                                                                class="label label-sm label-danger ">
                                                                Take action <i class="fa fa-share-alt"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    24 mins
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_3">
                                <div class="scroller" style="height: 250px;" data-always-visible="1"
                                    data-rail-visible1="1">
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Robert Nilson</a>
                                                    <span class="label label-sm label-success label-sm">
                                                        Approved </span>
                                                </div>
                                                <div>
                                                    29 Jan 2013 10:45AM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Lisa Miller</a>
                                                    <span class="label label-sm label-info">
                                                        Pending </span>
                                                </div>
                                                <div>
                                                    19 Jan 2013 10:45AM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Eric Kim</a>
                                                    <span class="label label-sm label-info">
                                                        Pending </span>
                                                </div>
                                                <div>
                                                    19 Jan 2013 12:45PM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Lisa Miller</a>
                                                    <span class="label label-sm label-danger">
                                                        In progress </span>
                                                </div>
                                                <div>
                                                    19 Jan 2013 11:55PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Eric Kim</a>
                                                    <span class="label label-sm label-info">
                                                        Pending </span>
                                                </div>
                                                <div>
                                                    19 Jan 2013 12:45PM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Lisa Miller</a>
                                                    <span class="label label-sm label-danger">
                                                        In progress </span>
                                                </div>
                                                <div>
                                                    19 Jan 2013 11:55PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Eric Kim</a>
                                                    <span class="label label-sm label-info">
                                                        Pending </span>
                                                </div>
                                                <div>
                                                    19 Jan 2013 12:45PM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Lisa Miller</a>
                                                    <span class="label label-sm label-danger">
                                                        In progress </span>
                                                </div>
                                                <div>
                                                    19 Jan 2013 11:55PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Eric Kim</a>
                                                    <span class="label label-sm label-info">
                                                        Pending </span>
                                                </div>
                                                <div>
                                                    19 Jan 2013 12:45PM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Lisa Miller</a>
                                                    <span class="label label-sm label-danger">
                                                        In progress </span>
                                                </div>
                                                <div>
                                                    19 Jan 2013 11:55PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Eric Kim</a>
                                                    <span class="label label-sm label-info">
                                                        Pending </span>
                                                </div>
                                                <div>
                                                    19 Jan 2013 12:45PM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 user-info">
                                            <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                                            <div class="details">
                                                <div>
                                                    <a href="#">Lisa Miller</a>
                                                    <span class="label label-sm label-danger">
                                                        In progress </span>
                                                </div>
                                                <div>
                                                    19 Jan 2013 11:55PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END TABS-->
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="row ">
            <div class="col-md-6 col-sm-6">
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-bell"></i>Recent Orders
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn btn-default btn-sm dropdown-toggle" href="#"
                                    data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    Filter By <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                    <label><input type="checkbox" /> Finance</label>
                                    <label><input type="checkbox" checked="" /> Membership</label>
                                    <label><input type="checkbox" /> Customer Support</label>
                                    <label><input type="checkbox" checked="" /> HR</label>
                                    <label><input type="checkbox" /> System</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            From
                                        </th>
                                        <th>
                                            Contact
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#">Ikea</a>
                                        </td>
                                        <td>
                                            Elis Yong
                                        </td>
                                        <td>
                                            4560.60$ <span class="label label-warning label-sm">
                                                Paid </span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Apple</a>
                                        </td>
                                        <td>
                                            Daniel Kim
                                        </td>
                                        <td>
                                            360.60$
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">37Singals</a>
                                        </td>
                                        <td>
                                            Edward Cooper
                                        </td>
                                        <td>
                                            960.50$ <span class="label label-success label-sm">
                                                Pending </span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Google</a>
                                        </td>
                                        <td>
                                            Paris Simpson
                                        </td>
                                        <td>
                                            1101.60$ <span class="label label-success label-sm">
                                                Pending </span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Ikea</a>
                                        </td>
                                        <td>
                                            Elis Yong
                                        </td>
                                        <td>
                                            4560.60$ <span class="label label-warning label-sm">
                                                Paid </span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Google</a>
                                        </td>
                                        <td>
                                            Paris Simpson
                                        </td>
                                        <td>
                                            1101.60$ <span class="label label-success label-sm">
                                                Pending </span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="portlet tasks-widget">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-check"></i>Tasks
                        </div>
                        <div class="tools">
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="" class="reload"></a>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn btn-info btn-sm dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-hover="dropdown" data-close-others="true">
                                    More <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#"><i class="i"></i> All Project</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#">AirAsia</a>
                                    </li>
                                    <li>
                                        <a href="#">Cruise</a>
                                    </li>
                                    <li>
                                        <a href="#">HSBC</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#">Pending <span class="badge badge-important">
                                                4 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Completed <span class="badge badge-success">
                                                12 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Overdue <span class="badge badge-warning">
                                                9 </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="task-content">
                            <div class="scroller" style="height: 305px;" data-always-visible="1"
                                data-rail-visible1="1">
                                <!-- START TASK LIST -->
                                <ul class="task-list">
                                    <li>
                                        <div class="task-checkbox">
                                            <input type="checkbox" class="liChild" value="" />
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp">
                                                Present 2013 Year IPO Statistics at Board Meeting </span>
                                            <span class="label label-sm label-success">
                                                Company </span>
                                            <span class="task-bell">
                                                <i class="fa fa-bell-o"></i>
                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-xs btn-default dropdown-toggle" href="#"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true">
                                                    <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#"><i class="fa fa-check"></i>
                                                            Complete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-pencil"></i>
                                                            Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-trash-o"></i>
                                                            Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <input type="checkbox" class="liChild" value="" />
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp">
                                                Hold An Interview for Marketing Manager Position </span>
                                            <span class="label label-sm label-danger">
                                                Marketing </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-xs btn-default dropdown-toggle" href="#"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true">
                                                    <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#"><i class="fa fa-check"></i>
                                                            Complete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-pencil"></i>
                                                            Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-trash-o"></i>
                                                            Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <input type="checkbox" class="liChild" value="" />
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp">
                                                AirAsia Intranet System Project Internal Meeting </span>
                                            <span class="label label-sm label-success">
                                                AirAsia </span>
                                            <span class="task-bell">
                                                <i class="fa fa-bell-o"></i>
                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-xs btn-default dropdown-toggle" href="#"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true">
                                                    <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#"><i class="fa fa-check"></i>
                                                            Complete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-pencil"></i>
                                                            Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-trash-o"></i>
                                                            Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <input type="checkbox" class="liChild" value="" />
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp">
                                                Technical Management Meeting </span>
                                            <span class="label label-sm label-warning">
                                                Company </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-xs btn-default dropdown-toggle" href="#"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true"><i class="fa fa-cog"></i><i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#"><i class="fa fa-check"></i>
                                                            Complete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-pencil"></i>
                                                            Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-trash-o"></i>
                                                            Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <input type="checkbox" class="liChild" value="" />
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp">
                                                Kick-off Company CRM Mobile App Development </span>
                                            <span class="label label-sm label-info">
                                                Internal Products </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-xs btn-default dropdown-toggle" href="#"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true"><i class="fa fa-cog"></i><i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#"><i class="fa fa-check"></i>
                                                            Complete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-pencil"></i>
                                                            Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-trash-o"></i>
                                                            Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <input type="checkbox" class="liChild" value="" />
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp">
                                                Prepare Commercial Offer For SmartVision Website Rewamp </span>
                                            <span class="label label-sm label-danger">
                                                SmartVision </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-xs btn-default dropdown-toggle" href="#"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true"><i class="fa fa-cog"></i><i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#"><i class="fa fa-check"></i>
                                                            Complete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-pencil"></i>
                                                            Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-trash-o"></i>
                                                            Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <input type="checkbox" class="liChild" value="" />
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp">
                                                Sign-Off The Comercial Agreement With AutoSmart </span>
                                            <span class="label label-sm label-default">
                                                AutoSmart </span>
                                            <span class="task-bell">
                                                <i class="fa fa-bell-o"></i>
                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-xs btn-default dropdown-toggle" href="#"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true"><i class="fa fa-cog"></i><i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#"><i class="fa fa-check"></i>
                                                            Complete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-pencil"></i>
                                                            Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-trash-o"></i>
                                                            Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="task-checkbox">
                                            <input type="checkbox" class="liChild" value="" />
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp">
                                                Company Staff Meeting </span>
                                            <span class="label label-sm label-success">
                                                Cruise </span>
                                            <span class="task-bell">
                                                <i class="fa fa-bell-o"></i>
                                            </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-xs btn-default dropdown-toggle" href="#"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true"><i class="fa fa-cog"></i><i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#"><i class="fa fa-check"></i>
                                                            Complete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-pencil"></i>
                                                            Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-trash-o"></i>
                                                            Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="last-line">
                                        <div class="task-checkbox">
                                            <input type="checkbox" class="liChild" value="" />
                                        </div>
                                        <div class="task-title">
                                            <span class="task-title-sp">
                                                KeenThemes Investment Discussion </span>
                                            <span class="label label-sm label-warning">
                                                KeenThemes </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="task-config-btn btn-group">
                                                <a class="btn btn-xs btn-default dropdown-toggle" href="#"
                                                    data-toggle="dropdown" data-hover="dropdown"
                                                    data-close-others="true"><i class="fa fa-cog"></i><i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#"><i class="fa fa-check"></i>
                                                            Complete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-pencil"></i>
                                                            Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-trash-o"></i>
                                                            Cancel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- END START TASK LIST -->
                            </div>
                        </div>
                        <div class="task-footer">
                            <span class="pull-right">
                                <a href="#">See All Tasks</a> &nbsp; </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="row ">
            <div class="col-md-6 col-sm-12">
                <!-- BEGIN REGIONAL STATS PORTLET-->
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Regional Stats
                        </div>
                        <div class="tools">
                            <a href="" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="" class="reload"></a>
                            <a href="" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="region_statistics_loading">
                            <img src="assets/img/loading.gif" alt="loading" />
                        </div>
                        <div id="region_statistics_content" class="display-none">
                            <div class="btn-toolbar margin-bottom-10">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-info btn-sm">
                                        <input type="radio" name="options" class="toggle">Users </label>
                                    <label class="btn btn-info btn-sm">
                                        <input type="radio" name="options" class="toggle">Orders
                                    </label>
                                </div>
                                <div class="btn-group pull-right">
                                    <a href="" class="btn btn-success btn-sm dropdown-toggle"
                                        data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        Select Region <span class="fa fa-angle-down">
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;" id="regional_stat_world">World</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" id="regional_stat_usa">USA</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" id="regional_stat_europe">Europe</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" id="regional_stat_russia">Russia</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" id="regional_stat_germany">Germany</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="vmap_world" class="vmaps display-none">
                            </div>
                            <div id="vmap_usa" class="vmaps display-none">
                            </div>
                            <div id="vmap_europe" class="vmaps display-none">
                            </div>
                            <div id="vmap_russia" class="vmaps display-none">
                            </div>
                            <div id="vmap_germany" class="vmaps display-none">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END REGIONAL STATS PORTLET-->
            </div>
            <div class="col-md-6 col-sm-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-signal"></i>Realtime Server Load
                        </div>
                        <div class="actions">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-success btn-sm">
                                    <input type="radio" name="options" class="toggle">Database </label>
                                <label class="btn btn-success btn-sm">
                                    <input type="radio" name="options" class="toggle">Web </label>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="load_statistics_loading">
                            <img src="assets/img/loading.gif" alt="loading" />
                        </div>
                        <div id="load_statistics_content" class="display-none">
                            <div id="load_statistics" style="height: 340px;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
        </div>
        <div class="clearfix">
        </div>
        <!-- BEGIN OVERVIEW STATISTIC BLOCKS-->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="circle-stat stat-block">
                    <div class="visual">
                        <input class="knobify" data-width="115" data-thickness=".2" data-skin="tron"
                            data-displayprevious="true" value="+89" data-max="100" data-min="-100" />
                    </div>
                    <div class="details">
                        <div class="title">
                            Unique Visits <i class="fa fa-caret-up"></i>
                        </div>
                        <div class="number">
                            10112
                        </div>
                        <span class="label label-success">
                            <i class="fa fa-map-marker"></i> 123 </span>
                        <span class="label label-warning">
                            <i class="fa fa-comment"></i> 3 </span>
                        <span class="label label-info">
                            <i class="fa fa-bullhorn"></i> 3 </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="circle-stat stat-block">
                    <div class="visual">
                        <input class="knobify" data-width="115" data-fgcolor="#66EE66" data-thickness=".2"
                            data-skin="tron" data-displayprevious="true" value="+19" data-max="100"
                            data-min="-100" />
                    </div>
                    <div class="details">
                        <div class="title">
                            New Users <i class="fa fa-caret-up"></i>
                        </div>
                        <div class="number">
                            987
                        </div>
                        <span class="label label-danger">
                            <i class="fa fa-bullhorn"></i> 567 </span>
                        <span class="label label-default">
                            <i class="fa fa-plus"></i> 16 </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-tablet="span6 fix-margin" data-desktop="span3">
                <div class="circle-stat stat-block">
                    <div class="visual">
                        <input class="knobify" data-width="115" data-fgcolor="#e23e29" data-thickness=".2"
                            data-skin="tron" data-displayprevious="true" value="-12" data-max="100"
                            data-min="-100" />
                    </div>
                    <div class="details">
                        <div class="title">
                            Downtime <i class="fa fa-caret-down down"></i>
                        </div>
                        <div class="number">
                            0.01%
                        </div>
                        <span class="label label-info">
                            <i class="fa fa-bookmark-empty"></i> 23 </span>
                        <span class="label label-warning">
                            <i class="fa fa-check"></i> 31 </span>
                        <span class="label label-success">
                            <i class="fa fa-briefcase"></i> 39 </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="circle-stat stat-block">
                    <div class="visual">
                        <input class="knobify" data-width="115" data-fgcolor="#fdbb39" data-thickness=".2"
                            data-skin="tron" data-displayprevious="true" value="+58" data-max="100"
                            data-min="-100" />
                    </div>
                    <div class="details">
                        <div class="title">
                            Profit <i class="fa fa-caret-up"></i>
                        </div>
                        <div class="number">
                            1120.32$
                        </div>
                        <span class="label label-success">
                            <i class="fa fa-comment"></i> 453 </span>
                        <span class="label label-default">
                            <i class="fa fa-globe"></i> 123 </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OVERVIEW STATISTIC BLOCKS-->
        <div class="clearfix">
        </div>
        <div class="row ">
            <div class="col-md-6 col-sm-6">
                <!-- BEGIN PORTLET-->
                <div class="portlet calendar">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-calendar"></i>Event Calendar
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="calendar">
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
            <div class="col-md-6 col-sm-6">
                <!-- BEGIN PORTLET-->
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-comments"></i>Conversations
                        </div>
                        <div class="tools">
                            <a href="" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="" class="reload"></a>
                            <a href="" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body" id="chats">
                        <div class="scroller" style="height: 435px;" data-always-visible="1"
                            data-rail-visible1="1">
                            <ul class="chats">
                                <li class="in">
                                    <img class="avatar img-responsive" alt=""
                                        src="assets/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow">
                                        </span>
                                        <a href="#" class="name">Bob Nilson</a>
                                        <span class="datetime">
                                            at Jul 25, 2012 11:09 </span>
                                        <span class="body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar img-responsive" alt=""
                                        src="assets/img/avatar2.jpg" />
                                    <div class="message">
                                        <span class="arrow">
                                        </span>
                                        <a href="#" class="name">Lisa Wong</a>
                                        <span class="datetime">
                                            at Jul 25, 2012 11:09 </span>
                                        <span class="body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar img-responsive" alt=""
                                        src="assets/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow">
                                        </span>
                                        <a href="#" class="name">Bob Nilson</a>
                                        <span class="datetime">
                                            at Jul 25, 2012 11:09 </span>
                                        <span class="body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar img-responsive" alt=""
                                        src="assets/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow">
                                        </span>
                                        <a href="#" class="name">Richard Doe</a>
                                        <span class="datetime">
                                            at Jul 25, 2012 11:09 </span>
                                        <span class="body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar img-responsive" alt=""
                                        src="assets/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow">
                                        </span>
                                        <a href="#" class="name">Richard Doe</a>
                                        <span class="datetime">
                                            at Jul 25, 2012 11:09 </span>
                                        <span class="body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar img-responsive" alt=""
                                        src="assets/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow">
                                        </span>
                                        <a href="#" class="name">Bob Nilson</a>
                                        <span class="datetime">
                                            at Jul 25, 2012 11:09 </span>
                                        <span class="body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. </span>
                                    </div>
                                </li>
                                <li class="in">
                                    <img class="avatar img-responsive" alt=""
                                        src="assets/img/avatar3.jpg" />
                                    <div class="message">
                                        <span class="arrow">
                                        </span>
                                        <a href="#" class="name">Richard Doe</a>
                                        <span class="datetime">
                                            at Jul 25, 2012 11:09 </span>
                                        <span class="body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. </span>
                                    </div>
                                </li>
                                <li class="out">
                                    <img class="avatar img-responsive" alt=""
                                        src="assets/img/avatar1.jpg" />
                                    <div class="message">
                                        <span class="arrow">
                                        </span>
                                        <a href="#" class="name">Bob Nilson</a>
                                        <span class="datetime">
                                            at Jul 25, 2012 11:09 </span>
                                        <span class="body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-form">
                            <div class="input-cont">
                                <input class="form-control" type="text" placeholder="Type a message here..." />
                            </div>
                            <div class="btn-cont">
                                <span class="arrow">
                                </span>
                                <a href="" class="btn btn-primary icn-only"><i class="fa fa-check"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
        </div>
    </div>
</div>
