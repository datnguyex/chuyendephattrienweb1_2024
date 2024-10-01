<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; 
$id = NULL;

if (!empty($_GET['id'])) {
    $user_id = base64_decode($_GET['id']);
    $userModel->deleteUserById($user_id);
}
header('location: list_users.php');
?>