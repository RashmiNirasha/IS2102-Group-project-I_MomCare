<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calendar</title>
    <style><?php include "style.css" ?></style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="script.js" defer></script>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded">chevron_left</span>
          <span id="next" class="material-symbols-rounded">chevron_right</span>
        </div>
      </header>
      <div class="calendar">
        <ul class="weeks">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="days"></ul>
      </div>
    </div>

    <div class="booking-form">
      <form method="POST" action="book.php">
        <label for="event">Event:</label>
        <input type="text" id="event" name="event"><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date"><br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time"><br>

        <button type="submit">Book</button>
      </form>
    </div>

  </body>
</html>
