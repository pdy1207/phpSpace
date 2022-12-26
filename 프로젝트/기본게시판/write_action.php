<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'study') or die("연결실패");

    $id = $_GET['name'];                //Writer
    $pw = $_GET['password'];                  //Password
    $title = $_GET['title'];            //Title
    $content = $_GET['content'];        //Content
         //Date

    $URL = './index.php';               //return URL


    $sql = "
        INSERT INTO board(
            number, 
            title,
            content,
            date,            
            id,
            password
        )
        VALUES(
            null, 
            '$title',
            '$content',
            NOW(),            
            '$id',
            '$pw'
        )
    ";
    // 숫자는 자동으로 올라가기 때문에 null값
    $result = $conn->query($sql);

if ($result) {
?>
        <script>
            alert("<?php echo "글이 등록 되었습니다. " ?>");
            location.replace("<?php echo $URL ?>");
        </script>
    <?php
            } 
            else {
                echo "FAIL";
            }

        mysqli_close($conn);


?>