
<!-- before going to index page request login first -->
<?php
$page = 1;
include "header.php";
session_start();

if (!isset($_SESSION['AdminLoginId'])) {
  header("location: AdminLogin.php");
}

?>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> ACT System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- style for three pages when loading on the same page -->

</head>

<body>
  <!-- header where all the admin profile info is shown -->

  <!-- after click logout it direct to login page -->
  <?php
  if (isset($_POST['Logout'])) {
    session_destroy();
    header("location: AdminLogin.php");
  }
  ?>

  <!-- this side bar with room,events and faculty buttons linked to their pages -->
  <?php include "sidebar.php"; ?>
  <!-- right center of the admin main page where the important info should appear -->
  <div id="data">
    <h2>Classrooms Overview</h2>
    <div class="classrooms-container">
      <table class="classrooms">
        <thead>
          <tr>
            <th scope="col">Course/Year</th>
            <th scope="col">Date and Time</th>
            <th scope="col">Assessment Title</th>
            <th scope="col">Lecturer</th>
            <th scope="col">Room</th>
            <th scope="col">Floor</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
    <br>
    <br>
    <h2>Lecture Rooms</h2>
    <div class="lecture-rooms-container">
      <div class="lecture-room-1">
        <p><strong>Room: Wilde</strong></p>
        <p>Lecture: name</p>
        <p>Email: staff@cct.ie</p>
        <p>Date/Time: Friday 12:00 - 14:30</p>
      </div>
      <div class="lecture-room-2"></div>
      <div class="lecture-room-3"></div>
    </div>
    <br>
    <br>
    <h2>Faculty Staff Schedule</h2>
    <div class="faculty-container">
      <table class="faculty">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Date and Time</th>
            <th scope="col">Room</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
  <?php include "footer.php"; ?>
</body>

</html>
