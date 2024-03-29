<?php include('server1.php');
$page = 3;
include "header.php";
//fetch the record to be updated
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $edit_state = true;
  $rec = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
  $record = mysqli_fetch_array($rec);
  $staffNumber = $record[0];
  $staffName = $record['staffName'];
  $email = $record['email'];
  $id = $record['id'];
}

?>

<html>

<head>
  <title>Faculty / Staff</title>
  <link rel="stylesheet" type="text/css" href="css/stylepage.css">

</head>

<body style="margin: 0; border: 0">
  <?php include "sidebar.php"; ?>
  <div style="height: 700px; font-family: Helvetica; margin-left: 350px;">
    <table>
      <thead>
        <tr>
          <th>Staff Number</th>
          <th>Staff Name</th>
          <th>Email</th>
          <th colspan="3">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_array($results)) { ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row['staffName']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
              <a class="edit_btn" href="Staff.php?edit=<?php echo $row['id']; ?>">Edit</a>
            </td>
            <td>
              <a class="del_btn" href="server1.php?del=<?php echo $row['id']; ?>">Delete</a>
            </td>
          </tr>

        <?php } ?>

      </tbody>
    </table>
    <form method="POST" action="server1.php">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="input-group">
        <label>Staff Number</label>
        <input type="hidden" name="staffNumber" value="<?php echo $staffNumber; ?>">
      </div>
      <div class="input-group">
        <label>Name</label>
        <input type="text" name="staffName" value="<?php echo $staffName; ?>">
      </div>
      <div class="input-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="input-group">
        <?php if ($edit_state == false) : ?>
          <button type="submit" name="save" class="btn">Save</button>
        <?php else : ?>
          <button type="submit" name="update" class="btn">Update</button>
        <?php endif ?>

      </div>
    </form>
  
  </div>
  <?php include "footer.php"; ?>
</body>


</html>
