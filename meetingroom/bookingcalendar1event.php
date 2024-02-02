<link href="index.css" rel="stylesheet">

<h3 class="text-center">รายละเอียดการจองห้องประชุม ประจำวันที่ 21 ธันวาคม 2566</h3>
<div class="col" v-for="item in modal1_datas">
    <h3 class="borderp-1">หัวข้อการกระชุม : {{item.name}}</h3>
    <div class="container">
    <div class="row">
              <div class="row">
                <div class="col-2 m-auto">
                  <p class="kanit">ห้องประชุม :</p>
                </div>
                <div class="col-10 m-auto">
                  <p class="THSarabun">{{item.RoomName}}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-2 m-auto">
                  <p class="kanit">วันเวลาที่เริ่ม :</p>
                </div>
                <div class="col-4 m-auto">
                  <p class="THSarabun">{{item.StartDate}}</p>
                </div>
                <div class="col-2 m-auto">
                  <p class="kanit">วันเวลาที่สิ้นสุด :</p>
                </div>
                <div class="col-4 m-auto">
                  <p class="THSarabun">{{item.EndDate}}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-2 m-auto">
                  <p class="kanit">จำนวนผู้เข้าร่วม :</p>
                </div>
                <div class="col-10 m-auto">
                  <p class="THSarabun">{{item.NumberAttendees}} ที่นั่ง</p>
                </div>
              </div>

              <div class="row">
                <div class="col-2 m-auto">
                  <p class="kanit">ชื่อผู้จอง : </p>
                </div>
                <div class="col-10 m-auto">
                  <p class="THSarabun">{{item.PrefixName}} {{item.FirstName}} {{item.LastName}}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-2 m-auto">
                  <p class="kanit">ตำแหน่ง :</p>
                </div>
                <div class="col-4 m-auto">
                  <p class="THSarabun">{{item.Position}}</p>
                </div>
                <div class="col-2 m-auto">
                  <p class="kanit">หน่วยงาน/หอผู้ป่วย :</p>
                </div>
                <div class="col-4 m-auto">
                  <p class="THSarabun">{{item.Department}}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-2 m-auto">
                  <p class="kanit">เบอร์โทรภายใน :</p>
                </div>
                <div class="col-4 m-auto">
                  <p class="THSarabun">{{item.InternalPhoneNumber}}</p>
                </div>
                <div class="col-2 m-auto">
                  <p class="kanit">เบอรมือถือ :</p>
                </div>
                <div class="col-4 m-auto">
                  <p class="THSarabun">{{item.SelfPhoneNumber}}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-2 m-auto">
                  <p class="kanit">รูปแบบการจัดโต๊ะ : </p>
                </div>
                <div class="col-4 m-auto">
                  <p class="THSarabun">{{item.PatternName}}</p>
                </div>
                <div class="col-2 m-auto">
                  <p class="kanit">ระดับความด่วน : </p>
                </div>
                <div class="col-4 m-auto">
                  <p class="THSarabun">{{item.LevelName}}</p>
                </div>
              </div>
            </div>
    </div>
</div>