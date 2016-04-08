                <!-- Common view -->
<script type="text/javascript">
    $(function()
    {
        var type  = $('input[name=type]:checked').val();
        $(this).find(".type_div_main").hide();
        if(type >= 0)
        {
            $('#type_'+type).show();
        }

        $("input[name=type]").change(function()
        {
            $(".type_div_main").hide();
            var type = $(this).val();

            $('#type_'+type).show();
            return false;
        });
    });
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
                        <a href="http://demothu.web5s.com.vn/admin/menu.html">Menu</a>
                </li>
                        <li class="current">
                        <a href="http://demothu.web5s.com.vn/admin/menu.html">Danh sách</a>
                </li>
        </ol>    </div>
    <div class="topbar-right">
        <a class="btn btn-success fw600 pull-right mr10 br3 pv5" href="http://demothu.web5s.com.vn/admin/menu/add.html">
                <i class="fa fa-plus mr5"></i> Thêm mới        </a>
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
<script type="text/javascript"> 
(function($)
{
	$(document).ready(function()
	{
		var main = $('#content');
                
		// Sap xep menu item
		main.find('table.myTable').sortable(
		{    
			placeholder: 'ui-state-highlight',
			items: 'tbody tr[_menu]',
			handle: '.js-sortable-handle',
			forcePlaceholderSize: true,
			helper: function(e, ui) 
			{
				ui.children().each(function()
				{
					$(this).width($(this).width());
				});
				return ui;
			},
			start: function(event, ui) 
			{
				ui.placeholder.html('<td colspan="' + $(this).find('tbody tr:first td').size() + '">&nbsp;</td>');
			},
                        stop: function(event, ui)
                        {
                                var menu = ui.item.attr('_menu');
                                update_order(menu);
			}
		});
		
		function update_order(menu)
		{
			var items = new Array();
			main.find('tr[_menu='+menu+']').each(function()
			{
				var item = $(this).attr('_item');
				items.push(item);
			});
			
			$(this).nstUI({
				method:	"loadAjax",
				loadAjax: {
					url: 'http://demothu.web5s.com.vn/admin/menu.html?act=update_order',
					data: {items: items.join()},
					field: {load: '_', show: ''},
				}
			});
		}
		
	});
})(jQuery);
</script>

