<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <link href="meetingroomdetail.css" rel="stylesheet">
  <title>Meeting Room Booking System</title>
</head>

<?php include 'headerindex.php'; ?>
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
                        <img src="img/Room/ห้องประชุม.png" alt="Room_image" width="350" height="500">
                    </div>
                </div>
                <div class="container-fluid col-sm-8">
                    <form action="#" method="post" enctype="multipart/form-data" id="bookingdetailform">
                        <div>
                            <div>
                                <label class="space">ชื่อห้องประชุม</label>
                                <input class="text-space" type="text" name="RoomName">
                            </div>
                            <div>
                                <label class="space">สถานที่ตั้ง</label>
                                <label class="text-space">ตึกนวมินราชประชาภักดิ์ (ชั้น 6)</label>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="container-fluid col-sm-3">
                                        <label class="space">รายละเอียดห้องประชุม</label>
                                    </div>
                                    <div class="container-fluid col-sm-9">
                                        <textarea class="text-space" id="Description" name="Description" rows="4" cols="50"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="space">รูปแบบการจัดโต๊ะ</label>
                                <input class="text-space" type="checkbox" id="PatternName" name="PatternName" checked="">
                                <label class="space">แบบห้องเรียน</label>
                                <input class="text-space" type="checkbox" id="PatternName" name="PatternName" checked="">
                                <label class="space">แบบตัว U (แบบประชุม)</label>
                                <input class="text-space" type="checkbox" id="PatternName" name="PatternName" checked="">
                                <label class="space">แบบตัวกลุ่ม</label>
                                <input class="text-space" type="checkbox" id="PatternName" name="PatternName" checked="">
                                <label class="space">รูปแบบอื่น ๆ ให้แจ้งงานเคหะบริการ</label>
                            </div>
                            <div>
                                <label class="space">ขั้นต่ำจำนวนผู้เข้าร่วมประชุม</label>
                                <label class="space">10</label>
                                <label class="space"">ท่าน</label>
                                <label class=" space">จำนวนผู้เข้าร่วมประชุมไม่เกิน</label>
                                <label class="space">40</label>
                                <label class="space"">ท่าน</label>
                            </div>
                            <div>
                                <label class=" space">อุปกรณ์ที่มีให้ใช้</label>
                                <input class="text-space" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                                <label class="space">ไมค์อนุกรม โต๊ะตัว U เท่านั้น</label>
                                <input class="text-space" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                                <label class="space">ไมโครโฟนไร้สาย</label>
                                <input class="text-space" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                                <label class="space">เครื่องฉายภาพ</label>
                            </div>
                            <div>
                                <label class="space">สถานะ</label>
                                <select class="text-space" id="UserStatusID" name="UserStatusID">
                                    <option>พร้อมใช้งาน</option>
                                    <option>ไม่พร้อมใช้งาน</option>
                                </select>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>