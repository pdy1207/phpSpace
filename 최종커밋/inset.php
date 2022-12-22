<?php
   $conn = mysqli_connect("localhost", "root", "infocar1588*","opentutorials");

    /**  데이터베이스 서버, username, password, 스키마 데이터베이스 이름
    *    이러한 비밀번호 쓰면안됨. 1111x 코드에 박는것도x 
    */
    $sql = "
        INSERT INTO topic 
        (title, description, created)
        VALUE(
            'MySQL',
            'MySQL is..',
            NOW()
        )
        "; //sql쿼리문 변수에 담기

    $result = mysqli_query($conn, $sql); //sql db를 변수에 담고 거짓이면 ↓
    if($result === false){
        echo mysqli_error($conn); // sql query 문 에러 잡아줌
    }

?>