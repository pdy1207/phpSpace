<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <title>리스트형 게시판</title>
    <link rel="stylesheet" href="css/common.css">    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>대재목</h1>
        <nav>메뉴바</nav>
    <?php
        if ($_SESSION['userly'] != 0){
            echo "<a href='logout.php'>로그아웃</a>";
        }else{
            echo "<a href='login.php'>로그인</a>";
            echo "<a href='join.php'>회원가입</a>";
        }
    ?>
    </header>
    <section>

    </section>
    <script src="script/script.js"></script>
</body>
</html>