<link href="bookingdetailinsert.css" rel="stylesheet">

<div><br>
    <div class="container">
        <div class="header">
            <h3>แก้ไขการจอง</h3>
        </div>
        <div class="row">
            <div class="col col-sm-4 img">
                <div>
                    <img class="img" src="../img/Room/ห้องประชุม.png" alt="Room_image" width="315" height="532">
                </div>
            </div>
            <div class="col col-sm-8">
            <div border="0">
                    <div class="row">
                        <div class="col col-sm-2">
                            <label class="space">คำนำหน้า</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space" type="text" name="PrefixName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-2">
                            <label class="space">ชื่อผู้จอง</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space" type="text" name="FirstName">
                        </div>
                        <div class="col col-sm-3 space-2">
                            <label class="space">นามสกุล</label>
                        </div>
                        <div class="col col-sm-4">
                            <input class="text-space" type="text" name="LastName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-2">
                            <label class="space">ตำแหน่ง</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space" type="text" name="InternalPhoneNumber">
                        </div>
                        <div class="col col-sm-3 space-2">
                            <label class="space">หน่วยงาน/หอผู้ป่วย</label>
                        </div>
                        <div class="col col-sm-4">
                            <input class="text-space" type="text" name="SelfPhoneNumber">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-2">
                            <label class="space">เบอร์โทรภายใน</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space" type="text" name="InternalPhoneNumber">
                        </div>
                        <div class="col col-sm-3 space-2">
                            <label class="space">เบอร์มือถือ</label>
                        </div>
                        <div class="col col-sm-2">
                            <input class="text-space" type="text" name="SelfPhoneNumber">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-2">
                            <label class="space">ห้องประชุม</label>
                        </div>
                        <div class="col col-sm-3">
                            <select class="text-space" id="MeetingRoomID" name="MeetingRoomID">
                                <option>ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์</option>
                                <option>ห้องประชุมชั้น 8 อาหารผู้ป่วยนอก</option>
                                <option>ห้องประชุมเล็ก 2</option>
                                <option>ห้องประชุมหลวงพ่อเกษมเขมโก</option>
                                <option>ห้องประชุมโภชนาการ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-2">
                            <label class="space">หัวข้อประชุม</label>
                        </div>
                        <div class="col col-sm-10">
                            <input class="text-space-room" type="text" name="Topic">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label class="space">รายละเอียดการประชุม</label>
                        </div>
                        <div class="col col-sm-3">
                            <textarea class="text-space1" id="MeetingDetails" name="MeetingDetails" rows="4" cols="50" style="margin-left: -4.5rem;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-2">
                            <label class="space">วันเวลาที่เริ่มใช้งาน</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space-table" type="datetime-local" id="datetimepicker" placeholder=" กดเลือกวันเวลาที่เริ่มต้น" name="StartDate">
                        </div>
                        <div class="col col-sm-3 space-2">
                            <label class="space">วันเวลาสิ้นสุดการใช้งาน</label>
                        </div>
                        <div class="col col-sm-4">
                            <input class="text-space-table" type="datetime-local" id="datetimepicker" placeholder=" กดเลือกวันเวลาที่สิ้นสุด" name="EndDate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label class="space">รูปแบบการจัดโต๊ะ</label>
                        </div>
                        <div class="col col-sm-2">
                            <input class="text-space" type="text" name="TablePatternID" style="margin-left: -4.6rem;">
                        </div>
                        <!-- ปุ่มเปิด Modal 4 -->
                        <div class="col col-sm-3">
                            <button type="button" class="btn-select btn-primary" data-bs-toggle="modal" data-bs-target="#myModal4" style="margin-left: -2.5rem;">
                                เลือก
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label class="space">จำนวนผู้เข้าร่วมประชุม</label>
                        </div>
                        <div class="col col-sm-2">
                            <input class="text-space" type="number" name="NumberAttendees" style="margin-left: -4.6rem;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label class="space">อุปกรณ์ที่ต้องการใช้</label>
                        </div>
                        <div class="col col-sm-2">
                            <input class="text-space" type="text" name="TablePatternID" style="margin-left: -4.6rem;">
                        </div>
                        <!-- ปุ่มเปิด Modal 5 -->
                        <div class="col col-sm-3">
                            <button type="button" class="btn-select btn-primary" data-bs-toggle="modal" data-bs-target="#myModal5" style="margin-left: -2.5rem;">
                                เลือก
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center;">
            <a class="modal-coming btn-lg px-3 btn-primary" href="bookingdetailmanager.php" type="submit" form="bookingdetailform" value="Submit">บันทึกข้อมูล</a>
            <a class="modal-back btn-lg px-3 btn-primary" href="bookingdetailmanager.php" type="submit" form="bookingdetailform" value="Submit">ย้อนกลับ</a>
        </div>
    </div>

</div>
<br>