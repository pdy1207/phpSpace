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

        $article = array(
            'title' => 'Welcome',
            'description' => 'Hello, web'
        );  //id가 없을때에 기본값 

    $update_link = '';
    $delete_link = ''; //삭제
    $author = '';
    // id 에 따라 본문 내용 가져오기
    if (isset($_GET['id'])) { //id값이 있어야만 실행.
        $filtered_id = mysqli_real_escape_string($conn, $_GET['id']); //sql 주입공격을 막아줌.
        $sql = "select * from topic left join author on topic.author_id = author.id 
        where topic.id={$filtered_id}";        
        $result = mysqli_query($conn, $sql);        
        $row = mysqli_fetch_array($result);
            
        $article['title'] = htmlspecialchars( $row['title']);
        $article['description'] = htmlspecialchars($row['description']);
        $article['name'] = htmlspecialchars($row['name']);

        $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
        //아이디가 있어야 수정이 가능하니!
        $delete_link = '
            <form action="process_delete.php" method="post">
                <input type="hidden" name="id" value="'.$_GET['id'].'"/>
                <input type="submit" value="delete"/>
            </form>
        ';
            $author = "<p>by {$article['name']}</p>";
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
        <p><a href="author.php">author</a></p>
        <ol><!-- $result === $sql , $conn 등 담고 결과를 낑겨넣기 -->
            <?= $list;?>
        </ol>
        <a href="create.php">create</a>
        <?=$update_link?>
        <?=$delete_link?>
        <h2><?= $article['title']?></h2>
        <?=$article['description'] ?>
        <?=$author?>
    </body>
</html>
