<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
    $conn = mysqli_connect(
        'localhost', 
        'root', 
        'infocar1588*', 
        'opentutorials'
    );
    print_r($_POST);
    $filtered = array(
        'name' => mysqli_real_escape_string($conn, $_POST['name']),         
        'profile' => mysqli_real_escape_string($conn, $_POST['profile'])        
    );
    $sql = "
        INSERT INTO author 
            (name, profile)
        VALUES(
            '{$filtered['name']}',
            '{$filtered['profile']}'
        )       
    ";    
    $result = mysqli_multi_query($conn, $sql);//단 하나의 sql문을 실행함.
    if($result === false){
        echo '저장하는 과정에서 문의가 생겼습니다. 관리자에게 문의를 주세요';
        error_log(mysqli_error($conn));
    } else{
        echo '성공하였습니다 <a href="author.php">돌아가기</a>';
    }

?>