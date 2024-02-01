<link href="bookingdetail.css" rel="stylesheet">
<div>
    <div class="container">
        <div class="header">
            <h3 class="h3">รายละเอียดการจอง</h3>
        </div>
        <div class="row">
            <div class="col col-sm-4">
                <div>
                    <img class="img" src="../img/Room/ห้องประชุม.png" alt="Room_image" width="350" height="532">
                </div>
            </div>
            <div class="col col-sm-8">
                <form action="#" method="post" enctype="multipart/form-data" id="bookingdetailform">
                    <div>
                        <label class="space">คำนำหน้า</label>
                        <input class="text-space" type="text" name="PrefixName">
                    </div>
                    <div>
                        <label class="space">ชื่อผู้จอง</label>
                        <input class="text-space" type="text" name="FirstName">
                        <label class="space">นามสกุล</label>
                        <input class="text-space" type="text" name="LastName">
                    </div>
                    <div>
                        <label class="space">ตำแหน่ง</label>
                        <input class="text-space" type="text" name="Position">
                        <label class="space">หน่วยงาน/หอผู้ป่วย</label>
                        <input class="text-space" type="text" name="Department">
                    </div>
                    <div>
                        <label class="space">เบอร์โทรภายใน</label>
                        <input class="text-space" type="text" name="InternalPhoneNumber">
                        <label class="space">เบอร์มือถือ</label>
                        <input class="text-space" type="text" name="SelfPhoneNumber">
                    </div>
                    <div>
                        <label class="space">ห้องประชุม</label>
                        <select class="text-space" id="MeetingRoomID" name="MeetingRoomID">
                            <option>ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์</option>
                            <option>ห้องประชุมชั้น 8 อาหารผู้ป่วยนอก</option>
                            <option>ห้องประชุมเล็ก 2</option>
                            <option>ห้องประชุมหลวงพ่อเกษมเขมโก</option>
                            <option>ห้องประชุมโภชนาการ</option>
                        </select>
                    </div>
                    <div>
                        <label class="space">หัวข้อประชุม</label>
                        <input class="text-space" type="text" name="Topic">
                    </div>
                    <div>
                        <div class="row">
                            <div class="col col-sm-3">
                                <label class="space">รายละเอียดการประชุม</label>
                            </div>
                            <div class="col col-sm-9">
                                <textarea class="text-space1" id="MeetingDetails" name="MeetingDetails" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="space">วันเวลาที่เริ่มใช้งาน</label>
                        <input class="text-space" type="datetime-local" id="StartDate" name="StartDate">
                        <label class="space">วันเวลาสิ้นสุดการใช้งาน</label>
                        <input class="text-space" type="datetime-local" id="EndDate" name="EndDate">
                    </div>
                    <div>
                        <label class="space">ระดับความด่วน</label>
                        <select class="text-space" id="ULevelID" name="ULevelID">
                            <option>ปกติ</option>
                            <option>เร่งด่วน</option>
                        </select>
                    </div>
                    <div>
                        <label class="space">รูปแบบการจัดโต๊ะ</label>
                        <input class="text-space" type="text" name="TablePatternID">
                        <label class="space">จำนวนผู้เข้าร่วมประชุม</label>
                        <input class="text-space" type="number" name="NumberAttendees">
                    </div>
                    <div>
                        <label class="space">อุปกรณ์ที่ต้องการใช้</label>
                        <input class="text-space" type="text" name="DeviceID">
                    </div>
                </form>
            </div>
        </div>
        <div style="text-align: center;">
            <a class="modal-coming2 btn-lg px-3 btn-primary" href="bookingdetailhistory.php" type="submit" form="bookingdetailhistory" value="Submit">ไม่มาตามที่จอง</a>
            <a class="modal-back2 btn-lg px-3 btn-primary" href="bookingdetailpassmanager.php" type="submit" form="bookingdetailmanager" value="Submit">ย้อนกลับ</a>
        </div>
    </div>
</div>