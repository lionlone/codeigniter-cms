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
                        <a href="http://demothu.web5s.com.vn/admin/product.html">Quản lý kho</a>
                </li>
                        <li class="current">
                        <a href="http://demothu.web5s.com.vn/admin/inventory.html">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
                <a class="btn btn-success fw600 pull-right br3 pv5 hidden-xs" href="http://demothu.web5s.com.vn/admin/inventory.html">
                        <i class="fa fa-question-circle mr5"></i> Danh sách                </a>
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
                                <form class="list_filter form" action="http://demothu.web5s.com.vn/admin/inventory.html" method="get" name="filter">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input class="gui-input" type="text" name="keyword" 
                                                   value="" placeholder="Nhập tên sản phẩm, danh mục, thương hiệu, ..." />
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
                                            <label class="field select">
                                                <select name="hide" class="gui-input">
                                                    <option value=""></option>
                                                                                                            <option value="no" >
                                                                Không                                                        </option>
                                                                                                            <option value="yes" >
                                                                Có                                                        </option>
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
                    <th class="footable-first-column text-center w50">Chọn</th>
                    <th>Hình ảnh</th>
                    <th>Sản phẩm + Phiên bản</th>
                    <th class="text-center w150">Hành động</th>
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
                        </tbody>
        </table>
    </div>
</div>
</section>
                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>