<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
  <link href="bookingcalendar.css" rel="stylesheet">

  <script src="../asset/js/jquery.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->

  <script src="../asset/js/popper.min.js"></script>
  <script src="../asset/js/bootstrap.min.js"></script>
  <script src='../asset/fullcalendar-6.1.10/dist/index.global.min.js'></script>
  <script src="../asset/vue2/vue.js"></script>
  <style>
    .fc-col-header {
      background: #9cd26d;
      border-radius: 15px;
      height: 8em;
      width: 8em;
    }

    .fc .fc-col-header-cell-cushion {
      display: inline-block;
      padding: 2px 4px;
      margin-bottom: 1.3rem;
    }

    .fc-col-header-cell-cushion {
      color: white;
      text-decoration: none;
      margin-top: 20px;
      font-size: 20px;
    }

    .fc-daygrid-day-number {
      color: black;
      text-decoration: none;
    }

    .fc-theme-standard td,
    .fc-theme-standard th {
      border: none;
    }

    td.fc-day {
      border-radius: 10px;
      height: 5.8rem;
      box-shadow: 4px 6px 8px 4px #adadad;
      background: white !important;
    }

    .a {
      color: black !important;
    }
  </style>
  <title>Meeting Room Booking System</title>
</head>
<?php include 'headeradmin.php'; ?>

<body>
  <div id="app" class="container">

    <div id='calendar'></div>

    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <!-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Modal 1</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div> -->
          <div class="modal-body">
            <?php include_once 'bookingcalendardate.php';  ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="app1" class="container">
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <!-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Modal 1</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div> -->
          <div class="modal-body">
            <?php include_once 'bookingcalendar1event.php';  ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        navLinks: true,
        aspectRatio: 2,
        height: '100%',
        contentHeight: 'auto',
        navLinkDayClick: function(date, jsEvent) {
          // alert('DayClick ' + date);
          document.getElementById("Date").innerHTML = (date);
          $('#myModal1').modal('show');


        },
        eventClick: function(info) {
          // alert('ID: ' + info.event.id + ' Start: ' + info.event.start);
          $('#myModal2').modal('show');
        }
      });
      calendar.render();

      calendar.addEvent({
        title: 'ห้องสุรินทร์ (2)',
        start: '2024-01-18',
        allDay: true,
        backgroundColor: '#b2ebf2',
        textColor: '#000',
        id: 'surin'
      });

      calendar.addEvent({
        title: 'ห้องOPD 8 (1)',
        start: '2024-01-18',
        allDay: true,
        backgroundColor: '#f0f4c3',
        textColor: '#000',
        id: 'opd',
      });

      // calendar.addEvent({
      //   title: 'ห้องสุรินทร์ (2)',
      //   start: '2024-01-18',
      //   allDay: true,
      //   backgroundColor: '#ffff00',
      //   textColor: '#000',
      //   id: 'surin'
      // });

      // calendar.addEvent({
      //   title: 'ห้องOPD 8 (1)',
      //   start: '2024-01-18',
      //   allDay: true,
      //   backgroundColor: '#00ff00',
      //   textColor: '#000',
      //   id: 'opd',
      // });

      // calendar.addEvent({
      //   title: 'ห้องOPD 8 (1)',
      //   start: '2024-01-18',
      //   allDay: true,
      //   backgroundColor: '#00ff00',
      //   textColor: '#000',
      //   id: 'opd',
      // });


    });

    var app = new Vue({
      el: '#app',
      data: {
        modal1_datas: [{
          id: 1,
          name: 'ประชุมวิชาการ "Covid vaccine"',
          RoomName: 'ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์',
          StartDate: '2024-12-18	09.00',
          EndDate: '2024-12-18	16.30',
          NumberAttendees: '20',
          LevelName: 'ปกติ',
          PrefixName: 'นาย',
          FirstName: 'ดาบ',
          LastName: 'แสงเดือน',
          Position: 'แพทย์',
          Department: 'อายุรกรรม',
          InternalPhoneNumber: '1234',
          SelfPhoneNumber: '0123456789',
          PatternName: 'ห้องเรียน'
        }, {
          id: 2,
          name: 'สอบสัมภาษณ์ลูกจ้างชั่วคราว',
          RoomName: 'ห้องประชุมชั้น 8 อาหารผู้ป่วยนอก',
          StartDate: '2024-12-18	09.00',
          EndDate: '2024-12-18	16.30',
          NumberAttendees: '20',
          LevelName: 'ปกติ',
          PrefixName: 'นาง',
          FirstName: 'กนกจันทร์',
          LastName: 'แสงดาว',
          Position: 'หัวหน้าแผนก',
          Department: 'กลุ่มงานทรัพยากรบุคคล',
          InternalPhoneNumber: '1234',
          SelfPhoneNumber: '0123456789',
          PatternName: 'ห้องเรียน'
        }],
      }
    });

    var app = new Vue({
      el: '#app1',
      data: {
        modal1_datas: [{
          id: 1,
          name: 'ประชุมวิชาการ "Covid vaccine"',
          RoomName: 'ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์',
          StartDate: '2024-12-18	09.00',
          EndDate: '2024-12-18	16.30',
          NumberAttendees: '20',
          LevelName: 'ปกติ',
          PrefixName: 'นาย',
          FirstName: 'ดาบ',
          LastName: 'แสงเดือน',
          Position: 'แพทย์',
          Department: 'อายุรกรรม',
          InternalPhoneNumber: '1234',
          SelfPhoneNumber: '0123456789',
          PatternName: 'ห้องเรียน'
        }, ],
      }
    });
  </script>

</body>

</html>