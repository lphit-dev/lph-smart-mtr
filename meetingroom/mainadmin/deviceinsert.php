<link href="deviceinsert.css" rel="stylesheet">

<div>
    <div class="container">
        <div class="header">
            <h3 class="h3">เพิ่มอุปกรณ์</h3>
        </div>
        <div border="0">
            <div class="row mb-lg-2">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 text-end">
                    <label>ชื่ออุปกรณ์</label>
                </div>
                <div class="col-sm-4">
                    <input class="text-space5" type="text" name="DeviceName">
                </div>
                <div class="col-sm-2"></div>
            </div>

            <div class="row mb-lg-2">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 text-end">
                    <label>ห้องประชุม</label>
                </div>
                <div class="col-sm-4">
                    <select class="text-space6" id="RoomName" name="RoomName">
                        < <option>ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์</option>
                            <option>ห้องประชุมชั้น 8</option>
                    </select>
                </div>
            </div>
            <div class="row mb-lg-2">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 text-end">
                    <label>ประเภทอุปกรณ์</label>
                </div>
                <div class="col-sm-3">
                    <select class="text-space7" id="DeviceTypeID" name="DeviceTypeID">
                        <option>เสียง</option>
                        <option>จอภาพ</option>
                    </select>
                </div>
            </div>
            <div class="row mb-lg-2">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 text-end">
                    <label>สถานะอุปกรณ์</label>
                </div>
                <div class="col-sm-3">
                    <select class="text-space7" id="DeviceStatusID" name="DeviceStatusID">
                        <option>พร้อมใช้งาน</option>
                        <option>ไม่พร้อมใช้งาน</option>
                    </select>
                </div>
            </div>
            <div class="row mb-lg-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-5">
                    <input class="space-file" type="file" name="fileupload" accept="image/jpeg">
                </div>
            </div>
        </div>
    </div>
</div><br>
<div style="text-align: center;">
    <a class="modal-coming btn-lg px-3 btn-primary" href="devicemanager.php" type="submit" form="bookingdetailform" value="Submit">บันทึกข้อมูล</a>
    <a class="modal-back btn-lg px-3 btn-primary" href="devicemanager.php" type="submit" form="bookingdetailform" value="Submit">ย้อนกลับ</a>
</div><br>
</div>
</div>