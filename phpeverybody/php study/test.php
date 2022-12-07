 <!-- 첫 스타트 -->
 <?php 
// 지금부터 php가 시작한다 라는것.
    echo "Hello world";
    // echo? 출력같은 역할. && echo , print
?> 

<?php
  $num1 = 1;
  $num2 = 2;
  echo "1==2 :";
  var_dump ($num1 == $num2); 
?>
<?php 
  echo 'Welcome,' .$_GET['id']; //← 즉 요것은 php다음 get으로 user입력된 값을 가져오는 문법.
                                //url 중 ? 문법은 GET은 맞지만 ? 의 앞 이 주소라면 ? 후의 값이 들어오는것.
?>
<?php 
  echo $_GET['id'].','.$_GET['password']; 
  // id 값 ,(&) password 값 출력(echo) 값과 값을 구분할때에는 &!!
?>
<?php
  if(true){
    echo 'result : true';
  }
?>
<?php
  if(true){
    echo 1;
    echo 2;
    echo 3;
    echo 4;
    echo 5;
  }
  echo 6;
?>

<!-- IF문 응용입니다. HTML파일과 같이보세요. -->
<?php 
  if($_GET['id'] === 'egoing'){
    echo 'right';
  }else {
    echo 'wrong';
  }
  ?>
  <!-- and 연산자 -->
  <?php 
  if($_POST['id'] === 'egoing' && $_POST['password'] === '11111'){
    echo 'right';
  }else{
    echo 'wrong';
  }
  ?>
<!-- or 연산자 -->
<?php 
  if($_POST['id'] === 'egoing' or $_POST['id'] === 'k8806' or $_POST['id'] === 'sorialg'){
    echo 'right';
  }else{
    echo 'wrong';
  }
  ?>
<!-- and or 논리연산자 
    여기서 잠깐! 
    !true === false
-->
<?php 
  if(
    ($_POST['id'] === 'egoing' or $_POST['id'] === 'k8806' or $_POST['id'] === 'sorialg')
    and $_POST['password'] === '111111')
  {
    echo 'right';
  }else{
    echo 'wrong';
  }
  ?>

<?php 
  if(1 and 1){ // 0 : false 1: true 
    echo 1;
  }
  if(1 and 0){
    echo 2;
  }
  if(0 and 1){
    echo 3;
  } 
  if(0 and 0){
    echo 4;
  }

?>
