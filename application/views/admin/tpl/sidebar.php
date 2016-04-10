<div class="nano-content">
    <!-- sidebar menu -->
    <ul class="nav sidebar-menu">

        <!-- Label -->

        <li class="active">
            <a class=" menu-open" 
               href="<?= admin_url('home'); ?>">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Bảng điều khiển</span>
            </a>
        </li>

        <!-- Label -->
        <li class="sidebar-label pt15">Quản lý sản phẩm</li>                                                 
        <li class="">
            <?= display_action($product,$sidebar_active); ?>
        </li>

        </li>

        <!-- Label -->

        <li class="">
            <?= display_action($tran,$sidebar_active); ?>
        </li>

        </li>

        <!-- Label -->

        <li class="">
            <a class=" " 
               href="<?= admin_url('coupon'); ?>">
                <span class="glyphicons glyphicons-coupon"></span>
                <span class="sidebar-title">Mã khuyến mại</span>
            </a>
        </li>

        <!-- Label -->
        <li class="sidebar-label pt15">Quản lý nội dung</li> 
        <li class="">
            <?= display_action($news,$sidebar_active); ?>
        </li>

        </li>
        <!-- Label -->

        <li class="">
            <a class=" " 
               href="<?= admin_url('info'); ?>">
                <span class="glyphicons glyphicons-info"></span>
                <span class="sidebar-title">Trang nội dung</span>
            </a>
        </li>

        <!-- Label -->

        <li class="">
            <?= display_action($contact,$sidebar_active); ?>
        </li>

        </li>

        <!-- Label -->
        <li class="sidebar-label pt15">Cấu hình hệ thống</li>             
        <li class="">
            <?= display_action($affiliate,$sidebar_active); ?>
        </li>

        </li>

        <!-- Label -->

        <li class="">
            <?= display_action($ads,$sidebar_active); ?>
        </li>

        </li>

        <!-- Label -->

        <li class="">
            <?= display_action($theme,$sidebar_active); ?>
        </li>

        <!-- Label -->

        <li class="">
            <?= display_action($admin,$sidebar_active); ?>
        </li>

        </li>

        <!-- Label -->

        <li class="">
            <a class=" " 
               href="<?= admin_url('log'); ?>">
                <span class="glyphicons glyphicons-log"></span>
                <span class="sidebar-title">Lịch sử tác động</span>
            </a>
        </li>

        <!-- Label -->

        <li class="">
            <?= display_action($setting,$sidebar_active); ?>
        </li>
        <!-- Resources stats -->
        <li class="sidebar-label pt25 pb10 text-info">Tài nguyên</li>

        <!-- Sidebar progress bars -->
        <li class="sidebar-stat mb10">
            <a class="fs11">
                <span class="fa fa-tags text-info"></span>
                <span class="sidebar-title text-info">Sản phẩm</span>
                <span class="pull-right mr20">8/30</span>
                <div class="progress progress-bar-xs ml20 mr20">
                    <div class="progress-bar progress-bar-info" 
                         role="progressbar" aria-valuenow="45" aria-valuemin="0" 
                         aria-valuemax="26.666666666667" style="width: 26.666666666667%">
                        <span class="sr-only">26.666666666667%</span>
                    </div>
                </div>
            </a>
        </li>
        <li class="sidebar-stat mb10">
            <a class="fs11">
                <span class="fa fa-hdd-o text-warning"></span>
                <span class="sidebar-title text-warning">Dung lượng</span>
                <span class="pull-right mr20">4/100Mb</span>
                <div class="progress progress-bar-xs ml20 mr20">
                    <div class="progress-bar progress-bar-warning" 
                         role="progressbar" aria-valuenow="45" aria-valuemin="0" 
                         aria-valuemax="3.8203125" style="width: 3.8203125%">
                        <span class="sr-only">3.8203125%</span>
                    </div>
                </div>
            </a>
        </li>
        <li class="sidebar-stat mb10">
            <a class="fs11">
                <span class="fa fa-tachometer text-success"></span>
                <span class="sidebar-title text-success">Băng thông</span>
                <span class="pull-right mr20">Không giới hạn</span>
                <div class="progress progress-bar-xs ml20 mr20">
                    <div class="progress-bar progress-bar-success" 
                         role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">100%</span>
                    </div>
                </div>
            </a>
        </li>        
    </ul>