<?php
    $link = mysqli_connect('localhost', 'root', '', 'grade');

    $filtered = array(
        /* 
        $_POST 로 넘어오는 인자값들을 직접 받지않고 
        mysqli_real_escape_string 을 통해 filtering 된 인자로 받아준다.
        */
        'id' => mysqli_real_escape_string($link, $_POST['id']),
        'name' => mysqli_real_escape_string($link, $_POST['name']),
        'python' => mysqli_real_escape_string($link, $_POST['python']),
        'java' => mysqli_real_escape_string($link, $_POST['java']),
        'c' => mysqli_real_escape_string($link, $_POST['c'])
    );

    $sql = "
        UPDATE gradeinfo
        SET 
            name = '{$filtered['name']}',
            python = '{$filtered['python']}',
            java = '{$filtered['java']}',
            c = '{$filtered['c']}'
        WHERE
            id = '{$filtered['id']}';
    ";

        $result = mysqli_query($link, $sql);

        if($result === false){
            echo "저장하는 과정에서 문제가 생겼습니다.";
        }else {
            header('Location: ../read.php');
        }
?>