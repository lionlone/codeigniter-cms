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
                        <a href="http://demothu.web5s.com.vn/admin/customer.html">Khách hàng</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>        </div>
        
        <div class="topbar-right">
                <div class="btn-group btn-group-filter mr10">
                    <a href="javascript:void(0)" class="btn btn-default pv5" data-toggle="modal" 
                       data-target="#Export">Xuất file</a>
                          
                </div>
                <a class="btn btn-success fw600 pull-right mr10 br3 pv5" href="http://demothu.web5s.com.vn/admin/customer/add.html">
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
                
                // Tabs
		main.contentTabs();
	});
})(jQuery);
</script>



<!-- Modal -->
<div class="modal fade" id="Export" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Xuất danh sách khách hàng</h4>
                </div>
                <form action="" method="get">
                        <input type="hidden" value="1" name="export" />
                        <div class="modal-body">
                                <label>Định dạng file</label>
                                <div class="clear"></div>
                                <label for="type_xls"><input type="radio" name="type" id="type_xls" value="xls" checked="checked" /> File Excel(.xls)</label>
                                <div class="clear"></div>
                                <label for="type_csv"><input type="radio" name="type" id="type_csv" value="csv" /> File CSV (.csv)</label>
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
                                <button type="submit" class="btn btn-primary">Thực hiện</button>
                        </div>
                </form>
        </div>
    </div>
</div>

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
</div><!-- Main content wrapper -->
<section id="content">
	<div class="panel">
                <div class="panel-heading"> 
                        <ul class="tabs nav panel-tabs-border panel-tabs panel-tabs-left">
                                <li class="active">
                                    <a href="#domain_customer">Danh sách</a>
                                </li>
                        </ul>
                </div>
		<div class="panel-body pn mt10">
		<form action="http://demothu.web5s.com.vn/admin/customer.html" method="get" class="form" name="filter">
                        <table class="footable table table-striped table-hover table-bordered admin-form fs13">
                                <thead class="filter">
                                    <tr>
                                        <td colspan="10">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input class="gui-input" type="text" name="keyword" 
                                                           value="" placeholder="Nhập tên, email, điện thoại, địa chỉ khách hàng, ..." />
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="submit" class="btn btn-info btn-block fw600" value="Tìm kiếm" />
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                                <thead>
                                        <tr class="customer">
                                                <th class=" text-center w50" data-hide="phone">Chọn</th>
                                                <th class="text-left footable-first-column" data-toggle="true">Tên đầy đủ</th>
                                                <th class="text-left">Email</th>
                                                <th class="text-left" data-hide="phone">Điện thoại</th>
                                                <th class="w100" data-hide="phone">Đơn hàng</th>
                                                <th class="w200" data-hide="phone">Đơn hàng mới</th>
                                                <th class="text-center w150">Tổng tiền GD</th>
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

                                                                <a href="#" id="submit_action" _action="http://demothu.web5s.com.vn/admin/customer/action/_list.html" class="btn btn-success fw600 mr10 br3 pv5">
                                                                        <span>Thực hiện</span>
                                                                </a>
                                                        </div>

                                                                                                        </td>
                                        </tr>
                                </tfoot>

                                <tbody>
                                        <!-- List -->
                                        
                                </tbody>
                        </table>
                    </form>
            </div>
    </div>
</section>
        
                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>