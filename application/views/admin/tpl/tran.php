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
                        <a href="http://demothu.web5s.com.vn/admin/tran.html">Đơn hàng</a>
                </li>
                        <li class="current">
                        <a href="http://demothu.web5s.com.vn/admin/tran.html">Lịch sử đơn hàng</a>
                </li>
        </ol>    </div>
    <div class="topbar-right">
        <a class="btn btn-success fw600 pull-right br3 pv5 hidden-xs" 
           href="http://demothu.web5s.com.vn/admin/tran/create.html">
            <i class="fa fa-plus mr5"></i>         </a>
        
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
                                <li class="active"><a href="#tran">Danh sách</a></li>
                        </ul>
                </div>
		<div class="panel-body pn mt10">
                    <form class="list_filter form" action="http://demothu.web5s.com.vn/admin/tran.html" method="get" name="filter">
                        <table class="footable table table-striped table-hover table-bordered admin-form fs13">
			<thead class="filter">
                            <tr>
                                <td colspan="10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input class="gui-input" type="text" name="keyword" 
                                                   value="" placeholder="Nhập tên, email, điện thoại, ngày tạo đơn hàng, ..." />
                                        </div>
                                        <div class="col-md-2">
                                            <label class="field select">
                                                <select name="payment_type">
                                                        <option value="">Kiểu thanh toán</option>
                                                                                                                        <option value="0" >
                                                                        Chuyển khoản trực tiếp qua ngân hàng                                                                </option>
                                                                                                                        <option value="1" >
                                                                        Thanh toán khi nhận hàng(COD)                                                                </option>
                                                                                                                        <option value="2" >
                                                                        Thanh toán qua cổng NgânLượng.vn                                                                </option>
                                                                                                        </select>
                                                <i class="arrow"></i>
                                            </label>
                                        </div>
                                        
                                        <div class="col-md-2">
                                            <label class="field select">
                                                <select name="shipping_type">
                                                        <option value="">Kiểu vận chuyển</option>
                                                                                                                        <option value="0" >
                                                                        Giao hàng tận nơi                                                                </option>
                                                                                                                        <option value="1" >
                                                                        Nhận tại cửa hàng                                                                </option>
                                                                                                        </select>
                                                <i class="arrow"></i>
                                            </label>
                                        </div>
                                        
                                        <div class="col-md-2">
                                            <label class="field select">
                                                <select name="status">
                                                        <option value="all">Giao dịch</option>
                                                                                                                        <option value="pending" >
                                                                        Chờ xác nhận                                                                </option>
                                                                                                                        <option value="completed" >
                                                                        Đã thanh toán                                                                </option>
                                                                                                                        <option value="part_refund" >
                                                                        Hoàn trả một phần                                                                </option>
                                                                                                                        <option value="refund" >
                                                                        Hoàn trả                                                                </option>
                                                                                                                        <option value="failed" >
                                                                        Thất bại                                                                </option>
                                                                                                                        <option value="cancel" >
                                                                        Hủy bỏ                                                                </option>
                                                                                                        </select>
                                                <i class="arrow"></i>
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="submit" class="btn btn-info btn-block fw600" value="Tìm kiếm" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </thead>
			<thead>
				<tr class="info">
					<th class="w50" data-hide="phone">Chọn</th>
					<th class="footable-first-column" data-toggle="true">Đơn hàng</th>
					<th>Họ tên</th>
                                        <th data-hide="phone">Email</th>
                                        <th data-hide="phone">Điện thoại</th>
					<th class="w150" data-hide="phone">Giao dịch</th>
                                        <th class="w150" data-hide="phone">Giao hàng</th>
					<th class="w100" data-hide="phone">Ngày tạo</th>
                                        <th>Số tiền</th>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="12">
													<div class="list_action itemActions">
								<select name="action" class="left mr10">
									<option value="">Hành động...</option>
																			<option value="http://demothu.web5s.com.vn/admin/tran/active.html">Đã thanh toán</option>
																			<option value="http://demothu.web5s.com.vn/admin/tran/cancel.html">Hủy bỏ</option>
																			<option value="http://demothu.web5s.com.vn/admin/tran/del.html">Xóa</option>
																	</select>
								
								<a href="#submit" id="submit" class="btn btn-success fw600 br3 pv5 hidden-xs">
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

