<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="bookingdetailmanager.php">จองห้องประชุม</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <link href="headeradmin.css" rel="stylesheet">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex">
                <!-- <p>ผู้เข้าใช้งาน :</p> -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            การจอง
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="bookingdetailmanager.php">จัดการข้อมูลการจอง</a></li>
                            <li><a class="dropdown-item" href="bookingdetailpassmanager.php">ยืนยันแล้ว</a></li>
                            <li><a class="dropdown-item" href="bookingdetailhistory.php">ประวัติการจอง</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ผู้ใช้งานระบบ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="usermanager.php">จัดการข้อมูลผู้ใช้งาน</a></li>
                            <li><a class="dropdown-item" href="usertypemanager.php">จัดการข้อมูลประเภทผู้ใช้งาน</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            รายละเอียดห้องประชุม
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="meetingroomdetail.php">ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์</a></li>
                            <li><a class="dropdown-item" href="#">ห้องประชุมชั้น 8 อาหารผู้ป่วยนอก</a></li>
                            <li><a class="dropdown-item" href="#">ห้องประชุมเล็ก 2</a></li>
                            <li><a class="dropdown-item" href="#">ห้องประชุมหลวงพ่อเกษมเขมโก</a></li>
                            <li><a class="dropdown-item" href="#">ห้องประชุมโภชนาการ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            จัดการห้องประชุม
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="meetingroommanager.php">จัดการข้อมูลห้องประชุม</a></li>
                            <li><a class="dropdown-item" href="devicemanager.php">จัดการข้อมูลอุปกรณ์</a></li>
                            <li><a class="dropdown-item" href="devicetypemanager.php">จัดการข้อมูลประเภทอุปกรณ์</a></li>
                            <li><a class="dropdown-item" href="tablepatternmanager.php">จัดการข้อมูลรูปแบบโต๊ะ</a></li>
                            <li><a class="dropdown-item" href="locationmanager.php">จัดการข้อมูลสถานที่ตั้งห้องประชุม</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myprofileadmin.php">โปรไฟล์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bookingdetailreport.php">สถิติการเข้าใช้งาน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bookingcalendar.php">ปฏิทิน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login.php">ออกจากระบบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>