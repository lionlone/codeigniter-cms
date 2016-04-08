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
                        <a href="http://demothu.web5s.com.vn/admin/product.html">Sản phẩm</a>
                </li>
                        <li >
                        <a href="http://demothu.web5s.com.vn/admin/price.html">Khoảng giá tìm kiếm</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
                <a class="btn btn-success fw600 pull-right mr10 br3 pv5" href="http://demothu.web5s.com.vn/admin/price/add.html">
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
                        <form action="http://demothu.web5s.com.vn/admin/price.html" method="get">
                                   <select name="cat" class="right mt5 mr5" style="width:250px">
                                           <option value="">Danh mục sử dụng</option>
                                                                                              <option value="2241" >
                                                           Giày thể thao                                                   </option>
                                                                                              <option value="2242" >
                                                           Phụ kiện                                                   </option>
                                                                              </select>
			</form>
                </div>
		<table class="footable table table-striped table-hover table-bordered admin-form fs13 default footable-loaded">
			<thead>
				<tr class="info">
					<th class="w100">Thứ tự</th>
					<th class="footable-first-column text-center" data-toggle="true">Tên</th>
					<th data-hide="phone">Giá từ</th>
					<th data-hide="phone">Đến</th>
					<th class="text-center w150">Hành động</th>
				</tr>
			</thead>
			
			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="5">
											</td>
				</tr>
			</tfoot>
			
			<tbody>
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