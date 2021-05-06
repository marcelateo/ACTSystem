<?php
include 'connection.php';
$page = 4;
include "header.php";
//edit query
$edit_state = true;
if (isset($_GET['edit'])) {

  $editquery = "Select * from rooms where id =" . $_GET['edit'] . "";

  $editdata = mysqli_query($con, $editquery);

  $r = mysqli_fetch_array($editdata);
}
?>

<html>

<head>
  <title>ROOMS</title>
  <link rel="stylesheet" type="text/css" href="stylepage.css">

</head>

<body style="margin: 0; border: 0">
  <?php include "sidebar.php"; ?>
  <div style="height: 700px; font-family: Helvetica; margin-left: 350px;">
    <table>
      <thead>
        <tr>
          <th>Room Name</th>
          <th>Floor</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $query = "SELECT * from rooms";
        $data = mysqli_query($con, $query);
        $row = mysqli_fetch_array($data);
        while ($row = mysqli_fetch_array($data)) {
        ?>
          <tr>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td>
              <a href="Room.php?edit=<?php echo $row[0] ?>">Edit</a>
            </td>
            <td>
              <a href="server3.php?del=<?php echo $row[0] ?>">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php if (isset($_GET['edit'])) { ?>
      <form method="post" action="./server3.php">
        <div class="input-group">
          <label>Room Name</label>
          <input type="hidden" value="<?php echo $r[0] ?>" name="id">
          <input type="text" value="<?php echo $r[1] ?>" name="name">
        </div>
        <div class="input-group">
          <label>Floor</label>
          <input value="<?php echo $r[2] ?>" type="text" name="floor">
        </div>
        <div class="input-group">
          <label>Type</label>
          <select name="type" value="<?php echo $r[3] ?>">
            <option <?php if ($r[3] == "hall") echo "selected" ?> value="hall">Hall</option>
            <option <?php if ($r[3] == "classroom") echo "selected" ?> value="classroom">Class Room</option>
            <option <?php if ($r[3] == "auditorium") echo "selected" ?> value="auditorium">Auditorium</option>
          </select>
        </div>
        <?php echo $row[2] ?>
        <div class="input-group">
          <?php if ($edit_state == false) : ?>
            <button type="submit" name="save" class="btn">Save</button>
          <?php else : ?>
            <button type="submit" name="update" class="btn">Update</button>
          <?php endif ?>

        </div>
      </form>
    <?php } else { ?>
      <form method="post" action="./server3.php">
        <div class="input-group">
          <label>Room Name</label>
          <input type="text" name="name">
        </div>
        <div class="input-group">
          <label>Floor</label>
          <input type="text" name="floor">
        </div>
        <div class="input-group">
          <label>Type</label>
          <select name="type">
            <option value="hall">Hall</option>
            <option value="classroom">Class Room</option>
            <option value="auditorium">Auditorium</option>
          </select>
        </div>
        <div class="input-group">
          <?php if ($edit_state == true) : ?>
            <button type="submit" name="save" class="btn">Save</button>
          <?php else : ?>
            <button type="submit" name="update" class="btn">Update</button>
          <?php endif ?>

        </div>
      </form>

    <?php } ?>
    <div>
      <a href="index.php" class="button">Home</a>

    </div>
  </div>
  <?php include "footer.php"; ?>
</body>


</html>
