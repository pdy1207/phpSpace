- php 비교연산자

var_dump(); 
 var_dump();
- 입력값을 [데이터타입(크기) "내용"] 으로 출력
ex) var_dump(1); => int(1) 출력
     var_dump(1==2) => bool(false)
     var_dump("ㅁㄴㅇㄹ"); => string(4) "ㅁㄴㅇㄹ" 출력

- [관련 문서](https://www.php.net/manual/en/language.operators.comparison.php)

========================================
아무리 복잡한 프로그램이라해도 !!

1. 프로그래밍은 시간의 순서. 
2. 복잡한 문제는 조건문과 반목문으로 해결 가능

<?php
      if(isset($_GET['id'])){ //$_GET['id']가 있다면 isset true
        echo $_GET['id'];
      } else {
        echo "Welcome";
      }
      ?>
    </h2>
    <?php
    if(isset($_GET['id'])){ 
    	//$_GET['id'] 정의 되어있따면 중괄호 안에 있는걸 실행해
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo "Hello, PHP";
    }
     ?>

- [관련 문서](https://www.php.net/manual/en/control-structures.if.php)

※ unset 변수 지움
