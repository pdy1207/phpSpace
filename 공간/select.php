<?php
$conn = mysqli_connect(
    'localhost', 
    'root', 
    'infocar1588*', 
    'opentutorials');
    //1 row
    echo "<h1>single row</h1>";
    $sql = "select * from topic where id=24"; //모든데이터를 가져오면 큰일남! LIMIT 1000...
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result); //page 소스보기로 깔끔하게 보기
    echo'<h2>'.$row['title'].'</h2>';
    echo $row['description'];


    //all row
    echo "<h1>multi row</h1>";
    $sql = "select * from topic "; 
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
        echo '<h2>' . $row['title'] . '</h2>';
        echo $row['description'];
    }

    /** $row = mysqli_fetch_array($result); 
    echo'<h2>'.$row['title'].'</h2>';
    echo $row['description'];
    
    $row = mysqli_fetch_array($result); 
    echo'<h2>'.$row['title'].'</h2>';
    echo $row['description'];
    
    $row = mysqli_fetch_array($result); 
    echo'<h2>'.$row['title'].'</h2>';
    echo $row['description'];

    $row = mysqli_fetch_array($result);
    var_dump($row);
    또한 이런점은 반복이됨..
  


    //  자리수를 이용해서 데이터를 가져올수도있고 컬럼을 통해 가져올수도있는데
    //  컬럼의 이름을 통해 가져오는 배열을 연관배열 
    //  숫자를 통해서 가져오는것을 배열
      */
?>
