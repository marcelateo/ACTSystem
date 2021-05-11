
<!-- before going to index page request login first -->
<?php
$page = 1;
include "header.php";
session_start();

if (!isset($_SESSION['AdminLoginId'])) {
  header("location: AdminLogin.php");
}
$query = "SELECT * from events";
$data = mysqli_query($con, $query);

$query4 = "SELECT * from staff";
$data4 = mysqli_query($con, $query4);

$query6 = "SELECT * from rooms";
$data6 = mysqli_query($con, $query6);

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
  
  <!-- logout -->
<form align= "right" method="POST">
<button name= "Logout">LOG OUT</button>
</form>
<!-- after click logout it direct to login page -->
<?php
if(isset($_POST['Logout']))
{
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
            <th scope="col">Event</th>
            <th scope="col">Date and Time</th>
            <th scope="col">Type</th>
            <th scope="col">Lecturer</th>
            <th scope="col">Room</th>
            <th scope="col">Floor</th>
          </tr>
        </thead>
        <tbody>    <?php while ($row = mysqli_fetch_array($data)) {
            $query2 = "SELECT staffName from staff WHERE id=$row[5]";
            $data2 = mysqli_query($con, $query2);
            $row2 = mysqli_fetch_array($data2);
            $lecturerName = $row2[0];
            $query3 = "SELECT roomname, floor from rooms WHERE id=$row[4]";
            $data3 = mysqli_query($con, $query3);
            $row3 = mysqli_fetch_array($data3);
            $roomName = $row3[0];
            $floor = $row3[1];
          ?>
            <tr>
              <td><?= $row[1] ?></td>
              <td><?= $row[3] ?></td>
              <td><?= $row[2] ?></td>
              <td><?= $lecturerName ?></td>
              <td><?= $roomName ?></td>
              <td><?= $floor ?></td>
            </tr>
          <?php } ?></tbody>
      </table>
    </div>
    <br>
    <br>
    <h2>Lecture Rooms</h2>
    <div class="lecture-rooms-container">
    <?php while ($row = mysqli_fetch_array($data6)) { ?>
        <div class="lecture-room">
          <p><strong>Room: <?= $row[1] ?></strong></p>
          <p>Type: <?= $row[3] ?></p>
          <p>Floor: <?= $row[2] ?></p>
        </div>
      <?php } ?>
    </div>
    <br>
    <br>
    <h2>Faculty Staff Schedule</h2>
    <div class="faculty-container">
      <table class="faculty">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Room</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($data4)) {
            $query5 = "SELECT roomname from rooms WHERE id=$row[3]";
            $data5 = mysqli_query($con, $query5);
            $row5 = mysqli_fetch_array($data5);
            $roomName = $row5[0];
          ?>
            <tr>
              <td><?= $row[1] ?></td>
              <td><?= $row[2] ?></td>
              <td><?= $roomName ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php include "footer.php"; ?>
</body>

</html>
