<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <script src="../asset/js/popper.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
    <script src="../asset/vue2/vue.js"></script>
    <link rel="stylesheet" href="../asset/date/flatpickr.min.css">
  <script src="../asset/date/flatpickr.js"></script>
    <link href="bookingdetailpassmanager.css" rel="stylesheet">
    <title>Meeting Room Booking System</title>

    <link rel="stylesheet" href="../asset/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.min.css" />
    
</head>
<?php include 'headeradmin.php'; ?>

<body>
    <div class="container" id="app">
        <div>
            <h3 class="h3">ข้อมูลการจองห้องประชุมที่ยืนยันแล้ว</h3>
        </div>
        <div>
            <div class="row">
                <div class="container-fluid col-sm-2">
                    <p>แสดง 2 รายการ </p>
                </div>
                <div class="container-fluid col-sm-10">
                    <div class="text-right">
                        <label class="search">ค้นหา</label>
                        <input class="text-search" type="text">
                    </div>
                </div>
            </div>
            <div>
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
                            <tr class="table-mean" v-for="item in list">
                                <td>{{item.id}}</td>
                                <td>{{item.RoomName}}</td>
                                <td>{{item.date}}</td>
                                <td>{{item.time}}</td>
                                <td>{{item.title}}</td>
                                <td>{{item.creBy}}</td>
                                <td class="text-status1">{{item.level}}</td>
                                <td class="manage1">{{item.status}}</td>
                                <td>
                                    <!-- ปุ่มเปิด Modal 1 -->
                                    <button type="button" class="btn-manage btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
                                        จัดการ
                                    </button>
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
            <div>
                <!-- Modal 1 -->
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <!-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Modal 1</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div> -->
                            <div class="modal-body">
                                <?php include_once "bookingdetail_passmanager.php";  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var myModal1 = new bootstrap.Modal(document.getElementById('myModal1'));

        var app = new Vue({
            el: '#app',
            data: {
                title: 'Hello Vue!',
                list: [{
                    id: 1,
                    RoomName: 'ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์',
                    date: '2566-12-20',
                    time: '15.00 - 16.00',
                    title: 'ขอเบิกงบ',
                    creBy: 'แอดมินเอง',
                    level: 'เร่งด่วน',
                    status: 'อนุมัติ'

                }, {
                    id: 2,
                    RoomName: 'ห้องประชุมเล็ก 2',
                    date: '2566-12-20',
                    time: '15.00 - 16.00',
                    title: 'ขอเบิกงบ',
                    creBy: 'แอดมินเอง',
                    level: 'ปกติ',
                    status: 'อนุมัติ'
                }, ],
            }
        })
        flatpickr("#datetimepicker", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    // ตัวเลือกเพิ่มเติมตามความต้องการ
  });
    </script>
</body>

</html>