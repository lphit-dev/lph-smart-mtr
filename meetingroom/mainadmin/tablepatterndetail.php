<link href="tablepatterndetail.css" rel="stylesheet">
<style>
    .header {
        text-align: center;
    }
</style>
<div>
    <div class="container">
        <div class="header">
            <h3 class="h3">เลือกรูปแบบการจัดโต๊ะ</h3>
        </div>
        <div>
            <form>
                <div class="row">
                    <div class="col">
                        <label for="table_U"><img src="../img/table/table_U.jpg" alt="table_U"><br>
                            <input type="radio" id="table_U" name="fav_language" value="table_U">
                            <label>แบบโต๊ะตัว U</label>
                        </label>
                    </div>
                    <div class="col">
                    <label for="table_study"><img src="../img/table/table_study.jpg" alt="table_study"><br>
                        <input type="radio" id="table_study" name="fav_language" value="table_study">
                        <label for="table_study">แบบห้องเรียน</label>
                        </label>
                    </div>
                </div>
            </form>
            <button type="button" class="btn-add btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
                ตกลง
            </button>
        </div>
    </div>
</div>