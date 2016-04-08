                <!-- Widget verify action -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="box_verify_action">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa  fa-life-bouy"></i> Thông báo</h4>
      </div>
      <div class="modal-body">
            <p><i class="fa  fa-fa-warning"></i><span  id="notice"></span></p>
      </div>
      <div class="modal-footer">
        <a id="cancel" href="javascript:void(0)" class="btn btn-default" data-dismiss="modal">Hủy bỏ</a>
        <a id="accept" href="javascript:void(0)" class="btn btn-primary">Xác nhận</a>
      </div>
    </div>
  </div>
</div>
<!-- Main content wrapper -->
<div id="content" class="admin-form">
    <div id="content">
        <h3 class="text-center mt10 mb25 fw400">Quản lý trạng thái các block</h3>
        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title">
                                <span class="fa fa-align-center"></span>Sản phẩm                            </span>
                        </div>
                        <div class="panel-body p10">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-left">Tên</th>
                                        <th class="w100 text-right">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Thông tin giỏ hàng</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=cart_info&group=product" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=cart_info&group=product"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Tìm kiếm</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=search&group=product" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=search&group=product"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Sản phẩm nổi bật</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=feature&group=product" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=feature&group=product"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Sản phẩm mới nhất</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=newest&group=product" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=newest&group=product"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Sản phẩm cùng danh mục</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=product_same_cat&group=product" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=product_same_cat&group=product"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Sản phẩm đã xem</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=product_viewed&group=product" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=product_viewed&group=product"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Hot deal</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=deal&group=product" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=deal&group=product"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Danh mục sản phẩm</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=cats&group=product" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=cats&group=product"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Sản phẩm theo danh mục</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=cat_products&group=product" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=cat_products&group=product"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Sản phẩm giảm giá</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=discount&group=product" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=discount&group=product"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Sản phẩm bán chạy</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=bestseller&group=product" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=bestseller&group=product"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                    <tbody>
                            </table>
                        </div>
                    </div>
                </div>
                            <div class="col-sm-6 col-lg-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title">
                                <span class="fa fa-align-center"></span>Tin tức                            </span>
                        </div>
                        <div class="panel-body p10">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-left">Tên</th>
                                        <th class="w100 text-right">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Tin mới nhất</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=newest&group=news" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=newest&group=news"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Tin nổi bật</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=feature&group=news" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=feature&group=news"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Mới nhất</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=viewest&group=news" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=viewest&group=news"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Thể loại</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=cats&group=news" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=cats&group=news"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Tin tức theo thể loại</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=cat_newss&group=news" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=cat_newss&group=news"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Tìm kiếm</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=search&group=news" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=search&group=news"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                    <tbody>
                            </table>
                        </div>
                    </div>
                </div>
                            <div class="col-sm-6 col-lg-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title">
                                <span class="fa fa-align-center"></span>Trang chủ                            </span>
                        </div>
                        <div class="panel-body p10">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-left">Tên</th>
                                        <th class="w100 text-right">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Logo</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=logo&group=site" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=logo&group=site"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Thông báo</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=message&group=site" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=message&group=site"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Thanh điều hướng</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=breadcrumbs&group=site" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=breadcrumbs&group=site"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Nhận tin khuyến mại</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=newsletter&group=site" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=newsletter&group=site"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Trình chiếu ảnh</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=slider&group=site" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=slider&group=site"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Menu</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=menu&group=site" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=menu&group=site"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Thông tin nổi bật</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=info&group=site" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=info&group=site"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                    <tbody>
                            </table>
                        </div>
                    </div>
                </div>
                            <div class="col-sm-6 col-lg-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title">
                                <span class="fa fa-align-center"></span>Tài khoản                            </span>
                        </div>
                        <div class="panel-body p10">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-left">Tên</th>
                                        <th class="w100 text-right">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Form tài khoản</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=account_panel&group=account" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=account_panel&group=account"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Bảng điều khiển</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=panel&group=account" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=panel&group=account"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                    <tbody>
                            </table>
                        </div>
                    </div>
                </div>
                            <div class="col-sm-6 col-lg-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title">
                                <span class="fa fa-align-center"></span>Đơn hàng                            </span>
                        </div>
                        <div class="panel-body p10">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-left">Tên</th>
                                        <th class="w100 text-right">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                        <tr>
                                        <td>
                                            <span class="fa fa-dot-circle-o"></span> 
                                                Đơn hàng mới nhất</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                               _url_on="http://demothu.web5s.com.vn/admin/block/action.html?act=hide&block=newest&group=tran" _url_off="http://demothu.web5s.com.vn/admin/block/action.html?act=active&block=newest&group=tran"
                                                _title_on="Ẩn" _title_off="Hiển thị"
                                            ><i class="fa fa-power-off"></i></a>
                                        </td>
                                    </tr>
                                                                    <tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</div>

                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>


