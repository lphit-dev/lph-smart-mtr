<h3 class="text-center">รายละเอียดการจองห้องประชุม ประจำวันที่ <p id="Date"></p></p></h3>
<div class="accordion" id="accordionExample">
  <div class="accordion-item" v-for="(item, index) in modal1_datas" :key="index">
    <h2 class="accordion-header" :id="'headingOne' + index">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapseOne' + index" aria-expanded="true" :aria-controls="'collapseOne' + index">
        <h3 class="borderp-1">หัวข้อการกระชุม : {{item.name}}</h3>
      </button>
    </h2>
    <div :id="'collapseOne' + index" class="accordion-collapse collapse" :aria-labelledby="'headingOne' + index" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="detail">
          <div class="row">
          <div class="col-12">
                            <p>ห้องประชุม : {{item.RoomName}}</p>
                        </div>
                        <div class="col-6">
                            <p>วันเวลาที่เริ่ม : {{item.StartDate}}</p>
                        </div>
                        <div class="col-6">
                            <p>วันเวลาที่สิ้นสุด : {{item.EndDate}}</p>
                        </div>
                        <div class="col-12">
                            <p>จำนวนผู้เข้าร่วม : {{item.NumberAttendees}} ที่นั่ง</p>
                        </div>
                        <div class="col-6">
                            <p>ชื่อผู้จอง : {{item.PrefixName}} {{item.FirstName}}</p>
                        </div>
                        <div class="col-6">
                            <p>นามสกุล : {{item.LastName}}</p>
                        </div>
                        <div class="col-6">
                            <p>ตำแหน่ง : {{item.Position}}</p>
                        </div>
                        <div class="col-6">
                            <p>หน่วยงาน/หอผู้ป่วย : {{item.Department}}</p>
                        </div>
                        <div class="col-6">
                            <p>เบอร์โทรภายใน : {{item.InternalPhoneNumber}}</p>
                        </div>
                        <div class="col-6">
                            <p>เบอรมือถือ : {{item.SelfPhoneNumber}}</p>
                        </div>
                        <div class="col-6">
                            <p>รูปแบบการจัดโต๊ะ : {{item.PatternName}}</p>
                        </div>
                        <div class="col-6">
                            <p>ระดับความด่วน : {{item.LevelName}}</p>
                        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>