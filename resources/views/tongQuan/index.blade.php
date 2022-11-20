@extends('index')
@section('content')

<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Tổng số giáo viên</h4>
                        <h3>13,500</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Tổng số lớp đang dạy</h4>
                        <h3>13,500</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users" ></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Lớp nghỉ</h4>
                        <h3>1,250</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Lớp dạy bù</h4>
                        <h3>1,500</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="market-updates">
            <div class="col-md-12 agile-last-left agile-last-middle">
                <div class="agile-last-grid">
                    <div class="area-grids-heading">
                        <h3> Doanh thu</h3>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Từ ngày</label>
                        <input type="datetime-local"  id="birthdaytime" name="birthdaytime">
                        <label for="exampleInputEmail1">Đến ngày</label>
                        <input type="datetime-local"  id="birthdaytime" name="birthdaytime">
                    </div>
                    <div id="graph8"></div>
                    <script>
                        /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
                        var day_data = [
                            {"period": "2016-10-01", "licensed": 3407, "sorned": 660},
                            {"period": "2016-09-30", "licensed": 3351, "sorned": 629},
                            {"period": "2016-09-29", "licensed": 3269, "sorned": 618},
                            {"period": "2016-09-20", "licensed": 3246, "sorned": 661},
                            {"period": "2016-09-19", "licensed": 3257, "sorned": 667},
                            {"period": "2016-09-18", "licensed": 3248, "sorned": 627},
                            {"period": "2016-09-17", "licensed": 3171, "sorned": 660},
                            {"period": "2016-09-16", "licensed": 3171, "sorned": 676},
                            {"period": "2016-09-15", "licensed": 3201, "sorned": 656},
                            {"period": "2016-09-10", "licensed": 3215, "sorned": 622}
                        ];
                        Morris.Bar({
                            element: 'graph8',
                            data: day_data,
                            xkey: 'period',
                            ykeys: ['licensed', 'sorned'],
                            labels: ['Licensed', 'SORN'],
                            xLabelAngle: 60
                        });
                    </script>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="clearfix"> </div>
        </div>


        <div class="col-md-12 w3agile-notifications">
            <div class="notifications">
                <!--notification start-->
                <header class="panel-heading">
                    Thông báo
                </header>
                <div class="notify-w3ls">
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                <li class="pull-right notification-time">1 min ago</li>
                            </ul>
                            <p>
                                Urgent meeting for next proposal
                            </p>
                        </div>
                    </div>
                </div>
                <!--notification end-->
            </div>
        </div>
        <div class="clearfix"> </div>
        </div>
        </br>

        <div class="col-md-12 w3agile-notifications">
            <div class="notifications">
                <!--notification start-->
                <header class="panel-heading">
                    Danh sách học sinh đóng tiền trong ngày
                </header>
                <div class="notify-w3ls">
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                <li class="pull-right notification-time">1 min ago</li>
                            </ul>
                            <p>
                                Urgent meeting for next proposal
                            </p>
                        </div>
                    </div>
                </div>
                <!--notification end-->
            </div>
        </div>
        <div class="clearfix"> </div>
    </section>
@endsection
