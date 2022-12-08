※어떤대상을 분석할때 그 대상으로 들어오는 입력이 뭐고 출력이뭔지?

<?php
	$str = 'abcdef';
	echo strlen($str); 배열이 되었던 문자 숫자 길이를 알아내는방법
?>

변수? 

$온다! 그러면 변수라고 생각 하자
그렇다면 변수를 쓰게되는 이유는?
$a = 1;
echo $a + 1;

php 함수를 결합하는방법은 dot( . )을 활용 
ex) $name = "leezche";
    echo "Lorem ipsum dolor sit amet, consectetur ".$name." adipisicing

<?php 
echo $_GET['address']; ?>에 사시는 <?php echo $_GET['name'];
?> 님

php url 파라미터 즉 index.php?addresss=서울&name=egoing&age=20... 
& and같은 느낌


<!doctype html>
<html>
	<body>
	<h1>WEB</h1>
    <ol>
      <li><a href="index.php?id=HTML">HTML</a></li>
      <li><a href="index.php?id=CSS">CSS</a></li>
      <li><a href="index.php?id=JavaScrit">JavaScript</a></li>
    </ol>
    <h2>
      <?php
        echo $_GET['id']; id에 따라 바뀐다. CSS / HTML / JavaScript
      ?>
	
	</body>
</html>



