<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <script src="../asset/js/popper.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
    <link href="meetingroomdetail.css" rel="stylesheet">
    <title>Meeting Room Booking System</title>
</head>

<?php include 'headeruser.php'; ?>
<style>
    .header {
        text-align: center;
    }
</style>

<body>
    <div>
        <div class="container">
            <div class="header">
                <h3 class="h3">ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์</h3>
            </div>
            <div class="row">
                <div class="container-fluid col-sm-4">
                    <div>
                        <img class="img" src="../img/Room/ห้องประชุม.png" alt="Room_image" width="350" height="500">
                    </div>
                </div>
                <div class="container-fluid col-sm-8">
                    <div border="0">
                        <div class="row">
                            <div class="col col-sm-2">
                                <label class="space">ชื่อห้องประชุม</label>
                            </div>
                            <div class="col col-sm-10">
                                <input class="text-space-room" type="text" name="RoomName">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-sm-2">
                                <label class="space">สถานที่ตั้ง</label>
                            </div>
                            <div class="col col-sm-10">
                                <label class="text-space-room">ตึกนวมินราชประชาภักดิ์ (ชั้น 6)</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-sm-2">
                                <label class="space-detal">รายละเอียดห้องประชุม</label>
                            </div>
                            <div class="col col-sm-10">
                                <textarea class="text-space1" id="Description" name="Description" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="space">รูปแบบการจัดโต๊ะ</label>
                        <input class="" type="checkbox" id="PatternName" name="PatternName" checked="">
                        <label class="space">แบบห้องเรียน</label>
                        <input class="" type="checkbox" id="PatternName" name="PatternName" checked="">
                        <label class="space">แบบตัว U (แบบประชุม)</label>
                        <input class="" type="checkbox" id="PatternName" name="PatternName" checked="">
                        <label class="space">แบบตัวกลุ่ม</label>
                        <input class="" type="checkbox" id="PatternName" name="PatternName" checked="">
                        <label class="space">รูปแบบอื่น ๆ ให้แจ้งงานเคหะบริการ</label>
                    </div>
                    <div>
                        <label class="space">ขั้นต่ำจำนวนผู้เข้าร่วมประชุม</label>
                        <input class="space1" type="text" value="">
                        <label class="space">ท่าน</label>
                        <label class="space">จำนวนผู้เข้าร่วมประชุมไม่เกิน</label>
                        <input class="space1" type="text" value="">
                        <label class="space">ท่าน</label>
                    </div>
                    <div>
                        <label class=" space">อุปกรณ์ที่มีให้ใช้</label>
                        <input class="" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                        <label class="space">ไมค์อนุกรม โต๊ะตัว U เท่านั้น</label>
                        <input class="" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                        <label class="space">ไมโครโฟนไร้สาย</label>
                        <input class="" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                        <label class="space">เครื่องฉายภาพ</label>
                    </div>
                    <div class="row">
                        <div class="col col-sm-2">
                            <label class="space">สถานะ</label>
                        </div>
                        <div class="col col-sm-2">
                            <select class="text-space" id="UserStatusID" name="UserStatusID">
                                <option>พร้อมใช้งาน</option>
                                <option>ไม่พร้อมใช้งาน</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>