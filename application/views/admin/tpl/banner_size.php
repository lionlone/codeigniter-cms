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
                        <a href="http://demothu.web5s.com.vn/admin/banner_size.html">Kích thước</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
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
                                    <a href="#banner_size">Danh sách</a>
                                </li>
                        </ul>
                </div>
        <div class="panel-body pn mt10">
                        <table class="footable table table-striped table-hover table-bordered admin-form fs13">
            <thead>
                                <tr class="info">
                    <th class="footable-first-column w50" data-hide="phone">Chọn</td>
                    <th class="w200 footable-first-column" data-toggle="true">Tên</th>
                    <th data-hide="phone">Khung hình(px)</th>
                                        <th class="w200" data-hide="phone">Số banner đang sử dụng</th>
                                        <th class="w150" data-hide="phone">Thứ tự</th>
                    <th class="w150">Hành động</th>
                                </tr>
            </thead>

            <tfoot class="auto_check_pages">
                <tr>
                    <td colspan="8">
                        <div class="itemActions">
                            <select name="action" class="left mr10">
                                <option value="">Hành động...</option>
                                                                    <option value="del">Xóa</option>
                                                            </select>
                            <a href="#" id="submit_action" _action="http://demothu.web5s.com.vn/admin/banner_size/action/_list.html" class="btn btn-success lh10">
                                <span>Thực hiện</span>
                            </a>
                        </div>
                        
                                            </td>
                </tr>
            </tfoot>
            
            <tbody>
                
                <!-- List -->
                                    <tr>
                        <td class="text-center">
                                                        <label class="option block mn">
                                                                <input type="checkbox" name="id[]" value="1412">
                                                                <span class="checkbox mn"></span>
                                                        </label>
                                                </td>
                        
                        <td class="text-center">262 x 132</td>
                        
                                                <td class="text-center">262 x 132</td>
                                                
                                                <td class="text-center">0</td>
                                                
                                                <td class="text-center">0</td>
                                                
                        <td class="text-center">
                                                                                                                        
                                                                                                                        <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/banner_size/action/del/1412.html" title="Làm lại" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                                                            notice="Bạn có chắc chắn muốn chuyển giá trị về mặc định"
                                                                >
                                                                        <i class="fa fa-times"></i>
                                                                </a>
                                                                                </td>
                    </tr>
                                    <tr>
                        <td class="text-center">
                                                        <label class="option block mn">
                                                                <input type="checkbox" name="id[]" value="1413">
                                                                <span class="checkbox mn"></span>
                                                        </label>
                                                </td>
                        
                        <td class="text-center">1170 x auto</td>
                        
                                                <td class="text-center">1170 x Auto</td>
                                                
                                                <td class="text-center">0</td>
                                                
                                                <td class="text-center">0</td>
                                                
                        <td class="text-center">
                                                                                                                        <a href="http://demothu.web5s.com.vn/admin/banner_size/action/edit/1413.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                                                                                                        
                                                                                </td>
                    </tr>
                                    <tr>
                        <td class="text-center">
                                                        <label class="option block mn">
                                                                <input type="checkbox" name="id[]" value="1414">
                                                                <span class="checkbox mn"></span>
                                                        </label>
                                                </td>
                        
                        <td class="text-center">105 x 97</td>
                        
                                                <td class="text-center">105 x 97</td>
                                                
                                                <td class="text-center">0</td>
                                                
                                                <td class="text-center">0</td>
                                                
                        <td class="text-center">
                                                                                                                        
                                                                                                                        <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/banner_size/action/del/1414.html" title="Làm lại" class="btn btn-xs btn-danger btn-delete br3 verify_action"
                                                                            notice="Bạn có chắc chắn muốn chuyển giá trị về mặc định"
                                                                >
                                                                        <i class="fa fa-times"></i>
                                                                </a>
                                                                                </td>
                    </tr>
                                    <tr>
                        <td class="text-center">
                                                        <label class="option block mn">
                                                                <input type="checkbox" name="id[]" value="1415">
                                                                <span class="checkbox mn"></span>
                                                        </label>
                                                </td>
                        
                        <td class="text-center">263 x auto</td>
                        
                                                <td class="text-center">263 x Auto</td>
                                                
                                                <td class="text-center">0</td>
                                                
                                                <td class="text-center">0</td>
                                                
                        <td class="text-center">
                                                                                                                        <a href="http://demothu.web5s.com.vn/admin/banner_size/action/edit/1415.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                                                                                                        
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