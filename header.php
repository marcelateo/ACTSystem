<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<link rel="stylesheet" href="css/header.css">
<div id="header">

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

    <div class="place-left">
        <i class="fas fa-search"></i>
        <input type="search" name="search" id="search" placeholder="Search Rooms">
    </div>
    <div class="place-right">
        <i class="fas fa-bell fa-2x"></i>
        <i class="fas fa-user-circle fa-2x"></i>
    </div>

</div>
