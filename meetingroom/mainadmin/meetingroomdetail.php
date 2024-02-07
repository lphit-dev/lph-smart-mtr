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

<?php include 'headeradmin.php'; ?>
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
                    <div class=" w-75">
                        <img class="img w-100" src="../img/Room/ห้องประชุม.png" alt="Room_image">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div border="0">
                        <div class="row m-auto">
                            <div class="col-sm-2 text-end">
                                <label class="kanit">ชื่อห้องประชุม :</label>
                            </div>
                            <div class="col-sm-10">
                                <p class="THSarabun">ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์</p>
                            </div>
                        </div>
                        <div class="row m-auto">
                            <div class="col-sm-2 text-end">
                                <label class="kanit">สถานที่ตั้ง :</label>
                            </div>
                            <div class="col-sm-10">
                                <p class="THSarabun">ตึกนวมินราชประชาภักดิ์ (ชั้น 6)</p>
                            </div>
                        </div>
                        <div class="row m-auto">
                            <div class="col-sm-2 text-end">
                                <label class="kanit">รายละเอียด :</label>
                            </div>
                            <div class="col-sm-10">
                                <p class="THSarabun">1.บันทึกวีดีโอพร้อมเสียง<br>
                                    2.ระบบถ่ายทอดสดออนไลน์<br>
                                    - ออนไลน์แบบโต้ตอบกัน<br>
                                    - ฟังออนไลน์แบบไม่โต้ตอบ
                                </p>
                            </div>
                        </div>

                        <div class="row m-auto">
                            <div class="col-sm-2 text-end">
                                <label class="kanit">สถานะ :</label>
                            </div>
                            <div class="col-sm-2">
                                <p class="THSarabun">พร้อมใช้งาน</p>
                            </div>
                        </div>

                        <div class="row m-auto">
                            <div class="col-sm-3 text-end">
                                <label class="kanit">ขั้นต่ำจำนวนผู้เข้าร่วมประชุม</label>
                            </div>
                            <div class="col-sm-1 text-center">
                                <label class="THSarabun">40</label>
                            </div>
                            <div class="col-sm-1">
                                <label>ท่าน</label>
                            </div>
                            <div class="col-sm-3">
                                <label class="kanit">จำนวนผู้เข้าร่วมประชุมไม่เกิน</label>
                            </div>
                            <div class="col-sm-1 text-center">
                                <label class="THSarabun">150</label>
                            </div>
                            <div class="col-sm-1">
                                <label>ท่าน</label>
                            </div>
                        </div><br>
                        
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
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card">
                                                        <img src="../img/table/table_U.jpg" class="card-img-top" alt="table_U">
                                                        <div class="card-body">
                                                            <p class="card-text">แบบโต๊ะตัว U</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card">
                                                        <img src="../img/table/table_study.jpg" class="card-img-top" alt="table_study">
                                                        <div class="card-body">
                                                            <p class="card-text">แบบห้องเรียน</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card">
                                                        <img src="../img/table/table_group.jpg" class="card-img-top" alt="table_group">
                                                        <div class="card-body">
                                                            <p class="card-text">แบบกลุ่ม</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <p>รูปแบบอื่น ๆ ให้แจ้งงานเคหะบริการ</p>
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
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card">
                                                        <img src="../img/device/microphone.jpg" class="card-img-top" alt="microphone">
                                                        <div class="card-body">
                                                            <p class="card-text">ไมค์อนุกรม</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card">
                                                        <img src="../img/device/เครื่องฉายภาพ.png" class="card-img-top" alt="projector">
                                                        <div class="card-body">
                                                            <p class="card-text">เครื่องฉายภาพ</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card">
                                                        <img src="../img/device/ไมค์โครโฟนไร้สาย.jpg" class="card-img-top" alt="wireless_microphone">
                                                        <div class="card-body">
                                                            <p class="card-text">ไมค์โครโฟนไร้สาย</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="row mt-3">
                                                    <div class="col-4">
                                                        <div class="card">
                                                            <img src="../img/device/โน้ตบุ๊ค.jpg" class="card-img-top" alt="โน้ตบุ๊ค">
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
                    </div>
                </div>
            </div>
        </div>

</body>

</html>