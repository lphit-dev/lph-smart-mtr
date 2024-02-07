<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="asset/css/bootstrap.min.css" rel="stylesheet">
  <link href="index.css" rel="stylesheet">
  <script src="asset/js/moment.min.js"></script>
  <script src="asset/js/jquery.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->

  <script src="asset/js/popper.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src='asset/fullcalendar-6.1.10/dist/index.global.min.js'></script>
  <script src="asset/vue2/vue.js"></script>
  <style>
    .fc-col-header {
      background: #9cd26d;
      height: 8em;
      width: 8em;
    }

    .fc .fc-daygrid-day-top {
      font-size: 1.3rem;
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

    /* .fc-theme-standard td,
    .fc-theme-standard th {
      border: none;
    } */

    .fc-day-disabled {
      opacity: 0;
    }

    :root {
      --fc-border-color: #e8e8e8;
    }

    td.fc-day {
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
<?php include 'headerindex.php'; ?>

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
    const app = new Vue({
      el: '#app',
      data: {
        modal1_datas: [],
      }
    });
    // console.log('app : ', app);
    var mockup_events = []; // เก็บข้อมูลจำนวนรายการแต่ละห้องในหน้า ปฏิทิน

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'th',
        showNonCurrentDates: false,
        initialView: 'dayGridMonth',
        navLinks: true,
        aspectRatio: 2,
        height: '100%',
        contentHeight: 'auto',
        navLinkDayClick: function(date, jsEvent) {
          // alert('DayClick ' + date);
          // var a = moment(date).locale('th').add(543, 'years').format('D MMMM YYYY')
          // document.getElementById("Date").innerHTML = (a);
          // $('#myModal1').modal('show');

          showModalData(date, null);

        },
        eventClick: function(info) {
          // alert('ID: ' + info.event.id + ' Start: ' + info.event.start);
          // $('#myModal2').modal('show');
          // $('#myModal1').modal('show');

          showModalData(info.event.start, info.event);
        }
      });
      calendar.render();

      loadEventList();

      function loadEventList() {
        console.log('loadEventList - start');
        mockup_events = [{
          RoomID: 0,
          Date: '2024-02-14',
          RoomName: 'OPD ชั้น 8',
          EventTotal: 2
        }, {
          RoomID: 1,
          Date: '2024-02-14',
          RoomName: 'สุรินทร์ ชั้น 6',
          EventTotal: 5
        }, {
          RoomID: 0,
          Date: '2024-02-15',
          RoomName: 'OPD ชั้น 8',
          EventTotal: 1
        }];

        // for(var i = 0; i < mockup_events.length; i++){
        //   const item = mockup_events[i];
        // }

        mockup_events.forEach(item => {
          calendar.addEvent({
            title: `${item.RoomName} (${item.EventTotal})`,
            start: item.Date,
            allDay: true,
            backgroundColor: '#b2ebf2',
            textColor: '#000',
            id: item.RoomID,
          });
        });
      }

      function showModalData(date, event = null) {
        console.log('Date : ', date);
        console.log('Event : ', event);
        var _date = moment(date).format('YYYY-MM-DD');
        var eventTotal = 0;
        if (event != null) {
          eventTotal = mockup_events.filter(e => e.Date == _date && e.RoomID == event.id)
            .map(e => e.EventTotal)
            .reduce((sum, number) => {
              return sum + number
            }, 0);
        } else {
          eventTotal = mockup_events.filter(e => e.Date == _date)
            .map(e => e.EventTotal)
            .reduce((sum, number) => {
              return sum + number
            }, 0);
        }
        console.log('eventTotal : ', eventTotal);
        app.modal1_datas = [];

        for (var i = 0; i < eventTotal; i++) {
          app.modal1_datas.push({
            id: 1,
            name: 'ประชุมวิชาการ "Covid vaccine"',
            RoomName: 'ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์',
            StartDate: ' 14 ก.พ. 67	เวลา 09.00',
            EndDate: '14 ก.พ. 67	เวลา 16.30',
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
          });
        }
        $('#myModal1').modal('show');
      }

    });

    // const app1 = new Vue({
    //   el: '#app1',
    //   data: {
    //     modal1_datas: [{
    //       id: 1,
    //       name: 'ประชุมวิชาการ "Covid vaccine"',
    //       RoomName: 'ห้องประชุมสุรินทร์-สมพร โอสถานุเคราะห์',
    //       StartDate: '14 ก.พ. 67 เวลา 09.00',
    //       EndDate: '14 ก.พ. 67	เวลา 16.30',
    //       NumberAttendees: '20',
    //       LevelName: 'ปกติ',
    //       PrefixName: 'นาย',
    //       FirstName: 'ดาบ',
    //       LastName: 'แสงเดือน',
    //       Position: 'แพทย์',
    //       Department: 'อายุรกรรม',
    //       InternalPhoneNumber: '1234',
    //       SelfPhoneNumber: '0123456789',
    //       PatternName: 'ห้องเรียน'
    //     }, ],
    //   }
    // });
  </script>

</body>

</html>