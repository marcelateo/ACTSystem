<?php
    $title = Index;
    require_once 'includes/header.php';
?>

    <!--
        - Fist Name
        - Last Name
        - Date of Birthday (Use Datepicker)
        - Specialty (Database Admin, Software Developer, Web Adminstrator, Other)
        - Email Address
        - Contact Number
    -->
    <h1 class="text-center">Registration for IT </h1>

    <form method="get" action="sucess.php">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birthday</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="specialty">Area Of Expertise</label>
            <input type="text" class="form-control" id="specialty" name="specialty">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>            
        </div>
        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>            
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
    <br>
    <br>
    <br>
    <br>
    <?php require_once 'includes/footer.php'; ?>