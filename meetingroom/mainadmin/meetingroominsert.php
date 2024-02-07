<link href="meetingroominsert.css" rel="stylesheet">

<div>
    <div class="container">
        <div class="header">
            <h3 class="h3">เพิ่มห้องประชุม</h3>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="w-100 ms-5">
                    <img class="img w-75" src="../img/Room/ห้องประชุม.png" alt="Room_image">
                </div>
            </div>
            <div class="col-sm-8">
                <div border="0">
                    <div class="row mb-lg-2">
                        <div class="col-sm-2 text-end">
                            <label>ชื่อห้องประชุม</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="text-space5" type="text" name="RoomName">
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col-sm-2 text-end">
                            <label>สถานที่ตั้ง</label>
                        </div>
                        <div class="col-sm-4">
                            <select class="text-space6" id="LocationID" name="LocationID">
                                <option>สุรินทร์-สมพร โอสถานุเคราะห์</option>
                                <option>ชั้น 8 อาหารผู้ป่วยนอก</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col-sm-2 text-end">
                            <label>รายละเอียดห้องประชุม</label>
                        </div>
                        <div class="col-sm-9">
                            <textarea class="text-area" id="Description" name="Description" rows="4" cols="50"></textarea>
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col-sm-2 text-end">
                            <label>รูปแบบการจัดโต๊ะ</label>
                        </div>
                        <div class="col-sm-3">
                            <input class="" type="checkbox" id="PatternName" name="PatternName" checked="">
                            <label>แบบห้องเรียน</label>
                        </div>
                        <div class="col-sm-2">
                            <input class="" type="checkbox" id="PatternName" name="PatternName" checked="">
                            <label>แบบตัวกลุ่ม</label>
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                            <input class="" type="checkbox" id="PatternName" name="PatternName" checked="">
                            <label>แบบตัว U (แบบประชุม)</label>
                        </div>

                        <div class="col-sm-4">
                            <input class="" type="checkbox" id="PatternName" name="PatternName" checked="">
                            <label>รูปแบบอื่น ๆ ให้แจ้งงานเคหะบริการ</label>
                        </div>
                    </div>

                    <div class="row mb-lg-2">
                        <div class="col-sm-2 text-end">
                            <label>ขั้นต่ำจำนวนผู้เข้าร่วมประชุม</label>
                        </div>
                        <div class="col-sm-3">
                            <input class="text-space7" type="text" name="MinPeople">
                        </div>
                        <div class="col-sm-3">
                            <label>จำนวนผู้เข้าร่วมประชุมไม่เกิน</label>
                        </div>
                        <div class="col-sm-3">
                            <input class="text-space7" type="text" name="MaxPeople">
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col-sm-2 text-end">
                            <label>อุปกรณ์ที่มีให้ใช้</label>
                        </div>
                        <div class="col-sm-3">
                            <input class="" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                            <label>ไมค์อนุกรม โต๊ะตัว U เท่านั้น</label>
                        </div>
                        <div class="col-sm-3">
                            <input class="" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                            <label>ไมโครโฟนไร้สาย</label>
                        </div>
                        <div class="col-sm-3">
                            <input class="" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                            <label>เครื่องฉายภาพ</label>
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col-sm-2 text-end">
                            <label>สถานะ</label>
                        </div>
                        <div class="col-sm-2">
                            <select class=" text-space6" id="UserStatusID" name="UserStatusID">
                                <option>พร้อมใช้งาน</option>
                                <option>ไม่พร้อมใช้งาน</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="text-align: center;">
    <a class="modal-coming btn-lg px-3 btn-primary" href="meetingroommanager.php" type="submit" form="bookingdetailform" value="Submit">บันทึกข้อมูล</a>
    <a class="modal-back btn-lg px-3 btn-primary" href="meetingroommanager.php" type="submit" form="bookingdetailform" value="Submit">ย้อนกลับ</a>
</div><br>
</div>