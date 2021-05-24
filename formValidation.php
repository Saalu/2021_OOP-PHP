<?php

$nameError = '';
$emailError = '';

if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        $nameError = 'Name is required';
    }else{
        $name=Test_User_Input($_POST['name']);
    }

    if(empty($_POST['email'])){
        $emailError = 'Email is required';
    }else{
        $email=Test_User_Input($_POST['email']);
    }


    
    function Test_User_Input($data){
        return $data;
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Validation</h1>
    <form action="formValidation.php" method='post'>
        <div class="form-group">
            <label >Name</label>
            <input type="text" name="name" id="" value="">*
            <?php echo $nameError ?>
        </div> <br>
        <div class="form-group">
            <label >Email</label>
            <input type="text" name="email" id="" value="">*
            <?php echo $emailError ?>
        </div><br>
        <div class="form-group">
            <label >Male</label>
            <input type="radio" name="gender" id="" value="male">
            <label >Female</label>
            <input type="radio" name="gender" id="" value="female">
        </div><br>
        <input type="submit" name="submit" value="Submit Info">
    </form>
</body>
</html>