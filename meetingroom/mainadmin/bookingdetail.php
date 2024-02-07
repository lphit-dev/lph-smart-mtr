<link href="bookingdetail.css" rel="stylesheet">
<div>
    <div class="container">
        <div class="header">
            <h3 class="h3">รายละเอียดการจอง</h3>
        </div>
        <div class="row">
            <div class="col col-sm-4 img">
                <div class="w-100">
                    <img class="img w-75" src="../img/Room/ห้องประชุม.png" alt="Room_image">
                </div>
            </div>
            <div class="col col-sm-8">
                <div border="0">
                    <div class="row mb-lg-2">
                        <div class="col col-sm-2 text-end">
                            <label>คำนำหน้า</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space5" type="text" name="PrefixName">
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col col-sm-2 text-end">
                            <label>ชื่อผู้จอง</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space5" type="text" name="FirstName">
                        </div>
                        <div class="col col-sm-3 text-end">
                            <label>นามสกุล</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space5" type="text" name="LastName">
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col col-sm-2 text-end">
                            <label>ตำแหน่ง</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space5" type="text" name="InternalPhoneNumber">
                        </div>
                        <div class="col col-sm-3 text-end">
                            <label>หน่วยงาน/หอผู้ป่วย</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space5" type="text" name="SelfPhoneNumber">
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col col-sm-2 text-end">
                            <label>เบอร์โทรภายใน</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space5" type="text" name="InternalPhoneNumber">
                        </div>
                        <div class="col col-sm-3 text-end">
                            <label>เบอร์มือถือ</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space5" type="text" name="SelfPhoneNumber">
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col col-sm-2 text-end">
                            <label>ห้องประชุม</label>
                        </div>
                        <div class="col col-sm-4">
                            <select class="text-space6" id="MeetingRoomID" name="MeetingRoomID">
                                <option>ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์</option>
                                <option>ห้องประชุมชั้น 8 อาหารผู้ป่วยนอก</option>
                                <option>ห้องประชุมเล็ก 2</option>
                                <option>ห้องประชุมหลวงพ่อเกษมเขมโก</option>
                                <option>ห้องประชุมโภชนาการ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col col-sm-2 text-end">
                            <label>หัวข้อประชุม</label>
                        </div>
                        <div class="col col-sm-9">
                            <input class="text-space5" type="text" name="Topic">
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col col-sm-2 text-end">
                            <label>รายละเอียดการประชุม</label>
                        </div>
                        <div class="col col-sm-9">
                            <textarea class="text-area" id="MeetingDetails" name="MeetingDetails" row mb-lg-2s="4" cols="50"></textarea>
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col col-sm-2 text-end">
                            <label>วันเวลาที่เริ่มใช้งาน</label>
                        </div>
                        <div class="col col-sm-4">
                            <input class="text-space5-date" type="datetime-local" id="datetimepicker" placeholder=" กดที่นี่เลือกวันเวลาที่เริ่มต้น" name="StartDate">
                            <i class="fa-regular fa-calendar fa-xl"></i>
                        </div>
                        <div class="col col-sm-2 text-end">
                            <label>วันเวลาสิ้นสุดการใช้งาน</label>
                        </div>
                        <div class="col col-sm-4">
                            <input class="text-space5-date" type="datetime-local" id="datetimepicker" placeholder=" กดที่นี่เลือกวันเวลาที่สิ้นสุด" name="EndDate">
                            <i class="fa-regular fa-calendar fa-xl"></i>
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col col-sm-2 text-end">
                            <label>รูปแบบการจัดโต๊ะ</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space5" type="text" name="TablePatternID">
                        </div>
                        <!-- ปุ่มเปิด Modal 4 -->
                        <div class="col col-sm-3">
                            <button type="button" class="btn-select btn-primary" data-bs-toggle="modal" data-bs-target="#myModal4">
                                เลือก
                            </button>
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col col-sm-2 text-end">
                            <label>จำนวนผู้เข้าร่วมประชุม</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space5" type="number" name="NumberAttendees">
                        </div>
                    </div>
                    <div class="row mb-lg-2">
                        <div class="col col-sm-2 text-end">
                            <label>อุปกรณ์ที่ต้องการใช้</label>
                        </div>
                        <div class="col col-sm-3">
                            <input class="text-space5" type="text" name="TablePatternID">
                        </div>
                        <!-- ปุ่มเปิด Modal 5 -->
                        <div class="col col-sm-3">
                            <button type="button" class="btn-select btn-primary" data-bs-toggle="modal" data-bs-target="#myModal5">
                                เลือก
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center;">
            <a class="modal-book btn-lg px-3 btn-primary" href="bookingdetailpassmanager.php" type="submit" form="bookingdetailpassmanager" value="Submit">ยืนยันการจอง</a>
            <a class="modal-nobook btn-lg px-3 btn-primary" href="bookingdetailhistory.php" type="submit" form="bookingdetailhistory" value="Submit">ยกเลิกการจอง</a>
            <a class="modal-back2 btn-lg px-3 btn-primary" href="bookingdetailmanager.php" type="submit" form="bookingdetailmanager" value="Submit">ย้อนกลับ</a>
        </div><br>
    </div>
</div>