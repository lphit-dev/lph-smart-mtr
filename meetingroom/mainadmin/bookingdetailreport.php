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
</head>
<?php include 'headeradmin.php'; ?>
<body>
    <div class="container">
        <div class="row">
            <div class="container-fluid col-sm-6">
                <h3 class="h3">รายงานสถิติการใช้ห้องประชุม</h3>
            </div>
            <div class="container-fluid col-sm-6"><br>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="container-fluid col-sm-2">
                    <p class="show">แสดง 532 รายการ </p>
                </div>
                <div class="container-fluid col-sm-5">
                </div>
                <div class="container-fluid col-sm-5">
                    <div class="text-right">
                        <label class="search">ค้นหา</label>
                        <input class="text-search" type="text">
                    </div>
                </div>
            </div>
            <div class="table-line">
                <table class="table-bordered" style="width:100%;">
                    <tbody>
                        <tr class="table-mean">
                            <th class="text-number">ลำดับ</th>
                            <th>ชื่อห้องประชุม</th>
                            <th class="text-date">วันที่</th>
                            <th class="text-date">เวลา</th>
                            <th>เรื่อง</th>
                            <th class="status">ผู้จอง</th>
                            <th class="text-urgent">ระดับความด่วน</th>
                            <th class="status">สถานะ</th>
                            <th class="text-manage">จัดการ</th>
                        </tr>
                        <tr class="table-mean">
                            <td>1</td>
                            <td>ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์</td>
                            <td>2566-12-22</td>
                            <td>15.00 - 16.00</td>
                            <td>ขอเบิกงบโครงการจิตอาสาพัฒนาชุมชนบ้านหนองหัวงอก</td>
                            <td>แอดมินเอง</td>
                            <td class="text-status1">เร่งด่วน</td>
                            <td class="manage1">รออนุมัติ</td>
                            <td>
                                    <a href="bookingdetail.php" class="btn-manage btn-success btn-sm" role="button">จัดการ</a>    
                                    <a href="bookingdetailedit.php" class="btn-edit btn-success btn-sm" role="button">แก้ไข</a>
                                    <a href="adminprocess.php" class="btn-delete btn-danger btn-sm" onclick="return confirm('กรุณายืนยันการลบข้อมูล ?')" role="button">ลบ</a>
                            </td>
                        </tr>
                        <tr class="table-mean">
                            <td>2</td>
                            <td>ห้องประชุมเล็ก 2</td>
                            <td>2566-12-22</td>
                            <td>15.00 - 16.00</td>
                            <td>ขอเบิกงบ</td>
                            <td>แอดมินเอง</td>
                            <td class="text-status2">ปกติ</td>
                            <td class="manage2">อนุมัติ</td>
                            <td>
                                    <a href="bookingdetail.php" class="btn-manage btn-success btn-sm" role="button">จัดการ</a>    
                                    <a href="bookingdetailedit.php" class="btn-edit btn-success btn-sm" role="button">แก้ไข</a>
                                    <a href="adminprocess.php" class="btn-delete btn-danger btn-sm" onclick="return confirm('กรุณายืนยันการลบข้อมูล ?')" role="button">ลบ</a>
                            </td>
                        </tr>
                        <tr class="table-mean">
                            <td>3</td>
                            <td>ห้องประชุมเล็ก 2</td>
                            <td>2566-12-22</td>
                            <td>15.00 - 16.00</td>
                            <td>ขอเบิกงบ</td>
                            <td>แอดมินเอง</td>
                            <td class="text-status1">เร่งด่วน</td>
                            <td class="manage2">อนุมัติ</td>
                            <td>
                                    <a href="bookingdetail.php" class="btn-manage btn-success btn-sm" role="button">จัดการ</a>    
                                    <a href="bookingdetailedit.php" class="btn-edit btn-success btn-sm" role="button">แก้ไข</a>
                                    <a href="adminprocess.php" class="btn-delete btn-danger btn-sm" onclick="return confirm('กรุณายืนยันการลบข้อมูล ?')" role="button">ลบ</a>        
                            </td>
                        </tr>
                        <tr class="table-mean">
                            <td>4</td>
                            <td>ห้องประชุมเล็ก 2</td>
                            <td>2566-12-22</td>
                            <td>15.00 - 16.00</td>
                            <td>ขอเบิกงบ</td>
                            <td>แอดมินเอง</td>
                            <td class="text-status1">เร่งด่วน</td>
                            <td class="manage1">รออนุมัติ</td>
                            <td>
                                    <a href="bookingdetail.php" class="btn-manage btn-success btn-sm" role="button">จัดการ</a>    
                                    <a href="bookingdetailedit.php" class="btn-edit btn-success btn-sm" role="button">แก้ไข</a>
                                    <a href="adminprocess.php" class="btn-delete btn-danger btn-sm" onclick="return confirm('กรุณายืนยันการลบข้อมูล ?')" role="button">ลบ</a>        
                            </td>
                        </tr>
                        <tr class="table-mean">
                            <td>5</td>
                            <td>ห้องประชุมเล็ก 2</td>
                            <td>2566-12-22</td>
                            <td>15.00 - 16.00</td>
                            <td>ขอเบิกงบ</td>
                            <td>แอดมินเอง</td>
                            <td class="text-status2">ปกติ</td>
                            <td class="manage1">รออนุมัติ</td>
                            <td>
                                    <a href="bookingdetail.php" class="btn-manage btn-success btn-sm" role="button">จัดการ</a>    
                                    <a href="bookingdetailedit.php" class="btn-edit btn-success btn-sm" role="button">แก้ไข</a>
                                    <a href="adminprocess.php" class="btn-delete btn-danger btn-sm" onclick="return confirm('กรุณายืนยันการลบข้อมูล ?')" role="button">ลบ</a>        
                            </td>
                        </tr>
                        <tr class="table-mean">
                            <td>6</td>
                            <td>ห้องประชุมเล็ก 2</td>
                            <td>2566-12-22</td>
                            <td>15.00 - 16.00</td>
                            <td>ขอเบิกงบ</td>
                            <td>แอดมินเอง</td>
                            <td class="text-status1">เร่งด่วน</td>
                            <td class="manage1">รออนุมัติ</td>
                            <td>
                                    <a href="bookingdetail.php" class="btn-manage btn-success btn-sm" role="button">จัดการ</a>    
                                    <a href="bookingdetailedit.php" class="btn-edit btn-success btn-sm" role="button">แก้ไข</a>
                                    <a href="adminprocess.php" class="btn-delete btn-danger btn-sm" onclick="return confirm('กรุณายืนยันการลบข้อมูล ?')" role="button">ลบ</a>        
                            </td>
                        </tr>
                        <tr class="table-mean">
                            <td>7</td>
                            <td>ห้องประชุมเล็ก 2</td>
                            <td>2566-12-22</td>
                            <td>15.00 - 16.00</td>
                            <td>ขอเบิกงบ</td>
                            <td>แอดมินเอง</td>
                            <td class="text-status1">เร่งด่วน</td>
                            <td class="manage2">อนุมัติ</td>
                            <td>
                                    <a href="bookingdetail.php" class="btn-manage btn-success btn-sm" role="button">จัดการ</a>    
                                    <a href="bookingdetailedit.php" class="btn-edit btn-success btn-sm" role="button">แก้ไข</a>
                                    <a href="adminprocess.php" class="btn-delete btn-danger btn-sm" onclick="return confirm('กรุณายืนยันการลบข้อมูล ?')" role="button">ลบ</a>        
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                <div><br>
                    <div class="row">
                        <div class="container-fluid col-sm-6">
                            <p>แสดง 1 ถึง 10 จาก 14 แถว</p>
                        </div>
                        <div class="container-fluid col-sm-6">
                            <div class="text-right">
                                <p>ก่อนหน้า ถัดไป</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
