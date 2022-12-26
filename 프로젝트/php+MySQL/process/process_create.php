<!-- create 기능 끝 -->
<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
        $link = mysqli_connect('localhost', 'root', '', 'grade');

        $filtered = array(
            'name'=>mysqli_real_escape_string($link, $_POST['name']),
            'python'=>mysqli_real_escape_string($link, $_POST['python']),
            'java'=>mysqli_real_escape_string($link, $_POST['java']),
            'c'=>mysqli_real_escape_string($link, $_POST['c'])
        );

        $sql ="
            INSERT INTO gradeinfo
            (name, python, java, c)
            VALUES (
                '{$filtered['name']}',
                '{$filtered['python']}',
                '{$filtered['java']}',
                '{$filtered['c']}'
                )
        ";

        $result = mysqli_query($link, $sql);
        if($result === false){

            echo '저장하는 과정에서 문제가 생겼습니다.';
        } else {
            header('Location: ../read.php');
        }
?>