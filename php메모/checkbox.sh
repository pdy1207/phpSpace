<?php
header('Content-Type: text/html; charset=UTF-8');
if(isset($_POST['submit'])){//폼데이터가 전송되었다면
    if(!empty($_POST['list'])){
        $form_data = $_POST['list'];
        
        for($i=0; $i < count($form_data); $i++){
            $str .= "'" . $form_data[$i] . "'" . ',';
        }        
        $str = substr($str, 0, -1);//쿼리문 오류 방지를 위해 문자열 중 마지막 문자 콤마 제거
        
        $query = "SELECT * FROM 테이블이름 WHERE name IN($str)";
        
        echo("<h3>폼전송 이후 쿼리문 - $query </h3>");
    }else{
        echo('<h3>확인 : 체크박스가 선택되지 않았습니다.</h3>');
    }
    
}
?>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
	<p><h1>PHP checkbox 데이터를 가져와서 DB에 넣어보자.</h1></p>
	
	<input type="checkbox" name="list[]" value="1" /><label>아이유</label><br>
	<input type="checkbox" name="list[]" value="2" /><label>토마토</label><br>
	<input type="checkbox" name="list[]" value="3" /><label>바나나</label><br>
	<input type="checkbox" name="list[]" value="4" /><label>수박</label><br>
	<input type="checkbox" name="list[]" value="5" /><label>호박</label><br>
	<input type="checkbox" name="list[]" value="6" /><label>참외</label><br>	
	<input type="submit" name="submit" value="전송~" />
</form>

=============================================================================================
<form method="post" action="">
    <span>Select languages</span><br/>
    <input type="checkbox" name='lang[]' value="PHP"> PHP <br/>
    <input type="checkbox" name='lang[]' value="JavaScript"> JavaScript <br/>
    <input type="checkbox" name='lang[]' value="jQuery"> jQuery <br/>
    <input type="checkbox" name='lang[]' value="Angular JS"> Angular JS <br/>

    <input type="submit" value="Submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){

    if(!empty($_POST['lang'])) {

        foreach($_POST['lang'] as $value){
            echo "value : ".$value.'<br/>';
        }

    }

}
?>
