                <!-- Common view -->
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
                        <a href="http://demothu.web5s.com.vn/admin/news.html">Tin tức</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
                <a class="btn btn-success fw600 pull-right mr10 br3 pv5" href="http://demothu.web5s.com.vn/admin/news/add.html">
                        <i class="fa fa-plus mr5"></i> Thêm mới                </a>
        </div>
</header>

<!-- Message -->

<script type="text/javascript">
(function($)
{
	$(document).ready(function()
	{
		var main = $('#form');
                
                
	});
})(jQuery);
</script>
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
                <li class="active">
                    <a href="#cat_info">
                        Danh sách                    </a>
                </li>
            </ul>
        </div>

        <form action="http://demothu.web5s.com.vn/admin/news.html" method="get" class="form" name="filter">
        <div class="panel-body pn mt10">
            <table class="footable table table-striped table-hover table-bordered admin-form fs13">
                <thead class="filter">
                        <tr>
                            <td colspan="10">
                                <form class="list_filter form" action="http://demothu.web5s.com.vn/admin/news.html" method="get" name="filter">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input class="gui-input" type="text" name="keyword" 
                                                   value="" placeholder="Nhập tiêu đề bài viết..." />
                                        </div>

                                        <div class="col-md-3">
                                            <label class="field select">
                                                <select name="cat" class="gui-input">
                                                    <option value="">Thể loại</option>
                                                                                                            <option value="957" >Thời trang</option>
                                                                                                    </select>
                                                <i class="arrow"></i>
                                            </label>
                                        </div>

                                        <div class="col-md-2">
                                            <input class="gui-input" type="text" name="created" class="datepicker"
                                                   value="" placeholder="Ngày tạo" />
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
                            <th class="w100" data-hide="phone">Hình ảnh</th>
                            <th class="footable-first-column text-left" data-toggle="true">Tiêu đề</th>
                            <th class="w100" data-hide="phone">Ngày đăng</th>
                            <th class="w100" data-hide="phone">Thuộc tính</th>
                            <th class="w150">Hành động</th>
                        </tr>
                    </thead>

                    <tfoot class="auto_check_pages">
                        <tr>
                            <td colspan="7">
                                <div class="itemActions">
                                    <select name="action" class="left mr10">
                                        <option value="">Hành động...</option>
                                                                                    <option value="del">Xóa</option>
                                                                            </select>
                                    
                                    <a href="javascript:void(0)" id="submit_action" _action="http://demothu.web5s.com.vn/admin/news/action/_list.html" class="btn btn-success lh10">
                                        <span style="color:white;">Thực hiện</span>
                                    </a>
                                </div>
                                
                                                            </td>
                        </tr>
                    </tfoot>

                    <tbody>

                        <!-- List -->
                                                    <tr>
                                <td class="text-center">
                                        <label class="option block mn">
                                                <input type="checkbox" name="id[]" value="2477">
                                                <span class="checkbox mn"></span>
                                        </label>
                                </td>
                                <td class="text-center">
                                    <div class="image_thumb">
                                                <a href="http://demothu.web5s.com.vn/tin-tuc/lua-chon-gu-thoi-trang-hop-phong-cach-minh" target="_blank">
                                                    <img src="http://media.web5s.com.vn/sites/666/news/blog1.png" alt="" width="70" height="50" />
                                                </a>
                                                <div class="clear"></div>
                                        </div>
                                </td>
                                <td>

                                        <a href="http://demothu.web5s.com.vn/tin-tuc/lua-chon-gu-thoi-trang-hop-phong-cach-minh" target="_blank">
                                                <b>Lựa chọn gu thời trang hợp phong cách mình</b>
                                        </a>
                                        <div class="f11">Lượt xem: 45</div>
                                </td>

                                <td class="text-center">
                                    <a href="javascript:void(0)" _param="created" _value="10-01-2016" class="view_of_field tipS" title="Xem các tin tức post trong ngày:<br>10-01-2016">
                                            10-01-2016                                    </a>
                                </td>

                                <td class="option4">
                                    <a href="javascript:void(0)" class="btn btn-xs toggle_action btn-success br3 home on" 
                                            _url_on="http://demothu.web5s.com.vn/admin/news/action/feature/2477.html" _url_off="http://demothu.web5s.com.vn/admin/news/action/feature_del/2477.html"
                                            _title_on="Hiển thị ở trang chủ" _title_off="Bỏ hiển thị ở trang chủ"
                                    ><span class="fa fa-home"></span></a>
                                </td>
                                
                                <td class="text-center"> 
                                    <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                        _url_on="http://demothu.web5s.com.vn/admin/news/action/hide/2477.html" _url_off="http://demothu.web5s.com.vn/admin/news/action/hide_del/2477.html"
                                        _title_on="Ẩn" _title_off="Hiển thị"
                                    ><i class="fa fa-power-off"></i></a>

                                                                                <a href="http://demothu.web5s.com.vn/admin/news/action/edit/2477.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                    
                                                                            <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/news/action/del/2477.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                                notice="Bạn có chắc chắn muốn xóa tin tức:<br><b>Lựa chọn gu thời trang hợp phong cách mình</b>"
                                        >
                                                <i class="fa fa-times"></i>
                                        </a>
                                                                    </td>
                            </tr>
                                            </tbody>
                </table>
            </div>
        </form>
    </div>
</section>
        
                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>

