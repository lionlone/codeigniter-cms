               <script type="text/javascript"> 
(function($)
{
	$(document).ready(function()
	{
		var main = $('#main_content');
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
                        <a href="http://demothu.web5s.com.vn/admin/attributes.html">Thuộc tính</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
                <a class="btn btn-success fw600 pull-right mr10 br3 pv5" href="http://demothu.web5s.com.vn/admin/attributes/add.html">
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
<div class="wrapper">

	<!-- Main content wrapper -->
<section id="content">
	<div class="panel">
                <div class="panel-heading"> 
                    <ul class="tabs nav panel-tabs-border panel-tabs panel-tabs-left" style="width:200px;">
                            <li class="active"><a href="#list">Danh sách</a></li>
                    </ul>
                    		</div>
		
		<div class="panel-body pn mt10">
                        <table class="footable table table-striped table-hover table-bordered admin-form fs13">
			<thead>
				<tr class="info">
					<th class="w100" data-hide="phone">Thứ tự</td>
                                        <th class="footable-first-column" data-toggle="true">Tên</th>
                                        <th class="text-left" data-hide="phone">Danh sách giá trị</th>
                                                                                <th width="120" data-hide="phone">Cập nhật</th>
                                        <th width="120" data-hide="phone">Ngày tạo</th>
					<th class="w150">Hành động</th>
				</tr>
			</thead>
			
			<tbody>
							<tr>
					<td class="text-center">1</td>
                                        
					<td>Size</td>
                                        
                                        <td>    
                                                                                                </span>
                                                                                                </span>
                                                                                                </span>
                                                                                                </span>
                                                                                                </span>
                                                                                                </span>
                                                                                        38, 39, 40, 41, 42, 43                                        </td>
                                        
                                                                                
                                        <td class="text-center">10-01-2016</td>
                                        
                                        <td class="text-center">10-01-2016</td>
                                        
					<td class="text-center">
                                                <a class="btn btn-xs btn-success br3 toggle_action power " 
                                                    _url_on="http://demothu.web5s.com.vn/admin/attributes/action/hide/806.html" _url_off="http://demothu.web5s.com.vn/admin/attributes/action/hide_del/806.html"
                                                    _title_on="Ẩn" _title_off="Hiển thị"
                                                ><i class="fa fa-power-off"></i></a>
                                                
						<a href="http://demothu.web5s.com.vn/admin/attributes/action/edit/806.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
						
						<a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/attributes/action/del/806.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                                        notice="Bạn có chắc chắn muốn xóa tùy chọn:<br><b>Size</b>"
                                                >
                                                        <i class="fa fa-times"></i>
                                                </a>
					</td>
				</tr>
							<tr>
					<td class="text-center">2</td>
                                        
					<td>Màu sắc</td>
                                        
                                        <td>    
                                                                                                </span>
                                                                                                </span>
                                                                                                </span>
                                                                                                </span>
                                                                                        Đỏ, Đen, Vàng, Tím                                        </td>
                                        
                                                                                
                                        <td class="text-center">10-01-2016</td>
                                        
                                        <td class="text-center">10-01-2016</td>
                                        
					<td class="text-center">
                                                <a class="btn btn-xs btn-success br3 toggle_action power " 
                                                    _url_on="http://demothu.web5s.com.vn/admin/attributes/action/hide/807.html" _url_off="http://demothu.web5s.com.vn/admin/attributes/action/hide_del/807.html"
                                                    _title_on="Ẩn" _title_off="Hiển thị"
                                                ><i class="fa fa-power-off"></i></a>
                                                
						<a href="http://demothu.web5s.com.vn/admin/attributes/action/edit/807.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
						
						<a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/attributes/action/del/807.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                                        notice="Bạn có chắc chắn muốn xóa tùy chọn:<br><b>Màu sắc</b>"
                                                >
                                                        <i class="fa fa-times"></i>
                                                </a>
					</td>
				</tr>
						</tbody>
                        <tfoot class="auto_check_pages">
                                <tr>
                                        <td colspan="7">
                                                                                        </td>
                                </tr>
                        </tfoot>
		</table>
	</div>
</div>
        
                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>