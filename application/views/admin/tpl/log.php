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
                        <a href="http://demothu.web5s.com.vn/admin/log.html">Lịch sử tác động</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>    </div>
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
                <li class="active">
                    <a href="#cat_info">
                        Danh sách                    </a>
                </li>
            </ul>
        </div>

        <form action="http://demothu.web5s.com.vn/admin/log.html" method="get" class="form" name="filter">
        <div class="panel-body pn mt10">
            <table class="footable table table-striped table-hover table-bordered admin-form fs13">
                <thead class="filter">
                        <tr></tr>
                    </thead>
                    <thead>
                        <tr class="info">
                            <th class="w100 text-left" data-hide="phone">Thành viên</th>
                            <th class="footable-first-column text-left" data-toggle="true">Hành động</th>
                            <th class="w150" data-hide="phone">Thời gian</th>
                            <th class="w100" data-hide="phone">Url</th>
                            <th class="w100" data-hide="phone">IP</th>
                            <th class="w200" data-hide="phone">Agent</th>
                        </tr>
                    </thead>
                    
                    <tfoot class="auto_check_pages">
                        <tr>
                            <td colspan="7">
                                <div class="itemActions"></div>
                                                            </td>
                        </tr>
                    </tfoot>
                    
                    <tbody>

                        <!-- List -->
                                                    <tr>
                                <td>rappentap@hotmail.com</td>
                                <td>Thêm mới Nhóm quản trị <b>ban quan tri</b></td>
                                <td>07-04-2016 - 13:44:16</td>
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/admin_group/add.html" 
                                       title="http://demothu.web5s.com.vn/admin/admin_group/add.html">/admin_group/add</a>
                                </td>
                                <td>58.187.233.85</td>
                                <td>
                                    Chrome, 48.2.2564.133, Unknown Windows OS                                </td>
                            </tr>
                                                    <tr>
                                <td>rappentap@hotmail.com</td>
                                <td>Xóa Đăng ký nhận email <b></b></td>
                                <td>06-04-2016 - 22:11:04</td>
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/send_email/del/71.html" 
                                       title="http://demothu.web5s.com.vn/admin/send_email/del/71.html">/send_email/del/71</a>
                                </td>
                                <td>58.187.233.85</td>
                                <td>
                                    Chrome, 48.2.2564.133, Unknown Windows OS                                </td>
                            </tr>
                                                    <tr>
                                <td>rappentap@hotmail.com</td>
                                <td>Thêm mới Thông báo <b>{site_name}: Có đơn hàng mới từ khách hàng {customer_name}</b></td>
                                <td>05-04-2016 - 23:20:41</td>
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/notification.html" 
                                       title="http://demothu.web5s.com.vn/admin/notification.html">/notification/index</a>
                                </td>
                                <td>58.187.233.85</td>
                                <td>
                                    Firefox, 45.0, Unknown Windows OS                                </td>
                            </tr>
                                                    <tr>
                                <td>rappentap@hotmail.com</td>
                                <td>Thêm mới Quản lý block <b>Đơn hàng mới nhất</b></td>
                                <td>05-04-2016 - 23:20:41</td>
                                <td>
                                    <a href="http://demothu.web5s.com.vn/admin/block.html" 
                                       title="http://demothu.web5s.com.vn/admin/block.html">/block/index</a>
                                </td>
                                <td>58.187.233.85</td>
                                <td>
                                    Firefox, 45.0, Unknown Windows OS                                </td>
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

