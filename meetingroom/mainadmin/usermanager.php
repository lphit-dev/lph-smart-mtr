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
    <link href="usermanager.css" rel="stylesheet">

    <link rel="stylesheet" href="../asset/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.min.css" />
    <script src="../node_modules/jquery/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <title>Meeting Room Booking System</title>
</head>
<?php include 'headeradmin.php'; ?>

<body>
    <div class="container" id="app">
        <div class="row">
            <div class="col col-sm-6">
                <h3 class="h3">ข้อมูลผู้ใช้งาน</h3>
            </div>
            <div class="col col-sm-6"><br>
                <div class="text-right">
                    <!-- ปุ่มเปิด Modal 1 -->
                    <button type="button" class="btn-add btn-sm" data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                        เพิ่มผู้ใช้งาน
                    </button>
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col col-sm-2">
                    <p class="show">แสดง 532 รายการ </p>
                </div><br>
                <div class="col col-sm-10">
                    <div class="text-right">
                        <label class="search">ค้นหา</label>
                        <input class="text-search" type="text">
                    </div>
                </div>
            </div>
            <div>
                <div class="table-line">
                    <table class="table-bordered" style="width:100%; ">
                        <tbody>
                            <tr class="table-mean">
                                <th>ลำดับ</th>
                                <th>ชื่อเข้าใช้ระบบ</th>
                                <th>ประเภทผู้ใช้</th>
                                <th>คำนำหน้า</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>ไม่มาตามที่จอง</th>
                                <th>หน่วยงาน/หอผู้ป่วย</th>
                                <th>สถานะ</th>
                                <th>จัดการ</th>
                            </tr>
                            <tr class="table-mean" v-for="item in list">
                                <td>{{item.id}}</td>
                                <td>{{item.Username}}</td>
                                <td>{{item.Typename}}</td>
                                <td>{{item.PrefixName}}</td>
                                <td>{{item.FirstName}}</td>
                                <td>{{item.LastName}}</td>
                                <td>{{item.eventofdefault}}</td>
                                <td>{{item.Department}}</td>
                                <td>{{item.StatusName}}</td>
                                <td>
                                    <!-- ปุ่มเปิด Modal 2 -->
                                    <button type="button" class="btn-edit btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
                                        แก้ไข
                                    </button>
                                    <a class="delete btn-delete btn-danger btn-sm" href="#" @click="btnDelete(item.id)">ลบ</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div><br>
                        <div class="row">
                            <div class="col col-sm-6">
                                <p>แสดง 1 ถึง 10 จาก 14 แถว</p>
                            </div>
                            <div class="col col-sm-6">
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
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <!-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Modal 1</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div> -->
                            <div class="modal-body">
                                <?php include_once "userinsert.php";  ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <!-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Modal 2</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div> -->
                            <div class="modal-body">
                                <?php include_once "useredit.php";  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var myModal1 = new bootstrap.Modal(document.getElementById('myModal1'));
        var myModal2 = new bootstrap.Modal(document.getElementById('myModal2'));

        var app = new Vue({
            el: '#app',
            data: {
                title: 'Hello Vue!',
                list: [{
                    id: 1,
                    Username: 'Admin',
                    Typename: 'ผู้ดูแลระบบหลัก',
                    PrefixName: 'นาย',
                    FirstName: 'ดาบ',
                    LastName: 'แสงเดือน',
                    eventofdefault: '0',
                    Department: 'ห้องโสตทัศนศึกษา',
                    StatusName: 'ปกติ'
                }, {
                    id: 2,
                    Username: 'Doctor',
                    Typename: 'ผู้ใช้งานระบบ',
                    PrefixName: 'นาง',
                    FirstName: 'วารี',
                    LastName: 'แสงจันทร์',
                    eventofdefault: '0',
                    Department: 'อายุรกรรม',
                    StatusName: 'แบล็คลิสต์'
                }, ],
            }
        })

        function btnDelete(id) {
            return Swal.fire({
                title: "กรุณายืนยันการลบข้อมูล" + id + " ?",
                text: "เมื่อลบข้อมูลจะหายไป !",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "ใช่, ลบข้อมูล!",
                cancelButtonText: "ยกเลิก",
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "ลบสำเร็จแล้ว !",
                        text: "คุณได้ลบข้อมูลสำเร็จ.",
                        icon: "success",
                    })
                    //location.href = self.attr('href';
                }
            });
        }

        $('.delete').on('click', function(e) {
            e.preventDefault();
            var self = $(this);
            console.log(self.data('title'));
            Swal.fire({
                title: "กรุณายืนยันการลบข้อมูล ?",
                text: "เมื่อลบข้อมูลจะหายไป !",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "ใช่, ลบข้อมูล!",
                cancelButtonText: "ยกเลิก",
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "ลบสำเร็จแล้ว !",
                        text: "คุณได้ลบข้อมูลสำเร็จ.",
                        icon: "success",
                    })
                    //location.href = self.attr('href';
                }
            });
        })
    </script>
</body>

</html>