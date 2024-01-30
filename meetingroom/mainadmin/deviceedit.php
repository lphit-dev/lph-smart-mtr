<link href="deviceedit.css" rel="stylesheet">

<div>
    <div class="container">
        <div class="header">
            <h3 class="h3">แก้ไขอุปกรณ์</h3>
        </div>
        <div border="0">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 col">
                    <label class="space">ชื่ออุปกรณ์</label>
                </div>
                <div class="col-sm-2">
                    <input class="text-space-device" type="text" name="DeviceName">
                </div>
                <div class="col-sm-2"></div>
            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 col">
                    <label class="space">ห้องประชุม</label>
                </div>
                <div class="col-sm-2 col">
                    <select class="text-space" id="RoomName" name="RoomName">
                        < <option>ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์</option>
                            <option>ห้องประชุมชั้น 8</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 col">
                    <label class="space">ประเภทอุปกรณ์</label>
                </div>
                <div class="col-sm-2">
                    <select class="text-space-type" id="DeviceTypeID" name="DeviceTypeID">
                        <option>เสียง</option>
                        <option>จอภาพ</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 col">
                    <label class="space">สถานะอุปกรณ์</label>
                </div>
                <div class="col-sm-2">
                    <select class="text-space-type" id="DeviceStatusID" name="DeviceStatusID">
                        <option>พร้อมใช้งาน</option>
                        <option>ไม่พร้อมใช้งาน</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-5">
                    <input class="space-file" type="file" name="fileupload" accept="image/jpeg">
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