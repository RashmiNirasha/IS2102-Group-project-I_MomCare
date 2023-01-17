<?php

?>

<html>

import VanillaCalendar from '@uvarov.frontend/vanilla-calendar';



<head>
    <title>Calendar</title>
    <link rel="stylesheet" href="build/vanilla-calendar.min.css" />
    <script src="build/vanilla-calendar.min.js"></script>
</head>

<body>
<div class="vanilla-calendar">

const calendar = new VanillaCalendar({
      HTMLElement: document.querySelector('.vanilla-calendar'),
});
calendar.init();

</div>
</body>



</html>

