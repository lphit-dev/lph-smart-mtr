<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <script src="../asset/js/popper.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
    <link href="bookingdetailreport.css" rel="stylesheet">
    <title>Meeting Room Booking System</title>

    <link rel="stylesheet" href="../asset/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.min.css" />

</head>
<?php include 'headeradmin.php'; ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mt-lg-3">
                <h3 class="h3">รายงานสถิติการใช้ห้องประชุม</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mt-lg-3">
                <div>
                    <label class="search">ค้นหา</label>
                    <input class="text-search" type="text">
                    <button type="submit" class="btn btn-block btn-success " id="btnSearch"><i class="fas fa-search"> </i> ค้นหา </button>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <div class="row">

                <div class="col-md-4  col-sm-6 col-lg-3 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info1"><i class="fa fa-calendar-check"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">การจองทั้งหมด</span>
                            <span class="info-box-number">147 </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-md-4  col-sm-6  col-lg-3  col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info2"> <i class="fa fa-clock"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">รออนุมัติใช้งาน</span>
                            <span class="info-box-number"> 1 </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-md-4  col-sm-6 col-lg-3  col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info3"><i class="fa fa-check"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">อนุมัติใช้งาน</span>
                            <span class="info-box-number"> 130 </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-md-4 col-sm-6 col-lg-3  col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info4"><i class="fa-regular fa-rectangle-xmark"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">ยกเลิกใช้งาน</span>
                            <span class="info-box-number"> 16 </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <div class="card-header">
            <h5 class="card-title m-0"><b>ตารางสถิติการให้บริการจองห้องประชุม</b></h5>
            <div class="card-body">
                <hr>
                <div class="table-responsive">
                    <div class="table-responsive mt-lg-2">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-striped table-bordered display no-wrap dataTable no-footer dtr-inline" style="width:100%" aria-describedby="example2_info">
                                        <tbody>
                                            <tr class="table-mean">
                                                <th class="text-number">ลำดับ</th>
                                                <th class="text-room" >ชื่อห้องประชุม</th>
                                                <th class="text-date">วันที่</th>
                                                <th class="text-date">เวลา</th>
                                                <th class="text-matter">เรื่อง</th>
                                                <th class="status">ผู้จอง</th>
                                            </tr>
                                            <tr class="table-mean">
                                                <td>1</td>
                                                <td>ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์</td>
                                                <td>2566-12-22</td>
                                                <td>15.00 - 16.00</td>
                                                <td>ขอเบิกงบโครงการจิตอาสาพัฒนาชุมชนบ้านหนองหัวงอก</td>
                                                <td>แอดมินเอง</td>
                                            </tr>
                                            <tr class="table-mean">
                                                <td>2</td>
                                                <td>ห้องประชุมเล็ก 2</td>
                                                <td>2566-12-22</td>
                                                <td>15.00 - 16.00</td>
                                                <td>ขอเบิกงบ</td>
                                                <td>แอดมินเอง</td>

                                            </tr>
                                            <tr class="table-mean">
                                                <td>3</td>
                                                <td>ห้องประชุมเล็ก 2</td>
                                                <td>2566-12-22</td>
                                                <td>15.00 - 16.00</td>
                                                <td>ขอเบิกงบ</td>
                                                <td>แอดมินเอง</td>

                                            </tr>
                                            <tr class="table-mean">
                                                <td>4</td>
                                                <td>ห้องประชุมเล็ก 2</td>
                                                <td>2566-12-22</td>
                                                <td>15.00 - 16.00</td>
                                                <td>ขอเบิกงบ</td>
                                                <td>แอดมินเอง</td>

                                            </tr>
                                            <tr class="table-mean">
                                                <td>5</td>
                                                <td>ห้องประชุมเล็ก 2</td>
                                                <td>2566-12-22</td>
                                                <td>15.00 - 16.00</td>
                                                <td>ขอเบิกงบ</td>
                                                <td>แอดมินเอง</td>

                                            </tr>
                                            <tr class="table-mean">
                                                <td>6</td>
                                                <td>ห้องประชุมเล็ก 2</td>
                                                <td>2566-12-22</td>
                                                <td>15.00 - 16.00</td>
                                                <td>ขอเบิกงบ</td>
                                                <td>แอดมินเอง</td>

                                            </tr>
                                            <tr class="table-mean">
                                                <td>7</td>
                                                <td>ห้องประชุมเล็ก 2</td>
                                                <td>2566-12-22</td>
                                                <td>15.00 - 16.00</td>
                                                <td>ขอเบิกงบ</td>
                                                <td>แอดมินเอง</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">แสดงรายการ 1 ถึง 10 จาก 147 รายการ</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">ก่อนหน้า</a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item disabled" id="example2_ellipsis"><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">…</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">15</a></li>
                                            <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="8" tabindex="0" class="page-link">ต่อไป</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.end table-responsive-->
            </div>
        </div>
</body>

</html>