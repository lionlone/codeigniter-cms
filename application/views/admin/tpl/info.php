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
                        <a href="http://demothu.web5s.com.vn/admin/info.html">Quản lý trang</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>    </div>
    <div class="topbar-right">
        <a class="btn btn-success fw600 pull-right mr10 br3 pv5" href="http://demothu.web5s.com.vn/admin/info/add.html">
            <i class="fa fa-plus mr5"></i> Thêm mới        </a>
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
                                <li class="active"><a href="#domain_info">Danh sách</a></li>
                        </ul>
                </div>
                
		<div class="panel-body pn mt10">
		<form action="http://demothu.web5s.com.vn/admin/info.html" method="get" class="form" name="filter">
                        <table class="footable table table-striped table-hover table-bordered admin-form fs13">
                            <thead>
                                    <tr class="info">
                                            <th class="w50" data-hide="phone">Chọn</th>
                                            <th class="text-left footable-first-column" data-toggle="true">Tiêu đề</th>
                                            <th class="w100" data-hide="phone">Lượt xem</th>
                                            <th class="w150" data-hide="phone">Ngày tạo</th>
                                            <th class="w100" data-hide="phone">Thuộc tính</th>
                                            <th class="w150" data-hide="phone">Hành động</th>
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

                                                            <a href="#" id="submit_action" _action="http://demothu.web5s.com.vn/admin/info/action/_list.html" class="btn btn-success fw600 mr10 br3 pv5">
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
                                                                    <input type="checkbox" name="id[]" value="1154">
                                                                    <span class="checkbox mn"></span>
                                                            </label>
                                                    </td>
                                                    <td>
                                                            <a href="http://demothu.web5s.com.vn/gioi-thieu" target="_blank">
                                                                    Giới thiệu                                                            </a>
                                                    </td>

                                                    <td class="text-center">83</td>

                                                    <td class="text-center">10-01-2016</td>

                                                    <td class="option4">
                                                            <a class="toggle_action btn btn-xs btn-success br3 home " 
                                                                    _url_on="http://demothu.web5s.com.vn/admin/info/action/feature/1154.html" _url_off="http://demothu.web5s.com.vn/admin/info/action/feature_del/1154.html"
                                                                    _title_on="Nổi bật" _title_off="Bỏ nổi bật"
                                                            ><i class="fa fa-home"></i></a>
                                                    </td>

                                                    <td class="text-center">
                                                            <a class="btn btn-xs btn-success br3 toggle_action power " 
                                                                _url_on="http://demothu.web5s.com.vn/admin/info/action/hide/1154.html" _url_off="http://demothu.web5s.com.vn/admin/info/action/hide_del/1154.html"
                                                                _title_on="Ẩn" _title_off="Hiển thị"
                                                            ><i class="fa fa-power-off"></i></a>

                                                                                                                                <a href="http://demothu.web5s.com.vn/admin/info/action/edit/1154.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                                            
                                                                                                                </td>
                                            </tr>
                                    
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

