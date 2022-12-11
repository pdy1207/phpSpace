<?php
    header('Content-Type:text/html; charset=UTF-8;');

    $conn = mysqli_connect('localhost', 'root','qwer') or die('서버 접속 에러');

    $result = mysqli_select_db('pdy', $conn)or die("DB 선택 에러");

    mysqli_query($conn, "SET SESSION CHARACTER_SET_CONNECTION=utf8");
    mysqli_query($conn, "SET SESSION CHARACTER_SET_RESULTS=utf8");
    mysqli_query($conn, "SET SESSION CHARACTER_SET_CLIENT=utf8");

    session_start(); //세션 시작 (세션을 사용하기 위한 세션기능 켜기)

    if(!isset($_SESSION['userlv'])){
        $_SESSION['userlv'] = 0;        
    }
    include "config.php"; //게시판 설정 값
?>