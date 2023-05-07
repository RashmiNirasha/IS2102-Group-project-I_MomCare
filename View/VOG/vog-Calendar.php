<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if(isset($_SESSION['email'])){ 
    include '../../Assets/Includes/header_pages.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Calendar</title>
    <link rel="stylesheet" href="../../Assets/Css/style-common.css">
    <style><?php //include '../../Assets/Css/style-common.css'; ?></style> 
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid', 'interaction' ],
            events: [
            {
                title: 'Event 1',
                start: '2022-05-10'
            },
            {
                title: 'Event 2',
                start: '2023-04-25',
                end: '2023-04-27'
            }
            ]
        });
        calendar.render();
        });
    </script>
</head>
<body>
    <div>
        <h1>My Calendar</h1>
    </div>
    <div class="calender">
        <div id='calendar'></div> 
    </div>
</body>
</html>
<?php 
    }
?>
