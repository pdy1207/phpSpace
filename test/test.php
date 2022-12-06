 <!-- 첫 스타트 -->
<?php 
// 지금부터 php가 시작한다 라는것.
    echo "Hello world";
    // echo? 출력같은 역할.
?> 

<!-- 
    var_dump === 자동으로 정수가 될수도 실수가 될수도
    var_dump(7); === int(7) 
-->
<?php
echo "1!=2 : ";
var_dump(1!=2);           #true
echo '<br />';
echo "1!=1 : ";
var_dump(1!==1);           #false
echo '<br />';
echo '"one"!="two" : ';
var_dump("one"!="two");   #true
echo '<br />';
echo '"one"!="one" : ';
var_dump("one"!="one");   #false
echo '<br />';
?>
<html>
    <body>
        echo "Hello world"; 
        <?php
        echo ("hello world");
        ?>
    </body>
</html>
php가 순수한 HTML 코드를 최종적으로 만들어서 웹서버에게 보내면 
웹서버는 것 코드를 그대로 브라우저에게 전송합니다.

### 변수 숫자만 오는게 아니다!  
<?php
    $a =1;
    echo $a+1 //2
    $first = "coding";
    echo $first."everybody";
?>