<!-- Main content wrapper -->
<section id="content">
    <div class="panel">
        <div class="panel-heading"> 
            <ul class="tabs nav panel-tabs-border panel-tabs panel-tabs-left">
                    <li class="active"><a href="#domain_info">Danh sách</a></li>
            </ul>
        </div>
        <div class="panel-body pn mt10">
                <table class="footable table table-striped table-hover table-bordered admin-form fs13">
                        <thead>
                            <tr class="info">
                                <th class="footable-first-column text-center w100" data-hide="phone">Thứ tự</th>
                                <th class="" data-toggle="true">Tiêu đề</th>
                                <th class="" data-hide="phone">Trang đích</th>
                                <th class="text-center w100" data-hide="phone">Ngày tạo</th>
                                <th class="text-center w150">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- List -->
                                                            <tr>
                                    <td class="text-center">1</td>
                                    <td>
                                            <a href="http://demothu.web5s.com.vn/" target="_blank">
                                                    Trang chủ                                            </a>
                                    </td>
                                    <td class="text-left">/</td>
                                    <td>10-01-2016</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                            _url_on="http://demothu.web5s.com.vn/admin/menu/action/hide/3127.html" _url_off="http://demothu.web5s.com.vn/admin/menu/action/hide_del/3127.html"
                                            _title_on="Ẩn đi" _title_off="Hiển thị"
                                        ><i class="fa fa-power-off"></i></a>
                                        
                                        <a href="http://demothu.web5s.com.vn/admin/menu/action/edit/3127.html" class="btn btn-xs btn-warning btn-edit br3" title="Chỉnh sửa">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        
                                        <a _url="http://demothu.web5s.com.vn/admin/menu/action/del/3127.html" href="javascript:void(0)" class="verify_action btn btn-xs btn-danger btn-delete br3" title="Xóa"
                                                notice="Bạn có chắc chắn muốn xóa ?:<br><b>Trang chủ</b>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td class="text-center">2</td>
                                    <td>
                                            <a href="http://demothu.web5s.com.vn/gioi-thieu.html" target="_blank">
                                                    Giới thiệu                                            </a>
                                    </td>
                                    <td class="text-left">gioi-thieu.html</td>
                                    <td>10-01-2016</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                            _url_on="http://demothu.web5s.com.vn/admin/menu/action/hide/3128.html" _url_off="http://demothu.web5s.com.vn/admin/menu/action/hide_del/3128.html"
                                            _title_on="Ẩn đi" _title_off="Hiển thị"
                                        ><i class="fa fa-power-off"></i></a>
                                        
                                        <a href="http://demothu.web5s.com.vn/admin/menu/action/edit/3128.html" class="btn btn-xs btn-warning btn-edit br3" title="Chỉnh sửa">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        
                                        <a _url="http://demothu.web5s.com.vn/admin/menu/action/del/3128.html" href="javascript:void(0)" class="verify_action btn btn-xs btn-danger btn-delete br3" title="Xóa"
                                                notice="Bạn có chắc chắn muốn xóa ?:<br><b>Giới thiệu</b>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td class="text-center">3</td>
                                    <td>
                                            <a href="http://demothu.web5s.com.vn/san-pham-giam-gia.html" target="_blank">
                                                    Khuyến mại                                            </a>
                                    </td>
                                    <td class="text-left">san-pham-giam-gia.html</td>
                                    <td>10-01-2016</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                            _url_on="http://demothu.web5s.com.vn/admin/menu/action/hide/3129.html" _url_off="http://demothu.web5s.com.vn/admin/menu/action/hide_del/3129.html"
                                            _title_on="Ẩn đi" _title_off="Hiển thị"
                                        ><i class="fa fa-power-off"></i></a>
                                        
                                        <a href="http://demothu.web5s.com.vn/admin/menu/action/edit/3129.html" class="btn btn-xs btn-warning btn-edit br3" title="Chỉnh sửa">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        
                                        <a _url="http://demothu.web5s.com.vn/admin/menu/action/del/3129.html" href="javascript:void(0)" class="verify_action btn btn-xs btn-danger btn-delete br3" title="Xóa"
                                                notice="Bạn có chắc chắn muốn xóa ?:<br><b>Khuyến mại</b>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td class="text-center">4</td>
                                    <td>
                                            <a href="http://demothu.web5s.com.vn/tin-tuc.html" target="_blank">
                                                    Tin tức                                            </a>
                                    </td>
                                    <td class="text-left">tin-tuc.html</td>
                                    <td>10-01-2016</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                            _url_on="http://demothu.web5s.com.vn/admin/menu/action/hide/3130.html" _url_off="http://demothu.web5s.com.vn/admin/menu/action/hide_del/3130.html"
                                            _title_on="Ẩn đi" _title_off="Hiển thị"
                                        ><i class="fa fa-power-off"></i></a>
                                        
                                        <a href="http://demothu.web5s.com.vn/admin/menu/action/edit/3130.html" class="btn btn-xs btn-warning btn-edit br3" title="Chỉnh sửa">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        
                                        <a _url="http://demothu.web5s.com.vn/admin/menu/action/del/3130.html" href="javascript:void(0)" class="verify_action btn btn-xs btn-danger btn-delete br3" title="Xóa"
                                                notice="Bạn có chắc chắn muốn xóa ?:<br><b>Tin tức</b>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td class="text-center">4</td>
                                    <td>
                                            <a href="http://demothu.web5s.com.vn/san-pham.html" target="_blank">
                                                    Sản phẩm                                            </a>
                                    </td>
                                    <td class="text-left">san-pham.html</td>
                                    <td>11-01-2016</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                            _url_on="http://demothu.web5s.com.vn/admin/menu/action/hide/3132.html" _url_off="http://demothu.web5s.com.vn/admin/menu/action/hide_del/3132.html"
                                            _title_on="Ẩn đi" _title_off="Hiển thị"
                                        ><i class="fa fa-power-off"></i></a>
                                        
                                        <a href="http://demothu.web5s.com.vn/admin/menu/action/edit/3132.html" class="btn btn-xs btn-warning btn-edit br3" title="Chỉnh sửa">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        
                                        <a _url="http://demothu.web5s.com.vn/admin/menu/action/del/3132.html" href="javascript:void(0)" class="verify_action btn btn-xs btn-danger btn-delete br3" title="Xóa"
                                                notice="Bạn có chắc chắn muốn xóa ?:<br><b>Sản phẩm</b>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                                            <tr>
                                    <td class="text-center">5</td>
                                    <td>
                                            <a href="http://demothu.web5s.com.vn/lien-he.html" target="_blank">
                                                    Liên hệ                                            </a>
                                    </td>
                                    <td class="text-left">lien-he.html</td>
                                    <td>10-01-2016</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success br3 toggle_action power " 
                                            _url_on="http://demothu.web5s.com.vn/admin/menu/action/hide/3131.html" _url_off="http://demothu.web5s.com.vn/admin/menu/action/hide_del/3131.html"
                                            _title_on="Ẩn đi" _title_off="Hiển thị"
                                        ><i class="fa fa-power-off"></i></a>
                                        
                                        <a href="http://demothu.web5s.com.vn/admin/menu/action/edit/3131.html" class="btn btn-xs btn-warning btn-edit br3" title="Chỉnh sửa">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        
                                        <a _url="http://demothu.web5s.com.vn/admin/menu/action/del/3131.html" href="javascript:void(0)" class="verify_action btn btn-xs btn-danger btn-delete br3" title="Xóa"
                                                notice="Bạn có chắc chắn muốn xóa ?:<br><b>Liên hệ</b>">
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

