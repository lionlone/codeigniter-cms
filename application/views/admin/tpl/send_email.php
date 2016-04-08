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
                        <a href="">Đăng ký nhận email</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
                <a class="btn btn-success fw600 pull-right br3 pv5 hidden-xs" href="http://demothu.web5s.com.vn/admin/send_email.html">
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
                    <li class="active"><a href="#list">Danh sách</a></li>
            </ul>
        </div>
                
        <div class="panel-body pn p10">
            <form action="" method="get" class="form">
                <table class="footable table table-striped table-hover table-bordered admin-form fs13">
                <thead>
                    <tr class="info">
                        <th data-hide="phone">ID</th>
                        <th class="footable-first-column text-left" data-toggle="true">Tên</th>
                        <th class="text-left" data-hide="phone">Email</th>
                        <th data-hide="phone">Ngày tạo</th>
                        <th class="w150">Hành động</th>
                    </tr>
                </thead>
                
                <tfoot>
                    <tr>
                        <td colspan="7">
                                                    </td>
                    </tr>
                </tfoot>
                
                <tbody>

                                    <tr>
                        <td>70</td>
                        <td></td>
                        
                        <td>
                            <a href="mailto:rappentap@hotmail.com" 
                               class="tipS" title="Gửi mail cho người này">rappentap@hotmail.com</a>
                        </td>

                        <td>06-04-2016</td>

                        <td class="text-center">
                                <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/send_email/del/70.html" title="Xóa"
                                   class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                            notice="Bạn chắc chắn muốn xóa liên hệ:: <b>rappentap@hotmail.com</b>"
                                >
                                        <i class="fa fa-times"></i>
                                </a>
                        </td>
                    </tr>
                                </tbody>
            </table>
        </form>
    </div>
</div>
        
                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>