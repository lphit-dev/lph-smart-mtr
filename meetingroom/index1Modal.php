<h3 class="text-center">รายละเอียดการจองห้องประชุม ประจำวันที่ 21 ธันวาคม 2566</h3>
<div class="col" v-for="item in modal1_datas">
    <h3 class="borderp-1">หัวข้อการกระชุม : {{item.name}}</h3>
    <div class="detail">
        <div class="row">
            <div class="col-6">
                <p>ห้องประชุม : {{item.RoomName}}</p>
                <p>วันเวลาที่เริ่ม : {{item.StartDate}}</p>
                <p>จำนวนผู้เข้าร่วม : {{item.NumberAttendees}} ที่นั่ง</p>
                <p>ชื่อผู้จอง : {{item.PrefixName}} {{item.FirstName}}</p>
                <p>ตำแหน่ง : {{item.Position}}</p>
                <p>เบอร์โทรภายใน : {{item.InternalPhoneNumber}}</p>
                <p>รูปแบบการจัดโต๊ะ : {{item.PatternName}}</p>
            </div>
            <div class="col-6">
                <p><br></p>
                <p>วันเวลาที่สิ้นสุด : {{item.EndDate}}</p>
                <p>ระดับความด่วน : {{item.LevelName}}</p>
                <p>นามสกุล : {{item.LastName}}</p>
                <p>หน่วยงาน/หอผู้ป่วย : {{item.Department}}</p>
                <p>เบอรมือถือ : {{item.SelfPhoneNumber}}</p>
            </div>
        </div>
    </div>
</div>
