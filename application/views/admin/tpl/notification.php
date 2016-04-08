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
                        <a href="">Cấu hình</a>
                </li>
                        <li >
                        <a href="http://demothu.web5s.com.vn/admin/notification.html">Thông báo</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
                <a class="btn btn-success fw600 pull-right br3 pv5 hidden-xs" href="http://demothu.web5s.com.vn/admin/notification.html">
                        <i class="fa fa-align-justify mr5"></i> Danh sách                </a>
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
                    <li class="active"><a href="#cat_info">Danh sách</a></li>
            </ul>
        </div>
        <div class="panel-body pn mt10">
                <table class="footable table table-striped table-hover table-bordered admin-form fs13">
                    <thead>
                        <tr class="info">
                            <th>STT</th>
                            <th class="text-left">Mẫu</th>
                            <th class="text-left">Tiêu đề</th>
                            <th>Người nhận</th>
                        </tr>
                    </thead>
                    <tbody>
                                                    <tr>
                                <td class="w50 text-center">1</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/account_register.html">
                                        Đăng ký tài khoản                                    </a>
                                </td>
                                
                                <td>Đăng ký tài khoản tại {site_name} thành công</td>
                                
                                <td class="text-center">Khách hàng</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">2</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/account_register_admin.html">
                                        Đăng ký tài khoản                                    </a>
                                </td>
                                
                                <td>{site_name}: Có khách hàng đăng ký tài khoản</td>
                                
                                <td class="text-center">Quản lý</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">3</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/affiliate_confirm.html">
                                        Xác thực cộng tác viên                                    </a>
                                </td>
                                
                                <td>Xác thực tài khoản {account_fullname} làm cộng viên tại {site_name}</td>
                                
                                <td class="text-center">Khách hàng</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">4</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/affiliate_signup.html">
                                        Đăng ký cộng tác viên                                    </a>
                                </td>
                                
                                <td>Yêu cầu đăng ký làm cộng viên tại {site_name}</td>
                                
                                <td class="text-center">Khách hàng</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">5</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/affiliate_signup_admin.html">
                                        Đăng ký cộng tác viên                                    </a>
                                </td>
                                
                                <td>{site_name}: Có thành viên yêu cầu làm cộng tác viên</td>
                                
                                <td class="text-center">Quản lý</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">6</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/cashout.html">
                                        Yêu cầu rút tiền                                    </a>
                                </td>
                                
                                <td>{account_fullname} Yêu cầu rút {amount} tại {site_name}</td>
                                
                                <td class="text-center">Khách hàng</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">7</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/cashout_admin.html">
                                        Yêu cầu rút tiền                                    </a>
                                </td>
                                
                                <td>{site_name}: Thành viên {account_fullname} Yêu cầu rút {amount}</td>
                                
                                <td class="text-center">Quản lý</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">8</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/cashout_confirm.html">
                                        Xác nhận chuyển tiền                                    </a>
                                </td>
                                
                                <td>Xác nhận chuyển {amount} cho cộng tác viên {account_fullname} tại {site_name}</td>
                                
                                <td class="text-center">Khách hàng</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">9</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/forgot_password.html">
                                        Khách hàng lấy lại mật khẩu tài khoản                                    </a>
                                </td>
                                
                                <td>Yêu cầu lấy lại mật khẩu tại {site_name}</td>
                                
                                <td class="text-center">Khách hàng</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">10</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/order_cancel.html">
                                        Hủy bỏ đơn hàng                                    </a>
                                </td>
                                
                                <td>Hủy bỏ đơn hàng #{order_id} từ {site_name}</td>
                                
                                <td class="text-center">Khách hàng</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">11</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/order_confirm.html">
                                        Xác nhận đơn hàng                                    </a>
                                </td>
                                
                                <td>Xác nhận đơn hàng #{order_id} từ {site_name}</td>
                                
                                <td class="text-center">Khách hàng</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">12</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/order_created.html">
                                        Tạo đơn hàng mới                                    </a>
                                </td>
                                
                                <td>{site_name}: Có đơn hàng mới từ khách hàng {customer_name}</td>
                                
                                <td class="text-center">Khách hàng</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">13</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/order_created_admin.html">
                                        Tạo đơn hàng mới                                    </a>
                                </td>
                                
                                <td>{site_name}: Có đơn hàng mới từ khách hàng {customer_name}</td>
                                
                                <td class="text-center">Quản lý</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">14</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/order_delivered.html">
                                        Xác nhận giao hàng                                    </a>
                                </td>
                                
                                <td>Xác nhận giao hàng cho đơn hàng #{order_id} từ {site_name}</td>
                                
                                <td class="text-center">Khách hàng</td>
                            </tr>
                                                    <tr>
                                <td class="w50 text-center">15</td>
                                
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification/action/edit/order_refund.html">
                                        Hoàn trả đơn hàng                                    </a>
                                </td>
                                
                                <td>Hoàn trả đơn hàng #{order_id} từ {site_name}</td>
                                
                                <td class="text-center">Khách hàng</td>
                            </tr>
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