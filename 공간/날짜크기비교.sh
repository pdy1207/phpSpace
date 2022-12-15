strtotime(date); //함수
strtotime  함수로 생성한 timestamp를 date 함수로 우리가 알아보기 쉽게 만들어주는 활용법입니다.
특정 날짜에 더하기, 빼기 등을 할 수 있습니다.

<?php        
        
        $date_to =  $_POST['date_to'];
        $date_from = $_POST['date_from'];

        // ex) 11-30 ~ 11-29 눌렀을때 변수
        $str_now = strtotime($date_to);
        $str_target = strtotime($date_from);

        // ex) 11-30 ~ 11-29 눌렀을때 Alert창 

        if ($str_now > $str_target) {
            echo "<script>
            alert('잘못된 접근입니다. 날짜를 다시 확인해주세요.');
            </script>";
            echo "<script>
            document.location.href = 'datalist.php';
            </script>";
        } 
        
?>   
        
        
        
        <input type = "date" name ="date_to"  />
        <input type = "date" name ="date_from" style="margin-right: 10px;" />
        
        
        //post 넘기고 날짜의 대한 제한걸기입니당
        
        
DATE 타입

if ( $date_to===$date_from ) {
    $date_query = "biz_regtime='{$date_to}'";
} else {
    $date_query = "biz_regtime BETWEEN '{$date_to}' AND '{$date_from}'";
}
$sql = "select 
*
FROM admin.tb_bizring
WHERE {$date_query}
ORDER BY biz_regtime DESC";


DATETIME 타입

$sql = "select 
*
FROM admin.tb_bizring
WHERE biz_regtime BETWEEN '{$date_to} 00:00:00' AND '{$date_from} 23:59:59'
ORDER BY biz_regtime DESC";


TIMESTAMP 타입 감쌀 필요 x

WHERE biz_regtime BETWEEN {$str_now} AND {$str_target}

if ( $date_to && $date_from ) {
    // biz_regtime BETWEEN {$str_now} AND {$str_target}
} else if ( $date_to ) {
    // biz_regtime>={$str_now}
} else if ( $date_from ) {
    // biz_regtime<={$str_target}
} else {
    // 경고창 - 날짜 하나라도 지정
}



