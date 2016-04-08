                
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
                        <a href="http://demothu.web5s.com.vn/admin/ads_banner.html">Banner</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
                <a class="btn btn-success fw600 pull-right mr10 br3 pv5" href="http://demothu.web5s.com.vn/admin/ads_banner/add.html">
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
                    <li class="active"><a href="#banner_size">Danh sách</a></li>
            </ul>
        </div>
        <form action="http://demothu.web5s.com.vn/admin/ads_banner.html" method="get" class="form" name="filter">
           <table class="footable table table-striped table-hover table-bordered admin-form fs13">
               <thead>
                   <tr>
                       <td colspan="10">
                           <div class="row">
                                <div class="col-md-5">
                                    <input class="gui-input" type="text" name="title" 
                                           value="" placeholder="Nhập tên banner..." />
                                </div>

                                <div class="col-md-3">
                                    <label class="field select">
                                        <select name="type">
                                            <option>Loại</option>
                                                                                        <option value="0" >
                                                Ảnh                                            </option>
                                                                                        <option value="1" >
                                                Flash                                            </option>
                                                                                        <option value="2" >
                                                Script                                            </option>
                                               
                                        </select>
                                        <i class="arrow"></i>
                                    </label>
                                </div>

                                <div class="col-md-2">
                                    <label class="field select">
                                        <select name="location">
                                            <option>Vị trí</option>
                                                                                            <option value="1757" >
                                                        Banner dưới slider                                                </option>
                                                                                            <option value="1758" >
                                                        Banner giữa trang chủ                                                </option>
                                                                                            <option value="1759" >
                                                        Banner đối tác                                                </option>
                                                                                            <option value="1760" >
                                                        Banner Sidebar                                                </option>
                                               
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
                        <th data-hide="phone">Hình ảnh</th>
                        <th class="text-left footable-first-column" data-toggle="true">Banner</th>
                        <th class="text-left" data-hide="phone">Vị trí</th>
                        <th data-hide="phone">Loại</th>
                        <th class="w150" data-hide="phone">Ngày hết hạn</th>
                        <th class="w100" data-hide="phone">Còn lại</th>
                        <th class="w100">Hành động</th>
                    </tr>
                </thead>
                <tfoot class="auto_check_pages">
                    <tr>
                        <td colspan="9">

                                                    </td>
                    </tr>
                </tfoot>
                <tbody>
                                            <tr class="">
                            <td class="text-center">
                                <a target="_blank" title="Xem ảnh lớn" 
                                   href="http://media.web5s.com.vn/sites/666/ads/banner_left.jpg">
                                    <img src="http://media.web5s.com.vn/sites/666/ads/banner_left.jpg" style="padding: 2px;background: #fff;border: 1px solid #ccc;width: 60px;" />
                                </a>

                            </td>

                            <td>01</td>

                            <td>Banner Sidebar</td>

                            <td class="text-center">Ảnh</td>

                            <td class="text-center">07-04-2016</td>

                            <td class="text-right"></td>

                            <td class="text-center"> 
                                    <a class="btn btn-xs btn-success br3 toggle_action power " 
                                        _url_on="http://demothu.web5s.com.vn/admin/ads_banner/action/hide/3415.html" _url_off="http://demothu.web5s.com.vn/admin/ads_banner/action/hide_del/3415.html"
                                        _title_on="Ẩn đi" _title_off="Bật lên"
                                    ><i class="fa fa-power-off"></i></a>

                                                                                <a href="http://demothu.web5s.com.vn/admin/ads_banner/action/edit/3415.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                    
                                                                                <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/ads_banner/action/del/3415.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                                    notice="Bạn có chắc chắn muốn xóa banner này?:<br><b>01</b>"
                                            >
                                                    <i class="fa fa-times"></i>
                                            </a>
                                                                </td>
                    </tr>
                                        <tr class="">
                            <td class="text-center">
                                <a target="_blank" title="Xem ảnh lớn" 
                                   href="http://media.web5s.com.vn/sites/666/brand/4.png">
                                    <img src="http://media.web5s.com.vn/sites/666/brand/4.png" style="padding: 2px;background: #fff;border: 1px solid #ccc;width: 60px;" />
                                </a>

                            </td>

                            <td>04</td>

                            <td>Banner đối tác</td>

                            <td class="text-center">Ảnh</td>

                            <td class="text-center">07-04-2016</td>

                            <td class="text-right"></td>

                            <td class="text-center"> 
                                    <a class="btn btn-xs btn-success br3 toggle_action power " 
                                        _url_on="http://demothu.web5s.com.vn/admin/ads_banner/action/hide/3414.html" _url_off="http://demothu.web5s.com.vn/admin/ads_banner/action/hide_del/3414.html"
                                        _title_on="Ẩn đi" _title_off="Bật lên"
                                    ><i class="fa fa-power-off"></i></a>

                                                                                <a href="http://demothu.web5s.com.vn/admin/ads_banner/action/edit/3414.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                    
                                                                                <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/ads_banner/action/del/3414.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                                    notice="Bạn có chắc chắn muốn xóa banner này?:<br><b>04</b>"
                                            >
                                                    <i class="fa fa-times"></i>
                                            </a>
                                                                </td>
                    </tr>
                                        <tr class="">
                            <td class="text-center">
                                <a target="_blank" title="Xem ảnh lớn" 
                                   href="http://media.web5s.com.vn/sites/666/brand/3.png">
                                    <img src="http://media.web5s.com.vn/sites/666/brand/3.png" style="padding: 2px;background: #fff;border: 1px solid #ccc;width: 60px;" />
                                </a>

                            </td>

                            <td>03</td>

                            <td>Banner đối tác</td>

                            <td class="text-center">Ảnh</td>

                            <td class="text-center">07-04-2016</td>

                            <td class="text-right"></td>

                            <td class="text-center"> 
                                    <a class="btn btn-xs btn-success br3 toggle_action power " 
                                        _url_on="http://demothu.web5s.com.vn/admin/ads_banner/action/hide/3413.html" _url_off="http://demothu.web5s.com.vn/admin/ads_banner/action/hide_del/3413.html"
                                        _title_on="Ẩn đi" _title_off="Bật lên"
                                    ><i class="fa fa-power-off"></i></a>

                                                                                <a href="http://demothu.web5s.com.vn/admin/ads_banner/action/edit/3413.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                    
                                                                                <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/ads_banner/action/del/3413.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                                    notice="Bạn có chắc chắn muốn xóa banner này?:<br><b>03</b>"
                                            >
                                                    <i class="fa fa-times"></i>
                                            </a>
                                                                </td>
                    </tr>
                                        <tr class="">
                            <td class="text-center">
                                <a target="_blank" title="Xem ảnh lớn" 
                                   href="http://media.web5s.com.vn/sites/666/brand/2.png">
                                    <img src="http://media.web5s.com.vn/sites/666/brand/2.png" style="padding: 2px;background: #fff;border: 1px solid #ccc;width: 60px;" />
                                </a>

                            </td>

                            <td>02</td>

                            <td>Banner đối tác</td>

                            <td class="text-center">Ảnh</td>

                            <td class="text-center">07-04-2016</td>

                            <td class="text-right"></td>

                            <td class="text-center"> 
                                    <a class="btn btn-xs btn-success br3 toggle_action power " 
                                        _url_on="http://demothu.web5s.com.vn/admin/ads_banner/action/hide/3412.html" _url_off="http://demothu.web5s.com.vn/admin/ads_banner/action/hide_del/3412.html"
                                        _title_on="Ẩn đi" _title_off="Bật lên"
                                    ><i class="fa fa-power-off"></i></a>

                                                                                <a href="http://demothu.web5s.com.vn/admin/ads_banner/action/edit/3412.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                    
                                                                                <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/ads_banner/action/del/3412.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                                    notice="Bạn có chắc chắn muốn xóa banner này?:<br><b>02</b>"
                                            >
                                                    <i class="fa fa-times"></i>
                                            </a>
                                                                </td>
                    </tr>
                                        <tr class="">
                            <td class="text-center">
                                <a target="_blank" title="Xem ảnh lớn" 
                                   href="http://media.web5s.com.vn/sites/666/brand/1.png">
                                    <img src="http://media.web5s.com.vn/sites/666/brand/1.png" style="padding: 2px;background: #fff;border: 1px solid #ccc;width: 60px;" />
                                </a>

                            </td>

                            <td>01</td>

                            <td>Banner đối tác</td>

                            <td class="text-center">Ảnh</td>

                            <td class="text-center">07-04-2016</td>

                            <td class="text-right"></td>

                            <td class="text-center"> 
                                    <a class="btn btn-xs btn-success br3 toggle_action power " 
                                        _url_on="http://demothu.web5s.com.vn/admin/ads_banner/action/hide/3411.html" _url_off="http://demothu.web5s.com.vn/admin/ads_banner/action/hide_del/3411.html"
                                        _title_on="Ẩn đi" _title_off="Bật lên"
                                    ><i class="fa fa-power-off"></i></a>

                                                                                <a href="http://demothu.web5s.com.vn/admin/ads_banner/action/edit/3411.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                    
                                                                                <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/ads_banner/action/del/3411.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                                    notice="Bạn có chắc chắn muốn xóa banner này?:<br><b>01</b>"
                                            >
                                                    <i class="fa fa-times"></i>
                                            </a>
                                                                </td>
                    </tr>
                                        <tr class="">
                            <td class="text-center">
                                <a target="_blank" title="Xem ảnh lớn" 
                                   href="http://media.web5s.com.vn/sites/666/ads/img_banner.jpg">
                                    <img src="http://media.web5s.com.vn/sites/666/ads/img_banner.jpg" style="padding: 2px;background: #fff;border: 1px solid #ccc;width: 60px;" />
                                </a>

                            </td>

                            <td>01</td>

                            <td>Banner giữa trang chủ</td>

                            <td class="text-center">Ảnh</td>

                            <td class="text-center">07-04-2016</td>

                            <td class="text-right"></td>

                            <td class="text-center"> 
                                    <a class="btn btn-xs btn-success br3 toggle_action power " 
                                        _url_on="http://demothu.web5s.com.vn/admin/ads_banner/action/hide/3410.html" _url_off="http://demothu.web5s.com.vn/admin/ads_banner/action/hide_del/3410.html"
                                        _title_on="Ẩn đi" _title_off="Bật lên"
                                    ><i class="fa fa-power-off"></i></a>

                                                                                <a href="http://demothu.web5s.com.vn/admin/ads_banner/action/edit/3410.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                    
                                                                                <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/ads_banner/action/del/3410.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                                    notice="Bạn có chắc chắn muốn xóa banner này?:<br><b>01</b>"
                                            >
                                                    <i class="fa fa-times"></i>
                                            </a>
                                                                </td>
                    </tr>
                                        <tr class="">
                            <td class="text-center">
                                <a target="_blank" title="Xem ảnh lớn" 
                                   href="http://media.web5s.com.vn/sites/666/ads/banner_static3.jpg">
                                    <img src="http://media.web5s.com.vn/sites/666/ads/banner_static3.jpg" style="padding: 2px;background: #fff;border: 1px solid #ccc;width: 60px;" />
                                </a>

                            </td>

                            <td>03</td>

                            <td>Banner dưới slider</td>

                            <td class="text-center">Ảnh</td>

                            <td class="text-center">07-04-2016</td>

                            <td class="text-right"></td>

                            <td class="text-center"> 
                                    <a class="btn btn-xs btn-success br3 toggle_action power " 
                                        _url_on="http://demothu.web5s.com.vn/admin/ads_banner/action/hide/3409.html" _url_off="http://demothu.web5s.com.vn/admin/ads_banner/action/hide_del/3409.html"
                                        _title_on="Ẩn đi" _title_off="Bật lên"
                                    ><i class="fa fa-power-off"></i></a>

                                                                                <a href="http://demothu.web5s.com.vn/admin/ads_banner/action/edit/3409.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                    
                                                                                <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/ads_banner/action/del/3409.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                                    notice="Bạn có chắc chắn muốn xóa banner này?:<br><b>03</b>"
                                            >
                                                    <i class="fa fa-times"></i>
                                            </a>
                                                                </td>
                    </tr>
                                        <tr class="">
                            <td class="text-center">
                                <a target="_blank" title="Xem ảnh lớn" 
                                   href="http://media.web5s.com.vn/sites/666/ads/banner_static2.jpg">
                                    <img src="http://media.web5s.com.vn/sites/666/ads/banner_static2.jpg" style="padding: 2px;background: #fff;border: 1px solid #ccc;width: 60px;" />
                                </a>

                            </td>

                            <td>02</td>

                            <td>Banner dưới slider</td>

                            <td class="text-center">Ảnh</td>

                            <td class="text-center">07-04-2016</td>

                            <td class="text-right"></td>

                            <td class="text-center"> 
                                    <a class="btn btn-xs btn-success br3 toggle_action power " 
                                        _url_on="http://demothu.web5s.com.vn/admin/ads_banner/action/hide/3408.html" _url_off="http://demothu.web5s.com.vn/admin/ads_banner/action/hide_del/3408.html"
                                        _title_on="Ẩn đi" _title_off="Bật lên"
                                    ><i class="fa fa-power-off"></i></a>

                                                                                <a href="http://demothu.web5s.com.vn/admin/ads_banner/action/edit/3408.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                    
                                                                                <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/ads_banner/action/del/3408.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                                    notice="Bạn có chắc chắn muốn xóa banner này?:<br><b>02</b>"
                                            >
                                                    <i class="fa fa-times"></i>
                                            </a>
                                                                </td>
                    </tr>
                                        <tr class="">
                            <td class="text-center">
                                <a target="_blank" title="Xem ảnh lớn" 
                                   href="http://media.web5s.com.vn/sites/666/ads/banner_static1.jpg">
                                    <img src="http://media.web5s.com.vn/sites/666/ads/banner_static1.jpg" style="padding: 2px;background: #fff;border: 1px solid #ccc;width: 60px;" />
                                </a>

                            </td>

                            <td>01</td>

                            <td>Banner dưới slider</td>

                            <td class="text-center">Ảnh</td>

                            <td class="text-center">07-04-2016</td>

                            <td class="text-right"></td>

                            <td class="text-center"> 
                                    <a class="btn btn-xs btn-success br3 toggle_action power " 
                                        _url_on="http://demothu.web5s.com.vn/admin/ads_banner/action/hide/3407.html" _url_off="http://demothu.web5s.com.vn/admin/ads_banner/action/hide_del/3407.html"
                                        _title_on="Ẩn đi" _title_off="Bật lên"
                                    ><i class="fa fa-power-off"></i></a>

                                                                                <a href="http://demothu.web5s.com.vn/admin/ads_banner/action/edit/3407.html" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3"><i class="fa fa-pencil"></i></a>
                                    
                                                                                <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/ads_banner/action/del/3407.html" title="Xóa" class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                                    notice="Bạn có chắc chắn muốn xóa banner này?:<br><b>01</b>"
                                            >
                                                    <i class="fa fa-times"></i>
                                            </a>
                                                                </td>
                    </tr>
                                </tbody>

            </table>
        </form>
    </div>
</section>
        
                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>

