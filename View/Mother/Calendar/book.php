<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $event = $_POST["event"];
  $date = $_POST["date"];
  $time = $_POST["time"];

  // TODO: Add validation and sanitization of input data

  // Save booking to file or database
  // TODO: Add code to save booking

  // Redirect to thank you page
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book Event</title>
    <style><?php include "style.css" ?></style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>

  </head>
  <body>
    <div class="wrapper">
      <header>
        <h1>Book Event</h1>
      </header>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="event">Event:</label>
        <input type="text" id="event" name="event" required><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required><br>

        <button type="submit">Book</button>
      </form>
    </div>
  </body>
</html>
