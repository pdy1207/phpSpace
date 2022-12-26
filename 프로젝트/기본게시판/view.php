<?php header("Content-Type:text/html;charset=utf-8"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <link rel="stylesheet" href="./view.css">
    </head>
    
    <body>
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'study');
            $number = $_GET['number'];
            
            $sql = "
            SELECT 
                    title,
                    content,
                    date,
                    hit,
                    id
            FROM 
                    board
            WHERE 
                    number = $number
            ";
            $result = $conn->query($sql);
            $rows = mysqli_fetch_assoc($result); //한개씩 return해주는 함수
        ?>

        <table class="view_table" align="center">
            <tr>
                <td colspan="4" class="view_title"><?php echo $rows['title']?>
                </td> 
                <!-- colspan 합칠 셀의 개수 -->
            </tr>
            <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['id']?></td>
                <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $rows['hit']?></td>
            </tr>


            <tr>
                <td colspan="4" class="view_content" valign="top">
                    <?php echo $rows['content'] ?>
                </td>
            </tr>

        </table>

        <!-- MODIFY & DELETE -->
        <div class="view_btn">
            <button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>
            <button class="view_btn2" onclick="location.href='./modify.php?number=<?=$number?>$id=<?$_SESSION['userid']?>'">수정</button>
            <button class="view_btn3" onclick="location.href='./delete.php?number=<?=$number?>$id=<?$_SESSION['userid']?>'">삭제</button>
        </div>

    </body>

</html>