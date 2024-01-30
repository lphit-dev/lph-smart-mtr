<link href="tablepatterninsert.css" rel="stylesheet">

<div>
    <div class="container">
        <div class="header">
            <h3 class="h3">เพิ่มรูปแบบโต๊ะ</h3>
        </div>
        <div border="0">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 col">
                    <label class="space">ชื่อรูปแบบโต๊ะ</label>
                </div>
                <div class="col-sm-2">
                    <input class="text-space" type="text" name="PatternName">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <input class="space-file" type="file" name="fileupload" accept="image/jpeg" />
                </div>
            </div>
        </div><br>
        <div style="text-align: center;">
            <a class="modal-coming btn-lg px-3 btn-primary" href="tablepatternmanager.php" type="submit" form="bookingdetailform" value="Submit">บันทึกข้อมูล</a>
            <a class="modal-back btn-lg px-3 btn-primary" href="tablepatternmanager.php" type="submit" form="bookingdetailform" value="Submit">ย้อนกลับ</a>
        </div><br>
    </div>
</div>