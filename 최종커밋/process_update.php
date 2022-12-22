<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
    $conn = mysqli_connect(
        'localhost', 
        'root', 
        '', 
        'opentutorials'
    );
    settype($_POST['id'], 'integer'); // settype에 의해서 id는 무조권 정수가 된다.
    $filtered = array(
        'id' => mysqli_real_escape_string($conn, $_POST['id']), //한번더 감싸줌.
        'title' => mysqli_real_escape_string($conn, $_POST['title']), 
        //mysqli_real_escape_string 예방접종 즉 쿼리문 직접적인것 막기.
        //sql에서 \는 문자로 알게됨.
        'description' => mysqli_real_escape_string($conn, $_POST['description'])
    );
    $sql = "
        update topic
        set
            title = '{$filtered['title']}',
            description = '{$filtered['description']}'
        where
            id = {$filtered['id']}
    ";    
    $result = mysqli_multi_query($conn, $sql);//단 하나의 sql문을 실행함.
    if($result === false){
        echo '저장하는 과정에서 문의가 생겼습니다. 관리자에게 문의를 주세요';
        error_log(mysqli_error($conn));
    } else{
    echo '성공하였습니다 <a href="index.php">돌아가기</a>';
    }

?>
