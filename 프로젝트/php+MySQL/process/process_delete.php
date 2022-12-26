<?php
    $link = mysqli_connect('localhost', 'root', '', 'grade');
    $filtered = array(
        'id'=>mysqli_real_escape_string($link, $_POST['id'])  
    );

    $sql = "
        DELETE FROM gradeInfo
        WHERE id = {$filtered['id']};
    ";
    $result = mysqli_query($link, $sql);

    if($result === false){
        echo "저장하는 과정에서 문제가 발생했습니다.";
    } else{
        header('Location:../read.php'); 
    }
?>