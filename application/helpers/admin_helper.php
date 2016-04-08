<?php 
function admin_url($admin_url = ""){
	return base_url("admin/action/$admin_url");
}
function fkey($url,$title){
	$fkey = array(
		'url' => $url, 
		'title' => $title,
		'class' => "glyphicons glyphicons-". $url
	);
	return $fkey;
}
function action_product(){
	$product = array(
		'fkey' => fkey("product", "Sản phẩm"),
        'product' => 'Danh sách sản phẩm',
		'cat' => 'Danh mục',
		'manufac' => 'Thương hiệu',
		'attributes' => 'Thuộc tính',
		'inventory' => 'Quản lý kho',
		'price' => 'Khoảng giá tìm kiếm'
    );
    return $product;
}
function action_tran(){
	$tran = array(
		'fkey' => fkey("tran", "Đơn hàng"),
	    'customer' => 'Khách hàng',
		'tran' => 'Đơn hàng ',
		'stats_product' => 'Thống kê'
	);
    return $tran;
};
function action_news(){
	$news = array(
		'fkey' => fkey("news", "Tin tức"),
	    'news' => 'Quản lý tin tức',
		'cat_news' => 'Thể loại tin',
		'stats_news' => 'Thống kê'
	);
    return $news;
}
function action_affiliate(){
	$affiliate = array(
		'fkey' => fkey("affiliate", "Cộng tác viên"),
	    'affiliate' => 'Cộng tác viên',
		'cathout' => 'Yêu cầu rút tiền'
	);
    return $affiliate;
}
function action_contact(){
	$contact = array(
		'fkey' => fkey("contact", "Khách hàng liên hệ"),
	    'contact' => 'Danh sách liên hệ',
		'send_email' => 'Đăng ký nhận email'
	);
    return $contact;
}
function action_ads(){
	$ads = array(
		'fkey' => fkey("ads", "Quảng cáo"),
	    'banner_size' => 'Kích thước',
		'ads_location' => 'Vị trí',
		'ads_banner' => 'Banner'
	);
    return $ads;
}

function action_theme(){
	$theme = array(
		'fkey' => fkey("theme", "Giao diện"),
	    'menu' => 'Menu',
		'slide' => 'Trình chiếu ảnh',
		'editcss' => 'Cập nhật css'
	);
    return $theme;
}
function action_admin(){
	$admin = array(
		'fkey' => fkey("admin", "Tài khoản"),
	    'admin_group' => 'Nhóm quản trị',
		'admin' => 'Ban quản trị '
	);
    return $admin;
}
function action_setting(){
	$setting = array(
		'fkey' => fkey("setting", "Cấu hình"),
	    'setting' => 'Cấu hình chung',
		'block' => 'Quản lý block',
		'shipping' => 'Vận chuyển',
		'notification' => 'Thông báo',
		'domain' => 'Tên miền',
		'data' => 'Dữ liệu trang'
	);
    return $setting;
}
/*
* Hiện thị các action
*/

function display_action($actions = array(), $manage = ""){
	$data = '';
	$sub_data = '';
	$action = $actions['fkey'];
	$url = $action['url'];
	$class = $action['class'];
	$title = $action['title'];
	$menu_open = "";
	array_shift($actions);
	foreach ($actions as $key => $value) {
		$act = "";
		if ($key==$manage) {
			$act = "active";
			$menu_open = "menu-open";
		}
        $sub_data = $sub_data . '<li class="'.$act.'"><a href="' . admin_url("$key") . '"';
        $sub_data = $sub_data . 'title="'. $value . '">' ;
        $sub_data = $sub_data . "$value</a></li>";
    }
	$data = $data . '<li class=""><a class="accordion-toggle ' . $menu_open . '" href="'. admin_url("$url") . '">';
	$data = $data . '<span class="'. $class . '"></span>';
	$data = $data . '<span class="sidebar-title">'. $title .'</span>';
	$data = $data . '<span class="caret"></span></a>';
	$data = $data . '<ul class="nav sub-nav">';
	$data = $data . $sub_data;
    $data = $data . '</ul>';
    return $data;
}