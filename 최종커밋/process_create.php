<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
    $conn = mysqli_connect(
        'localhost', 
        'root', 
        '', 
        'opentutorials'
    );
    print_r($_POST);
    $filtered = array(
        'title' => mysqli_real_escape_string($conn, $_POST['title']), 
        //mysqli_real_escape_string 예방접종 즉 쿼리문 직접적인것 막기.
        //sql에서 \는 문자로 알게됨.
        'description' => mysqli_real_escape_string($conn, $_POST['description']),
        'author_id' => mysqli_real_escape_string($conn, $_POST['author_id'])
    );
    $sql = "
        insert into topic
        (
            title, 
            description, 
            created,
            author_id
        )values(
            '{$_POST['title']}',
            '{$_POST['description']}',
            NOW(),
            {$filtered['author_id']}
        )
    ";    
    $result = mysqli_multi_query($conn, $sql);//단 하나의 sql문을 실행함.
    if($result === false){
        echo '저장하는 과정에서 문의가 생겼습니다. 관리자에게 문의를 주세요';
        error_log(mysqli_error($conn));
    } else{
    echo '성공하였습니다 <a href="index.php">돌아가기</a>';
    }

?>
