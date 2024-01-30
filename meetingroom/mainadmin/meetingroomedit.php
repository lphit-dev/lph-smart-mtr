<link href="meetingroomedit.css" rel="stylesheet">

<div>
    <div class="container">
        <div class="header">
            <h3 class="h3">แก้ไขห้องประชุม</h3>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div>
                    <img src="../img/Room/ห้องประชุม.png" alt="Room_image" width="350" height="450">
                </div>
            </div>
            <div class="col-sm-8">
            <div border="0">
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="space">ชื่อห้องประชุม</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="text-space-room" type="text" name="RoomName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="space">สถานที่ตั้ง</label>
                        </div>
                        <div class="col-sm-9">
                            <select class="text-space-room" id="LocationID" name="LocationID">
                                <option>สุรินทร์-สมพร โอสถานุเคราะห์</option>
                                <option>ชั้น 8 อาหารผู้ป่วยนอก</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="space">รายละเอียดห้องประชุม</label>
                        </div>
                        <div class="col-sm-2">
                            <textarea class="text-space1" id="Description" name="Description" rows="4" cols="50"></textarea>
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
                    <div class="row">
                    <div class="col-sm-3">
                        <label class="space-low">ขั้นต่ำจำนวนผู้เข้าร่วมประชุม</label></div>
                        <div class="col-sm-1">
                        <input class="space1" type="text" name="MinPeople"></div>
                        <div class="col-sm-3">
                        <label class="space-low">จำนวนผู้เข้าร่วมประชุมไม่เกิน</label></div>
                        <div class="col-sm-4">
                        <input class="space1" type="text" name="MaxPeople"></div>
                    </div>
                    <div>
                        <label class="space">อุปกรณ์ที่มีให้ใช้</label>
                        <input class="" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                        <label class="space">ไมค์อนุกรม โต๊ะตัว U เท่านั้น</label>
                        <input class="" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                        <label class="space">ไมโครโฟนไร้สาย</label>
                        <input class="" type="checkbox" id="DeviceID" name="DeviceID" checked="">
                        <label class="space">เครื่องฉายภาพ</label>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label class="space">สถานะ</label>
                        </div>
                        <div class="col-sm-9">
                            <select class=" text-space" id="UserStatusID" name="UserStatusID">
                                <option>พร้อมใช้งาน</option>
                                <option>ไม่พร้อมใช้งาน</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <a class="modal-coming btn-lg px-3 btn-primary" href="meetingroommanager.php" type="submit" form="bookingdetailform" value="Submit">บันทึกข้อมูล</a>
        <a class="modal-back btn-lg px-3 btn-primary" href="meetingroommanager.php" type="submit" form="bookingdetailform" value="Submit">ย้อนกลับ</a>
    </div>
</div>