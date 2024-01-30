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
    <link href="usertypemanager.css" rel="stylesheet">
    <title>Meeting Room Booking System</title>
</head>
<?php include 'headeradmin.php'; ?>

<body>
    <div>
        <div class="container" id="app">
            <div class="row">
                <h3 class="h3">ข้อมูลประเภทผู้ใช้งาน</h3>
            </div>
            <div class="row">
                <div class="col col-sm-2">
                    <p>แสดง 3 รายการ </p>
                </div>
                <div class="col col-sm-10">
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
                                <th>รหัสประเภทผู้ใช้งาน</th>
                                <th>ชื่อประเภทผู้ใช้งาน</th>
                                <th>Linetoken</th>
                                <th>จัดการ</th>
                            </tr>
                            <tr class="table-mean" v-for="item in list">
                                <td>{{item.UserTypeID}}</td>
                                <td>{{item.TypeName}}</td>
                                <td>{{item.LineToken}}</td>
                                <td>
                                    <!-- ปุ่มเปิด Modal 1 -->
                                    <button type="button" class="btn-edit btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
                                        แก้ไข
                                    </button>
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
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <!-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Modal 1</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div> -->
                            <div class="modal-body">
                                <?php include_once "usertypeedit.php";  ?>
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
                    UserTypeID: 1,
                    TypeName: 'ผู้ดูแลระบบหลัก',
                    LineToken: '',
                }, {
                    UserTypeID: 1,
                    TypeName: 'ผู้ดูแลระบบรอง',
                    LineToken: '',
                }, {
                    UserTypeID: 3,
                    TypeName: 'ผู้ใช้งานระบบ',
                    LineToken: '',
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