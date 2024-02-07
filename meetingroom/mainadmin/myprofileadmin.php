<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <script src="../asset/js/popper.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
    <link href="myprofileadmin.css" rel="stylesheet">
    <title>Meeting Room Booking System</title>
</head>
<style>
    .header {
        text-align: center;
    }
</style>
<?php include 'headeradmin.php'; ?>

<body>
    <div>
        <div class="container">
            <div class="header">
                <h3 class="h3">แก้ไขโปรไฟล์ของฉัน</h3>
            </div>
            <div border="0">
                <div class="row mb-lg-2">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2 text-end">
                        <label>ชื่อเข้าใช้ระบบ</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="text-space5" type="text" name="Username">
                    </div>
                    <div class="col-sm-2 text-end space">
                        <label>รหัสผ่านเข้าใช้ระบบ</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="text-space5" type="password" name="Password">
                    </div>
                    <div class="col-sm-2"></div>
                </div>

                <div class="row mb-lg-2">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2 text-end">
                        <label>คำนำหน้า</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="text-space5" type="text" name="PrefixName">
                    </div>
                </div>

                <div class="row mb-lg-2">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2 text-end">
                        <label>ชื่อ</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="text-space5" type="text" name="FirstName">
                    </div>
                    <div class="col-sm-2 text-end space">
                        <label>นามสกุล</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="text-space5" type="text" name="LastName">
                    </div>
                </div>

                <div class="row mb-lg-2">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2 text-end">
                        <label>ตำแหน่ง</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="text-space5" type="text" name="Position">
                    </div>
                    <div class="col-sm-2 text-end space">
                        <label>หน่วยงาน/หอผู้ป่วย</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="text-space5" type="text" name="Department">
                    </div>
                </div>

                <div class="row mb-lg-2">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2 text-end">
                        <label>เบอร์โทรภายใน</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="text-space5" type="text" name="InternalPhoneNumber">
                    </div>
                    <div class="col-sm-2 text-end space">
                        <label>เบอร์มือถือ</label>
                    </div>
                    <div class="col-sm-2">
                        <input class="text-space5" type="text" name="SelfPhoneNumber">
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <div style="text-align: center;">
        <button class="modal-coming btn-lg px-3 btn-primary" type="submit" form="bookingdetailform" value="Submit">บันทึกข้อมูล</button>
        <button class="modal-back btn-lg px-3 btn-primary" type="submit" form="bookingdetailform" value="Submit">ย้อนกลับ</button>
    </div>
    </div>
    </div>

</body>

</html>