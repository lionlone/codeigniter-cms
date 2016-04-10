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
                <a id="cancel" href="" class="btn btn-default" data-dismiss="modal">Hủy bỏ</a>
                <a id="accept" href="" class="btn btn-primary">Xác nhận</a>
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

        <div class="panel-body pn mt10">
            <table class="footable table table-striped table-hover table-bordered admin-form fs13">
                <thead>
                    <tr>
                        <th class="footable-first-column text-left" data-toggle="true">Email</th>
                        <th class="text-left">Tên đầy đủ</th>
                        <th>Username</th>
                        <th>Nhóm quản trị</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $data = '';
                    foreach ($list as $key => $value) {
                            $data = $data . '<tr><td><i class="fa fa-lock"></i> ' . $value['email'] . '</td>';
                            $data = $data . '<td class="text-left">' . $value['first_name'] . ' ' . $value['last_name'] . '</td>';
                            $data = $data . '<td class="text-center">' . $value['username'] . '</td>';
                            $data = $data . '<td class="text-center"> '. $value['title'] .'</td>';
                            $data = $data . '<td class="text-center"> </td></tr>';
                    }
                    echo $data;
                    ?>
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