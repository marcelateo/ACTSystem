<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<link rel="stylesheet" href="css/sidebar.css">

<div id="sidebar">
    <img src="./img/logo.png" width="280px" alt="">
    <ul>
        <li class=<?= $page == 1 ? "active" : "" ?>><a href="index.php"><i class="fas fa-th-large"></i>Dashboard</a></li>
        <li class=<?= $page == 2 ? "active" : "" ?>><a href="Schedule.php"><i class="fas fa-business-time"></i>Schedule Event</a> </li>
        <li class=<?= $page == 3 ? "active" : "" ?>><a href="Staff.php"><i class="fas fa-id-card"></i>Faculty Staff</a> </li>
        <li class=<?= $page == 4 ? "active" : "" ?>><a href="Room.php"><i class="fas fa-kaaba"></i>Room </a></li>
        <li class=<?= $page == 5 ? "active" : "" ?>><a href="qrcode.php"><i class="fas fa-qrcode"></i>Generate QR Code</a></li>

    </ul>

    <div class="settings">
        <p>Help Center</p>
        <i class="fas fa-cogs"></i>
        <p>Settings</p>
    </div>
</div>
