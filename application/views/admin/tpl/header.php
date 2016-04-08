<div class="navbar-branding dark bg-info">
    <a class="navbar-brand" href="admin.html"> <b>ivoc.vn </b></a>
    <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
</div>
<ul class="nav navbar-nav navbar-left">
    <li>
        <a class="fw700 fs14" target="_blank" href="<?= base_url(); ?>"><span class="octicon octicon-screen-full fs18 mr5"></span> Xem website</a>
    </li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li class="dropdown dropdown-item-slide">
        <a class="dropdown-toggle pl10 pr10" data-toggle="dropdown" href="#">
            <span class="label label-default lh12 h-20 mt5 fw700 fs12">
                Dùng thử                    </span>
        </a>
        <ul class="dropdown-menu dropdown-hover dropdown-persist pn w350 bg-white animated animated-shorter fadeIn" role="menu">
            <li class="bg-light p8">
                <span class="octicon octicon-package fs22 mt5 pull-left"></span>
                <span class="fw600 pl5 lh30 text-uppercase fw700"> Thông tin gói dịch vụ</span>
                <span class="label label-warning pull-right lh12 h-20 mt5 mr5 fw700 fs12">Dùng thử</span>
            </li>

            <li class="p10 br-t item-1">
                <span class="fa fa-tags pr5"></span>
                <span class="fw600"> Sản phẩm</span>
                <span class="pull-right lh12 fs11 h-20 label label-success">8/30</span>
            </li>
            <li class="p10 br-t item-1">
                <span class="fa fa-hdd-o pr5"></span>
                <span class="fw600"> Dung lượng</span>
                <span class="pull-right lh12 fs11 h-20 label label-success">4/100Mb</span>
            </li>
            <li class="p10 br-t item-1">
                <span class="fa fa-tachometer pr5"></span>
                <span class="fw600"> Băng thông</span>
                <span class="pull-right lh12 fs11 h-20 label label-success">Không giới hạn</span>
            </li>

            <li class="p10 br-t item-4">
                <div class="text-white p10 fw600 text-center">
                    <a style="padding:8px 14px;font-size: 16px;" class="bg-info light" href="<?= dev_url(); ?>" title="Nâng cấp">Nâng cấp</a>
                </div>
            </li>
        </ul>
    </li>

    <li class="ph10 pv20 hidden-xs"> <i class="fa fa-circle text-tp fs8"></i> </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
            <img src="<?= public_url(); ?>/img/avatar.jpg" alt="avatar" width="30" height="30" class="br3 mr15" />
            <span>Xin chào: Nguyễn</span>
            <span class="caret caret-tp hidden-xs"></span>
        </a>
        <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
            <li class="br-t of-h">
                <a href="<?= public_url() . "/accout"; ?>" class="fw600 p12 animated animated-short fadeInDown">
                    <span class="fa fa-lock pr5"></span> Thay đổi mật khẩu 
                </a>
            </li>
            <li class="br-t of-h">
                <a href="<?= public_url() . "/logout"; ?>" class="fw600 p12 animated animated-short fadeInDown">
                    <span class="fa fa-power-off pr5"></span> Thoát 
                </a>
            </li>
        </ul>
    </li>
</ul>