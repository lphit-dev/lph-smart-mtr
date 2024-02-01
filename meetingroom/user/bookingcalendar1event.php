<link href="index.css" rel="stylesheet">

<h3 class="text-center">รายละเอียดการจองห้องประชุม ประจำวันที่ 21 ธันวาคม 2566</h3>
<div class="col" v-for="item in modal1_datas">
    <h3 class="borderp-1">หัวข้อการกระชุม : {{item.name}}</h3>
    <div class="container">
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