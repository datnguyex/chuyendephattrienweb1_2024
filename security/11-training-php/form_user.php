<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;

if (!empty($_GET['id'])) {
    $_id = base64_decode($_GET['id']); 
    // $_id = $_GET['id'];
    $user = $userModel->findUserById($_id); 
}


function checkName($name) {
    $lengthName = strlen($name);
    $checkNameLength = $lengthName >= 5 && $lengthName <= 10; 
    $checkName = preg_match('/^[a-zA-Z0-9]+$/',$name);
    

    return $checkNameLength && $checkName ; 
}
function checkPassword($password) {
    $lengthPass = strlen($password);
    $checkLengthPass = $lengthPass >= 5 && $lengthPass <= 15; 
    $checkLowerCase = preg_match('/[a-z]/',$password);
    $checkUpperCase = preg_match('/[A-Z]/', $password); 
    $checkNumber = preg_match('/[0-9]/', $password); 
    $checkSpecialWord = preg_match('/[~!@#$%^&*()]/', $password);

    return $checkLengthPass && $checkLowerCase && $checkUpperCase && $checkNumber && $checkSpecialWord; 
}

if (!empty($_POST['submit'])) {
    print_r($_POST['name']); 
    print_r($_POST['password']); 
    // if(checkName($_POST['name']) == true) {
    //     print_r('Name Hop Le');
    // }
    // if(checkName($_POST['name']) == false) {
    //     print_r('Name ko Hop Le');
    // }
    // if(checkPassword($_POST['password']) == true) {
    //     print_r('password hop le');
    // }
    // else if(checkPassword($_POST['password']) == false) {
    //     print_r('password ko hop le');
    // }
        if (!empty($_id)) {
            if(checkName($_POST['name']) == true && checkPassword($_POST['password']) == true) {
                $userModel->updateUser($_POST);
                header('location: list_users.php');  
            }
            else {
                print_r('Ban nhap khong dung cu phap'); 
            }  
        } else {
            $userModel->insertUser($_POST);
            header('location: list_users.php');
        }
 
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">

            <?php if ($user || !isset($_id)) { ?>
                <div class="alert alert-warning" role="alert">
                    User form
                </div>
                <form method="POST">
                    <input type="hidden" name="id" value="<?php echo $_id ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>
            <?php } else { ?>
                <div class="alert alert-success" role="alert">
                    User not found!
                </div>
            <?php } ?>
    </div>
</body>
</html>