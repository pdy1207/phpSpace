## php 문자 추출 정규표현식 정리 
 
 - 많으므로 썻던것 위주로만 쓰자면.... 
 - [PHP 정규표현식](https://server-dev.tistory.com/186)
 
        '^' - '^' 는 바로 뒤에 문자를 의미하고 그 문자로 시작됨을 의미한다.   EX) ^The
        '$' - '$' 는 바로 앞의 문자를 의미하고 해당 문자로 끝나는 것을 나타낸다 '^' 와는 반대 의미이다   EX) $bc bc로 끝나는 문자
        '[]' - '[]' 대괄호 는 안에 있는 문자열중 하나의 문자를 의미한다   EX) [abcd]
         [] 안에 범위를 지정할 경우엔 '-' 문자를 사용할 수 있다.   EX) [1-9][A-Z]
         1부터 9까지 , A부터 Z까지로 [123456789] 와 [ABCDEFGHIJKLMNOPQRSTUVWXYZ] 과 같은 뜻이다.
        '+' - '+' 는 '*' 와 비슷하다 앞에 문자를 의미하고 앞에 문자가 하나이상 존재하는 문자을 가르킨다   EX) s+k
 
 
 <HR>


### isset 

 - isset — 변수가 선언되었고 다음과 다른지 확인합니다.

### var_dump

 - 변수에 대한 정보 덤프

### preg_match

 - 정규식 일치 수행
 - [링크](https://www.php.net/manual/en/function.preg-match.php)

### preg_split

 - 정규식으로 문자열 분할
 - [링크](https://www.php.net/manual/en/function.preg-split.php)

### count

 - 배열 또는 Countable 객체 의 모든 요소를 계산합니다.
 - [링크](https://www.php.net/manual/en/function.count.php)

### implode
 
 - 배열 요소를 문자열로 집합








   


  
