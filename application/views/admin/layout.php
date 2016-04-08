<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('admin/tpl/head.php'); ?>
    </head>
    <body class="sb-l-o sb-r-c">
        <div id="main">
            <!-- Start: header -->
            <header class="navbar navber-fixed-top bg-info">
                <?php $this->load->view('admin/tpl/header'); ?>
            </header>
            <!-- End: header -->
            <!-- Start: Sidebar -->
            <aside id="sidebar_left" class="nano nano-primary">
                <?php
                $data['product'] = action_product();
                $data['tran'] = action_tran();
                $data['news'] = action_news();
                $data['contact'] = action_contact();
                $data['affiliate'] = action_affiliate();
                $data['ads'] = action_ads();
                $data['theme'] = action_theme();
                $data['admin'] = action_admin();
                $data['setting'] = action_setting();
                $this->load->view("admin/tpl/sidebar", $data);
                ?>
            </aside>
            <!-- End: Sidebar -->
            <!-- Start: Content-Wrapper -->
			<section id="content_wrapper">
				<?php $this->load->view("admin/tpl/$manage"); ?>
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