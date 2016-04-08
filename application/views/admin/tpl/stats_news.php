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
                <a href="http://demothu.web5s.com.vn/admin/tran.html">Đơn hàng</a>
            </li>
            <li class="current">
                <a href="">Báo cáo doanh thu</a>
            </li>
        </ol>        </div>
    <div class="topbar-right">
        <a class="btn btn-success fw600 pull-right br3 pv5 hidden-xs" href="http://demothu.web5s.com.vn/admin/stats.html">
            <i class="fa fa-align-justify mr5"></i> Thống kê                </a>
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

<!-- Page data -->
<script type="text/javascript">
    // Define chart color patterns
    var highColors = [bgWarning, bgPrimary, bgInfo, bgAlert, bgDanger, bgSuccess, bgSystem, bgDark];

    $(function () {
        $('#high-line3').highcharts({
            chart: {
                type: 'area',
                spacingBottom: 30
            },
            title: {
                text: ''
            },
            subtitle: {
                text: 'Doanh số bán hàng tháng 04-2016',
                floating: true,
                align: 'right',
                verticalAlign: 'bottom',
                y: 15
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                verticalAlign: 'top',
                x: 150,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
            },
            xAxis: {
                categories: ['1/04', '2/04', '3/04', '4/04', '5/04', '6/04', '7/04']
            },
            yAxis: {
                title: {
                    text: 'Triệu ₫'
                },
                labels: {
                    formatter: function () {
                        return this.value;
                    }
                }
            },
            tooltip: {
                formatter: function () {
                    return this.x + ': ' + this.y;
                }
            },
            plotOptions: {
                area: {
                    fillOpacity: 0.5
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                    name: 'Tổng số',
                    data: [0, 0, 0, 0.1, 1.1, 0.2, 0.7]
                },
                {
                    name: 'Đã thanh toán',
                    data: [0, 0, 0, 0.1, 0.7, 0, 0.1]
                }]
        });
    });

    // Pie Charts
    var HighCharts = function () {
        var runHighPies = function () {

            var pie1 = $('#high-pie');

            if (pie1.length) {

                // Pie Chart1
                $('#high-pie').highcharts({
                    credits: false,
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: null
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            center: ['30%', '50%'],
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true
                        }
                    },
                    colors: highColors,
                    legend: {
                        x: 90,
                        floating: true,
                        verticalAlign: "middle",
                        layout: "vertical",
                        itemMarginTop: 10
                    },
                    series: [{
                            type: 'pie',
                            name: 'Tỉ lệ',
                            data: []
                        }]
                });
            }
        }

        // End High Pie Charts Demo
        return {
            init: function () {
                runHighPies();
            }
        };
    }();


</script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        HighCharts.init();
    });
</script>
<!-- End: Page Script -->

<section id="content">    
    <!-- Area Chart -->
    <div class="panel" id="pchart8">
        <div class="panel-heading">
            <span class="panel-title text-info fw700 pn"><i class="fa fa-fw"></i> Doanh thu tháng</span>
        </div>
        <div class="panel-body mt10 pn">
            <div id="high-line3" style="width: 100%; height: 210px; margin: 0 auto"></div>
        </div>
    </div>

    <div class="row mt10">
        <div class="col-md-6 col-lg-5 admin-grid">
            <!-- Order stats -->
            <div class="panel" id="p5">
                <div class="panel-heading">
                    <span class="panel-title pn fw700"><i class="fa fa-fw"></i> Tổng số</span>
                </div>
                <div class="panel-body pn">
                    <table class="table mbn tc-med-1 tc-bold-last">
                        <tbody>
                            <tr>
                                <td>
                                    <span class="fa fa-circle text-warning fs14 mr10"></span> Đơn hàng                                    </td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fa fa-circle text-primary fs14 mr10"></span>Khách hàng                                    </td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fa fa-circle text-info fs14 mr10"></span>Tiền giao dịch                                    </td>
                                <td>0₫</td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fa fa-circle text-alert fs14 mr10"></span>Doanh thu thực                                    </td>
                                <td>0₫</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="panel" id="p10">
                <div class="panel-heading">
                    <span class="panel-title fw700"><i class="fa fa-fw"></i> Tỉ lệ tương tác</span>
                </div>
                <div class="panel-body pn">
                    <div id="high-pie" style="width: 100%; height: 200px; margin: 0 auto"></div>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-lg-7 admin-grid">
            <div class="panel mobile-controls" id="p16">
                <div class="panel-heading ui-sortable-handle">
                    <span class="panel-title pn fw700"><i class="fa fa-fw"></i> Doanh thu theo khu vực</span>
                </div>
                <div class="panel-body pn">
                    <table class="table mbn tc-med-1 tc-bold-last">
                        <thead>
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-right">Doanh thu</th>
                                <th class="text-right">Tỉ lệ</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal_click_content"></div>
    </div>
</div>