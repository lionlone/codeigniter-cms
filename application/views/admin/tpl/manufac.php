               <script type="text/javascript"> 
(function($)
{
	$(document).ready(function()
	{
		var main = $('#content');
		main.find('select[name=cat]').change(function()
		{
			main.find('form').submit();
		});
	});
})(jQuery);
</script>

<!-- Common -->
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
                        <a href="http://demothu.web5s.com.vn/admin/manufac.html">Thương hiệu</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
                <a class="btn btn-success fw600 pull-right mr10 br3 pv5" href="http://demothu.web5s.com.vn/admin/manufac/add.html">
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
            <ul class="tabs nav panel-tabs-border panel-tabs panel-tabs-left" style="width:200px;">
                <li class="active"><a href="#cat_info">Danh sách</a></li>
            </ul>
            <form action="http://demothu.web5s.com.vn/admin/manufac.html" method="get">
                <select name="cat" class="right mt5 mr5" style="width:250px">
                    <option value="">Chọn danh mục</option>
                                                <option value="2241" >
                                    Giày thể thao                            </option>
                                                <option value="2242" >
                                    Phụ kiện                            </option>
                                    </select>
            </form>
        </div>
        <table class="footable table table-striped table-hover table-bordered admin-form fs13 default footable-loaded">
            <thead>
                <tr class="info">
                        <th class="w100" data-hide="phone">Thứ tự</th>
                        <th class="text-left footable-first-column" data-toggle="true">Tên</td>
                        <th width="120" data-hide="phone">Ngày tạo</th>
                        <th width="120" data-hide="phone">Cập nhật</th>
                        <th class="w150">Hành động</th>
                </tr>
            </thead>
            <tbody>
                                    <tr>
                        <td class="text-center">1</td>
                        <td>
                            <a href="http://demothu.web5s.com.vn/thuong-hieu-1703/addidas" target="_blank" title="Addidas">
                                    Addidas                            </a>
                        </td>
                        <td class="text-center">10-01-2016</td>
                        <td class="text-center">10-01-2016</td>

                        <td class="text-center">
                            <a class="btn btn-xs btn-success br3 toggle_action power " 
                                _url_on="http://demothu.web5s.com.vn/admin/manufac/action/hide/1703.html" _url_off="http://demothu.web5s.com.vn/admin/manufac/action/hide_del/1703.html"
                                _title_on="Ẩn" _title_off="Hiển thị"
                            ><i class="fa fa-power-off"></i></a>

                            <a href="http://demothu.web5s.com.vn/admin/manufac/action/edit/1703.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>

                            <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/manufac/action/del/1703.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                    notice="Bạn có chắc chắn muốn xóa Thương hiệu:<br><b>Addidas</b>"
                            >
                                    <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>
                                    <tr>
                        <td class="text-center">2</td>
                        <td>
                            <a href="http://demothu.web5s.com.vn/thuong-hieu-1704/nike" target="_blank" title="Nike">
                                    Nike                            </a>
                        </td>
                        <td class="text-center">10-01-2016</td>
                        <td class="text-center">10-01-2016</td>

                        <td class="text-center">
                            <a class="btn btn-xs btn-success br3 toggle_action power " 
                                _url_on="http://demothu.web5s.com.vn/admin/manufac/action/hide/1704.html" _url_off="http://demothu.web5s.com.vn/admin/manufac/action/hide_del/1704.html"
                                _title_on="Ẩn" _title_off="Hiển thị"
                            ><i class="fa fa-power-off"></i></a>

                            <a href="http://demothu.web5s.com.vn/admin/manufac/action/edit/1704.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>

                            <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/manufac/action/del/1704.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                    notice="Bạn có chắc chắn muốn xóa Thương hiệu:<br><b>Nike</b>"
                            >
                                    <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>
                            </tbody>
        </table>
    </div>
</section>
        
                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>

