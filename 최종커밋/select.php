<?php
    $conn = mysqli_connect(
        'localhost', 
        'root', 
        'infocar1588*', 
        'opentutorials'
    ); //DB연동 변수 담기
    
    //1 row
    echo "<h1>single row</h1>";
    $sql = "
        select * from topic where id =11;
    ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo '<h2>' . $row['title'] . '</h2>';
    echo $row['description'];


    // all row
    echo "<h1>multi row</h1>";
    $sql = "
        select * from topic ;
    ";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
        echo '<h2>' . $row['title'] . '</h2>';
        echo $row['description']; 
    } 
    //모든 행을 가져오게끔 모든행은 row에 담고 row에 출력
    //$row = mysqli_fetch_array($result) 전체가 row값
    
?>