<?php
$page = 2;
include('header.php"');
include('server2.php');

//get is used to get the data from database and allow to be updated
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];

  $edit_state = true;
  $rec = mysqli_query($db, "SELECT * FROM events WHERE id=$id");
  $record = mysqli_fetch_array($rec);

  $event = $record['event'];
  $type = $record['type'];
  $datetime = $record['datetime'];
  $roomID = $record['roomID'];
  $staffID = $record['staffID'];
  $id = $record['id'];
}

?>

<html>

<head>
  <title>Events Schedule</title>
  <link rel="stylesheet" type="text/css" href="css/stylepage.css">

</head>

<body style="margin: 0; border: 0">
  <?php include "sidebar.php"; ?>
  <div style="height: 700px; font-family: Helvetica; margin-left: 350px;">
    <table>
      <thead>
        <tr>
          <th>Events</th>
          <th>Course Category</th>
          <th>Date</th>
          <th>Room</th>
          <th>Staff</th>
          <th colspan="5">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $data = "SELECT e.id , e.event , e.datetime ,e.type , r.roomname , s.staffName FROM events as e INNER JOIN rooms as r on e.roomID = r.id INNER JOIN staff as s ON e.staffID = s.id";
        $q = mysqli_query($db, $data);
        while ($row = mysqli_fetch_array($q)) {
        ?>
          <tr>
            <td><?php echo $row['event']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['datetime']; ?></td>
            <td><?php echo $row['roomname']; ?></td>
            <td><?php echo $row['staffName']; ?></td>
            <td>
              <a class="edit_btn" href="Schedule.php?edit=<?php echo $row['id']; ?>">Edit</a>
            </td>
            <td>
              <a class="del_btn" href="server2.php?del=<?php echo $row['id']; ?>">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <form method="POST" action="server2.php">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="input-group">
        <label>Event</label>
        <input type="text" name="event" value="<?php echo $event; ?>">
      </div>
      <div class="input-group">
        <label>Type</label>
        <input type="text" name="type" value="<?php echo $type; ?>">
      </div>
      <div class="input-group">
        <label>Datetime</label>
        <input type="datetime-local" name="datetime" value="<?php echo $datetime; ?>">
      </div>
      <div class="input-group">
        <label>Room Name</label>
        <select name="roomID" value="<?php echo $roomID; ?>">
          <option value="NaN">Select Staff</option>
          <?php
          $query = "SELECT * FROM `rooms`";
          $result = mysqli_query($db, $query);
          while ($data = mysqli_fetch_array($result)) {
          ?>
            <option <?php if ($data['id'] == $roomID) echo 'selected' ?> value="<?php echo $data['id'] ?>"><?php echo $data['roomname'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group">
        <label>Staff Name</label>
        <select name="staffID" value="<?php echo $staffID; ?>">
          <option value="NaN">Select Staff</option>
          <?php
          $query = "SELECT * FROM `staff`";
          $result = mysqli_query($db, $query);
          while ($data = mysqli_fetch_array($result)) {
          ?>
            <option <?php if ($data['id'] == $staffID) echo 'selected'  ?> value="<?php echo $data['id'] ?>"><?php echo $data['staffName'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group">
        <?php if ($edit_state == false) : ?>
          <button type="submit" name="save" class="btn">Save</button>
        <?php else : ?>
          <button type="submit" name="update" class="btn">Update</button>
        <?php endif ?>

      </div>
    </form>

    <div>
      <a href="index.php" class="button">Home</a>

    </div>
  </div>
  <?php include "footer.php"; ?>
</body>


</html>
