<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <script src="../asset/js/popper.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
    <link href="myprofile.css" rel="stylesheet">
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
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2 col">
                        <label class="space1">ชื่อเข้าใช้ระบบ</label>
                    </div>
                    <div class="col-sm-2 col2">
                        <input class="text-space" type="text" name="Username">
                    </div>
                    <div class="col-sm-2 col1">
                        <label class="space">รหัสผ่านเข้าใช้ระบบ</label>
                    </div>
                    <div class="col-sm-2 col3">
                        <input class="text-space" type="password" name="Password">
                    </div>
                    <div class="col-sm-2"></div>
                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2 col">
                        <label class="space1">คำนำหน้า</label>
                    </div>
                    <div class="col-sm-2 col2">
                        <input class="text-space" type="text" name="PrefixName">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2 col">
                        <label class="space1">ชื่อ</label>
                    </div>
                    <div class="col-sm-2 col2">
                        <input class="text-space" type="text" name="FirstName">
                    </div>
                    <div class="col-sm-2 col1">
                        <label class="space">นามสกุล</label>
                    </div>
                    <div class="col-sm-2 col3">
                        <input class="text-space" type="text" name="LastName">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2 col">
                        <label class="space1">ตำแหน่ง</label>
                    </div>
                    <div class="col-sm-2 col2">
                        <input class="text-space" type="text" name="Position">
                    </div>
                    <div class="col-sm-2 col1">
                        <label class="space">หน่วยงาน/หอผู้ป่วย</label>
                    </div>
                    <div class="col-sm-2 col3">
                        <input class="text-space" type="text" name="Department">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2 col">
                        <label class="space1">เบอร์โทรภายใน</label>
                    </div>
                    <div class="col-sm-2 col2">
                        <input class="text-space" type="text" name="InternalPhoneNumber">
                    </div>
                    <div class="col-sm-2 col1">
                        <label class="space">เบอร์มือถือ</label>
                    </div>
                    <div class="col-sm-2 col3">
                        <input class="text-space" type="text" name="SelfPhoneNumber">
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <div style="text-align: center;">
        <button class="btn-coming btn-lg px-3 btn-primary" type="submit" form="bookingdetailform" value="Submit">บันทึกข้อมูล</button>
        <button class="btn-back btn-lg px-3 btn-primary" type="submit" form="bookingdetailform" value="Submit">ย้อนกลับ</button>
    </div>
    </div>
    </div>

</body>

</html>