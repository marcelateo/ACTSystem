<?php
include 'server.php';
?>
<html>
<head>

<style>
body {
	font-size:19px;
	}
table{
	width:50%;
	margin:30px auto;
	border-collapse: collapse;
	text-align:left;
}
tr{
	border-bottom:1px solid #cbcbcb;
	}
th,td{
	border:none;
	height:30px;
	padding:2px;
}	
tr:hoover{
	backgroung: #F5F5F5;
}
form{
	width:45%;
	margin:50px auto;
	text-align:left;
	padding:20px;
	border:1px solid #bbbbbb;
	border-radius:5px;
}
.input-group{
	margin:10px 0px 10px 0px;
}
.input-group label {
	display:block;
	text-align:left;
	margin:3px;
}
.input-group input{
	height:30px;
	width:93%;
	padding:5px 10px;
	font-szie:16px;
	border-radius:5px;
	border:1px solid gray;
}
.btn{
	padding:10px;
	font-size:15px;
	color:white;
	background:#5F9EA0;
	border:none;
	border-radius:5px;
}
</style>
<title>Faculty Staff</title>

</head>

<body>

<h2>Faculty staff page where you can create, update or delete staff activities</h2>

<table>
<thead>
<tr>
 <th>Staff Name</th>
 <th>Phone</th>
 <th>Email</th>
 <th colspan= "3"> Action</th>
</tr>
</thead>
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td><a href="#"> Edit</a></td>
<td><a href="#">Delete</a></td>
</tr>
</tbody>
</table>

<form method= "POST" action ="server.php">
<div class= "input-group">
<label>Staff Name</label>
<input type ="text" name= "name">
</div>
<div class= "input-group">
<label>Staff Phone</label>
<input type ="text" name= "phone">
</div>
<div class= "input-group">
<label>Staff email</label>
<input type ="text" name= "email">
</div>
<div class= "input-group">
<button type ="submit" name= "save" class= "btn">Save</button>
</div>
</form>
    </body>
</html>