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
