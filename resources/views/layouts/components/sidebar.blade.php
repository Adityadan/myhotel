<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: for circle icon style menu apply page-sidebar-menu-circle-icons class right after sidebar-toggler-wrapper -->
        <ul class="page-sidebar-menu">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <div class="clearfix">
                </div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <form class="search-form" role="form" action="index.html" method="get">
                    <div class="input-icon right">
                        <i class="icon-magnifier"></i>
                        <input type="text" class="form-control" name="query" placeholder="Search...">
                    </div>
                </form>
            </li>
            <li class="start active ">
                <a href="{{url('/')}}">
                    <i class="icon-home"></i>
                    <span class="title">Home</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-puzzle"></i>
                    <span class="title">Hotel</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('hotels.index') }}">
                            <i class="icon-anchor"></i>
                            Manage Hotels</a>
                    </li>
                    <li>
                        <a href="{{ route('reportShowHotel') }}">
                            <i class="icon-book-open"></i>
                            Available
                            Hotel Rooms</a>
                    </li>
                    <li>
                        <a href="{{ route('avgPriceByHotelType') }}">
                            <i class="icon-book-open"></i>
                            Average Price by Hotel Type</a>
                    </li>
                    <li>
                        <a href="{{ route('avgPriceByHotelType') }}">
                            <i class="icon-book-open"></i>
                            List Hotels</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-puzzle"></i>
                    <span class="title">Product</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('products.index') }}">
                            <i class="icon-anchor"></i>
                            List Products</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-puzzle"></i>
                    <span class="title">Transactions</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('transaction.index') }}">
                            <i class="icon-anchor"></i>
                            List Transaksi</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-puzzle"></i>
                    <span class="title">Types</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('type.index') }}">
                            <i class="icon-anchor"></i>
                            List Types</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="icon-puzzle"></i>
                    <span class="title">Customer</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('customer.index') }}">
                            <i class="icon-anchor"></i>
                            List Customer</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
