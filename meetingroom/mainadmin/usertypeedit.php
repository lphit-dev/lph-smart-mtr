<link href="usertypeedit.css" rel="stylesheet">

<div>
    <div class="container">
        <div class="header">
            <h3 class="h3">แก้ไขประเภทผู้ใช้งาน</h3>
        </div>
        <div border="0">
            <div class="row mb-lg-2">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 text-end">
                    <label>ชื่อประเภทผู้ใช้งาน</label>
                </div>
                <div class="col-sm-2">
                    <input class="text-space5" type="text" name="TypeName" readonly v-model="editForm.TypeName">
                </div>
            </div>
            <div class="row mb-lg-2">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 text-end">
                    <label>Linetoken</label>
                </div>
                <div class="col-sm-2">
                    <input class="text-space5" type="text" name="LineToken" v-model="editForm.LineToken">
                </div>
            </div>
        </div>
    </div><br>
    <div style="text-align: center;">
        <a class="modal-coming btn-lg px-3 btn-primary" href="usermanager.php" type="submit" form="bookingdetailform" value="Submit">บันทึกข้อมูล</a>
        <a class="modal-back btn-lg px-3 btn-primary" href="usermanager.php" type="submit" form="bookingdetailform" value="Submit">ย้อนกลับ</a>
    </div><br>

</div>