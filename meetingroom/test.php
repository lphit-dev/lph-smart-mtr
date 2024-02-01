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
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            รูปแบบการจัดโต๊ะ
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="image-container" style="text-align: center;">
                                                <div>
                                                    <img src="img/table/table_U.jpg" alt="table_U">
                                                    <div class="text-under-image">แบบโต๊ะตัว U</div>
                                                </div>
                                                <div>
                                                    <img src="img/table/table_study.jpg" alt="table_study">
                                                    <div class="text-under-image">แบบห้องเรียน</div>
                                                </div>
                                                <div>
                                                    <img src="img/table/table_group.jpg" alt="table_group" width="544px;">
                                                    <div class="text-under-image">แบบกลุ่ม</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            อุปกรณ์ที่มีให้ใช้
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="image-container" style="text-align: center;">
                                                <div>
                                                    <img src="img/device/microphone.jpg" alt="table_U" width="450" height="450">
                                                    <div class="text-under-image">ไมค์อนุกรม</div>
                                                    <div class="text-under-image">
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="img/device/เครื่องฉายภาพ.png" alt="table_study" alt="table_U" width="450" height="450">
                                                    <div class="text-under-image">เครื่องฉายภาพ</div>
                                                    <div class="text-under-image">
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="img/device/ไมค์โครโฟนไร้สาย.jpg" alt="table_study" alt="table_U" width="450" height="450">
                                                    <div class="text-under-image">ไมค์โครโฟนไร้สาย</div>
                                                    <div class="text-under-image">
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="img/device/โน้ตบุ๊ค.jpg" alt="table_study" alt="table_U" width="450" height="450">
                                                    <div class="text-under-image">โน้ตบุ๊ค</div>
                                                    <div class="text-under-image">
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
            </div>
        </div>

</body>

</html>