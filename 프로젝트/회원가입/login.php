<?php
include "conn.php";
    if(isset($_POST['id']) && isset($_POST['pw'])){
        $username = $_POST['id'];
        $password = $_POST['pw'];

        $conn = mysqli_connect('localhost', 'root', '', 'study');
        $sql = "SELECT * FROM study where login_id = '$username' and login_pw = '$password';";
        
        if($result = mysqli_fetch_array(mysqli_query($conn, $sql))){
            header('Location: mainpage.php');
        } else{
            echo "<script>alert('등록되지 않은 사용자입니다.')</script>";
        }
        mysqli_close($conn);
    }
?>