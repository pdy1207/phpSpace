<?php 
  include 'inc_head.php';
  include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>V비즈링 관리자</title>
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="./spin.css" />

<?php
        if (isset($_POST['date_from'])) {

            $start_date = $_POST['date_from'];
            $end_date = $_POST['date_to'];


            $sql = "select 
                    IFNULL(biz_type, '0') as biz_type, 
                    IFNULL(biz_name, '0') as biz_name, 
                    IFNULL(biz_rc, '0') as biz_rc, 
                    IFNULL(biz_phonecorp, '0') as biz_phonecorp, 
                    IFNULL(biz_phone, '0') as biz_phone, 
                    IFNULL(biz_birth, '0') as biz_birth, 
                    IFNULL(biz_gender, '0') as biz_gender, 
                    IFNULL(biz_regtime, '0') as biz_regtime, 
                    IFNULL(biz_flag, '0') as biz_flag 
            from admin.tb_bizring where $start_date like '%$end_date' and biz_type = '간편' between %$start_date% and %$end_date%";

        }
        // isset()의 함수 isset( $var1, $var2) 등 설정되어있는지 확인함. 설정되어있음 true, 그렇지 않다면 false
        // HTML의 form을 이용하여 값을 전송하는 방식은 get post 허나 get 같은경우는 URL에 남음 ,
        // post 는 URL에 안남음 POST방식으로 전송된 값은 $_POST 으로 받습니다.
    if(isset($_POST['search'])){ 
        $catagory = $_POST['catgo'];
        $search_con = $_POST['search'];
        $sql = "select 
                    IFNULL(biz_type, '0') as biz_type, 
                    IFNULL(biz_name, '0') as biz_name,                     
                    IFNULL(biz_rc, '0') as biz_rc, 
                    IFNULL(biz_phonecorp, '0') as biz_phonecorp, 
                    IFNULL(biz_phone, '0') as biz_phone, 
                    IFNULL(biz_birth, '0') as biz_birth, 
                    IFNULL(biz_gender, '0') as biz_gender, 
                    IFNULL(biz_regtime, '0') as biz_regtime, 
                    IFNULL(biz_flag, '0') as biz_flag 
                from admin.tb_bizring where $catagory like '%$search_con%' and biz_type = '간편' order by biz_regtime desc";
    } else {
        $sql = "select 
        IFNULL(biz_type, '0') as biz_type, 
        IFNULL(biz_name, '0') as biz_name, 
        IFNULL(biz_rc, '0') as biz_rc, 
        IFNULL(biz_phonecorp, '0') as biz_phonecorp, 
        IFNULL(biz_phone, '0') as biz_phone, 
        IFNULL(biz_birth, '0') as biz_birth, IFNULL(biz_gender, '0') as biz_gender, 
        IFNULL(biz_regtime, '0') as biz_regtime, IFNULL(biz_flag, '0') as biz_flag 
    from admin.tb_bizring where biz_type = '간편' order by biz_regtime desc;";
    }

?>
    <script>
    function download() {
        location.href = "download.php";
    }

    function regist() {
        alert('테스트 중입니다.');
    }

    function hold() {
        alert('테스트 중입니다.');
    }

    function reload() {
        location.href = "./list.php";
    }

    </script>

</head>

<body>
<?php
        if ( $jb_login ) {        

/*
      echo "rckey 값: ".$_SESSION['rckey']."<br/>";

*/

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
    echo "서버 연결 실패!";
}

// $sql = "select IFNULL(biz_type, '0') as biz_type, IFNULL(biz_name, '0') as biz_name, IFNULL(biz_rc, '0') as biz_rc, IFNULL(biz_phonecorp, '0') as biz_phonecorp, IFNULL(biz_phone, '0') as biz_phone, IFNULL(biz_birth, '0') as biz_birth, IFNULL(biz_gender, '0') as biz_gender, IFNULL(biz_regtime, '0') as biz_regtime, IFNULL(biz_flag, '0') as biz_flag from ssfire4u.tb_bizring where biz_type = '간편' order by biz_regtime desc;";

// echo $sql;

$result = $connect->query($sql);

$total_rows = mysqli_num_rows($result);

    ?>

    <div class=top style = "margin : 10px">
        <h2>목록  total : <?php echo "$total_rows"; ?> 명</h2>        
    </div>
    <div style = "margin : 10px">
        <button id="logout" onclick="location.href ='logout.php';">로그아웃</button>
        <button id="exel_down" onclick='download()'>엑셀 다운로드</button>        
        <button id="exel_down" onclick='regist()'>선택 등록완료하기</button>
        <button id="exel_down" onclick='hold()'>선택 보류하기</button>
        <button id="exel_down" onclick='reload()'>전체보기</button>
    </div>
    <div style = "height: 30px; margin : 10px">
        <form action="list.php" method="post">
            <select name="catgo" style = "padding:0px">
                <option value="biz_name">이름</option>
                <option value="biz_rc">RC번호</option>
                <option value="biz_phone">휴대폰</option>
                <option value="biz_birth">생년월일</option>
            </select>
            
            <input type="text" name="search" size="20" />


            
            <input type = "date" name ="date_from" id="fromDate"  />
            <input type = "date" name ="date_to" id="toDate" />
           
            <script>
                
                var today = new Date().toISOString().substring(0, 10);
                var thisday = new Date();
                var tomorrow = new Date(thisday.setDate(thisday.getDate() + 1));
                
                document.getElementById('fromDate').value = today;
                document.getElementById('toDate').value = tomorrow.toISOString().substring(0, 10);
                
            </script>

            <button>검색</button>
        </form>
    </div>
    <table class=middle>
        <thead>
            <tr align=center>
                <th width=60>타잎</th>
                <th width=120>이름</th>
                <th width=100>RC번호</th>
                <th width=60>통신사</th>
                <th width=100>휴대폰</th>
                <th width=80>생년월일</th>
                <th width=60>성별</th>
                <th width=160>등록시간</th>
                <th width=80>상태</th>
            </tr>
        </thead>
        <?php


    while($row = $result->fetch_array()){

        ?>

        <tbody>
            <tr align=center>
                <td><?php echo $row['biz_type'];?></td>
                <td><?php echo $row['biz_name'];?></td>
                <td><?php echo $row['biz_rc'];?></td>
                <td><?php if ($row['biz_phonecorp'] == 'KTF'){$phonecorp = 'KT';} else { $phonecorp = $row['biz_phonecorp'];} echo $phonecorp;?></td>
                <td><?php echo $row['biz_phone'];?></td>
                <td><?php echo $row['biz_birth'];?></td>
                <td><?php echo mb_substr($row['biz_gender'],0,1,'UTF-8');?></td>
                <td><?php echo $row['biz_regtime'];?></td>
                <td><?php echo $row['biz_flag'];?></td>
            </tr>
        </tbody>

        <?php } ?>
    </table>

<?php
        $connect->close();

    } else {
        echo "<script>
        alert('로그인하십시오.');
        </script>";
        echo "<script>
        document.location.href = 'index.php';
        </script>";
    }
    
?>
</body>

</html>

- https://hanuscrypto.tistory.com/entry/Php%EB%A1%9C-%EC%9B%B9-%EA%B0%9C%EB%B0%9C%ED%95%98%EA%B8%B0-%EA%B2%8C%EC%8B%9C%ED%8C%90-%EB%A7%8C%EB%93%A4%EA%B8%B016-%EB%82%A0%EC%A7%9C-%EA%B8%B0%EA%B0%84-%EC%A1%B0%ED%9A%8C
