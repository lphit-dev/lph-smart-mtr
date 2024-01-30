<link href="userinsert.css" rel="stylesheet">

<div>
    <div class="container">
        <div class="header">
            <h3 class="h3">เพิ่มผู้ใช้งาน</h3>
        </div>
        <div border="0">
            <div class="row">
                <div class="col col-sm-2">
                </div>
                <div class="col col-sm-2">
                    <label class="space">ชื่อเข้าใช้ระบบ</label>
                </div>
                <div class="col col-sm-2">
                    <input class="text-space" type="text" name="Username">
                </div>
                <div class="col col-sm-2">
                    <label class="space">รหัสผ่านเข้าใช้ระบบ</label>
                </div>
                <div class="col col-sm-2">
                    <input class="text-space" type="password" name="Password">
                </div>
            </div>

            <div class="row">
                <div class="col col-sm-2">
                </div>
                <div class="col col-sm-2">
                    <label class="space">คำนำหน้า</label>
                </div>
                <div class="col col-sm-2">
                    <input class="text-space" type="text" name="PrefixName">
                </div>
            </div>

            <div class="row">
                <div class="col col-sm-2">
                </div>
                <div class="col col-sm-2">
                    <label class="space">ชื่อผู้จอง</label>
                </div>
                <div class="col col-sm-2">
                    <input class="text-space" type="text" name="FirstName">
                </div>
                <div class="col col-sm-2">
                    <label class="space">นามสกุล</label>
                </div>
                <div class="col col-sm-2">
                    <input class="text-space" type="text" name="LastName">
                </div>
            </div>

            <div class="row">
                <div class="col col-sm-2"></div>
                <div class="col col-sm-2">
                    <label class="space">ตำแหน่ง</label>
                </div>
                <div class="col col-sm-2">
                    <input class="text-space" type="text" name="Position">
                </div>
                <div class="col col-sm-2">
                    <label class="space">หน่วยงาน/หอผู้ป่วย</label>
                </div>
                <div class="col col-sm-2">
                    <input class="text-space" type="text" name="Department">
                </div>
            </div>

            <div class="row">
                <div class="col col-sm-2"></div>
                <div class="col col-sm-2">
                    <label class="space">เบอร์โทรภายใน</label>
                </div>
                <div class="col col-sm-2">
                    <input class="text-space" type="text" name="InternalPhoneNumber">
                </div>
                <div class="col col-sm-2">
                    <label class="space">เบอร์มือถือ</label>
                </div>
                <div class="col col-sm-2">
                    <input class="text-space" type="text" name="SelfPhoneNumber">
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-2"></div>
                <div class="col col-sm-2">
                    <label class="space">สถานะ</label>
                </div>
                <div class="col col-sm-2">
                    <select class="text-space" id="UserStatusID" name="UserStatusID">
                        <option>ปกติ</option>
                    </select>
                </div>
                <div class="col col-sm-2">
                    <label class="space">ประเภทผู้ใช้งาน</label>
                </div>
                <div class="col col-sm-2">
                    <select class="text-space" id="UserTypeID" name="UserTypeID">
                        <option>ผู้ใช้งานระบบ</option>
                    </select>
                </div>
            </div>
        </div>
    </div><br>
    <div style="text-align: center;">
        <a class="modal-coming btn-lg px-3 btn-primary" href="usermanager.php" type="submit" form="bookingdetailform" value="Submit">บันทึกข้อมูล</a>
        <a class="modal-back btn-lg px-3 btn-primary" href="usermanager.php" type="submit" form="bookingdetailform" value="Submit">ย้อนกลับ</a>
    </div><br>
</div>
</div>