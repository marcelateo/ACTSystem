<?php 
include 'connection.php';
?>

<html>
<head>
<title>Events Schedule</title>    
<link rel="stylesheet" type="text/css" href="stylepage.css"> 
    
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Events</th>
        <th>Type</th>
        <th>Date/Time</th>
          <th>Room Name</th>
          <th>Staff Name</th>
        <th colspan="5">Action</th>
        </tr>
      </thead>
    <tbody>
      <tr>
        <td>Network and Switching</td>
        <td>Regular Class</td>
        <td>14/02/2021 15:00:00</td>
          <td>Yale</td>
          <td>Greg</td>
        <td>
          <a href="#">Edit</a>
          </td>
          <td>
          <a href="#">Delete</a>
          </td>
        </tr>    
      </tbody>
    </table>  
    <form method= "post" action= "#">
    <div class="input-group">
        <label>Event</label>
        <input type="text" name="event">
        </div>
         <div class="input-group">
        <label>Type</label>
        <input type="text" name="eventtype">
        </div>
         <div class="input-group">
        <label>Datetime</label>
        <input type="text" name="datetime">
        </div>
        <div class="input-group">
        <label>Room Name</label>
        <input type="text" name="roomname">
        </div>
        <div class="input-group">
        <label>Staff Name</label>
        <input type="text" name="staffName">
        </div>
         <div class="input-group">
        <button type= "submit" name= "save" class="btn">Save</button>        
        </div>
    </form>
    
     <div>
    <a href="index.php" class="button">Home</a>
    
    </div>
    
</body>


</html>
