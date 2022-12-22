<?php
    $conn = mysqli_connect(
        'localhost', 
        'root', 
        '', 
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
            $list = $list."<li><a 
            href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
        }

        $article = array(
            'title' => 'Welcome',
            'description' => 'Hello, web'
        );  //id가 없을때에 기본값 

    $update_link = '';

    // id 에 따라 본문 내용 가져오기
    if (isset($_GET['id'])) { //id값이 있어야만 실행.
        $filtered_id = mysqli_real_escape_string($conn, $_GET['id']); //sql 주입공격을 막아줌.
        $sql = "select * from topic where id={$filtered_id}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $article['title'] = htmlspecialchars( $row['title']);
        $article['description'] = htmlspecialchars($row['description']);

        $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
        //아이디가 있어야 수정이 가능하니!
    }

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
        <form action="process_update.php" method="POST">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <!-- 데이터 바인딩 하려고 낑겨넣기 -->
            <p><input type="text" name="title" placeholder="Title" value="<?=$article['title']?>"/></p>
            <p><textarea name="description" placeholder="description"><?=$article['description']?></textarea></p>
            <!-- 데이터 바인딩 하려고 낑겨넣기 -->
            <p><input type="submit" /></p>
        </form>   
    </body>
</html>

<!-- 
    update 하려면 현재 선택되어있는것에 대하여 form에 선택되어있어야함.
    즉, 글을 가져오는게 필요함
-->
