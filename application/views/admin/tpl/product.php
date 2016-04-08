<!-- Common view -->
<script type="text/javascript">
(function($)
{
	$(document).ready(function()
	{
		var main = $('#form');
		
		// Tabs
		main.contentTabs();
	});
})(jQuery);
</script>

<header id="topbar" class="affix">
        <div class="topbar-left">
                <!-- Breadcrumbs -->
                <ol class="breadcrumb">
        <li class="crumb-icon">
                <a href="http://demothu.web5s.com.vn/admin.html" title="">
                        <span class="glyphicon glyphicon-home"></span>
                </a>
        </li>
        
                                <li >
                        <a href="http://demothu.web5s.com.vn/admin/product.html">Sản phẩm</a>
                </li>
                        <li class="current">
                        <a href="http://demothu.web5s.com.vn/admin/product.html">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
                <a class="btn btn-success fw600 pull-right mr10 br3 pv5" href="http://demothu.web5s.com.vn/admin/product/add.html">
                        <i class="fa fa-plus mr5"></i> Thêm mới                </a>
        </div>
</header>

<!-- Message -->






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
<section id="content">
	<div class="panel">
        <div class="panel-heading"> 
            <ul class="tabs nav panel-tabs-border panel-tabs panel-tabs-left">
                    <li class="active"><a href="#list">Danh sách</a></li>
            </ul>
        </div>
        <div class="panel-body pn mt10">
                <table class="footable table table-striped table-hover table-bordered admin-form fs13">
                <thead class="filter">
                    <tr>
                        <td colspan="10">
                            <form class="list_filter form" action="http://demothu.web5s.com.vn/admin/product.html" method="get" name="filter">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input class="gui-input" type="text" name="keyword" 
                                               value="" placeholder="Nhập tên sản phẩm, giá, thương hiệu, ..." />
                                    </div>

                                    <div class="col-md-2">
                                        <label class="field select">
                                            <select name="cat" class="gui-input">
                                                <option value="">Danh mục</option>
                                                                                                    <option value="2241" >Giày thể thao</option>
                                                                                                    <option value="2242" >Phụ kiện</option>
                                                                                            </select>
                                            <i class="arrow"></i>
                                        </label>
                                    </div>

                                    <div class="col-md-2">
                                        <input class="gui-input datepicker" type="text" name="created" 
                                               value="" placeholder="Ngày tạo" />
                                    </div>

                                    <div class="col-md-2">
                                        <label class="field select">
                                            <select name="hide" class="gui-input">
                                                <option value="">Trạng thái</option>
                                                                                                    <option value="no" >
                                                            Không                                                    </option>
                                                                                                    <option value="yes" >
                                                            Có                                                    </option>
                                                                                            </select>
                                            <i class="arrow"></i>
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="submit" class="btn btn-info btn-block fw600" value="Tìm kiếm" />
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                </thead>
                <thead>
                    <tr class="info">
                        <th class="w50" data-hide="phone">Chọn</th>
                        <th data-hide="phone">Hình ảnh</th>
                        <th class="footable-first-column text-left" data-toggle="true">Tên</th>
                        <th class="w150" data-hide="phone">Thương hiệu</th>
                        <th class="w200" data-hide="phone">Giá bán</th>
                        <th class="w150" data-hide="phone">Ngày tạo</th>
                        <th class="w150">Hành động</th>
                    </tr>
                </thead>

                <tfoot class="auto_check_pages">
                    <tr>
                        <td colspan="10">
                                                            <div class="list_action itemActions">
                                    <select name="action" class="left mr10">
                                        <option value="">Hành động...</option>
                                                                                        <option value="http://demothu.web5s.com.vn/admin/product/del.html">Xóa</option>
                                                                            </select>

                                    <a href="#submit" id="submit" class="btn btn-success fw600 lh10">
                                        <span>Thực hiện</span>
                                    </a>
                                </div>
                                                                                </td>
                    </tr>
                </tfoot>

                <tbody class="list_item">
                                        <tr>
                            <td class="text-center">
                                <label class="option block mn">
                                        <input type="checkbox" name="ids[]" value="5333">
                                        <span class="checkbox mn"></span>
                                </label>
                            </td>

                            <td class="text-center">
                                <div class="image_thumb">
                                    <img src="http://media.web5s.com.vn/sites/666/product/product15.jpg" height="50">
                                    <div class="clear"></div>
                                </div>
                            </td>

                            <td>
                                <a href="http://demothu.web5s.com.vn/san-pham/ao-so-mi-nam" title="Xem" target="_blank">
                                    <b>Áo sơ mi nam</b>
                                </a>

                                <div class="f11">Luợt xem: 70</div>

                            </td>

                            <td class="text-center">
                                                            </td>

                            <td class="text-right">
                                                                510.000₫                            </td>

                            <td class="text-center">10-01-2016</td>

                            <td class="text-center">
                                <a class="btn btn-xs btn-success br3 toggle_action power " 
                                    _url_on="http://demothu.web5s.com.vn/admin/product/hide/5333.html" _url_off="http://demothu.web5s.com.vn/admin/product/hide_del/5333.html"
                                    _title_on="Ẩn sản phẩm" _title_off="Bỏ ẩn"
                                ><span class="fa fa-power-off"></span></a>

                                <a class="toggle_action btn btn-xs btn-success br3 home on" 
                                        _url_on="http://demothu.web5s.com.vn/admin/product/feature/5333.html" _url_off="http://demothu.web5s.com.vn/admin/product/feature_del/5333.html"
                                        _title_on="Bỏ hiển thị trang chủ" _title_off="Hiển thị trang chủ"
                                ><span class="fa fa-home"></span></a>

                                                                    <a href="http://demothu.web5s.com.vn/admin/product/edit/5333.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                
                                                                    <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/product/del/5333.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                            notice="Bạn có chắc chắn muốn xóa sản phẩm:<br><b>Áo sơ mi nam</b>"
                                    >
                                            <i class="fa fa-times"></i>
                                    </a>
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="text-center">
                                <label class="option block mn">
                                        <input type="checkbox" name="ids[]" value="5332">
                                        <span class="checkbox mn"></span>
                                </label>
                            </td>

                            <td class="text-center">
                                <div class="image_thumb">
                                    <img src="http://media.web5s.com.vn/sites/666/product/product04.jpg" height="50">
                                    <div class="clear"></div>
                                </div>
                            </td>

                            <td>
                                <a href="http://demothu.web5s.com.vn/san-pham/bong-nem-nhap-khau-my" title="Xem" target="_blank">
                                    <b>Bóng ném nhập khẩu Mỹ</b>
                                </a>

                                <div class="f11">Luợt xem: 43</div>

                            </td>

                            <td class="text-center">
                                                            </td>

                            <td class="text-right">
                                                                2.400.000₫                            </td>

                            <td class="text-center">10-01-2016</td>

                            <td class="text-center">
                                <a class="btn btn-xs btn-success br3 toggle_action power " 
                                    _url_on="http://demothu.web5s.com.vn/admin/product/hide/5332.html" _url_off="http://demothu.web5s.com.vn/admin/product/hide_del/5332.html"
                                    _title_on="Ẩn sản phẩm" _title_off="Bỏ ẩn"
                                ><span class="fa fa-power-off"></span></a>

                                <a class="toggle_action btn btn-xs btn-success br3 home on" 
                                        _url_on="http://demothu.web5s.com.vn/admin/product/feature/5332.html" _url_off="http://demothu.web5s.com.vn/admin/product/feature_del/5332.html"
                                        _title_on="Bỏ hiển thị trang chủ" _title_off="Hiển thị trang chủ"
                                ><span class="fa fa-home"></span></a>

                                                                    <a href="http://demothu.web5s.com.vn/admin/product/edit/5332.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                
                                                                    <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/product/del/5332.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                            notice="Bạn có chắc chắn muốn xóa sản phẩm:<br><b>Bóng ném nhập khẩu Mỹ</b>"
                                    >
                                            <i class="fa fa-times"></i>
                                    </a>
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="text-center">
                                <label class="option block mn">
                                        <input type="checkbox" name="ids[]" value="5331">
                                        <span class="checkbox mn"></span>
                                </label>
                            </td>

                            <td class="text-center">
                                <div class="image_thumb">
                                    <img src="http://media.web5s.com.vn/sites/666/product/product03.jpg" height="50">
                                    <div class="clear"></div>
                                </div>
                            </td>

                            <td>
                                <a href="http://demothu.web5s.com.vn/san-pham/gang-tay-dam-boc" title="Xem" target="_blank">
                                    <b>Găng tay đấm bốc</b>
                                </a>

                                <div class="f11">Luợt xem: 32</div>

                            </td>

                            <td class="text-center">
                                                            </td>

                            <td class="text-right">
                                                                650.000₫                            </td>

                            <td class="text-center">10-01-2016</td>

                            <td class="text-center">
                                <a class="btn btn-xs btn-success br3 toggle_action power " 
                                    _url_on="http://demothu.web5s.com.vn/admin/product/hide/5331.html" _url_off="http://demothu.web5s.com.vn/admin/product/hide_del/5331.html"
                                    _title_on="Ẩn sản phẩm" _title_off="Bỏ ẩn"
                                ><span class="fa fa-power-off"></span></a>

                                <a class="toggle_action btn btn-xs btn-success br3 home on" 
                                        _url_on="http://demothu.web5s.com.vn/admin/product/feature/5331.html" _url_off="http://demothu.web5s.com.vn/admin/product/feature_del/5331.html"
                                        _title_on="Bỏ hiển thị trang chủ" _title_off="Hiển thị trang chủ"
                                ><span class="fa fa-home"></span></a>

                                                                    <a href="http://demothu.web5s.com.vn/admin/product/edit/5331.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                
                                                                    <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/product/del/5331.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                            notice="Bạn có chắc chắn muốn xóa sản phẩm:<br><b>Găng tay đấm bốc</b>"
                                    >
                                            <i class="fa fa-times"></i>
                                    </a>
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="text-center">
                                <label class="option block mn">
                                        <input type="checkbox" name="ids[]" value="5330">
                                        <span class="checkbox mn"></span>
                                </label>
                            </td>

                            <td class="text-center">
                                <div class="image_thumb">
                                    <img src="http://media.web5s.com.vn/sites/666/product/product05.jpg" height="50">
                                    <div class="clear"></div>
                                </div>
                            </td>

                            <td>
                                <a href="http://demothu.web5s.com.vn/san-pham/vot-cau-long-luoi-soi" title="Xem" target="_blank">
                                    <b>Vợt cầu lông lưới sợi</b>
                                </a>

                                <div class="f11">Luợt xem: 33</div>

                            </td>

                            <td class="text-center">
                                                            </td>

                            <td class="text-right">
                                                                210.000₫                            </td>

                            <td class="text-center">10-01-2016</td>

                            <td class="text-center">
                                <a class="btn btn-xs btn-success br3 toggle_action power " 
                                    _url_on="http://demothu.web5s.com.vn/admin/product/hide/5330.html" _url_off="http://demothu.web5s.com.vn/admin/product/hide_del/5330.html"
                                    _title_on="Ẩn sản phẩm" _title_off="Bỏ ẩn"
                                ><span class="fa fa-power-off"></span></a>

                                <a class="toggle_action btn btn-xs btn-success br3 home on" 
                                        _url_on="http://demothu.web5s.com.vn/admin/product/feature/5330.html" _url_off="http://demothu.web5s.com.vn/admin/product/feature_del/5330.html"
                                        _title_on="Bỏ hiển thị trang chủ" _title_off="Hiển thị trang chủ"
                                ><span class="fa fa-home"></span></a>

                                                                    <a href="http://demothu.web5s.com.vn/admin/product/edit/5330.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                
                                                                    <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/product/del/5330.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                            notice="Bạn có chắc chắn muốn xóa sản phẩm:<br><b>Vợt cầu lông lưới sợi</b>"
                                    >
                                            <i class="fa fa-times"></i>
                                    </a>
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="text-center">
                                <label class="option block mn">
                                        <input type="checkbox" name="ids[]" value="5329">
                                        <span class="checkbox mn"></span>
                                </label>
                            </td>

                            <td class="text-center">
                                <div class="image_thumb">
                                    <img src="http://media.web5s.com.vn/sites/666/product/product08.jpg" height="50">
                                    <div class="clear"></div>
                                </div>
                            </td>

                            <td>
                                <a href="http://demothu.web5s.com.vn/san-pham/balo-the-thao" title="Xem" target="_blank">
                                    <b>Balo thể thao</b>
                                </a>

                                <div class="f11">Luợt xem: 44</div>

                            </td>

                            <td class="text-center">
                                                            </td>

                            <td class="text-right">
                                                                320.000₫                            </td>

                            <td class="text-center">10-01-2016</td>

                            <td class="text-center">
                                <a class="btn btn-xs btn-success br3 toggle_action power " 
                                    _url_on="http://demothu.web5s.com.vn/admin/product/hide/5329.html" _url_off="http://demothu.web5s.com.vn/admin/product/hide_del/5329.html"
                                    _title_on="Ẩn sản phẩm" _title_off="Bỏ ẩn"
                                ><span class="fa fa-power-off"></span></a>

                                <a class="toggle_action btn btn-xs btn-success br3 home on" 
                                        _url_on="http://demothu.web5s.com.vn/admin/product/feature/5329.html" _url_off="http://demothu.web5s.com.vn/admin/product/feature_del/5329.html"
                                        _title_on="Bỏ hiển thị trang chủ" _title_off="Hiển thị trang chủ"
                                ><span class="fa fa-home"></span></a>

                                                                    <a href="http://demothu.web5s.com.vn/admin/product/edit/5329.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                
                                                                    <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/product/del/5329.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                            notice="Bạn có chắc chắn muốn xóa sản phẩm:<br><b>Balo thể thao</b>"
                                    >
                                            <i class="fa fa-times"></i>
                                    </a>
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="text-center">
                                <label class="option block mn">
                                        <input type="checkbox" name="ids[]" value="5328">
                                        <span class="checkbox mn"></span>
                                </label>
                            </td>

                            <td class="text-center">
                                <div class="image_thumb">
                                    <img src="http://media.web5s.com.vn/sites/666/product/product02.jpg" height="50">
                                    <div class="clear"></div>
                                </div>
                            </td>

                            <td>
                                <a href="http://demothu.web5s.com.vn/san-pham/giay-addidas-chuyen-chay-bo" title="Xem" target="_blank">
                                    <b>Giày addidas chuyên chạy bộ</b>
                                </a>

                                <div class="f11">Luợt xem: 45</div>

                            </td>

                            <td class="text-center">
                                                            </td>

                            <td class="text-right">
                                                                650.000₫                            </td>

                            <td class="text-center">10-01-2016</td>

                            <td class="text-center">
                                <a class="btn btn-xs btn-success br3 toggle_action power " 
                                    _url_on="http://demothu.web5s.com.vn/admin/product/hide/5328.html" _url_off="http://demothu.web5s.com.vn/admin/product/hide_del/5328.html"
                                    _title_on="Ẩn sản phẩm" _title_off="Bỏ ẩn"
                                ><span class="fa fa-power-off"></span></a>

                                <a class="toggle_action btn btn-xs btn-success br3 home on" 
                                        _url_on="http://demothu.web5s.com.vn/admin/product/feature/5328.html" _url_off="http://demothu.web5s.com.vn/admin/product/feature_del/5328.html"
                                        _title_on="Bỏ hiển thị trang chủ" _title_off="Hiển thị trang chủ"
                                ><span class="fa fa-home"></span></a>

                                                                    <a href="http://demothu.web5s.com.vn/admin/product/edit/5328.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                
                                                                    <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/product/del/5328.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                            notice="Bạn có chắc chắn muốn xóa sản phẩm:<br><b>Giày addidas chuyên chạy bộ</b>"
                                    >
                                            <i class="fa fa-times"></i>
                                    </a>
                                                            </td>
                        </tr>
                                            <tr>
                            <td class="text-center">
                                <label class="option block mn">
                                        <input type="checkbox" name="ids[]" value="5327">
                                        <span class="checkbox mn"></span>
                                </label>
                            </td>

                            <td class="text-center">
                                <div class="image_thumb">
                                    <img src="http://media.web5s.com.vn/sites/666/product/product01.jpg" height="50">
                                    <div class="clear"></div>
                                </div>
                            </td>

                            <td>
                                <a href="http://demothu.web5s.com.vn/san-pham/giay-the-thao-addidas-01" title="Xem" target="_blank">
                                    <b>Giày thể thao addidas 01</b>
                                </a>

                                <div class="f11">Luợt xem: 56</div>

                            </td>

                            <td class="text-center">
                                                            </td>

                            <td class="text-right">
                                                                    <p style="text-decoration:line-through;">
                                        1.200.000₫                                    </p>
                                                                850.000₫                            </td>

                            <td class="text-center">10-01-2016</td>

                            <td class="text-center">
                                <a class="btn btn-xs btn-success br3 toggle_action power " 
                                    _url_on="http://demothu.web5s.com.vn/admin/product/hide/5327.html" _url_off="http://demothu.web5s.com.vn/admin/product/hide_del/5327.html"
                                    _title_on="Ẩn sản phẩm" _title_off="Bỏ ẩn"
                                ><span class="fa fa-power-off"></span></a>

                                <a class="toggle_action btn btn-xs btn-success br3 home on" 
                                        _url_on="http://demothu.web5s.com.vn/admin/product/feature/5327.html" _url_off="http://demothu.web5s.com.vn/admin/product/feature_del/5327.html"
                                        _title_on="Bỏ hiển thị trang chủ" _title_off="Hiển thị trang chủ"
                                ><span class="fa fa-home"></span></a>

                                                                    <a href="http://demothu.web5s.com.vn/admin/product/edit/5327.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                
                                                                    <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/product/del/5327.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                            notice="Bạn có chắc chắn muốn xóa sản phẩm:<br><b>Giày thể thao addidas 01</b>"
                                    >
                                            <i class="fa fa-times"></i>
                                    </a>
                                                            </td>
                        </tr>
                                    </tbody>
        </table>
    </div>
</div>
                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>