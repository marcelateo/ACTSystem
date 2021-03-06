<?php 
include 'connection.php';
?>

<html>
<head>
<title>Faculty / Staff</title>    
<link rel="stylesheet" type="text/css" href="stylepage.css"> 
    
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Staff Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th colspan="3">Action</th>
        </tr>
      </thead>
    <tbody>
      <tr>
        <td>Greg South</td>
        <td>CCT College</td>
        <td>greg@cct.ie</td>
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
        <label>Name</label>
        <input type="text" name="name">
        </div>
         <div class="input-group">
        <label>Phone</label>
        <input type="text" name="phone">
        </div>
         <div class="input-group">
        <label>Email</label>
        <input type="text" name="email">
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
