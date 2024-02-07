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
                <div class="col-sm-4">
                    <div class="w-100">
                        <img class="w-100" src="img/Room/ห้องประชุม.png" alt="Room_image">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div border="0">
                        <div class="row">
                            <div class="col col-sm-2 m-auto">
                                <label>ชื่อห้องประชุม</label>
                            </div>
                            <div class="col col-sm-10 m-auto">
                                <p>ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-sm-2 m-auto">
                                <label>สถานที่ตั้ง</label>
                            </div>
                            <div class="col col-sm-10 m-auto">
                                <p>ตึกนวมินราชประชาภักดิ์ (ชั้น 6)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-sm-2">
                                <label class="space-detal">รายละเอียด</label>
                            </div>
                            <div class="col col-sm-10">
                                <p>1.บันทึกวีดีโอพร้อมเสียง<br>
                                    2.ระบบถ่ายทอดสดออนไลน์<br>
                                    - ออนไลน์แบบโต้ตอบกัน<br>
                                    - ฟังออนไลน์แบบไม่โต้ตอบ
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label class="space">ขั้นต่ำจำนวนผู้เข้าร่วมประชุม</label>
                            <span>40</span>
                            <label class="space">ท่าน</label>
                            <label class="space">จำนวนผู้เข้าร่วมประชุมไม่เกิน</label>
                            <span>60</span>
                            <label class="space">ท่าน</label>
                        </div>
                        <div class="row">
                            <div class="col col-sm-2">
                                <label class="space">สถานะ</label>
                            </div>
                            <div class="col col-sm-2">
                                <p>พร้อมใช้งาน</p>
                            </div>
                        </div>
                        <div>
                            <p>รูปแบบการจัดโต๊ะ</p>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="img/table/table_U.jpg" class="card-img-top" alt="table_U">
                                    <div class="card-body">
                                        <p class="card-text">แบบโต๊ะตัว U</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="img/table/table_study.jpg" class="card-img-top" alt="table_study">
                                    <div class="card-body">
                                        <p class="card-text">แบบห้องเรียน</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="img/table/table_group.jpg" class="card-img-top" alt="table_group">
                                    <div class="card-body">
                                        <p class="card-text">แบบกลุ่ม</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>รูปแบบอื่น ๆ ให้แจ้งงานเคหะบริการ</p>
                        </div>
                        <div>
                            <p>อุปกรณ์ที่มีให้ใช้</p>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="img/device/microphone.jpg" class="card-img-top" alt="microphone">
                                    <div class="card-body">
                                        <p class="card-text">ไมค์อนุกรม</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="img/device/เครื่องฉายภาพ.png" class="card-img-top" alt="projector">
                                    <div class="card-body">
                                        <p class="card-text">เครื่องฉายภาพ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="img/device/ไมค์โครโฟนไร้สาย.jpg" class="card-img-top" alt="wireless_microphone">
                                    <div class="card-body">
                                        <p class="card-text">ไมค์โครโฟนไร้สาย</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="img/device/โน้ตบุ๊ค.jpg" class="card-img-top" alt="โน้ตบุ๊ค">
                                        <div class="card-body">
                                            <p class="card-text">โน้ตบุ้ค</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>