<!DOCTYPE html>
<html>
<head>
	<title>Hello goorm</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>



    <h1 style="margin-top: 100px;">로그인</h1>
    <form action="login.php" method="get">
        <input type="test" name="id">
        <input type="password" name="password">
        <input type="submit" value="Submit">
    </form> 


	<h1>검색</h1>
    <form action="index.php" method="get">
        <input type="search" name="search" placeholder="검색해주세요">
        <input type="submit" value="Submit">
    </form>

    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'study');
        $sql = "SELECT * FROM testtable where description like '%".$_GET["search"]."%'";
        
        $result = mysqli_query($conn, $sql);

        echo "<table class='table table-dark'>";
        echo "<tr><th>ID</th><th>Title</th><th>Description</th></tr>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr><td>{$row['id']}</td><td>{$row['title']}</td><td>{$row['description']}</td></tr>";
        }
        echo "</table>";
    ?>

	
</body>
</html>