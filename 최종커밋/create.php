<?php
    $conn = mysqli_connect(
        'localhost', 
        'root', 
        'infocar1588*', 
        'opentutorials'
    ); //DB연동 변수 담기    
    $sql = "
        select * from topic;
    ";
    $result = mysqli_query($conn, $sql);
    $list = '';
        while($row = mysqli_fetch_array($result)){
            //<li><a href=\"index.php?id=11\">MySQL</a></li>
            $escaped_title = htmlspecialchars($row['title']);
            $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
        }

    $sql = "SELECT * FROM author";
    $result = mysqli_query($conn, $sql);
    $select_form = '<select name="author_id">';
    while($row = mysqli_fetch_array($result)){

        $select_form .= '<option value="'.$row['id'].'"
        >' . $row['name'] . '</option>';

    }
    $select_form = $select_form.'</select>' //이거랑 똑같은 방법 → $select_form .= '</select>'
    
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1><a href="index.php"> WEB </a></h1>
        <ol><!-- $result === $sql , $conn 등 담고 결과를 낑겨넣기 -->
            <?= $list;?>
        </ol>
        <form action="process_create.php" method="POST">
            <p><input type="text" name="title" placeholder="Title" /></p>
            <p><textarea name="description" placeholder="description"></textarea></p>
            <?=$select_form?>
            <p><input type="submit" /></p>
        </form>   
    </body>
</html>