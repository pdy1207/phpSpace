$_SERVER['PHP_SELF']

- 셀프. 즉, 자기 자신 PHP를 나타낸다.

- 즉, $_SERVER['PHP_SELF']을 사용하는 페이지가 test.php 면
 test.php 경로 자체를 가지고 온다.

- 이것은 보통 form에서 action에 주로 사용한다. 이러면,  
실행중인 PHP를 다시 호출한다.

<form id="register-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <input type="email" name="usr_email" placeholder="Email" class="form-control" />

</form>
