### php DB 바인딩

 - mysqli_num_rows === 리절트 셋(result set)의 총 레코드 수를 반환합니다.

        <?

         $conn = mysqli_connect("IP주소", "root", "password", "DB명");

           $query = "SELECT sec, name FROM db명";
           $result = mysqli_query($conn, $query);

           $count = mysqli_num_rows($result);

           echo '$count : '.$count.'<br>';

           mysqli_close($conn);

        ?>

 - $count : 2 (db정보)

<hr>

## mysqli_fetch_array  === mysqli_query 를 통해 얻은 리절트 셋(result set)에서 레코드를 1개씩 리턴해주는 함수입니다.

        <?
         //mysqli_fetch_array예제
        $conn = mysqli_connect("IP주소", "root", "password", "DB명");

           $query = "SELECT sec, name FROM db명";
           $result = mysqli_query($conn, $query);

           $row = mysqli_fetch_array($result);

           echo '$row : ';
           print_r($row);
           echo '<br>';

           mysqli_close($conn);

        ?>
        
 - $row : Array ( [0] => 1 'sec',  [1] 'name' )

<hr> 

## mysqli_fetch_assoc 레코드를 1개씩 리턴해주는 함수입니다.

      $conn = mysqli_connect("127.0.0.1", "root", "1234", "test_db");

         $select_query = "SELECT seq, name FROM test_table";
         $result_set = mysqli_query($conn, $select_query);
         $row = mysqli_fetch_assoc($result_set);
         echo '$row : ';
         print_r($row);
         echo '<br>';
        mysqli_close($conn);

  


- $row : Array ( [seq] => 1 [name] => 홍길동 )


 - PHP MySQL 레코드 가져오기 (mysqli_fetch_assoc)|작성자 창공



