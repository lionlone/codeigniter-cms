             
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
                        <a href="">Tài khoản</a>
                </li>
                        <li >
                        <a href="http://demothu.web5s.com.vn/admin/admin_group.html">Nhóm quản trị</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
                <a class="btn btn-success fw600 pull-right mr10 br3 pv5" href="http://demothu.web5s.com.vn/admin/admin_group/add.html">
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
            <ul class="tabs nav panel-tabs-border panel-tabs panel-tabs-left">
                <li class="active">
                    <a href="#list">
                        Danh sách                    </a>
                </li>
            </ul>
        </div>
        <div class="panel-body pn mt10">
            <table class="footable table table-striped table-hover table-bordered admin-form fs13">
                <thead>
                    <tr class="info">
                        <th class="w100">Thứ tự</th>
                        <th class="footable-first-column text-left" data-toggle="true">Tên</th>
                        <th class="w150">Hành động</th>
                   </tr>
                </thead>

                <tbody>
                                    <tr>
                        <td class="text-center">0</td>

                        <td>ban quan tri</td>

                        <td class="text-center">
                            <a href="http://demothu.web5s.com.vn/admin/admin_group/action/edit/14.html" title="Chỉnh sửa" 
                               class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>

                            <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/admin_group/action/del/14.html" title="Xóa" 
                               class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                notice="Bạn có chắc chắn muốn xóa nhóm quản trị:<br><b>ban quan tri</b>"
                            >
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
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

