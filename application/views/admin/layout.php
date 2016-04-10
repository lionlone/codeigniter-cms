<!DOCTYPE html>
<html>
    <head>
        <?php 
            $data = get_data_sidebar();
            $title = get_title($tpl);
            $data_head['title'] = $title;
            $this->load->view('admin/tpl/head', $data_head );
        ?>
    </head>
    <body class="sb-l-o sb-r-c">
        <div id="main">
            <!-- Start: header -->
            <!-- Common view -->
            <!-- Message -->
            <header class="navbar navber-fixed-top bg-info">
                <?php
                    $this->load->view('admin/tpl/header',$data);
                ?>
            </header>
            <!-- End: header -->
            <!-- Start: Sidebar -->
            <aside id="sidebar_left" class="nano nano-primary">
                <?php
                    $data_sidebar = $data;
                    $data_sidebar['sidebar_active'] = $tpl;
                    $this->load->view("admin/tpl/sidebar", $data_sidebar);
                ?>
            </aside>
            <!-- End: Sidebar -->
            <!-- Start: Content-Wrapper -->
			<section id="content_wrapper">
                <header id="topbar" class="affix">
                <?php
                    $this->breadcrumbs->push($title, $tpl);
                    $this->breadcrumbs->unshift('Trang chủ', admin_url());
                    $bread['breadcrumbs'] = $this->breadcrumbs->show();
                    $this->load->view("admin/tpl/header_content", $bread); 
                ?>
                </header>
    			<?php 
                    if (empty($tpl) || $tpl == 'index') {
                        $tpl = 'home';
                    }
                    $this->load->view("admin/tpl/$tpl"); 
                ?>
			</section>
            <!-- End: Content-Wrapper -->
        </div>
        <!-- End: Main -->
        <script type="text/javascript" src="<?= public_url(); ?>/admin/ipanel/assets/js/main.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function () {
                "use strict";
                // Init Theme Core      
                Core.init({
                    sbm: "sb-l-c",
                });

                //FooTable
                $(function () {
                    $('.footable').footable();
                });

            });
        </script>
    </body>
</html>