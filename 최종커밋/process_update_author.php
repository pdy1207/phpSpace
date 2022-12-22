<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
    $conn = mysqli_connect(
        'localhost', 
        'root', 
        'infocar1588*', 
        'opentutorials'
    );
    settype($_POST['id'], 'integer'); // settype에 의해서 id는 무조권 정수가 된다.
    $filtered = array(
        'id' => mysqli_real_escape_string($conn, $_POST['id']), //한번더 감싸줌.
        'name' => mysqli_real_escape_string($conn, $_POST['name']), 
        'profile' => mysqli_real_escape_string($conn, $_POST['profile'])
    );
    $sql = "
        update author
        set
            name = '{$filtered['name']}',
            profile = '{$filtered['profile']}'
        where
            id = {$filtered['id']}
    ";
    $result = mysqli_multi_query($conn, $sql);//단 하나의 sql문을 실행함.
    if($result === false){
        echo '저장하는 과정에서 문의가 생겼습니다. 관리자에게 문의를 주세요';
        error_log(mysqli_error($conn));
    } else{
    header('Location: author.php?=' . $filtered['id']);
    }

?>