<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'study') or die("서버 연결 실패");

    $id = $_GET['id'];
    $pw = $_GET['pw'];    

    $date = date('Y-m-d H:i:s');
    
    //입력받은 데이터 DB에 저장
    $sql = "    
        INSERT INTO member(
            id, pw, date, permit
        )
        VALUES (
            '$id',
            '$pw',
            NOW(),
            0
        )
    ";
    $result = $conn->query($sql);

    //저장이 되었다면 (result = true) 가입완료
    if($result){
    ?> <script>
            alert('가입 완료!');
            location.replace('./login.php');
        </script>    
<?php }
        else{
    ?> <script>
            alert("fail");
        </script>
<?php }
    mysqli_close($conn);
?>