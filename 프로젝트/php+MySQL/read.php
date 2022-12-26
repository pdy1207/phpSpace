<?php
    $link = mysqli_connect('localhost', 'root', '', 'grade');
    $sql = "
    SELECT * FROM gradeInfo;
    ";
    $result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>PHP_MySQL 연동</title>
        <!-- update js -->
        <script type="text/javascript">
            function update(id, name, python, java, c){
                document.getElementById("update_id").value = id;
                document.getElementById("update_name").value = name;
                document.getElementById("update_python").value = python;
                document.getElementById("update_java").value = java;
                document.getElementById("update_c").value = c;
            }            
        </script>
    </head>
    <body>
        <div><!-- table div -->
            <table border="1" style="margin: 0 auto;">
                <tr style="background-color: #D8D8D8; text-align: center;">
                    <td style="width: 70px;">이름</td>
                    <td style="width: 70px;">파이썬</td>
                    <td style="width: 70px;">자바</td>
                    <td style="width: 70px;">C/C#</td>
                    <td style="width: 70px;">수정</td>
                    <td style="width: 70px;">삭제</td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $filtered = array(
                        'id' => htmlspecialchars($row['id']),
                        'name' => htmlspecialchars($row['name']),
                        'python' => htmlspecialchars($row['python']),
                        'java' => htmlspecialchars($row['java']),
                        'c' => htmlspecialchars($row['c'])
                    )
                    ?>
                <tr style="text-align: center;">
                    <td><?= $filtered['name'] ?></td>
                    <td><?= $filtered['python'] ?></td>
                    <td><?= $filtered['java'] ?></td>
                    <td><?= $filtered['c'] ?></td>
                    <td>
                        <input type="button" name="" value="수정" 
                            onclick="update('<?= $filtered['id'] ?>','<?= $filtered['name'] ?>',
                            '<?= $filtered['python'] ?>','<?= $filtered['java'] ?>','<?= $filtered['c'] ?>')">
                    </td>
                    <td>
                        <form method="post" class="" action="./process/process_delete.php">
                            <input type="hidden" name="id" value="<?= $filtered['id'] ?>">
                            <input type="submit" value="삭제">
                        </form>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table> <!-- table div -->
        </div>
        <table style="margin: 0 auto;">
            <tr>
                <td><!-- grade create -->
                    <div style="border : 1px solid black; width: 150px; height: 180px;">
                        <form action="./process/process_create.php" method="post">
                            <table border="1" style="margin : 0 auto;">
                                <caption>성적입력</caption>

                                <tr>
                                    <td>이름</td>
                                    <td><input style="width: 50px;" type="text" name="name"></td>
                                </tr>

                                <tr>
                                    <td>파이썬</td>
                                    <td><input style="width: 50px;" type="text" name="python"></td>
                                </tr>

                                <tr>
                                    <td>자바</td>
                                    <td><input style="width: 50px;" type="text" name="java"></td>
                                </tr>

                                <tr>
                                    <td>C/C#</td>
                                    <td><input style="width: 50px;" type="text" name="c"></td>
                                </tr>
                            </table>
                            <div style="text-align: center;">
                                <input type="submit" value="성적입력">
                            </div>
                        </form>
                    </div>
                </td><!-- grade create -->
                <td>
                    <div style="border : 1px solid black; width: 150px; height: 180px;"> <!-- update div -->
                        <form action="./process/process_update.php" method="post">
                            <table border="1" style="margin: 0 auto;">
                                <caption>성적수정</caption>
                                <input type="hidden" name="id" id="update_id" value="">

                                <tr>
                                    <td>이름</td>
                                    <td><input style="width: 50px;" type="text" name="name" id="update_name" value=""></td>
                                </tr>

                                <tr>
                                    <td>파이썬</td>
                                    <td><input style="width: 50px;" type="text" name="python" id="update_python" value=""></td>
                                </tr>

                                <tr>
                                    <td>자바</td>
                                    <td><input style="width: 50px;" type="text" name="java" id="update_java" value=""></td>
                                </tr>

                                <tr>
                                    <td>C/C#</td>
                                    <td><input style="width: 50px;" type="text" name="c" id="update_c" value=""></td>
                                </tr>
                            </table>
                            <div style="text-align: center;">
                                <input type="submit" value="성적수정">
                            </div>
                        </form><!-- form -->
                    </div><!-- grade update div -->
                </td><!-- grade update td -->
            </tr>
        </table> <!-- create update table -->
        
    </body>
</html>